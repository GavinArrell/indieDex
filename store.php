<!DOCTYPE HTML>
<html lang="en-GB">
	<head>
		<title>indieDex - Store</title>
		<link rel="icon" type="image/gif" href="img/indieDexpng.png"> 
		<meta charset="UTF-8">
		
		<!-- FONTS -->
		<link href='http://fonts.googleapis.com/css?family=Monofett' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Dosis:400,500' rel='stylesheet' type='text/css'>
		
		<!-- STYLESHEETS -->
		<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" type="text/css" href="css/header.css"/>
		<link rel="stylesheet" type="text/css" href="css/button.css"/>
		<link rel="stylesheet" type="text/css" href="css/general.css"/>
		<link rel='stylesheet' type='text/css' href="css/camera.css" id='camera-css' media='all'>
		<link rel='stylesheet' type='text/css' href="css/statIcons.css"/>
		<link rel='stylesheet' type='text/css' href="css/accountSidebar.css"/>
		<link rel="stylesheet" type="text/css" href="css/store.css"/>
		
		<!-- JAVASCRIPT -->
		<script type='text/javascript' src="js/libs/jquery-1.6.2.js"></script>
	  	<script type='text/javascript' src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
	  	
	  	<script type='text/javascript' src="js/libs/html5shiv-printshiv.js"></script>
	  	        
	  	<script type='text/javascript' src='js/jquery.min.js'></script>
    	<script type='text/javascript' src='js/jquery.mobile.customized.min.js'></script>
    	<script type='text/javascript' src='js/jquery.easing.1.3.js'></script> 
	  	
	  	<script type='text/javascript' src="js/header.js"></script>
	  	<script type='text/javascript' src="js/expandContent.js"></script>
	  	<script type='text/javascript' src="js/changePage.js"></script>
	  	<script type='text/javascript' src="js/queryDB.js"></script>
	  	<script type='text/javascript' src="js/getContentFilters.js"></script>
	  	<script type='text/javascript' src="js/general.js"></script>
	  	<script type='text/javascript' src="js/updateSession.js"></script>
	  	<script type='text/javascript' src="js/storeButtons.js"></script>
	  	<script type='text/javascript' src="js/storeCart.js"></script>
		
		<?php include 'loginform.inc.php'; ?>
		
  	</head>
  	
	<body id="body">
 		<div id="containerDeev">
 			
 			<div id="leftContainer">
 				<div id="logo">
 					<img class="fill" src="img/indieDexpng.png"/>
 					<h1 class="center">STORE</h1>
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
					<h4 class="center">0 Users Online</h4>
					<!-- GENERATED BY phpCallsOnLoad.js -> phpCallsOnLoad_updateSession() -->
				</div>
				
 			</div> <!-- LEFT CONTAINER -->
 				
 			<div id="storeContainer">
 				
				<div id="storeButtonContainer">
					<div class="storeButton" id="storeButton_indieDex">indieDex</div>
					<div class="storeButton" id="storeButton_game1">Minecraft</div>
					<div class="storeButton" id="storeButton_game2">Coming Soon</div>
					<div class="storeButton" id="storeButton_game3">Coming Soon</div>
					<div class="storeButton" id="storeButton_cart">cart</div>
				</div>

				<div id="storeIndieDex">
					<div id="storeItemsContainer">
						<div class="storeItem">
							
							<div class="storeItemImageCont">
								
									<img class="storeItemImage" src="img/indieDexStoreOne.png">
								
							</div>
							<div class="storeItemBar">
								<p>indieDex T-shirt [Male] - £14.94 <div class="button storeAddItem">Add</div></p>
							</div>
						</div>					
						
						<div class="storeItem">
			
							<div class="storeItemImageCont">
								
									<img class="storeItemImage" src="img/indieDexStoreTwo.png">
								
							</div>
							<div class="storeItemBar">
								<p>indieDex Mug - £9.99 <div class="button storeAddItem">Add</div></p>
							</div>	
							
						</div>
						
						<div class="storeItem">
							<div class="storeItemImageCont">
								
									<img class="storeItemImage" src="img/indieDexStoreFour.png">
								
							</div>
							<div class="storeItemBar">
								<p>indieDex Mousemat - £3.99 <div class="button storeAddItem">Add</div></p>
							</div>	
							
						</div>							
						
						
						<div class="storeItem">
							<div class="storeItemImageCont">
								
									<img class="storeItemImage" src="img/indieDexStoreFive.png">
								
							</div>
							<div class="storeItemBar">
								<p>indieDex Beanie - £8.99 <div class="button storeAddItem">Add</div></p>
							</div>	
						</div>
						
						<div class="storeItem">
							
							<div class="storeItemImageCont">
								
									<img class="storeItemImage" src="img/indieDexStoreThree.png">
								
							</div>
							<div class="storeItemBar">
								<p>indieDex T-shirt [Female] - £14.94 <div class="button storeAddItem">Add</div></p>
							</div>
						</div>	
												
						<div class="storeItem">
							<div class="storeItemImageCont">
								
								<img class="storeItemImage" src="img/indieDexStoreSix.png">
								
							</div>
							<div class="storeItemBar">
								<p>indieDex Bath Towel - £28.95 <div class="button storeAddItem">Add</div></p>
							</div>
						</div>
					</div>
				</div>
				
				<div id="storeGame1">
					<div id="storeItemsContainer">
						
						<div class="storeItem">
							<div class="storeItemImageCont">
								
								<img class="storeItemImage" src="img/minecraftStore1.jpg">
								
							</div>
							<div class="storeItemBar">
								<p>Creeper Face Beanie - £12.99 <div class="button storeAddItem">Add</div></p>
							</div>
						</div>
					
						<div class="storeItem">
							<div class="storeItemImageCont">
								
								<img class="storeItemImage" src="img/minecraftStore2.jpg">
								
							</div>
							<div class="storeItemBar">
								<p>Foam Pickaxe - £12.99 <div class="button storeAddItem">Add</div></p>
							</div>
						</div>
					
						<div class="storeItem">
							<div class="storeItemImageCont">
								
								<img class="storeItemImage" src="img/minecraftStore3.jpg">
								
							</div>
							<div class="storeItemBar">
								<p>Computronic Poster - £7.99 <div class="button storeAddItem">Add</div></p>
							</div>
						</div>
					
						<div class="storeItem">
							<div class="storeItemImageCont">
								
								<img class="storeItemImage" src="img/minecraftStore4.png">
								
							</div>
							<div class="storeItemBar">
								<p>Diamond Wrapping Paper - £5.99 <div class="button storeAddItem">Add</div></p>
							</div>
						</div>
					
						<div class="storeItem">
							<div class="storeItemImageCont">
								
								<img class="storeItemImage" src="img/minecraftStore5.jpg">
								
							</div>
							<div class="storeItemBar">
								<p>Creeper iPhone 5 Case - £12.99 <div class="button storeAddItem">Add</div></p>
							</div>
						</div>
					
						<div class="storeItem">
							<div class="storeItemImageCont">
								
								<img class="storeItemImage" src="img/minecraftStore6.jpg">
								
							</div>
							<div class="storeItemBar">
								<p>Grassy Block iPhone 5 Case - £12.99 <div class="button storeAddItem">Add</div></p>
							</div>
						</div>
					
						<div class="storeItem">
							<div class="storeItemImageCont">
								
								<img class="storeItemImage" src="img/minecraftStore7.jpg">
								
							</div>
							<div class="storeItemBar">
								<p>Pickaxe Keychain - £7.99 <div class="button storeAddItem">Add</div></p>
							</div>
						</div>
					
						<div class="storeItem">
							<div class="storeItemImageCont">
								
								<img class="storeItemImage" src="img/minecraftStore8.jpg">
								
							</div>
							<div class="storeItemBar">
								<p>Enderman Inside Youth Tee - £14.99 <div class="button storeAddItem">Add</div></p>
							</div>
						</div>
					
						<div class="storeItem">
							<div class="storeItemImageCont">
								
								<img class="storeItemImage" src="img/minecraftStore9.jpg">
								
							</div>
							<div class="storeItemBar">
								<p>Vitruvian Minecraft Tee - £14.99 <div class="button storeAddItem">Add</div></p>
							</div>
						</div>
					
						<div class="storeItem">
							<div class="storeItemImageCont">
								
								<img class="storeItemImage" src="img/minecraftStore10.jpg">
								
							</div>
							<div class="storeItemBar">
								<p>Ironsword Belt - £12.99 <div class="button storeAddItem">Add</div></p>
							</div>
						</div>
					
						<div class="storeItem">
							<div class="storeItemImageCont">
								
								<img class="storeItemImage" src="img/minecraftStore11.jpg">
								
							</div>
							<div class="storeItemBar">
								<p>Steve Head - £12.99 <div class="button storeAddItem">Add</div></p>
							</div>
						</div>
					
						<div class="storeItem">
							<div class="storeItemImageCont">
								
								<img class="storeItemImage" src="img/minecraftStore12.jpg">
								
							</div>
							<div class="storeItemBar">
								<p>Enderman Head - £12.99 <div class="button storeAddItem">Add</div></p>
							</div>
						</div>
					
						<div class="storeItem">
							<div class="storeItemImageCont">
								
								<img class="storeItemImage" src="img/minecraftStore13.jpg">
								
							</div>
							<div class="storeItemBar">
								<p>Creeper Face Leather Wallet - £19.99 <div class="button storeAddItem">Add</div></p>
							</div>
						</div>
					
						<div class="storeItem">
							<div class="storeItemImageCont">
								
								<img class="storeItemImage" src="img/minecraftStore14.jpg">
								
							</div>
							<div class="storeItemBar">
								<p>Creeper Face Mug - £9.99 <div class="button storeAddItem">Add</div></p>
							</div>
						</div>
					
						<div class="storeItem">
							<div class="storeItemImageCont">
								
								<img class="storeItemImage" src="img/minecraftStore15.jpg">
								
							</div>
							<div class="storeItemBar">
								<p>Special Artwork Poster - £8.99 <div class="button storeAddItem">Add</div></p>
							</div>
						</div>
					
						<div class="storeItem">
							<div class="storeItemImageCont">
								
								<img class="storeItemImage" src="img/minecraftStore16.jpg">
								
							</div>
							<div class="storeItemBar">
								<p>Creeper Pendant Necklace - £9.99 <div class="button storeAddItem">Add</div></p>
							</div>
						</div>
					
						<div class="storeItem">
							<div class="storeItemImageCont">
								
								<img class="storeItemImage" src="img/minecraftStore17.jpg">
								
							</div>
							<div class="storeItemBar">
								<p>Pickaxe Bottle Opener - £12.99 <div class="button storeAddItem">Add</div></p>
							</div>
						</div>
					
						<div class="storeItem">
							<div class="storeItemImageCont">
								
								<img class="storeItemImage" src="img/minecraftStore18.jpg">
								
							</div>
							<div class="storeItemBar">
								<p>Diamond Steve Vinyl - £19.99 <div class="button storeAddItem">Add</div></p>
							</div>
						</div>
					
						<div class="storeItem">
							<div class="storeItemImageCont">
								
								<img class="storeItemImage" src="img/minecraftStore19.jpg">
								
							</div>
							<div class="storeItemBar">
								<p>Creeper Vinyl - £19.99 <div class="button storeAddItem">Add</div></p>
							</div>
						</div>
					
						<div class="storeItem">
							<div class="storeItemImageCont">
								
								<img class="storeItemImage" src="img/minecraftStore20.jpg">
								
							</div>
							<div class="storeItemBar">
								<p>Creeper Plush Toy with Sound - £24.99 <div class="button storeAddItem">Add</div></p>
							</div>
						</div>
					</div>
					
				</div>
				
				<div id="storeGame2">
					<div id="storeItemsContainer">
						
						<div class="storeItem">
							<div class="storeItemImageCont">
								
								<img class="storeItemImage" src="img/placeholder.png">
								
							</div>
							<div class="storeItemBar">
								<p>Coming Soon</p>
							</div>
						</div>
						
						<div class="storeItem">
							<div class="storeItemImageCont">
								
								<img class="storeItemImage" src="img/placeholder.png">
								
							</div>
							<div class="storeItemBar">
								<p>Coming Soon</p>
							</div>
						</div>
						
						<div class="storeItem">
							<div class="storeItemImageCont">
								
								<img class="storeItemImage" src="img/placeholder.png">
								
							</div>
							<div class="storeItemBar">
								<p>Coming Soon</p>
							</div>
						</div>
						
						<div class="storeItem">
							<div class="storeItemImageCont">
								
								<img class="storeItemImage" src="img/placeholder.png">
								
							</div>
							<div class="storeItemBar">
								<p>Coming Soon</p>
							</div>
						</div>
						
						<div class="storeItem">
							<div class="storeItemImageCont">
								
								<img class="storeItemImage" src="img/placeholder.png">
								
							</div>
							<div class="storeItemBar">
								<p>Coming Soon</p>
							</div>
						</div>
						
						<div class="storeItem">
							<div class="storeItemImageCont">
								
								<img class="storeItemImage" src="img/placeholder.png">
								
							</div>
							<div class="storeItemBar">
								<p>Coming Soon</p>
							</div>
						</div>
						
						<div class="storeItem">
							<div class="storeItemImageCont">
								
								<img class="storeItemImage" src="img/placeholder.png">
								
							</div>
							<div class="storeItemBar">
								<p>Coming Soon</p>
							</div>
						</div>
						
						<div class="storeItem">
							<div class="storeItemImageCont">
								
								<img class="storeItemImage" src="img/placeholder.png">
								
							</div>
							<div class="storeItemBar">
								<p>Coming Soon</p>
							</div>
						</div>
						
					</div>
				</div>
				
				<div id="storeGame3">
					<div id="storeItemsContainer">
						
						<div class="storeItem">
							<div class="storeItemImageCont">
								
								<img class="storeItemImage" src="img/placeholder.png">
								
							</div>
							<div class="storeItemBar">
								<p>Coming Soon</p>
							</div>
						</div>
						
						<div class="storeItem">
							<div class="storeItemImageCont">
								
								<img class="storeItemImage" src="img/placeholder.png">
								
							</div>
							<div class="storeItemBar">
								<p>Coming Soon</p>
							</div>
						</div>
						
						<div class="storeItem">
							<div class="storeItemImageCont">
								
								<img class="storeItemImage" src="img/placeholder.png">
								
							</div>
							<div class="storeItemBar">
								<p>Coming Soon</p>
							</div>
						</div>
						
						<div class="storeItem">
							<div class="storeItemImageCont">
								
								<img class="storeItemImage" src="img/placeholder.png">
								
							</div>
							<div class="storeItemBar">
								<p>Coming Soon</p>
							</div>
						</div>
						
						<div class="storeItem">
							<div class="storeItemImageCont">
								
								<img class="storeItemImage" src="img/placeholder.png">
								
							</div>
							<div class="storeItemBar">
								<p>Coming Soon</p>
							</div>
						</div>
						
						<div class="storeItem">
							<div class="storeItemImageCont">
								
								<img class="storeItemImage" src="img/placeholder.png">
								
							</div>
							<div class="storeItemBar">
								<p>Coming Soon</p>
							</div>
						</div>
						
						<div class="storeItem">
							<div class="storeItemImageCont">
								
								<img class="storeItemImage" src="img/placeholder.png">
								
							</div>
							<div class="storeItemBar">
								<p>Coming Soon</p>
							</div>
						</div>
						
						<div class="storeItem">
							<div class="storeItemImageCont">
								
								<img class="storeItemImage" src="img/placeholder.png">
								
							</div>
							<div class="storeItemBar">
								<p>Coming Soon</p>
							</div>
						</div>
						
					</div>
				</div>
				
				<div id="storeCart">
					<div id="storeItemsContainer">
						
						<div id="storeBuyItemCont">
							<div class="button storeBuyItem">Checkout</div>
						</div>
						
					</div>
				</div>
				
			</div>
			
			<header class=".headerFixed">
				<a href="index.php"><div class="headerChild">Home</div></a>
				<a href="review.php"><div class="headerChild">Reviews</div></a>
				<a href="games.php"><div class="headerChild">Games</div></a>
				<a href="store.php"><div class="headerChild">Store</div></a>
			</header>

 		</div> <!-- CONTAINER DEEV -->
	
		<footer>
			<div id="footer">
				
			</div>
		</footer>
	
		<?php include 'php/updateSession.php' ?>
	
	</body>
</HTML>