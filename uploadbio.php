<?php
require 'core.inc.php';
require 'connect.inc.php';
		
		$username = $_SESSION['username'];
		
		if(!empty($picture)){
				$updateQuery = "UPDATE users_table SET `profile picture` = '$picture' WHERE `username` = '$username'";
    			mysql_query($updateQuery) or die("Error: ".mysql_error());
				header('Location: account.php');
		}else{echo 'error';}
			}else
{echo 'error';}
?>