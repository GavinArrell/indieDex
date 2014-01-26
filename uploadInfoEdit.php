<?php
require 'uploadpicture.php';

	if(isset($_FILES['file']['name'])&&!empty($_FILES['file']['name'])){
		uploadPicture();
	}
	
	if(isset($_POST['bio'])&&!empty($_POST['bio'])){
		$bio = $_POST['bio'];
		$bio = addslashes($bio);
		$_SESSION['bio'] = $bio;
		$username = $_SESSION['username'];
		$updateQuery = "UPDATE users_table SET `bio` = '$bio' WHERE `username` = '$username'";
    	mysql_query($updateQuery) or die("Error: ".mysql_error());
	}	
	
	if(isset($_POST['newpw'])&&!empty($_POST['newpw'])){
		if($_POST['newpw'] == $_POST['newpwtwo']){
			$username = $_SESSION['username'];	
			$pw = $_POST['newpw'];
			$pw = md5($pw);
			$password_hash = md5($_POST['oldpw']);	
			$updateQuery = "UPDATE users_table SET `password` = '$pw' WHERE `username`='$username' AND `password`='$password_hash'";
			mysql_query($updateQuery) or die("Error: ".mysql_error());
		}
	}
	
	if(isset($_POST['email'])&&!empty($_POST['email'])){
		$email = $_POST['email'];
		$_SESSION['email'] = $email;
		$username = $_SESSION['username'];
		$updateQuery = "UPDATE users_table SET `email` = '$email' WHERE `username` = '$username'";
    	mysql_query($updateQuery) or die("Error: ".mysql_error());
	}
	header('Location: account.php');
?>