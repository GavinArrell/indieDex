<HTML>
	<head>
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
	  	<script src="js/header.js"></script>
  	</head>
  <script>

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
			});

        };
		
    listItems.not(':first').hide();
    setInterval(changeList, change_img_time);
	
});

</script>
<style>
html, body{
	background-image:url("img/mLOQIBN - Imgur.jpg");
		  }
</style>
	<body>
		<div id="wrapper">
			
				<!--<header>
						<div class="nav">
							<div class="navContainer"><!--is transparent, so when extended whole box isn't blue
									<div class="navButton" onclick="home()">Home</div>
									<div class="navInnerContainer"><!--is blue, and smaller in width
										<div class="navInnerButton">Top</div>
										<div class="navInnerButton">Middle</div>
										<div class="navLastInnerButton">Bottom</div>
									</div>
							</div>
							<div class="navContainer">
								<div class="navButton" onclick="review()">Reviews</div>
								<div class="navInnerContainer">
									<div class="navInnerButton">Top</div>
									<div class="navInnerButton">Middle</div>
									<div class="navLastInnerButton">Bottom</div>
								</div>					
							</div>
							<div class="navContainer">
								<div class="navButton" onclick="account()">Tutorials</div>
								<div class="navInnerContainer">
									<div class="navInnerButton">Top</div>
									<div class="navInnerButton">Middle</div>
									<div class="navInnerButton">Middle</div>
									<div class="navInnerButton">Middle</div>
									<div class="navInnerButton">Middle</div>
									<div class="navLastInnerButton">Bottom</div>
								</div>
							</div>
							<div class="navContainer">
								<div class="navButton" onclick="forum()">Forum</div>
								<div class="navInnerContainer">
									<div class="navInnerButton">Top</div>
									<div class="navInnerButton">Middle</div>
									<div class="navLastInnerButton">Bottom</div>
								</div>
							</div>
						</div>
				</header>-->
				
				<!--END OF TOP TAB?-->
				<div style="margin:auto; margin-top:100px; width:80%; height:50%; text-align:center; background-color: white;">UNDER CONSTRUCTION</div>			

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