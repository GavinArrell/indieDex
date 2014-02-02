<?php
require($_SERVER['DOCUMENT_ROOT'].'/core.inc.php');
require($_SERVER['DOCUMENT_ROOT'].'/connect.inc.php');

$userDetails = array();

if(isset($_GET['user'])) {
	$username = $_GET['user'];
	$query = "SELECT * FROM `users_table` WHERE username='$username'";
	
	if($query_run = mysql_query($query)) {
		$query_num_rows = mysql_num_rows($query_run);
		
		if($query_num_rows == 1) {
			$user_id = mysql_result($query_run, 0, "id");
			
			$userDetails[0]  = mysql_result($query_run, 0, "username");
			$userDetails[1]  = mysql_result($query_run, 0, "email");
			$userDetails[2]  = mysql_result($query_run, 0, "status");
			$userDetails[3]  = mysql_result($query_run, 0, "first name");
			$userDetails[4]  = mysql_result($query_run, 0, "surname");
			$userDetails[5]  = mysql_result($query_run, 0, "profile picture");
			$userDetails[6]  = mysql_result($query_run, 0, "join date");
			$userDetails[7]  = mysql_result($query_run, 0, "bio");
			$userDetails[8]  = mysql_result($query_run, 0, "indiePoints");
			$userDetails[9]  = mysql_result($query_run, 0, "games");
			$userDetails[10] = mysql_result($query_run, 0, "wishlist");
			$userDetails[11] = mysql_result($query_run, 0, "lastSeen");
			$userDetails[12] = mysql_result($query_run, 0, "profileBackground");
			$userDetails[13] = mysql_result($query_run, 0, "birthday");
			$userDetails[14] = mysql_result($query_run, 0, "location");
			$userDetails[15] = mysql_result($query_run, 0, "settings");
			$userDetails[16] = mysql_result($query_run, 0, "friends");
			
			generateProfile($userDetails);
		}
	}
}

function generateProfile($details) {
	
	$username     = $details[0];
	$email        = $details[1];
	$status       = $details[2];
	$firstname    = $details[3];
	$surname      = $details[4];
	$profilepic   = $details[5];
	$joindate     = $details[6];
	$bio          = $details[7];
	$points       = $details[8];
	$games        = $details[9];
	$wishlist     = $details[10];
	$lastseen     = $details[11];
	$profileback  = $details[12];
	$birthday     = $details[13];
	$location     = $details[14];
	$settings     = $details[15];
	$friends      = $details[16];
	
	/*
	 * Settings has a field type of text
	 * Because we can't store arrays on the database,
	 * and multiple fields would be awkward to work
	 * with, I opted to store the settings inside special
	 * characters.
	 * 
	 * To retrieve the settings we search for the start
	 * of a setting '[' and then store the rest inside a
	 * string var until we reach the end ']'
	 * 
	 * To get the bool value we search are stored string
	 * until we reach '=' the rest of the string is the
	 * bool value!
	 */
	
	$showEmail    = getSetting("showEmail",    $settings);
	$showName     = getSetting("showName",     $settings);
	$showAge      = getSetting("showAge",      $settings);
	$showLocation = getSetting("showLocation", $settings);
	
	$status       = getuserInfo_convertStatus($status);
	$age          = calculateAge($birthday);
	$joindate     = formatJoinDate($joindate);
	$lastseen     = formatLastSeen($lastseen);
	
	$email        = $showEmail    ? $email                  : $username." has chosen not to share this information.";
	$name         = $showName     ? $firstname." ".$surname : $username." has chosen not share this information.";
	$birthday     = $showAge      ? $birthday               : $username." has chosen not to share this information.";
	$location     = $showLocation ? $location               : $username." has chosen not to share this information.";
	
	$profilebackStyle  = "background-image: url('../". $profileback ."'); background-repeat: repeat; background-position: top;";
	
		echo '<div id="profileInfoContainer" style="'. $profilebackStyle .'">';
			echo '<div id="profileInfoContainerInner">';
			
				echo '<div id="profileInfoLeft">';
					echo '<img src="'. $profilepic .'" id="profileInfoPic">';
				echo '</div>';
				
				echo '<div id="profileInfoRight">';
					echo '<div id="profileInfoRightInner">';
						echo '<h4 id="profileInfoDetailsName">'. $username .'</h4>';
				
						echo '<table id="profileInfoDetails">';
				
							//FULL NAME
							echo '<tr>
								 	<th>Name:</th>
								 	<td>'. $name .'</td>
								 </tr>';
				
							//ACCOUNT STATUS
							echo '<tr>
								 	<th>Account Type:</th>
								 	<td>'. $status .'</td>
								 </tr>';
					 			
							//INDIE POINTS
							echo '<tr>
								 	<th>Indie Points:</th>
								 	<td>'. $points .'</td>
								 </tr>';
				
							//EMAIL
							echo '<tr>
								 	<th>E-mail:</th>
								 	<td>'. $email .'</td>
								 </tr>';
				
							//AGE - BIRTHDAY
							echo '<tr>
								 	<th>Age:</th>
								 	<td>'. $age .'</td>
								 </tr>';
				
							//LOCATION
							echo '<tr>
								 	<th>Location:</th>
								 	<td>'. $location .'</td>
								 </tr>';
				
							//JOIN DATE
							echo '<tr>
								 	<th>Joined:</th>
								 	<td>'. $joindate .'</td>
								 </tr>';
				
							//LAST ONLINE
							echo '<tr>
								 	<th>Last Online:</th>
								 	<td>'. $lastseen .'</td>
								 </tr>';
				
						echo '</table>';
					echo '</div>';
				echo '</div>';
			
				//ABOUT ME
				echo '<div id="profileInfoBio">
					 	<h3>About Me</h3>
					 	<p>'. $bio .'</p>
					 </div>';
					
			echo '</div>';
			echo '<div class="clear"></div>';
		echo '</div>';
}

function getSetting($request, $allSettings) {
	
	$settingList = explode(" ", $allSettings);
	
	foreach($settingList as $setting) {
		$settingVars = explode("=", $setting);
		
		if($request == $settingVars[0]) {
			if($settingVars[1] == "true") {return true;}
			else {return false;}
		}
	}
	
	return true; //DEFAULT TO TRUE
}

function formatJoinDate($joinDate) {
	
	$date = explode('-', $joinDate);
	
	switch($date[1]) {
		case "01": return("January "  .$date[2]." ".$date[0]);
		case "02": return("February " .$date[2]." ".$date[0]);
		case "03": return("March "    .$date[2]." ".$date[0]);
		case "04": return("April "    .$date[2]." ".$date[0]);
		case "05": return("May "      .$date[2]." ".$date[0]);
		case "06": return("June "     .$date[2]." ".$date[0]);
		case "07": return("July "     .$date[2]." ".$date[0]);
		case "08": return("August "   .$date[2]." ".$date[0]);
		case "09": return("September ".$date[2]." ".$date[0]);
		case "10": return("October "  .$date[2]." ".$date[0]);
		case "11": return("November " .$date[2]." ".$date[0]);
		case "12": return("December " .$date[2]." ".$date[0]);
		default: return $joinDate;
	}
	
}

function formatLastSeen($lastseen) {
	
	$date = date_format(new DateTime(null, new DateTimeZone('Europe/Belfast')), 'Y-m-d G:i:s');
	
	$lastSeen = strtotime($lastseen);
	$date     = strtotime($date);
	
	$minsPassed = floor( ($date - $lastSeen)/(60) );
	if($minsPassed < 60) {
		if($minsPassed < 10) {return "Currently Online";}
		else {return $minsPassed." minutes ago";}
	}
	else {
		
		$hoursPassed = floor( ($date - $lastSeen)/(60*60) );
		if($hoursPassed == 1) {return $hoursPassed." hour ago";}
		if($hoursPassed < 24) {return $hoursPassed." hours ago";}
		else {
			$daysPassed = floor( ($date - $lastSeen)/(60*60*24) );
			if($daysPassed == 1) {return $daysPassed." day ago";}
			else {return $daysPassed." days ago";}
		}
	}
	
	return $lastseen; //DEFAULT
}

function getUserInfo_convertStatus($status) {
	
	switch($status) {
		case 0: return "Non-Premium";
		case 1: return "Premium";
		case 2: return "Moderator";
		case 3: return "Developer";
		default: return $status;
	}
	
}

function calculateAge($birthday) {
	
	$date = date_format(new DateTime(null, new DateTimeZone('Europe/Belfast')), 'Y-m-d');
	
	$birthVals = explode('-', $birthday);
	$dateVals     = explode('-', $date);
	
	$baseAge = $dateVals[0] - $birthVals[0];
	
	if($dateVals[1] > $birthVals[1]) {return $baseAge;}
	if($dateVals[1] < $birthVals[1]) {return $baseAge-1;}
	if($dateVals[1] == $birthVales[1]) {
		if($dateVals[2] >= $birthVals) {return $baseAge;}
		if($dateVals[2] <  $birthVals) {return $baseAge-1;}
	}
	
	return $birthday;
	
}

?>
