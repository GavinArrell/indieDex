<?php
require 'core.inc.php';
require 'connect.inc.php';
function uploadBio(){
$bio = $_POST['name'];
$bio = addslashes($bio);
		$_SESSION['bio'] = $bio;
		$username = $_SESSION['username'];
		
		if(!empty($bio)){
				$updateQuery = "UPDATE users_table SET `bio` = '$bio' WHERE `username` = '$username'";
    			mysql_query($updateQuery) or die("Error: ".mysql_error());
				return;
		}else{return;}
{return;}}
?>