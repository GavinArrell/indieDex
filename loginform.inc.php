<?php
require 'connect.inc.php';
require 'core.inc.php';

	 if(isset($_POST['username']) && isset($_POST['password'])) {
	 	$username = $_POST['username'];
		$password = $_POST['password'];
		
		$password_hash = md5($password);

		if(!empty($username) && !empty($password_hash)) {
			
			$query = "SELECT * FROM `users_table` WHERE `username`='$username' AND `password`='$password_hash'";
			if($query_run = mysql_query($query)) {
				$query_num_rows = mysql_num_rows($query_run);
				
				if($query_num_rows == 0) {
					null;
				}
				else if($query_num_rows == 1) {
					$user_id = mysql_result($query_run, 0, 'id');
					$username = mysql_result($query_run, 0, 'username');
					$bio = mysql_result($query_run, 0, 'bio');
					$indiePoints = mysql_result($query_run, 0, 'indiePoints');
					$status = mysql_result($query_run, 0, 'status');
					$picture = mysql_result($query_run, 0, 'profile picture');
					$firstname = mysql_result($query_run, 0, 'first name');
					$surname = mysql_result($query_run, 0, 'surname');
					$joindate = mysql_result($query_run, 0, 'join date');
					$email = mysql_result($query_run, 0, 'email');
					$_SESSION['user_id']=$user_id;
					$_SESSION['username']=$username;
					$_SESSION['bio']=$bio;
					$_SESSION['indiePoints']=$indiePoints;
					$_SESSION['status']=$status;
					$_SESSION['pic']=$picture;
					$_SESSION['firstname']=$firstname;
					$_SESSION['surname']=$surname;
					$_SESSION['joindate']=$joindate;
					$_SESSION['email']=$email;
					header('Location: index.php');
				}
			}
		}
	 }
?>
