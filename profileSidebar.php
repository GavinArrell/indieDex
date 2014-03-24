<?php
require 'core.inc.php';
require 'connect.inc.php';

	if(loggedin()){
		
		$status = profileSidebar($_SESSION['status']);
											 	
		echo	'<div id="accountImage">
					<img src="';
					if($_SESSION['pic']!=''&& file_exists($_SESSION['pic'])){
					echo $_SESSION['pic'];}else{echo 'img/Digital-Abstract-HD-Background.jpg';}; echo'">
				</div>
				
				<div id="accountDetails">
					<h2>'. $_SESSION['username'] .'</h2>
					
					<div id="accountDetailsInner">
						<p>'. $status .'</p>
						<p>'. $_SESSION['indiePoints'] .' Indie Points</p>
					</div>
				</div>
				
				<table class="statContainerGroup">
				
					<tr>
						<td>
							<div class="statContainer">
							
								<a href="">
									<div class="statIcon">
										<div class="statIcon_red">0</div>
									</div>
								</a>
								
							</div>
						</td>
														
						
						<td>
							<div class="statContainer">
							
								<a href="">
									<div class="statIcon">
										<div class="statIcon_yellow">0</div>
									</div>
								</a>
								
							</div>
						</td>
					</tr>
				
					<tr>	
						<td>
							<div class="statContainer">
							
								<a href="">
									<div class="statIcon">
										<div class="statIcon_green">0</div>
									</div>
								</a>
								
							</div>
						</td>
														
						
						<td>
							<div class="statContainer">
							
								<a href="">
									<div class="statIcon">
										<div class="statIcon_blue">0</div>
									</div>
								</a>
								
							</div>
						</td>
					</tr>
					
					<tr>	
						<td>
							<div class="statContainer">
							
								<a href="">
									<div class="statIcon">
										<div class="statIcon_purple">0</div>
									</div>
								</a>
								
							</div>
						</td>
							
						<td>
							<div class="statContainer">
							
								<a href="">
									<div class="statIcon">
										<div class="statIcon_black">0</div>
									</div>
								</a>
								
							</div>
						</td>
					</tr>		
				</table>
				
				<div id="accountButtons">
					<a href="profile.php?user='. $_SESSION['username'] .'"> <div class="button small-margin">Profile</div> </a>
					<a href="logout.php"> <div class="button small-margin">Logout</div> </a>
				</div>';
	}
	else {
		
		echo '<div id="accountSidebarInner">';
			echo '<h4>Welcome</h4>';
			
			echo '<form action="loginform.inc.php" method="POST">';
				echo '<input type="text" name="username" placeholder="Username">';
				echo '<input type="password" name="password" placeholder="Password">';
				echo '<input type="submit" value="Login"><br>';
			echo '</form>';
			
			echo '<a href="signup.php">';
				echo '<div class="button no-margin">Sign Up</div>';
			echo '</a>';
		echo '</div>';
		
	}

function profileSidebar($status) {
	
	switch($status) {
		case 0: return "Non-Premium";
		case 1: return "Premium";
		case 2: return "Moderator";
		case 3: return "Developer";
		default: return $status;
	}
	
}
?>