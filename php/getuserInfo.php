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
	 
	$settings     = $details[15];
	
	$showEmail    = getSetting("showEmail", $settings);
	$showName     = getSetting("showName", $settings);
	$showAge      = getSetting("showAge", $settings);
	$showLocation = getSetting("showLocation", $settings);
	
	$username     = $details[0];
	$status       = $details[2];
	$profilepic   = $details[5];
	$joindate     = $details[6];
	$bio          = $details[7];
	$points       = $details[8];
	$games        = $details[9];
	$wishlist     = $details[10];
	$lastseen     = $details[11];
	$profileback  = $details[12];
	$friends      = $details[16];
	
	$email        = $showEmail ? $details[1] : $details[0]." has chosen not to share this information.";
	$name         = $showName ? $details[3]." ".$details[4] : $details[0]." has chosen not share this information.";
	$birthday     = $showAge ? $details[13] : $details[0]." has chosen not to share this information.";
	$location     = $showLocation ? $details[14] : $details[0]." has chosen not to share this information.";
	
	$profilebackStyle  = "background-image: url('../". $profileback ."'); background-repeat: repeat; background-position: top;";
	
	echo '<div id="profileInfoContainer" style="'. $profilebackStyle .'">';
	
	echo '<div id="profileInfoLeft">';
	echo 	'<img src="'. $profilepic .'" id="profileInfoPic">';
	echo '</div>';
	
	echo '<div id="profileInfoRight">';
	echo 	'<div id="profileInfoRightInner">';
	echo 		'<h4 id="profileInfoDetailsName">'. $username .'</h4>';
	
	echo 		'<table id="profileInfoDetails">';
	
	//FULL NAME
	echo			'<tr>
		 				<th>Name:</th>
		 				<td>'. $name .'</td>
		 			</tr>';
	
	//ACCOUNT STATUS
	echo 			'<tr>
		 				<th>Account Type:</th>
		 				<td>'. $status .'</td>
		 			</tr>';
	
	//EMAIL
	echo 			'<tr>
		 				<th>E-mail:</th>
		 				<td>'. $email .'</td>
		 			</tr>';
	
	//AGE - BIRTHDAY
	echo 			'<tr>
		 				<th>Age:</th>
		 				<td>'. $birthday .'</td>
		 			</tr>';
	
	//LOCATION
	echo 			'<tr>
		 				<th>Location:</th>
		 				<td>'. $location .'</td>
		 			</tr>';
	
	//INDIE POINTS
	echo 			'<tr>
		 				<th>Indie Points:</th>
		 				<td>'. $points .'</td>
		 			</tr>';
	
	//JOIN DATE
	echo 			'<tr>
		 				<th>Joined:</th>
		 				<td>'. $joindate .'</td>
		 			</tr>';
	
	//LAST ONLINE
	echo 			'<tr>
		 				<th>Last Online:</th>
		 				<td>'. $lastseen .'</td>
		 			</tr>';
	
	echo 		'</table>';
	echo 	'</div>';

	//ABOUT ME
	echo 	'<div id="profileInfoBio">
		 		<h3>About Me</h3>
		 		<p>'. $bio .'</p>
		 	</div>';
			
	echo '<div class="clearfix"></div> </div>';
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

?>
