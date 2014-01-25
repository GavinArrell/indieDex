<?php
require 'core.inc.php';
require 'connect.inc.php';

if(!loggedin()){
	
	if(isset($_POST['username'])&& isset($_POST['password'])&& isset($_POST['password_again']) &&isset($_POST['firstname']) &&isset($_POST['surname']) &&isset($_POST['email'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$password_again = $_POST['password_again'];
		$firstname = $_POST['firstname'];
		$surname = $_POST['surname'];
		$email = $_POST['email'];
			
			if(!empty($username) && !empty($password) && !empty($password_again) && !empty($firstname) && !empty($surname) && !empty($email)){
				if($password!=$password_again){ echo 'Passwords do not match';}
				else {
					
					
					$query = "SELECT `username` FROM `users_table` WHERE `username`='$username'";
					$query_run = mysql_query($query);
					
					if (mysql_num_rows($query_run)==1){echo 'The username '.$username.' already exists';}
					else{
						$password_hash = md5($password); 
						$query = "INSERT INTO `users_table` VALUES ('','".mysql_real_escape_string($username)."','".mysql_real_escape_string($password_hash)."','".mysql_real_escape_string($email)."','','".mysql_real_escape_string($firstname)."','".mysql_real_escape_string($surname)."','','','','','','')";
								if	($query_run = mysql_query($query)){
									header('Location: register_sucess.php');
								}else{
									echo 'Sorry, we could not process your request. Try again later.';
								}
					}
					
					
				}
			} else {
				echo 'ALL FIELDS REQUIRED';
			}
		
	}
	
?>

<form action="register.php" method="POST">
	Username:<br> <input type="text" name="username" value="<?php echo $username; ?>"><br><br>
	Password:<br> <input type="password" name="password"><br><br>
	Password again:<br> <input type="password" name="password_again"><br><br>
	First name:<br> <input type="text" name="firstname" value="<?php echo $firstname; ?>"><br><br>
	Last name:<br> <input type="text" name="surname" value="<?php echo $surname; ?>"><br><br>
	Email:<br><input type="text" name="email" value="<?php echo $email; ?>"><br><br>
	<input type="submit" value="Register">
</form>

<?php
}else if(loggedin()){
	echo 'You\'re already logged in';
}


?>