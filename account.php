<HTML>
	<head>
		<title>indieDex</title>
		<meta charset="UTF-8">
		
		<!-- FONTS -->
		<link href='http://fonts.googleapis.com/css?family=Monofett' rel='stylesheet' type='text/css'>
		
		<!-- STYLESHEETS -->
		<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" type="text/css" href="css/header.css"/>
		<link rel="stylesheet" type="text/css" href="css/account.css"/>
		
		<!-- SCRIPTS -->
		<script src="js/libs/jquery-1.6.2.js"></script>
	  	<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
	  	
	  	<script src="js/header.js"></script>
	  	<script src="js/expandContent.js"></script>
  	</head>
  	
	<body>
 			<div id="containerDeev">
 				
 				<div id="leftContainer">
 					<div id="logo">
 						<img src="img/indieDexpng.png"/>
 						<h1 align="center" style="background-color:white; opacity:0.9;">ACCOUNT</h1>
 					</div>
 					
 					<div id="leftSidebar">
 						
								<?php
									require 'core.inc.php';
									require 'connect.inc.php';
									include 'dVdA.php';

										if(loggedin()){
											
											//COMMENTED OUT GAMES BADGE AND WISHLIST UNTIL FEATURE IS IMPLEMENTED. BECAUSE IT'S IN THE ECHO
											//IT DOESNT LOOK COMMENTED, BUT IT IS (LINE 117-118).
																				 	
									 echo	'<div id="accountImage">
 											<img src="';
 											if($_SESSION['pic']!=''&& file_exists($_SESSION['pic'])){
 											echo $_SESSION['pic'];}else{echo 'img/Digital-Abstract-HD-Background.jpg';}; echo'">
 											</div>
 											
											
 											<div id="accountDetails">
 											<h3>';echo $_SESSION['username']; echo'</h3>
 											<p style="padding:24px;">Karma: ';echo $_SESSION['karma']; echo'<br>
 											';$status = $_SESSION['status'];
	 										if($status==0){echo'Non-Premium account';}
											else if($status==1){echo'Premium Account';}
											else if($status==2){echo'Moderator';}
											else if($status==3){echo 'Developer';}
											else{null;}
											echo '</p>
 											</div>
 						
 											<div class="clear" id="accountInfo">
 											<h3>My Bio</h3>
	 										<p>';echo stripslashes($_SESSION['bio']); echo'</p><br/>	 													
	 										
	 										<!--<div><h3>Games:</h3></div><br/>
	 										<div><h3>Wishlist:</h3></div><br/>-->
	 										
	 										<a href="logout.php">Logout</a><br>
	 										</div></div>';
	 										
									
												
												
												}
												else {
													include 'loginform.inc.php';
													
													?>
						</div><br>
						<div style="margin:auto; width:95%; opacity:0.95;"><img style="width:100%; margin-bottom:5px;"src="img/fantaad.png"/></div>
						<div style="margin:auto; width:95%; opacity:0.95;"><img style="width:100%; margin-bottom:5px;"src="img/subwayad.png"/></div>
</div>

			<div class="rightContainer">
			<div style="background-color: white; opacity:0.9; width:200px; padding:5px; font-family:"MS Sans Serif", Geneva, sans-serif; ">
			<h3>Sign Up</h3><br>
					<?php
									
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
														echo'Process Complete, you may Login.';
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

<br>
<form action="account.php" method="POST">
	<p>Username:</p> <input type="text" name="username" <!--value="<?php echo $username; ?>-->"><br><br>
	<p>Password:</p><input type="password" name="password"><br><br>
	<p>Password again:</p><input type="password" name="password_again"><br><br>
	<p>First name:</p><input type="text" name="firstname" <!--value="<?php echo $firstname; ?>"--><br><br>
	<p>Last name:</p><input type="text" name="surname" <!--value="<?php echo $surname; ?>"--><br><br>
	<p>Email:</p><input type="text" name="email" <!--value="<?php echo $email; ?>"--><br><br>
	<input type="submit" value="Register">
</form>
</div>
<?php
}
dVdA();
?>


<!--query account type in php and display correct items for the account type-->


 	</div>				
 			<header>
 				<a href="index.php"><div class="headerChild">Home
 					<div class="headerGrandchild">
 						<ul>
 							<li>Top</li>
 							<li>Hot</li>
 							<li>Trending</li>
 							<li>Staff Picks</li>
 							<li>Saved Filters? dV/dA</li>
 						</ul>
 					</div>
 				</div></a>
 				
 				<a href="review.php"><div class="headerChild">Reviews
 					<div class="headerGrandchild">
 						<ul>
 							<li>Top</li>
 							<li>Hot</li>
 							<li>Trending</li>
 							<li>Staff Picks</li>
 							<li>Saved Filters? dV/dA</li>
 						</ul>
 					</div>
 				</div></a>
 				
 				<a href="games.php"><div class="headerChild">Games
				<div class="headerGrandchild">
 						<ul>
 							<li>Top</li>
 							<li>Hot</li>
 							<li>Trending</li>
 							<li>Staff Picks</li>
 							<li>Saved Filters? dV/dA</li>
 						</ul>				
				</div>
 				</div></a>
 				
 				<a href="forum.php"><div class="headerChild">Forums
 					<div class="headerGrandchild">
 						<ul>
 							<li>Top</li>
 							<li>Hot</li>
 							<li>Trending</li>
 							<li>Staff Picks</li>
 							<li>Saved Filters? dV/dA</li>
 						</ul>
 					</div>
 				</div></a>
			</header>

 		</div>		
	</body>
</HTML>