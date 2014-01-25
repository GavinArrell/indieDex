<?php
function addNews(){
if (isDev()){
	?>
		<div class="addContentBox">
			<br>
			<h3>ADD NEWS CONTENT</h3><br>
			<div class="contentMore" style="padding:5px; margin:5px;">
				
				<form action="uploadNews.php" method="post"
				enctype="multipart/form-data">
				<label for="file">Image</label>
				<input type="file" name="file" id="file"><br>
				
		
				<label for="file">Title</label><br>
   				<textarea style=" resize:none; height:16px; width:100%; margin-bottom:16px;" type="text" name="title"></textarea><br>
				
				
				<label for="file">Introduction</label><br>
   				<textarea style=" resize:none; height:100px; width:100%; margin-bottom:16px;" type="text" name="introduction"></textarea><br>
				
				
				<label for="file">Read More Section</label><br>
   				<textarea style=" resize:none; height:100px; width:100%; margin-bottom:16px;" type="text" name="more"></textarea>
   				
   				<div style="float:left; width:20%">
   					<h3>Console</h3>
   					<br>
   					<input type="checkbox" name="pc" 		value=";pc;"		>PC<br>
   					<input type="checkbox" name="mac" 		value=";mac;"		>MAC<br>
   					<input type="checkbox" name="linux" 	value=";linux;"	>Linux<br>
   					<input type="checkbox" name="ps4" 		value=";ps4;"		>PS4<br>
   					<input type="checkbox" name="ps3" 		value=";ps3;"		>PS3<br>
   					<input type="checkbox" name="xboxone" 	value=";xboxone;"	>Xbox One<br>
   					<input type="checkbox" name="xbox360"	value=";xbox360;"	>Xbox 360 <br>
   					<input type="checkbox" name="wiiu" 		value=";wiiu;"	>Wii U<br>
   					<input type="checkbox" name="wii" 		value=";wii;"		>Wii<br>
   					<input type="checkbox" name="ios" 		value=";ios;"		>IOS<br>
   					<input type="checkbox" name="android" 	value=";android;"	>Android<br>
   				</div>
   				<div style="float:left; width:20%;">
   					<h3/>Genre</h3>
   					<br>
   					<input type="checkbox" name="action" 	value=";action;"		>Action<br>
   					<input type="checkbox" name="adventure" value=";adventure;"	>Adventure<br>
   					<input type="checkbox" name="music" 	value=";music;"		>Music<br>
   					<input type="checkbox" name="mmo" 		value=";mmo;"			>MMO<br>
   					<input type="checkbox" name="puzzle" 	value=";puzzle;"		>Puzzle<br>
   					<input type="checkbox" name="rpg" 		value=";rpg;"			>RPG<br>
   					<input type="checkbox" name="shooter"	value=";shooter;"		>Shooter<br>
   					<input type="checkbox" name="sport" 	value=";sport;"		>Sport<br>
   					<input type="checkbox" name="stategy" 	value=";strategy;"	>Strategy<br>
   				</div>
   				<div style="float:left; width:20%;">
   					<h3>Release</h3>
   					<br>
   					<input type="checkbox" name="beta" value=";beta;">BETA<br>
   					<input type="checkbox" name="2014" value=";2014;">2014<br>
   					<input type="checkbox" name="2013" value=";2013;">2013<br>
   					<input type="checkbox" name="2012" value=";2012;">2012<br>
   					<input type="checkbox" name="2011" value=";2011;">2011<br>
   					<input type="checkbox" name="pre2010" value=";pre2010;">2010<br>
   				</div>
   				<div style="float:left; width:20%;">
   					<h3>Price</h3>
   					<br>£
					<textarea style="display:inline; resize:none; height:16px; width:64px;" type="text" name="price"></textarea>
					<br><br>	
					<h3>Staff Pick</h3>
					<input type="checkbox" name="staff" value="staff">Staff Pick<br>
   				</div>
   				<div style="float:left; width:20%;">
   					<h3>Star Rating</h3>
   					<br>
   					<input type="checkbox"  name="5" value="5">&#9733;&#9733;&#9733;&#9733;&#9733;<br>
   					<input type="checkbox"  name="4" value="4">&#9733;&#9733;&#9733;&#9733;<br>
   					<input type="checkbox"  name="3" value="3">&#9733;&#9733;&#9733;<br>
   					<input type="checkbox"  name="2" value="2">&#9733;&#9733;<br>
   					<input type="checkbox"  name="1" value="1">&#9733;<br>
   				</div>  <br>				
				<div style="clear: both;"><br><br><input type="submit" name="submit" value="Submit">
				</form>
				</div>
			</div>
			<p class="readMore">Read More</p>
		</div>
	<?php
	return;
}else{return false;}
}
function addReviews(){
if (isDev()){
	?>
		<div class="addContentBox">
			<br>
			<h3>ADD REVIEW CONTENT</h3><br>
			<div class="contentMore" style="padding:5px; margin:5px;">
				
				<form action="uploadReviews.php" method="post"
				enctype="multipart/form-data">
				<label for="file">Image</label>
				<input type="file" name="file" id="file"><br>
				
		
				<label for="file">Title</label><br>
   				<textarea style=" resize:none; height:16px; width:100%; margin-bottom:16px;" type="text" name="title"></textarea><br>
				
				
				<label for="file">Introduction</label><br>
   				<textarea style=" resize:none; height:100px; width:100%; margin-bottom:16px;" type="text" name="introduction"></textarea><br>
				
				
				<label for="file">Read More Section</label><br>
   				<textarea style=" resize:none; height:100px; width:100%; margin-bottom:16px;" type="text" name="more"></textarea>
   				
   				<div style="float:left; width:20%">
   					<h3>Console</h3>
   					<br>
   					<input type="checkbox" name="pc" 		value=";pc;"		>PC<br>
   					<input type="checkbox" name="mac" 		value=";mac;"		>MAC<br>
   					<input type="checkbox" name="linux" 	value=";linux;"	>Linux<br>
   					<input type="checkbox" name="ps4" 		value=";ps4;"		>PS4<br>
   					<input type="checkbox" name="ps3" 		value=";ps3;"		>PS3<br>
   					<input type="checkbox" name="xboxone" 	value=";xboxone;"	>Xbox One<br>
   					<input type="checkbox" name="xbox360"	value=";xbox360;"	>Xbox 360 <br>
   					<input type="checkbox" name="wiiu" 		value=";wiiu;"	>Wii U<br>
   					<input type="checkbox" name="wii" 		value=";wii;"		>Wii<br>
   					<input type="checkbox" name="ios" 		value=";ios;"		>IOS<br>
   					<input type="checkbox" name="android" 	value=";android;"	>Android<br>
   				</div>
   				<div style="float:left; width:20%;">
   					<h3/>Genre</h3>
   					<br>
   					<input type="checkbox" name="action" 	value=";action;"		>Action<br>
   					<input type="checkbox" name="adventure" value=";adventure;"	>Adventure<br>
   					<input type="checkbox" name="music" 	value=";music;"		>Music<br>
   					<input type="checkbox" name="mmo" 		value=";mmo;"			>MMO<br>
   					<input type="checkbox" name="puzzle" 	value=";puzzle;"		>Puzzle<br>
   					<input type="checkbox" name="rpg" 		value=";rpg;"			>RPG<br>
   					<input type="checkbox" name="shooter"	value=";shooter;"		>Shooter<br>
   					<input type="checkbox" name="sport" 	value=";sport;"		>Sport<br>
   					<input type="checkbox" name="stategy" 	value=";strategy;"	>Strategy<br>
   				</div>
   				<div style="float:left; width:20%;">
   					<h3>Release</h3>
   					<br>
   					<input type="checkbox" name="beta" value=";beta;">BETA<br>
   					<input type="checkbox" name="2014" value=";2014;">2014<br>
   					<input type="checkbox" name="2013" value=";2013;">2013<br>
   					<input type="checkbox" name="2012" value=";2012;">2012<br>
   					<input type="checkbox" name="2011" value=";2011;">2011<br>
   					<input type="checkbox" name="pre2010" value=";pre2010;">2010<br>
   				</div>
   				<div style="float:left; width:20%;">
   					<h3>Price</h3>
   					<br>£
					<textarea style="display:inline; resize:none; height:16px; width:64px;" type="text" name="price"></textarea>
					<br><br>	
					<h3>Staff Pick</h3>
					<input type="checkbox" name="staff" value="staff">Staff Pick<br>
   				</div>
   				<div style="float:left; width:20%;">
   					<h3>Star Rating</h3>
   					<br>
   					<input type="checkbox"  name="5" value="5">&#9733;&#9733;&#9733;&#9733;&#9733;<br>
   					<input type="checkbox"  name="4" value="4">&#9733;&#9733;&#9733;&#9733;<br>
   					<input type="checkbox"  name="3" value="3">&#9733;&#9733;&#9733;<br>
   					<input type="checkbox"  name="2" value="2">&#9733;&#9733;<br>
   					<input type="checkbox"  name="1" value="1">&#9733;<br>
   				</div>  <br>				
				<div style="clear: both;"><br><br><input type="submit" name="submit" value="Submit">
				</form>
				</div>
			</div>
			<p class="readMore">Read More</p>
		</div>
	<?php
	return;
}else{return false;}
}
function addGames(){
if (isDev()){
	?>
		<div class="addContentBox">
			<br>
			<h3>ADD GAMES CONTENT</h3><br>
			<div class="contentMore" style="padding:5px; margin:5px;">
				
				<form action="uploadGames.php" method="post"
				enctype="multipart/form-data">
				<label for="file">Image</label>
				<input type="file" name="file" id="file"><br>
				
		
				<label for="file">Title</label><br>
   				<textarea style=" resize:none; height:16px; width:100%; margin-bottom:16px;" type="text" name="title"></textarea><br>
				
				
				<label for="file">Introduction</label><br>
   				<textarea style=" resize:none; height:100px; width:100%; margin-bottom:16px;" type="text" name="introduction"></textarea><br>
				
				
				<label for="file">Read More Section</label><br>
   				<textarea style=" resize:none; height:100px; width:100%; margin-bottom:16px;" type="text" name="more"></textarea>
   				
   				<div style="float:left; width:20%">
   					<h3>Console</h3>
   					<br>
   					<input type="checkbox" name="pc" 		value=";pc;"		>PC<br>
   					<input type="checkbox" name="mac" 		value=";mac;"		>MAC<br>
   					<input type="checkbox" name="linux" 	value=";linux;"	>Linux<br>
   					<input type="checkbox" name="ps4" 		value=";ps4;"		>PS4<br>
   					<input type="checkbox" name="ps3" 		value=";ps3;"		>PS3<br>
   					<input type="checkbox" name="xboxone" 	value=";xboxone;"	>Xbox One<br>
   					<input type="checkbox" name="xbox360"	value=";xbox360;"	>Xbox 360 <br>
   					<input type="checkbox" name="wiiu" 		value=";wiiu;"	>Wii U<br>
   					<input type="checkbox" name="wii" 		value=";wii;"		>Wii<br>
   					<input type="checkbox" name="ios" 		value=";ios;"		>IOS<br>
   					<input type="checkbox" name="android" 	value=";android;"	>Android<br>
   				</div>
   				<div style="float:left; width:20%;">
   					<h3/>Genre</h3>
   					<br>
   					<input type="checkbox" name="action" 	value=";action;"		>Action<br>
   					<input type="checkbox" name="adventure" value=";adventure;"	>Adventure<br>
   					<input type="checkbox" name="music" 	value=";music;"		>Music<br>
   					<input type="checkbox" name="mmo" 		value=";mmo;"			>MMO<br>
   					<input type="checkbox" name="puzzle" 	value=";puzzle;"		>Puzzle<br>
   					<input type="checkbox" name="rpg" 		value=";rpg;"			>RPG<br>
   					<input type="checkbox" name="shooter"	value=";shooter;"		>Shooter<br>
   					<input type="checkbox" name="sport" 	value=";sport;"		>Sport<br>
   					<input type="checkbox" name="stategy" 	value=";strategy;"	>Strategy<br>
   				</div>
   				<div style="float:left; width:20%;">
   					<h3>Release</h3>
   					<br>
   					<input type="checkbox" name="beta" value=";beta;">BETA<br>
   					<input type="checkbox" name="2014" value=";2014;">2014<br>
   					<input type="checkbox" name="2013" value=";2013;">2013<br>
   					<input type="checkbox" name="2012" value=";2012;">2012<br>
   					<input type="checkbox" name="2011" value=";2011;">2011<br>
   					<input type="checkbox" name="pre2010" value=";pre2010;">2010<br>
   				</div>
   				<div style="float:left; width:20%;">
   					<h3>Price</h3>
   					<br>£
					<textarea style="display:inline; resize:none; height:16px; width:64px;" type="text" name="price"></textarea>
					<br><br>	
					<h3>Staff Pick</h3>
					<input type="checkbox" name="staff" value="staff">Staff Pick<br>
   				</div>
   				<div style="float:left; width:20%;">
   					<h3>Star Rating</h3>
   					<br>
   					<input type="checkbox"  name="5" value="5">&#9733;&#9733;&#9733;&#9733;&#9733;<br>
   					<input type="checkbox"  name="4" value="4">&#9733;&#9733;&#9733;&#9733;<br>
   					<input type="checkbox"  name="3" value="3">&#9733;&#9733;&#9733;<br>
   					<input type="checkbox"  name="2" value="2">&#9733;&#9733;<br>
   					<input type="checkbox"  name="1" value="1">&#9733;<br>
   				</div>  <br>				
				<div style="clear: both;"><br><br><input type="submit" name="submit" value="Submit">
				</form>
				</div>
			</div>
			<p class="readMore">Read More</p>
		</div>
	<?php
	return;
}else{return false;}
}


?>