<?php

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
					$karma = mysql_result($query_run, 0, 'karma');
					$status = mysql_result($query_run, 0, 'status');
					$picture = mysql_result($query_run, 0, 'profile picture');
					$_SESSION['user_id']=$user_id;
					$_SESSION['username']=$username;
					$_SESSION['bio']=$bio;
					$_SESSION['karma']=$karma;
					$_SESSION['status']=$status;
					$_SESSION['pic']=$picture;
					header('Location: index.php');
				}
			}
		}
	 }
?>
<Style>

.form{
	padding:5px;
	font-family:"MS Sans Serif", Geneva, sans-serif;
}	
	
</Style>
<br>
<div class="form">
<form action="<?php echo $current_file; ?>" method="POST">
	 Username: <input type="text" name="username" size="10"><br><br>
	 Password: <input type="password" name="password" size="11"><br>
	<input type="submit" value="Login"><br>
</form>
</div>
