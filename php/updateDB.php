<?php

function registerNewUser($values) {
	
	getColumnCount("user_table");
	if($columns != count($values)-1) {error_log("updateDB.php -> updateUser() -> number of columns inserted not equal to the number of columns in the table");}
	
	$query = "INSERT INTO `user_table` VALUES (";
	$query.= "','".$values[0];     //id
	$query.= "','".$values[1];     //username  
	$query.= "','".$values[2];     //password  
	$query.= "','";$values[3];     //email     
	$query.= "','".$values[4];     //status    
	$query.= "','".$values[5];     //firstname 
	$query.= "','";$values[6];     //surname   
	$query.= "','";$values[7];     //profilepic
	$query.= "','";$values[8];     //joindate  
	$query.= "','";$values[9];     //bio       
	$query.= "','";$values[10];    //karma     
	$query.= "','";$values[11];    //games     
	$query.= "','".$values[12];    //wishlist  
	$query.= "','".$values[13];    //lastseen  
	
	$query.= "')";
	
	if(!($query_run = mysql_query($query))) {
		error_log("updateDB.php -> updateUser() -> failed to run insert query");
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