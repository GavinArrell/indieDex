<!DOCTYPE HTML>
<html lang="en-GB">
	<head>
		<title>indieDex</title>
		<meta charset="UTF-8">
		
		<!-- FONTS -->
		<link href='http://fonts.googleapis.com/css?family=Monofett' rel='stylesheet' type='text/css'>
		
		<!-- STYLESHEETS -->
		<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" type="text/css" href="css/header.css"/>
		<link rel="stylesheet" type="text/css" href="css/button.css"/>
		<link rel="stylesheet" type="text/css" href="css/general.css"/>
		<link rel="stylesheet" type="text/css" href="css/profile.css"/>
		<link rel='stylesheet' type='text/css' href="css/statIcons.css"/>
		<link rel='stylesheet' type='text/css' href="css/accountSidebar.css"/>
		
		<!-- JAVASCRIPT -->
		<script type='text/javascript' src="js/libs/jquery-1.6.2.js"></script>
	  	<script type='text/javascript' src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
	  	
	  	<script type='text/javascript' src="js/header.js"></script>
	  	<script type='text/javascript' src="js/general.js"></script>
	  	<script type='text/javascript' src="js/updateSession.js"></script>
	  	<script type='text/javascript' src="js/accountManagement.js"></script>
		
  	</head>
  	
	<body id="body">
 		<div id="containerDeev">
 			
 			<div id="leftContainer">
 				<div id="logo">
 					<img class="fill" src="img/indieDexpng.png"/>
 					<h1 class="center">HOME</h1>
 				</div>
 				
 				<div id="accountSidebar">
					<?php include 'profileSidebar.php' ?> 
				</div>
					
				<?php
				include 'dVdA.php';
				if(!isDev()){
					if(!isMod()){
						if(!isPremium()){
							?>
							<div class="sidebarAdvertisement"><img class="fill" src="img/fantaad.png"/></div>
							<div class="sidebarAdvertisement"><img class="fill" src="img/subwayad.png"/></div>
							<?php
						}else{null;}
					}else{null;}
				}else{null;}
				?>
				
				<div id="onlineUsersSidebar">
					<h3 class="center">0 Users Online</h3>
					<!-- GENERATED BY updateSession.php -->
				</div>
				
 			</div> <!-- LEFT CONTAINER -->
 			
 			<div class="rightContainer">
 				
 				<?php include 'php/getUserInfo.php' ?>
 			
				<div id="profileInfoEdit">
					
					<div id="#profileManagementButtonContainer">
						<div class="profileManagementButton" id="profileManagementButton_notifs">notifications</div>
						<div class="profileManagementButton" id="profileManagementButton_messages">messages</div>
						<div class="profileManagementButton" id="profileManagementButton_status">settings</div>
						<div class="profileManagementButton" id="profileManagementButton_editInfo">profile</div>
					</div>
					
					<table id="profileInfoEditTable">
						<tr>
							<td>
								<form action="uploadInfoEdit.php" method="post" enctype="multipart/form-data">
									<label for="file">Change Your Profile Picture</label>
									<input type="file" name="file" id="file"><br><br>
									
									<label for="file">Edit Your Bio</label>
					   				<textarea style=" resize:none; height:100px; width:300px;" type="text" name="bio"></textarea><br>
							</td>
							
							<td>
									
							</td>
							
							<td>
									<label for="file">Change Your Password</label>
					   				Old Password:<input style="margin-left:6px;" input type="password" name="oldpw"><br>
					   				New Password:<input type="password" name="newpw"><br>
					   				New Password:<input type="password" name="newpwtwo"><br>
									<br><br>
									<label for="file">Change Your E-mail</label><br>
					   				Change Email<input style="margin-left:8px;" type="text" name="email"><br>
							</td>
						</tr>
						
						<tr>
							<td colspan="3" class="profileManagementSubmit">
									<input type="submit" value="Submit">
								</form>
							</td>
						</tr>
					</table>
					
					<div id="profileNotifications">NOTIFICATIONS</div>
					
					<div id="profileMessageBoard">MESSAGE BOARD</div>
					
					<div id="profileStatus">
						
						<?php 
						function convertStatus($status) {
							switch($status) {
								case 0 : return "Non-Premimum";
								case 1 : return "Premimum";
								case 2 : return "Moderator";
								case 3 : return "Developer";
							}
						}
						?>
						
						<div id="profileStatusDetailsContainer">
							<table id="profileStatusDetailsTable">
								<tr>
									<td><h3>Account Status: <?php echo convertStatus($_SESSION['status']); ?></h3></td>
									<td><h3>Premium Since: N/A</h3></td>
									<td><h3>Next Pay Date: N/A</h3></td>
								</tr>
							</table>
						</div>
					
						<?php ;
				
						if(isFreemium()){ ?>
							<div style=" width:600px; background-color:white; opacity:0.9; padding:5px; margin:auto; margin-top:5px;">
								<p align="center">UPGRADE TO PREMIUM</p>
								<form action="changeMembershipStatus.php" method="post">
									<div style=" width:50%; line-height:32px; padding-left:16px;">
										Premium Cost = £1/per month <br>
										Name on Card:<input type="text" name="text" value="" style="float:right;"><br>
										Card Number:<input type="text" name="text" value="" style="float:right;"><br>
										Expiry Date:<input type="text" name="text" value="" style="float:right;"><br>
										CV Number:<input type="text" name="text" value="" style="float:right;"><br>
										<input type="hidden" name="status" value"1">
										<input type="submit" name="submit" value="Submit">
									</div>
								</form>
							</div>
							
						<?php ;} ?>	
						
					</div>
						
				</div>
		
 				
 			</div>
 				
			<header class=".headerFixed">
				<div class="headerChild">
					<a href="index.php"><div class="headerButton">Home</div></a>
					
	 				<div class="headerGrandchild">
	 					<ul>
	 						<a class="filterTop"  > <li>Top</li> </a>
	 						<a class="filterNew"  > <li>New</li> </a>
	 						<a class="filterHot"  > <li>Hot</li> </a>
	 						<a class="filterTrend"> <li>Trending</li> </a>
	 					</ul>
	 				</div>
				</div>
				
				<a href="review.php"><div class="headerChild">Reviews
					<div class="headerGrandchild">
						<ul>
							<a class="filterTop"  > <li>Top</li> </a>
	 						<a class="filterNew"  > <li>New</li> </a>
	 						<a class="filterHot"  > <li>Hot</li> </a>
	 						<a class="filterTrend"> <li>Trending</li> </a>
						</ul>
					</div>
				</div></a>
				
				<a href="games.php"><div class="headerChild">Games
					<div class="headerGrandchild">
						 <ul>
							<a class="filterTop"  > <li>Top</li> </a>
	 						<a class="filterNew"  > <li>New</li> </a>
	 						<a class="filterHot"  > <li>Hot</li> </a>
	 						<a class="filterTrend"> <li>Trending</li> </a>
						</ul>
					</div>
				</div></a>
				
				<a href="forum.php"><div class="headerChild">Forums
					<div class="headerGrandchild">
						<ul>
							<li>Top</li>
							<li>New</li>
							<li>Hot</li>
							<li>Trending</li>
						</ul>
					</div>
				</div></a>
			</header>

 		</div> <!-- CONTAINER DEEV -->
	
		<footer>
			<div id="footer">
				
			</div>
		</footer>
	
		<?php include 'php/updateSession.php' ?>
	
	</body>
</HTML>