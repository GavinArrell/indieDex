<?php
require 'core.inc.php';
require 'connect.inc.php';
require 'picturename.php';
function uploadPicture(){
if (empty($_FILES['file']['name'])){header('Location: account.php');}else{
if(changeName()){
		
		$picture = $_SESSION['pic'];
		$username = $_SESSION['username'];
		
		if(!empty($picture)){
				$updateQuery = "UPDATE users_table SET `profile picture` = '$picture' WHERE `username` = '$username'";
    			mysql_query($updateQuery) or die("Error: ".mysql_error());
				reutrn;
		}else{echo 'error';}
			}else
{echo 'error';}}}
?>