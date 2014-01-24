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
		
		<!-- SCRIPTS -->
		<script src="js/libs/jquery-1.6.2.js"></script>
	  	<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
	  	<script src="js/mylibs/prototypes.js"></script>
	  	
	  	<script src="js/header.js"></script>
	  	<script src="js/displayLogic.js"></script>
	  	<script src="js/expandContent.js"></script>
  	</head>
  	
  <script>
  $(function() {
    $( "#menu" ).menu();
  });
  function home(){
  	window.location = 'index.php';
  }
  function review(){
  	window.location = 'review.php';
  }
  function account(){
  	window.location = 'account.php';
  }
  function forum(){
  	window.location = 'forum.php';
  }
  
  //---------- SLIDESHOW
  $(function () {
    
    var change_img_time 	= 10000;	
    var transition_speed	= 500;
    
    var simple_slideshow	= $("#exampleSlider"),
        listItems 			= simple_slideshow.children('li'),
        listLen				= listItems.length,
        i 					= 0,
		
        changeList = function () {
		
			listItems.eq(i).fadeOut(transition_speed, function () {
				i += 1;
				if (i === listLen) {
					i = 0;
				}
				listItems.eq(i).fadeIn(transition_speed);
				return false;
				event.preventDefault();
			});

        };
	//listItem.not(':first').style("display:none;");	
	setInterval(changeList, change_img_time);
    listItems.not(':first').hide();
    
    return false;
	event.preventDefault();
});



</script>
<style>
html, body{
	background-image:url("img/mLOQIBN - Imgur.jpg");
		  }
</style>
	<body>
		<div id="wrapper">
			
	
				<!--END OF TOP TAB?-->
			

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
 														<img src="img/Digital-Abstract-HD-Background.jpg">
 														</div>
 														<div id="accountDetails">
 														<h3>';echo $_SESSION['username']; echo'</h3>
 														</div>
 						
 														<div class="clear" id="accountInfo">
 														<h3>My Bio</h3>
	 													<p>';echo $_SESSION['bio']; echo'</p><br/>
	 													<!--<div><h3>Games:</h3></div><br/>
	 													<div><h3>Wishlist:</h3></div><br/>-->
	 													<div><h3>Karma: ';echo $_SESSION['karma']; echo'</h3></div><br>
	 													<a href="logout.php">Logout</a><br>
	 													</div>';
												}
												else {
													include 'loginform.inc.php';
												}
								?> 
	 					</div>
 					</div>
 				
 				<div class="rightContainer">
 					
 					
 					<div id="slideshow">
 						<style> p{text-decoration: none}</style>
 						<ul id="exampleSlider">
   							<li><img src="img/IndieGameTheMovieRelease.jpg" alt="" />
   							<div class="slideshowTabs">	

   								<a href="http://buy.indiegamethemovie.com/"><div class="innerSlideshowTabsDark">Indie Game</div></a>
   								<a href="https://minecraft.net/"><div class="innerSlideshowTabs">Minecraft</div></a>
								<a href="http://fezgame.com/"><div class="innerSlideshowTabs">Fez</div></a>
								<a href="https://kerbalspaceprogram.com/"><div class="innerSlideshowTabs">Kerbal Space Program</div></a>
								
							</div>
   							</li>
   							<li><img src="img/minecraftSlideShow.png" alt="" />
   							<div class="slideshowTabs">
   								
   								<a href="http://buy.indiegamethemovie.com/"><div class="innerSlideshowTabs">Indie Game</div></a>
   								<a href="https://minecraft.net/"><div class="innerSlideshowTabsDark">Minecraft</div></a>
								<a href="http://fezgame.com/"><div class="innerSlideshowTabs">Fez</div></a>
								<a href="https://kerbalspaceprogram.com/"><div class="innerSlideshowTabs">Kerbal Space Program</div></a>
								
							</div>
   							</li>
   							<li><img src="img/fez.png" alt="" />
   								<div class="slideshowTabs">
   									
   								<a href="http://buy.indiegamethemovie.com/"><div class="innerSlideshowTabs">Indie Game</div></a>
   								<a href="https://minecraft.net/"><div class="innerSlideshowTabs">Minecraft</div></a>
								<a href="http://fezgame.com/"><div class="innerSlideshowTabsDark">Fez</div></a>
								<a href="https://kerbalspaceprogram.com/"><div class="innerSlideshowTabs">Kerbal Space Program</div></a>
								
							</div>
   							</li>
    						<li><img src="img/kerbal.png" alt="" />
    							<div class="slideshowTabs">
    								
   								<a href="http://buy.indiegamethemovie.com/"><div class="innerSlideshowTabs">Indie Game</div></a>
   								<a href="https://minecraft.net/"><div class="innerSlideshowTabs">Minecraft</div></a>
								<a href="http://fezgame.com/"><div class="innerSlideshowTabs">Fez</div></a>
								<a href="https://kerbalspaceprogram.com/"><div class="innerSlideshowTabsDark">Kerbal Space Program</div></a>
								
							</div>
    						</li>
						</ul>

 					</div>
 					</div>
 					<div id="rightContainerTwo">						
 					<div id="contentContainer">
 						
 						<!--FEZ-------------------------->
 						
 	 					<div class="contentBoxContainer">
 	 						<div class="contentBoxPicture"><img src="img/fez.png"/></div>
							
							<div class="contentBoxText">
	 	 						<h2>FEZ</h2>
	 	 						<p>A 2D platform game with a twist! In a world where everything is flat, one fez wearing hero discovers the third demension and an adventure unfolds!</p>
	 	 					</div>
	 	 					
 	 						<div class="contentMore">
 	 							<p>
							       	Fez (stylized as FEZ) is a 2012 puzzle platform game developed by indie developer Polytron Corporation and produced by Polytron, Trapdoor, and Microsoft Studios. It is a 2D game set in a 3D world, as the two-dimensional player-character receives a fez that reveals a third dimension and consequently tears the fabric of his universe. Fez\'s puzzles are built around the core mechanic of rotating between four 2D views of a 3D space, as four sides around a cube, where the environment realigns between views to create new paths.
									The game was an "underdog darling of the indie game scene" during its high-profile and protracted five-year development cycle. Fez designer and Polytron founder Phil Fish received celebrity for his outspoken public persona and prominence in the 2012 documentary Indie Game: The Movie, which followed the game\'s final stages of development and Polytron\'s related legal issues. The game was released as a yearlong Xbox Live Arcade exclusive on April 13, 2012 to critical acclaim, and was later ported to other platforms.
									Fez won several awards, including the 2012 Independent Games Festival\'s Grand Prize, 2011 Indiecade's Best in Show and Best Story/World Design, and 2008 Independent Games Festival\'s Excellence in Visual Art. It was Eurogamer\'s 2012 Game of the Year. Fez had sold one million copies by the end of 2013. A sequel was planned, but was later canceled as Fish abruptly left the industry.
								</p>
 	 						</div>
 	 						<p class="readMore">Read More</p>
	 					</div>
	 					
						<!--MINECRAFT--------------------->				

 	 					<div class="contentBoxContainer">
 	 						<div class="contentBoxPicture"><img src="img/minecraft.png"/></div>
							
							<div class="contentBoxText">
	 	 						<h2>MINECRAFT</h2>
	 	 						<p>A 3D voxel based sandox game! The most successful indie game in the world, with over 10 million copies sold on PC alone!	 	 					</p>
	 	 					</div>
	 	 					
 	 						<div class="contentMore">
 	 							<p>Minecraft is a sandbox indie game originally created by Swedish programmer Markus "Notch" Persson and later developed and published by Mojang. It was publicly released for the PC on May 17, 2009, as a developmental alpha version and, after gradual updates, was published as a full release version on November 18, 2011. A version for Android was released a month earlier on October 7, and an iOS version was released on November 17, 2011. On May 9, 2012, the game was released on Xbox 360 as an Xbox Live Arcade game, co-developed by 4J Studios. All versions of Minecraft receive periodic updates.
								The creative and building aspects of Minecraft allow players to build constructions out of textured cubes in a 3D procedurally generated world. Other activities in the game include exploration, gathering resources, crafting, and combat. Gameplay in its commercial release has two principal modes: survival, which requires players to acquire resources and maintain their health and hunger; and creative, where players have an unlimited supply of resources, the ability to fly, and no health or hunger. A third gameplay mode named hardcore is the same as survival, differing only in difficulty; it is set to the most difficult setting and respawning is disabled, forcing players to delete their worlds upon death.
								Minecraft received five awards from the 2011 Game Developers Conference: it was awarded the Innovation Award, Best Downloadable Game Award, and the Best Debut Game Award from the Game Developers Choice Awards; and the Audience Award, as well as the Seumas McNally Grand Prize, from the Independent Games Festival in 2011. In 2012, Minecraft was awarded a Golden Joystick Award in the category Best Downloadable Game. As of October 23, 2013, the game has sold over 12.5 million copies on PC, and over 33 million copies across all platforms.
							    </p>
 	 						</div>
 	 						<p class="readMore">Read More</p>
	 					</div>
						<!--STARBOUND-------------------->
 	 					
 	 					<div class="contentBoxContainer">
 	 						<div class="contentBoxPicture"><img src="img/starbound.png"/></div>
							
							<div class="contentBoxText">
	 	 						<h2>STARBOUND</h2>
	 	 						<p>A 2D voxel based platformer. This game is in beta, the user can play as many different alien species and explore the galaxy!
	 	 						</p>
	 	 	 					</div>
	 	 					
 	 						<div class="contentMore">
 	 							<p>Starbound is an indie game being produced by the UK-based independent game studio Chucklefish Ltd. Starbound takes place in a two-dimensional, procedurally generated universe which the player will explore in order to obtain new weapons, armor, and miscellaneous items. Starbound entered beta testing on December 4, 2013 for Microsoft Windows, OS X and Linux.
							    </p>
 	 						</div>
 	 						<p class="readMore">Read More</p>
	 					</div>
				
						<!--DAYZ-------------------->

 	 					<div class="contentBoxContainer">
 	 						<div class="contentBoxPicture"><img src="img/dayz.png"/></div>
							
							<div class="contentBoxText">
	 	 						<h2>DAYZ</h2>
	 	 						<p>Everyone\'s favourite ARMA 2 mod is going standalone! The mod which turned ARMA 2 into a zombie survival game with a cult following is now being developed as a full game.	 	 						
	 	 						</p>
	 	 	 					</div>
	 	 					
 	 						<div class="contentMore">
 	 							<p>DayZ is a multiplayer open world survival horror video game in development by Bohemia Interactive and the stand-alone version of the award-winning mod of the same name. The game was test-released on December 16, 2013 for Microsoft Windows via digital distribution platform Steam, and is currently in early alpha testing.
								The game places the player in the fictional post-Soviet state of Chernarus, where an unknown virus has turned most of the population into violent zombies. As a survivor, the player must scavenge the world for food, water, weapons, and medicine, while killing or avoiding zombies, and killing, avoiding or co-opting other players in an effort to survive the zombie apocalypse.
								DayZ began development in 2012 when the mod\'s creator, Dean Hall, joined Bohemia Interactive to work on it. The development has been focused on altering the engine to suit the game\'s needs, developing a working client-server architecture, and introducing new features like diseases and a better inventory system. The game has sold over 1 million copies since its alpha release.

 	 						    </p>
 	 						</div>
 	 						<p class="readMore">Read More</p>
	 					</div>

						<!--SPELUNKY-------------->

 	 					<div class="contentBoxContainer">
 	 						<div class="contentBoxPicture"><img src="img/spelunky.png"/></div>
							
							<div class="contentBoxText">
	 	 						<h2>SPELUNKY</h2>
	 	 						<p>A fast-paced, addicting 2D platform mining adventure game provides in depth puzzles, a great soundtrack and hours of entertainment!
 	 	 	 					</p>
	 	 	 					</div>
	 	 					
 	 						<div class="contentMore">
 	 							<p>Spelunky is an indie action-adventure game created by Derek Yu and released as freeware for Microsoft Windows (with two unofficial ports to Mac OS X). It was then remade for the Xbox 360, with ports to the PlayStation 3, PlayStation Vita and then back to Microsoft Windows. The player controls a spelunker who explores a series of caves while collecting treasure, saving damsels, and dodging traps. The first public release was on December 21, 2008. The source code of the 2008 Windows version was released on December 25, 2009. An enhanced version for Xbox Live Arcade was released on July 4, 2012. The enhanced edition was also released on PC on August 8, 2013 and for PlayStation 3 on August 27 and 28, 2013.
 	 						    </p>
 	 						</div>
 	 						<p class="readMore">Read More</p>
	 					</div>

						<!--JOURNEY-------------->

 	 					<div class="contentBoxContainer">
 	 						<div class="contentBoxPicture"><img src="img/journey.png"/></div>
							
							<div class="contentBoxText">
	 	 						<h2>JOURNEY</h2>
	 	 						<p>A short game filled with quirks. Journey has a completely different multiplayer system than ever seen before, and with such a well written soundtrack, journey will have you wanting more.
 	 	 	 					</p>
	 	 	 					</div>
	 	 					
 	 						<div class="contentMore">
 	 							<p>Journey is an indie video game developed by Thatgamecompany for the PlayStation 3. It was released on March 13, 2012, via the PlayStation Network. In Journey, the player controls a robed figure in a vast desert, traveling towards a mountain in the distance. Other players on the same journey can be discovered, and two players can meet and assist each other, but they cannot communicate via speech or text and cannot see each other\'s names. The only form of communication between the two is a musical chime. This chime also transforms dull, stiff pieces of cloth found throughout the levels into vibrant red, affecting the game world and allowing the player to progress through the levels. The robed figure wears a trailing scarf, which when charged by approaching floating pieces of cloth, briefly allows the player to float through the air.
								The developers sought to evoke in the player a sense of smallness and wonder, and to forge an emotional connection between them and the anonymous players they meet along the way. The music, composed by Austin Wintory, dynamically responds to the player\'s actions, building a single theme to represent the game\'s emotional arc throughout the story. Reviewers of the game praised the visual and auditory art as well as the sense of companionship created by playing with a stranger, calling it a moving and emotional experience. Journey won several "game of the year" awards and received several other awards and nominations, including a Best Score Soundtrack for Visual Media nomination for the 2013 Grammy Awards. A retail "Collector\'s Edition", including Journey, Thatgamecompany\'s two previous titles, and additional media, was released on August 28, 2012.	 	 						   
								</p>
 	 						</div>
 	 						<p class="readMore">Read More</p>
	 					</div>
	 						
						<!--QUANTUM CONUNDRUM--->

	 					<div class="contentBoxContainer">
 	 						<div class="contentBoxPicture"><img src="img/quantum.png"/></div>
							
							<div class="contentBoxText">
	 	 						<h2>QUANTUM CONUNDRUM</h2>
	 	 						<p>
	 	 							A game with a unique artstyle, go through the levels and bend the laws of physics to complete puzzles
	 	 						</p>
	 	 	 					</div>
	 	 					
 	 						<div class="contentMore">
 	 							<p>Quantum Conundrum is a puzzle-platformer video game developed by Airtight Games and published by Square Enix. It was directed by Kim Swift, who formerly worked at Valve as a lead designer on the critically acclaimed Portal. The game was released downloadably on Microsoft Windows on June 21, 2012, July 10, 2012 on PlayStation 3 and July 11, 2012 on Xbox 360.</p>
 	 						</div>
 	 						<p class="readMore">Read More</p>
	 					</div>

						<!--RETRO CITY RAMPAGE--->

	 					<div class="contentBoxContainer">
 	 						<div class="contentBoxPicture"><img src="img/retro.png"/></div>
							
							<div class="contentBoxText">
	 	 						<h2>RETRO CITY RAMPAGE</h2>
	 	 						<p>
	 	 							A game created to feel like an 80s arcade game. Players will find this game super addictive and quietly hilarious!				
	 	 						</p>
	 	 	 					</div>
	 	 					
 	 						<div class="contentMore">
 	 							<p>Retro City Rampage is a downloadable action-adventure video game for WiiWare, Xbox Live Arcade, PlayStation Network and Microsoft Windows developed by Vblank Entertainment. It is a parody of retro games and 80s and 90s pop culture as well as the popular Grand Theft Auto series and the games that followed it. It was released on October 9, 2012 for PlayStation 3, PlayStation Vita, Microsoft Windows, and on January 2, 2013 for Xbox Live Arcade, and on February 28, 2013 for WiiWare. Retro City Rampage was the last original game released for the WiiWare service globally until Deer Drive Legends was ported to the service the following November.
									The game is due to be released for the Nintendo 3DS via its Nintendo eShop during the first quarter of 2014.
 	 							</p>
 	 							</div>
 	 						<p class="readMore">Read More</p>
	 					</div>
	 	
	 					<!--CHIVALRY--->

	 					<div class="contentBoxContainer">
 	 						<div class="contentBoxPicture"><img src="img/chivalry.png"/></div>
							
							<div class="contentBoxText">
	 	 						<h2>CHIVALRY</h2>
	 	 						<p>
	 	 							Imagine Call of Duty in the 1700s! This game is full of action, blood and a variety of gamemodes so you\'ll never get bored!
	 	 						</p>
	 	 	 					</div>
	 	 					
 	 						<div class="contentMore">
 	 							<p>Chivalry: Medieval Warfare is a multiplayer action video game developed by Torn Banner Studios as their first commercial title. The game is set in a fictional world resembling the Middle Ages and offers similar gameplay combat to the developer\'s previously released Half-Life 2 mod, Age of Chivalry. On September 20, 2012 a trailer was released which set the release date to October 16, 2012. The developers had confirmed that the game would be PC exclusive, though they stated the possibility of console versions if the interest were great enough. An expansion pack called Chivalry: Deadliest Warrior was announced on August 23, 2013. It\'s a tie-in for the television series Deadliest Warrior.
  								</p>
 	 							</div>
 	 						<p class="readMore">Read More</p>
	 					</div>

	 					 	
	 					 	
	 					 	
	 					 	
	 					 	<br>			
	 				</div>
	 				
	 				
	 				
	 					
	 				<div id="rightSidebarContainer">
	 					<div id="rightSidebar">
	 						<br>
	 						<h3>Console</h3>
	 						<br/>
		 					<input class="checkboxFilter" type="checkbox" name="Console" value="PC">PC<br>
							<input class="checkboxFilter" type="checkbox" name="Console" value="Mac">Mac<br>
							<input class="checkboxFilter" type="checkbox" name="Console" value="Linux">Linux<br>
							<input class="checkboxFilter" type="checkbox" name="Console" value="PS4">PS4<br>
							<input class="checkboxFilter" type="checkbox" name="Console" value="PS3">PS3<br>
							<input class="checkboxFilter" type="checkbox" name="Console" value="Xbox One">Xbox One<br>
							<input class="checkboxFilter" type="checkbox" name="Console" value="Xbox 360">Xbox 360<br>
							<input class="checkboxFilter" type="checkbox" name="Console" value="Wii U">Wii U<br>
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
							<input class="checkboxFilter" type="checkbox" name="Release" value="2013">2013<br>
							<input class="checkboxFilter" type="checkbox" name="Release" value="2012">2012<br>
							<input class="checkboxFilter" type="checkbox" name="Release" value="2011">2011<br>
							<input class="checkboxFilter" type="checkbox" name="Release" value="2010">2010<br>
							<input class="checkboxFilter" type="checkbox" name="Release" value="2009-">2009-<br><br>
							<h3>Star Rating</h3>
							<br/>
							<input class="checkboxFilter" type="checkbox" name="Rating" value="5Stars">&#9733;&#9733;&#9733;&#9733;&#9733;<br>
							<input class="checkboxFilter" type="checkbox" name="Rating" value="4Stars">&#9733;&#9733;&#9733;&#9733;<br>
							<input class="checkboxFilter" type="checkbox" name="Rating" value="3Stars">&#9733;&#9733;&#9733;<br>
							<input class="checkboxFilter" type="checkbox" name="Rating" value="2Stars">&#9733;&#9733;<br>
							<input class="checkboxFilter" type="checkbox" name="Rating" value="1Stars">&#9733;<br><br>
							<h3>Price</h3>
							<br/>
							<input class="checkboxFilter" type="checkbox" name="Price" value="£25.00+">£25.00<br>
							<input class="checkboxFilter" type="checkbox" name="Price" value="£25.00-£15.00">£25.00-£15.00<br>
							<input class="checkboxFilter" type="checkbox" name="Price" value="£15.00-">£15.00-<br>
							<input class="checkboxFilter" type="checkbox" name="Price" value="Free">Free<br>
							
							
							
							
							
							
							
							
							
		 				</div>
		 			</div>

 				
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
 				
 				<a href="account.php"><div class="headerChild">Account
 					<div class="headerGrandchild">
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
 	</div>			
	</body>
</HTML>