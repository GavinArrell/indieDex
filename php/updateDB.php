<?php

function registerNewUser($values) {
	
	$columns = getColumnCount("user_table");
	if($columns != count($values)-1) {error_log("updateDB.php -> updateUser() -> number of columns inserted not equal to the number of columns in the table");}
	
	$query = "INSERT INTO `users_table` VALUES (";
	$query.= "'";                  //id
	$query.= "','".$values[0];     //username  
	$query.= "','".$values[1];     //password  
	$query.= "','".$values[2];     //email     
	$query.= "','".$values[3];     //status    
	$query.= "','".$values[4];     //firstname 
	$query.= "','".$values[5];     //surname   
	$query.= "','".$values[6];     //profilepic
	$query.= "','".date_format(new DateTime(null, new DateTimeZone('Europe/Belfast')), 'Y-m-d');    //joindate  
	$query.= "','".$values[7];     //bio       
	$query.= "','".$values[8];     //karma     
	$query.= "','".$values[9];    //games     
	$query.= "','".$values[10];    //wishlist  
	$query.= "','".date_timestamp_get(new DateTime());    //lastseen  
	
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
	
	$queryCol = "SELECT COUNT(*) FROM indiedex_db.sys.columns WHERE object_id=OBJECT_ID('indiedex_db.dbo.users_table')";
	if($columns = mysql_query($queryCol)) {return $columns;}
	else {error_log("updateDB.php -> getColumnCount()");}
	
}

?>