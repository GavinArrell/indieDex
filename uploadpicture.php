<?php
require 'core.inc.php';
require 'connect.inc.php';
require 'picturename.php';
function uploadPicture(){
if (empty($_FILES['file']['name'])){header('Location: profile.php?user='.$_SESSION['username']);}else{
if(changeName()){
		
		$picture = $_SESSION['pic'];
		$username = $_SESSION['username'];
		
		if(!empty($picture)){
				$updateQuery = "UPDATE users_table SET `profile picture` = '$picture' WHERE `username` = '$username'";
    			mysql_query($updateQuery) or die("Error: ".mysql_error());
				return;
		}else{echo 'error';}
}else
{echo 'error';}}}
?>