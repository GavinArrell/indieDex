<?php
require 'uploadpicture.php';

	if(isset($_FILES['file']['name'])&&!empty($_FILES['file']['name'])){
		uploadPicture();
	}
	
	if(isset($_FILES['fileback']['name'])&&!empty($_FILES['fileback']['name'])){
		$username = $_SESSION['username'];
		
		if (($_FILES["fileback"]["type"] == "image/gif")
		|| ($_FILES["fileback"]["type"] == "image/jpeg")
		|| ($_FILES["fileback"]["type"] == "image/jpg")
		|| ($_FILES["fileback"]["type"] == "image/png")) {
			
			$random_digit=date_format(new DateTime(null, new DateTimeZone('Europe/Belfast')),'d-m-Y-G-i-s').'-'.rand(0000,9999).'--';
			$new_file_name=$random_digit.$_FILES['fileback']['name'];
			
			$backpath= "img/uploads/".$new_file_name;
			
			if($_FILES['file'] != null) {
				if(copy($_FILES['fileback']['tmp_name'], $backpath)) {	
					$updateQuery = "UPDATE users_table SET `profileBackground` = '$backpath' WHERE `username` = '$username'";
	    			mysql_query($updateQuery) or die("Error: ".mysql_error());
				}
			}
			
		}
		
		echo 'ERROR: Wrong file type and could not return to previous page';
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
	
	if(isset($_POST['day'])&&!empty($_POST['day']) && isset($_POST['month'])&&!empty($_POST['month']) && isset($_POST['year'])&&!empty($_POST['year'])){
		$birth = $_POST['year'].'-'.$_POST['month'].'-'.$_POST['day'];
		echo $birth; return;
		$username = $_SESSION['username'];
		$updateQuery = "UPDATE users_table SET `birthday` = '$birth' WHERE `username` = '$username'";
    	mysql_query($updateQuery) or die("Error: ".mysql_error());
	}
	
	if(isset($_POST['location'])&&!empty($_POST['location'])){
		$location = $_POST['location'];
		$username = $_SESSION['username'];
		$updateQuery = "UPDATE users_table SET `location` = '$location' WHERE `username` = '$username'";
    	mysql_query($updateQuery) or die("Error: ".mysql_error());
	}
	
	header('Location: profile.php?user='.$username);
?>