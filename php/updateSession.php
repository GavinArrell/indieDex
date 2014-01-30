<?php
require($_SERVER['DOCUMENT_ROOT'].'/core.inc.php');
require($_SERVER['DOCUMENT_ROOT'].'/connect.inc.php');

include 'updateDB.php';

if(isset($_GET['call'])) {
	switch($_GET['call']) {
		case 0: updateTimestamp(); updateOnlineUsers(); break;
		case 1: updateTimestamp();   break;
		case 2: updateOnlineUsers(); break;
	}
}

function updateTimeStamp() {
	
	if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) {
	
		$timestamp = date('Y-m-d G:i:s');
		$username = $_SESSION['username'];
		updateUserField("lastSeen", $timestamp, "username", $username);
	
	}
	
}

function updateOnlineUsers() {
	
	$onlineUsers = array();
	$query = "SELECT username FROM `users_table` WHERE lastSeen >= NOW()-INTERVAL 10 MINUTE";
	
	if($query_run = mysql_query($query)) {
		while($query_rows = mysql_fetch_assoc($query_run)) {
			$onlineUsers[count($onlineUsers)] = $query_rows['username'];
		}
	}
	else {echo "error"; error_log("updateSession.php -> query_run != mysqli(query) - couldn't get online users");}
	
	echo json_encode($onlineUsers);
	
}
//move code in phpCallsOnLoad.js to seperate function + readability
//query db for users with timestamp less than 30 mins ago
//send array of online users back to phpCallsOnLoad.js
//generate html in phpCallsOnLoad.js - names should be seperated by ', ' and should be in <a> tags to link to their profiles





?>