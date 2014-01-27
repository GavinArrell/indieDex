<?php
require 'core.inc.php';




										$password_hash = md5($password); 
										$query = "INSERT INTO `users_table` VALUES ('','";
										$query.= mysql_real_escape_string($username)."','";
										$query.= mysql_real_escape_string($password_hash)."','";
										$query.= mysql_real_escape_string($email)."','";
										$query.= "','"; //status
										$query.= mysql_real_escape_string($firstname)."','";
										$query.= mysql_real_escape_string($surname)."','";
										$query.= "','"; //profile pic
										$query.= "','"; //join date
										$query.= "','"; //bio
										$query.= "','"; //karma
										$query.= "','"; //games
										$query.= "','"; //wishlist
										$query.= date_timestamp_get(new DateTime())."')"; //lastSeen
												
										//put comma at start so it doesn't screw up in the end
										
										if	($query_run = mysql_query($query)){
											echo'Process Complete, you may Login.';
										}else{
											echo 'Sorry, we could not process your request. Try again later.';
										}
?>