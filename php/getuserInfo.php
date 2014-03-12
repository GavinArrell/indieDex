<?php
require($_SERVER['DOCUMENT_ROOT'].'/core.inc.php');
require($_SERVER['DOCUMENT_ROOT'].'/connect.inc.php');

$userDetails = array();

if(isset($_GET['user']) && !empty($_GET['user'])) {
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
else {
	header('Location: index.php');
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
	$name         = $showName     ? $firstname." ".$surname : $username." has chosen not to share this information.";
	$birthday     = $showAge      ? $birthday               : $username." has chosen not to share this information.";
	$location     = $showLocation ? $location               : $username." has chosen not to share this information.";
	
	$profilebackStyle  = "background-image: url('../". $profileback ."'); background-repeat: repeat; background-position: top;";
	
	echo '<div class="rightContainer" style="'. $profilebackStyle .'">';
		echo '<div id="profileContainer">';
			echo '<div id="profileInfoContainer">';
			
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
						</br>
					 	<h3>About Me</h3>
					 	
						</br>
					 	<p>'. $bio .'</p>
					 </div>';
					
			echo '</div>'; // PROFILE INFO CONTAINER END
			
			echo '<div class="clear"></div>';
			
			echo '<div id="profileInfoEdit">';
				
				echo '<div id="#profileManagementButtonContainer">';
				
					/*echo '<div class="profileManagementButton" id="profileManagementButton_notifs">notifications</div>';
					echo '<div class="profileManagementButton" id="profileManagementButton_messages">messages</div>';
					echo '<div class="profileManagementButton" id="profileManagementButton_status">settings</div>';*/
					echo '<div class="profileManagementButton" id="profileManagementButton_editInfo">settings</div>';
						
				echo '</div>';
				
				//Indent because the following containers are subbed under the header divs above
				
					echo '<table id="profileInfoEditTable">';
						echo '<tr>';
								echo '<td>';
									echo '<form action="uploadInfoEdit.php" method="post" enctype="multipart/form-data">';
										echo '<b>Change Your Profile Picture</b></br>';
										echo '<input type="file" name="file" id="file"><br><br>';
										
										echo '<b>Change Your Profile Background</b></br>';
										echo '<input type="file" name="fileback" id="fileback"><br><br>';
									
										echo '<b>Change Your Info</b><br>';
										echo 'Change Birthday: </br> <input style="margin-left:8px; width: 38px;" type="text" name="day" placeholder="Day"> <input style="margin-left:8px; width: 38px;" type="text" name="month" placeholder="Month"> <input style="margin-left:8px; width: 38px;" type="text" name="year" placeholder="Year"><br>';
										echo 'Change Location: </br> <input style="margin-left:8px;" type="text" name="location"><br>';
								echo '</td>';
								
								echo '<td>';
									
								echo '</td>';
							
								echo '<td>';
										//FORM CONTINUES
										echo '<b>Change Your Password</b></br>';
										echo 'Old Password: </br> <input style="margin-left:8px;" input type="password" name="oldpw"><br>';
										echo 'New Password: </br> <input style="margin-left:8px;" type="password" name="newpw"><br>';
										echo 'New Password: </br> <input style="margin-left:8px;" type="password" name="newpwtwo"><br>';
										echo '</br>';
										echo '<b>Change Your E-mail</b><br>';
										echo 'New Email Address: </br> <input style="margin-left:8px;" type="text" name="email"><br>';
								echo '</td>';
						echo '</tr>';
						
						echo '<tr>';
							echo '<td>';
									echo '<b>Change Your Settings</b></br>';
									
									$check = '';
									if($showName) {$check = 'checked="checked"';} else {$check = '';}
									echo '<input type="checkbox" name="showname" value="showname"         '. $check .'">Show Name<br>';
									
									if($showEmail) {$check = 'checked="checked"';} else {$check = '';}
									echo '<input type="checkbox" name="showemail" value="showemail"       '. $check .'">Show Email<br>';
									
									if($showAge) {$check = 'checked="checked"';} else {$check = '';}
									echo '<input type="checkbox" name="showage" value="showage"           '. $check .'">Show Age<br>';
									
									if($showLocation) {$check = 'checked="checked"';} else {$check = '';}
									echo '<input type="checkbox" name="showlocation" value="showlocation" '. $check .'">Show Location<br>';
							echo '</td>';
						echo '</tr>';
						
						echo '<tr>';
							echo '<td colspan="3">';
									echo '<b>Change What\'s Written About You</b></br>';
									echo '<textarea style=" resize:vertical; height:100px; width:100%;" type="text" name="bio">'. $bio .'</textarea><br>';
							echo '</td>';
						echo '</tr>';
						
						echo '<tr>';
							echo '<td colspan="3" class="profileManagementSubmit">';
									//FORM CONTINUES
									echo '<input type="submit" value="Submit">';
								echo '</form>';
							echo '</td>';
						echo '</tr>';
					echo '</table>';
				
					echo '<div id="profileNotifications">NOTIFICATIONS</div>';
					
					echo '<div id="profileMessageBoard">MESSAGE BOARD</div>';
			
					echo '<div id="profileStatus">';
					
						echo '<div id="profileStatusDetailsContainer">';
							echo '<table id="profileStatusDetailsTable">';
								echo '<tr>';
									echo '<td><h3>Account Status: '. $status .'</h3></td>';
									echo '<td><h3>Premium Since: N/A</h3></td>';
									echo '<td><h3>Next Pay Date: N/A</h3></td>';
								echo '</tr>';
							echo '</table>';
						echo '</div>';
		
						if(isFreemium()){
							
						echo '<div style=" width:600px; background-color:white; opacity:0.9; padding:5px; margin:auto; margin-top:5px;">';
							echo '<p align="center">UPGRADE TO PREMIUM</p>';
							echo '<form action="changeMembershipStatus.php" method="post">';
								echo '<div style=" width:50%; line-height:32px; padding-left:16px;">';
									echo 'Premium Cost = £1/per month <br>';
									echo 'Name on Card:<input type="text" name="text" value="" style="float:right;"><br>';
									echo 'Card Number:<input type="text" name="text" value="" style="float:right;"><br>';
									echo 'Expiry Date:<input type="text" name="text" value="" style="float:right;"><br>';
									echo 'CV Number:<input type="text" name="text" value="" style="float:right;"><br>';
									echo '<input type="hidden" name="status" value"1">';
									echo '<input type="submit" name="submit" value="Submit">';
								echo '</div>';
							echo '</form>';
						echo '</div>';
						
						};
				
					echo '</div>';
 			
 			echo '</div>'; // PROFILE INFO EDIT ENDS
			
		echo '</div>'; // PROFILE CONTAINER END
	echo '</div>'; // RIGHT SIDEBAR END
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
	
	return false; //DEFAULT TO FALSE
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
	$dateVals  = explode('-', $date);
	
	$baseAge = $dateVals[0] - $birthVals[0]; //current year - birth year = maximum age
	
	if($dateVals[1] > $birthVals[1]) {return $baseAge;} //if birth month has passed (current > birth) then set max age
	if($dateVals[1] < $birthVals[1]) {return $baseAge-1;} //if birth month has yet to come (current < birth) then set min age (max-1)
	if($dateVals[1] == $birthVals[1]) { //if current month is the birth month (current == birth)
		if($dateVals[2] >= $birthVals[2]) {return $baseAge;} //if birth 'day' has come or passed then set max age
		if($dateVals[2] <  $birthVals[2]) {return $baseAge-1;} //if birth 'day' has yet to come then set min age
	}
	
	return $birthday;
	
}

?>
