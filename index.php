<!DOCTYPE html>
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
		<link rel="stylesheet" type="text/css" href="css/button.css"/>
		<link rel="stylesheet" type="text/css" href="css/general.css"/>
		<link rel='stylesheet' id='camera-css'  href='../css/camera.css' type='text/css' media='all'>
		
		<!-- SCRIPTS -->
		<script src="js/libs/jquery-1.6.2.js"></script>
	  	<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
	  	
	  	<script type='text/javascript' src='js/jquery.min.js'></script>
    	<script type='text/javascript' src='js/jquery.mobile.customized.min.js'></script>
    	<script type='text/javascript' src='js/jquery.easing.1.3.js'></script> 
    	<script type='text/javascript' src='js/camera.min.js'></script>
	  	
	  	<script src="js/header.js"></script>
	  	<script src="js/expandContent.js"></script>
	  	<script src="js/changePage.js"></script>
	  	<script src="js/queryDB.js"></script>
	  	<script src="js/getContentFilters.js"></script>
	  	<script src="js/general.js"></script>
		
		<style>
			body {
				margin: 0;
				padding: 0;
			}
			#back_to_camera {
				clear: both;
				display: block;
				height: 80px;
				line-height: 40px;
				padding: 20px;
			}
			.fluid_container {
				margin: 0 auto;
				min-width:720px;
				width: 100%;
			}
		</style>
		
		<script>
  
			jQuery(function(){
				
				jQuery('#camera_wrap_1').camera({
					loader: 'bar',
					pagination: false,
					thumbnail: false
				});});
		
		</script>
		
		<!--<style>
			html, body{
				background-image:url("img/mLOQIBN - Imgur.jpg");
			}
		</style>-->
		
  	</head>
  	
	<body>
 		<div id="containerDeev">
 			
 			<div id="leftContainer">
 				<div id="logo">
 					<img src="img/indieDexpng.png"/>
 					<h1 align="center" style="background-color:white; opacity:0.9;">HOME</h1>
 				</div>
 				
 				<div id="leftSidebar">

						<?php
						require 'core.inc.php';
						require 'connect.inc.php';

							if(loggedin()){
								
								//COMMENTED OUT GAMES BADGE AND WISHLIST UNTIL FEATURE IS IMPLEMENTED. BECAUSE IT'S IN THE ECHO
								//IT DOESNT LOOK COMMENTED, BUT IT IS (LINE 117-118).
																	 	
								 echo	'<div id="accountImage">
 										<img src="';
 										if($_SESSION['pic']!=''&& file_exists($_SESSION['pic'])){
 										echo $_SESSION['pic'];}else{echo 'img/Digital-Abstract-HD-Background.jpg';}; echo'">
 										</div>
 										
										
 										<div id="accountDetails">
 										<br><h3>';echo $_SESSION['username']; echo'</h3>
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
										</div>';
							}
							else {
								include 'loginform.inc.php';
							}
						?> 
					<a style="padding-left:16px;"href="account.php">Account Settings</a><br>
					</div>
					
					<?php
					include 'dVdA.php';
					if(!isDev()){
						if(!isMod()){
							if(!isPremium()){
								?>
								<div style="margin:auto; width:95%; opacity:0.9;"><img style="width:100%; margin-top:5px;"src="img/fantaad.png"/></div>
								<div style="margin:auto; width:95%; opacity:0.9;"><img style="width:100%;" src="img/subwayad.png"/></div>
								<?php
							}else{null;}
						}else{null;}
					}else{null;}
					?>
				
 			</div> <!-- LEFT CONTAINER -->
 			
 			<div class="rightContainer">
 				
 				<div id="slideshow">
					<div class="fluid_container">
						<div class="camera_wrap camera_azure_skin" id="camera_wrap_1">
							
							<div data-thumb="img/IndieGameTheMovieRelease.jpg" data-src="img/IndieGameTheMovieRelease.jpg">
							    <div class="camera_caption fadeFromBottom">
							        <a href="google.com"><em>Indie Game The Movie - Available on Netflix.</em></a>
							    </div>
							</div>
							
							<div data-thumb="img/minecraftSlideShow.png" data-src="img/minecraftSlideShow.png">
							    <div class="camera_caption fadeFromBottom">
							        <em>Minecraft - updated to 1.7.4!.</em>
							    </div>
							</div>
							
							<div data-thumb="img/fez.png" data-src="img/fez.png">
							    <div class="camera_caption fadeFromBottom">
							        <em>Fez - winner of multiple indie gaming awards.</em>
							    </div>
							</div>
							
							<div data-thumb="img/kerbal.png" data-src="img/kerbal.png">
						    	<div class="camera_caption fadeFromBottom">
						      		<em>Kerbal Space Program - available on Steam.</em>
								</div>
							</div>
							
						</div>
					</div>
 				</div>
 			</div>
 				
 			<div id="rightContainerTwo">	
 				
 				<?php
 				require 'contentAdd.php';
				addNews(); 						
 				?>
 									
 				<div id="contentContainer">
 					<div id="contentItemContainer">
 						
					</div> <!-- CONTENT ITEM CONTAINER -->
					
					
					<!-- Page Buttons -->
				
					<div style="display: table; margin: 0 auto;clear:both;">
						<br/>
						<div id="pageButtonFirst" class="button inline-block"><<</div>
						<div id="pageButton1" class="button inline-block">1</div>
						<div id="pageButton2" class="button inline-block">2</div>
						<div id="pageButton3" class="button inline-block">3</div>
						<div id="pageButton4" class="button inline-block">4</div>
						<div id="pageButton5" class="button inline-block">5</div>
						<div id="pageButtonLast" class="button inline-block">>></div>
						<div id="pageButtonIndex" class="button inline-block">...</div>
					</div>
					
				</div> <!-- CONTENT CONTAINER -->
				
					
				<div id="rightSidebarContainer">
					<div id="rightSidebar">
						<br>
						
						<input id="searchBar" type="text" value="Search Titles..." onfocus="this.value = '';" onblur="this.value = 'Search Titles...'; }" style="width: 77%; max-width: 100%">
						<div id="queryDBButton" class="button inline-block no-margin" type="submit"><img src="img/search_icon.png" height="12px"></div>
						
						<br><br>
						<h3>Console</h3>
						<br/>
	 					<input class="checkboxFilter" type="checkbox" name="Console" value="PC">PC<br>
						<input class="checkboxFilter" type="checkbox" name="Console" value="Mac">Mac<br>
						<input class="checkboxFilter" type="checkbox" name="Console" value="Linux">Linux<br>
						<input class="checkboxFilter" type="checkbox" name="Console" value="PS4">PS4<br>
						<input class="checkboxFilter" type="checkbox" name="Console" value="PS3">PS3<br>
						<input class="checkboxFilter" type="checkbox" name="Console" value="XboxOne">Xbox One<br>
						<input class="checkboxFilter" type="checkbox" name="Console" value="Xbox360">Xbox 360<br>
						<input class="checkboxFilter" type="checkbox" name="Console" value="WiiU">Wii U<br>
						<input class="checkboxFilter" type="checkbox" name="Console" value="Wii">Wii<br>
						<input class="checkboxFilter" type="checkbox" name="Console" value="IOS">IOS<br>
						<input class="checkboxFilter" type="checkbox" name="Console" value="Android">Android<br><br>
						
						<h3>Genre</h3>
						<br/>
						<input class="checkboxFilter" type="checkbox" name="Genre" value="Action">Action<br>
						<input class="checkboxFilter" type="checkbox" name="Genre" value="Adventure">Adventure<br>
						<input class="checkboxFilter" type="checkbox" name="Genre" value="Music">Music<br>
						<input class="checkboxFilter" type="checkbox" name="Genre" value="MMO">MMO<br>
						<input class="checkboxFilter" type="checkbox" name="Genre" value="Puzzle">Puzzle<br>
						<input class="checkboxFilter" type="checkbox" name="Genre" value="RPG">RPG<br>
						<input class="checkboxFilter" type="checkbox" name="Genre" value="Shooter">Shooter<br>
						<input class="checkboxFilter" type="checkbox" name="Genre" value="Sport">Sport<br>
						<input class="checkboxFilter" type="checkbox" name="Genre" value="Strategy">Strategy<br><br>
						
						<h3>Release</h3>
						<br/>
						<input class="checkboxFilter" type="checkbox" name="Release" value="BETA">BETA<br>
						<input class="checkboxFilter" type="checkbox" name="Release" value="2014">2014<br>
						<input class="checkboxFilter" type="checkbox" name="Release" value="2013">2013<br>
						<input class="checkboxFilter" type="checkbox" name="Release" value="2012">2012<br>
						<input class="checkboxFilter" type="checkbox" name="Release" value="2011">2011<br>
						<input class="checkboxFilter" type="checkbox" name="Release" value="pre2010">2010-<br><br>
						
						<h3>Star Rating</h3>
						<br/>
						<input class="checkboxFilter" type="checkbox" name="Rating" value="5">&#9733;&#9733;&#9733;&#9733;&#9733;<br>
						<input class="checkboxFilter" type="checkbox" name="Rating" value="4">&#9733;&#9733;&#9733;&#9733;<br>
						<input class="checkboxFilter" type="checkbox" name="Rating" value="3">&#9733;&#9733;&#9733;<br>
						<input class="checkboxFilter" type="checkbox" name="Rating" value="2">&#9733;&#9733;<br>
						<input class="checkboxFilter" type="checkbox" name="Rating" value="1">&#9733;<br><br>
						
						<h3>Price</h3>
						<br/>
						<input class="checkboxFilter" data-operator="=="  data-limit_low="25.00" data-limit_high="25.00" type="checkbox" name="Price" value="25more">£25.00<br>
						<input class="checkboxFilter" data-operator=">=<" data-limit_low="15.00" data-limit_high="25.00" type="checkbox" name="Price" value="15to25">£15.00 - £25.00<br>
						<input class="checkboxFilter" data-operator="<="  data-limit_low="0.00"  data-limit_high="15.00" type="checkbox" name="Price" value="15less">£15.00-<br>
						<input class="checkboxFilter" data-operator="=="  data-limit_low="0.00"  data-limit_high="0.00"  type="checkbox" name="Price" value="0">Free<br><br>
						
						<h3>Staff Picks</h3>
						<br/>
						<input class="checkboxFilter" type="checkbox" name="Staff" value="Staff">Staff Picks<br><br>
						
						<div id="clearFilters" class="button no-margin">Clear Filters</div>
						
	 				</div> <!-- RIGHT SIDEBAR -->
	 			</div> <!-- RIGHT SIDEBAR CONTAINER -->
 			
 			</div> <!-- RIGHT CONTAINER TWO -->
 				
			<header class=".headerFixed">
				<div class="headerChild">
					<a href="index.php"><div class="headerButton">Home</div></a>
					
	 				<div class="headerGrandchild">
	 					<ul>
	 						<a class="filterTop"   href=""> <li>Top</li> </a>
	 						<a class="filterNew"   href=""> <li>New</li> </a>
	 						<a class="filterHot"   href=""> <li>Hot</li> </a>
	 						<a class="filterTrend" href=""> <li>Trending</li> </a>
	 					</ul>
	 				</div>
				</div>
				
				<a href="review.php"><div class="headerChild">Reviews
					<div class="headerGrandchild">
						<ul>
							<li>Top</li>
							<li>New</li>
							<li>Hot</li>
							<li>Trending</li>
						</ul>
					</div>
				</div></a>
				
				<a href="games.php"><div class="headerChild">Games
					<div class="headerGrandchild">
						 <ul>
							<li>Top</li>
							<li>New</li>
							<li>Hot</li>
							<li>Trending</li>
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
	
	</body>
</HTML>