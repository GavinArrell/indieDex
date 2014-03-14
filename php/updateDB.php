<?php

function registerNewUser($values) {
	
	$profilePic = "img/defaultProfilePic.jpg";
	$joinDate   = date_format(new DateTime(null, new DateTimeZone('Europe/Belfast')), 'Y-m-d');
	$lastSeen   = date_format(new DateTime(null, new DateTimeZone('Europe/Belfast')), 'Y-m-d G:i:s');
	$background = "img/defaultProfileBackground.jpg";
	$settings   = "showEmail=false showName=true showAge=true showLocation=false";
	
	//$columns = getColumnCount("user_table");
	//echo ' '.$columns.' ';
	//if($columns != count($values)+6) {error_log("updateDB.php -> updateUser() -> number of columns inserted not equal to the number of columns in the table"); return;}
	
	$query = "INSERT INTO `users_table` VALUES (";
	$query.= "'";                  //id
	$query.= "','".$values[0];     //username  
	$query.= "','".$values[1];     //password  
	$query.= "','".$values[2];     //email     
	$query.= "','".$values[3];     //status    
	$query.= "','".$values[4];     //firstname 
	$query.= "','".$values[5];     //surname   
	$query.= "','".$profilePic;    //profilepic
	$query.= "','".$joinDate;      //joindate  
	$query.= "','".$values[6];     //bio       
	$query.= "','".$values[7];     //karma     
	$query.= "','".$values[8];     //games 
	$query.= "','".$values[9];     //wishlist  
	$query.= "','".$lastSeen;      //lastseen
	$query.= "','".$background;    //profileBackground
	$query.= "','".$values[10];    //birthday
	$query.= "','".$values[11];    //location
	$query.= "','".$settings;      //settings
	$query.= "','".$values[12];    //friends
	
	$query.= "')";
	
	if($query_run = mysql_query($query)) {return true;}
	else {
		error_log("updateDB.php -> updateUser() -> failed to run insert query");
		return false;
	}
}

function updateUserField($field, $value, $knownField, $knownFieldValue) {
	
	$query = "UPDATE `users_table` SET `".$field."`='".$value."' WHERE `".$knownField."`='".$knownFieldValue."'";
	
	if(!($query_run = mysql_query($query))) {error_log("updateDB.php -> updateUserField -> failed to run update query");}
	
}

function getColumnCount($table) {
	
	$queryCol = "SELECT COUNT(*) FROM information_schema.columns WHERE table_name = '$table' AND TABLE_SCHEMA = 'indedex_db'";
	if($columns = mysql_query($queryCol)) {return $columns;}
	else {error_log("updateDB.php -> getColumnCount()");}
	
}

?>