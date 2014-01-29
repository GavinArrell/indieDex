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
				<input type="file" name="file" id="file"><br><br>
				
		
				<label for="file">Title</label><br>
   				<textarea style=" resize:none; height:24px; width:100%; margin-bottom:16px;" type="text" name="title"></textarea><br>
				
				
				<label for="file">Introduction</label><br>
   				<textarea style=" resize:none; height:100px; width:100%; margin-bottom:16px;" type="text" name="introduction"></textarea><br>
				<div style="height:300px; overflow-y:auto;">
				<label for="file">Read More Section</label><br><br>
   				
				<textarea id="text" style=" resize:none; height:24px; width:95%; margin-bottom:16px;"></textarea>
				<br>
				<button type="button" onclick="add(1)">Add Title</button>
				<button type="button" onclick="add(2)">Add Paragraph</button>
				<button type="button" onclick="add(3)">Add Youtube Video</button>
				<div id="textOutFinal" style="width:575px;"></div>
				<textarea name="content" id="textOut" style="resize:none; display:none;"></textarea>
				<script>
				    var content = new Array();
				    var x = 0;
				
				    function add(x) {
				        i = content.length;
				        switch (x){
				        case 1:
				            content[i] = "<h2>";
				            content[i] += document.getElementById("text").value;
				            content[i] += "</h2>";
				            break;
				        case 2:
				            content[i] = "<p>";
				            content[i] += document.getElementById("text").value;
				            content[i] += "</p>";
				            break;
				        case 3:
				            content[i] = document.getElementById("text").value;
				            break;
				        }    
				        document.getElementById('textOutFinal').innerHTML = content.join('');
				        document.getElementById('textOut').value = content.join('');
				    }
				</script>
   				</div>
   				
   				
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
				<input type="file" name="file" id="file"><br><br>
				
		
				<label for="file">Title</label><br>
   				<textarea style=" resize:none; height:24px; width:100%; margin-bottom:16px;" type="text" name="title"></textarea><br>
				
				
				<label for="file">Introduction</label><br>
   				<textarea style=" resize:none; height:100px; width:100%; margin-bottom:16px;" type="text" name="introduction"></textarea><br>
				
				<div style="height:300px; overflow-y:auto;">
				<label for="file">Read More Section</label><br><br>
   				
   				<label for="file">Title</label><br>
   				<textarea style=" resize:none; height:24px; width:100%; margin-bottom:16px;" type="text" name="title1"></textarea><br>
				<label for="file">Paragraph</label><br>
   				<textarea style=" resize:none; height:100px; width:100%; margin-bottom:16px;" type="text" name="introduction1"></textarea><br>
   				
   				
   				<label for="file">Title</label><br>
   				<textarea style=" resize:none; height:24px; width:100%; margin-bottom:16px;" type="text" name="title2"></textarea><br>
				<label for="file">Paragraph</label><br>
   				<textarea style=" resize:none; height:100px; width:100%; margin-bottom:16px;" type="text" name="introduction2"></textarea><br>
   				
   				 
   				<label for="file">Title</label><br>
   				<textarea style=" resize:none; height:24px; width:100%; margin-bottom:16px;" type="text" name="title3"></textarea><br>
				<label for="file">Paragraph</label><br>
   				<textarea style=" resize:none; height:100px; width:100%; margin-bottom:16px;" type="text" name="introduction3"></textarea><br>
   				
   				   				
   				<label for="file">Title</label><br>
   				<textarea style=" resize:none; height:24px; width:100%; margin-bottom:16px;" type="text" name="title4"></textarea><br>
				<label for="file">Paragraph</label><br>
   				<textarea style=" resize:none; height:100px; width:100%; margin-bottom:16px;" type="text" name="introduction4"></textarea><br>
   				
   				 
   				<label for="file">Title</label><br>
   				<textarea style=" resize:none; height:24px; width:100%; margin-bottom:16px;" type="text" name="title5"></textarea><br>
				<label for="file">Paragraph</label><br>
   				<textarea style=" resize:none; height:100px; width:100%; margin-bottom:16px;" type="text" name="introduction5"></textarea><br>
   				
   				   				
   				<label for="file">Title</label><br>
   				<textarea style=" resize:none; height:24px; width:100%; margin-bottom:16px;" type="text" name="title6"></textarea><br>
				<label for="file">Paragraph</label><br>
   				<textarea style=" resize:none; height:100px; width:100%; margin-bottom:16px;" type="text" name="introduction6"></textarea><br>
   				   				
   				   				
   				<label for="file">Title</label><br>
   				<textarea style=" resize:none; height:24px; width:100%; margin-bottom:16px;" type="text" name="title7"></textarea><br>
				<label for="file">Paragraph</label><br>
   				<textarea style=" resize:none; height:100px; width:100%; margin-bottom:16px;" type="text" name="introduction7"></textarea><br>
   				   				
   				   				
   				<label for="file">Title</label><br>
   				<textarea style=" resize:none; height:24px; width:100%; margin-bottom:16px;" type="text" name="title8"></textarea><br>
				<label for="file">Paragraph</label><br>
   				<textarea style=" resize:none; height:100px; width:100%; margin-bottom:16px;" type="text" name="introduction8"></textarea><br>
   				   				
   				   				
   				<label for="file">Title</label><br>
   				<textarea style=" resize:none; height:24px; width:100%; margin-bottom:16px;" type="text" name="title9"></textarea><br>
				<label for="file">Paragraph</label><br>
   				<textarea style=" resize:none; height:100px; width:100%; margin-bottom:16px;" type="text" name="introduction9"></textarea><br>
   				   				
   				   				
   				<label for="file">Title</label><br>
   				<textarea style=" resize:none; height:24px; width:100%; margin-bottom:16px;" type="text" name="title10"></textarea><br>
				<label for="file">Paragraph</label><br>
   				<textarea style=" resize:none; height:100px; width:100%; margin-bottom:16px;" type="text" name="introduction10"></textarea><br>
   				</div>
   				
   				
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
				<input type="file" name="file" id="file"><br><br>
				
		
				<label for="file">Title</label><br>
   				<textarea style=" resize:none; height:24px; width:100%; margin-bottom:16px;" type="text" name="title"></textarea><br>
				
				
				<label for="file">Introduction</label><br>
   				<textarea style=" resize:none; height:100px; width:100%; margin-bottom:16px;" type="text" name="introduction"></textarea><br>
				
				<div style="height:300px; overflow-y:auto;">
				<label for="file">Read More Section</label><br><br>
   				
   				<label for="file">Title</label><br>
   				<textarea style=" resize:none; height:24px; width:100%; margin-bottom:16px;" type="text" name="title1"></textarea><br>
				<label for="file">Paragraph</label><br>
   				<textarea style=" resize:none; height:100px; width:100%; margin-bottom:16px;" type="text" name="introduction1"></textarea><br>
   				
   				
   				<label for="file">Title</label><br>
   				<textarea style=" resize:none; height:24px; width:100%; margin-bottom:16px;" type="text" name="title2"></textarea><br>
				<label for="file">Paragraph</label><br>
   				<textarea style=" resize:none; height:100px; width:100%; margin-bottom:16px;" type="text" name="introduction2"></textarea><br>
   				
   				 
   				<label for="file">Title</label><br>
   				<textarea style=" resize:none; height:24px; width:100%; margin-bottom:16px;" type="text" name="title3"></textarea><br>
				<label for="file">Paragraph</label><br>
   				<textarea style=" resize:none; height:100px; width:100%; margin-bottom:16px;" type="text" name="introduction3"></textarea><br>
   				
   				   				
   				<label for="file">Title</label><br>
   				<textarea style=" resize:none; height:24px; width:100%; margin-bottom:16px;" type="text" name="title4"></textarea><br>
				<label for="file">Paragraph</label><br>
   				<textarea style=" resize:none; height:100px; width:100%; margin-bottom:16px;" type="text" name="introduction4"></textarea><br>
   				
   				 
   				<label for="file">Title</label><br>
   				<textarea style=" resize:none; height:24px; width:100%; margin-bottom:16px;" type="text" name="title5"></textarea><br>
				<label for="file">Paragraph</label><br>
   				<textarea style=" resize:none; height:100px; width:100%; margin-bottom:16px;" type="text" name="introduction5"></textarea><br>
   				
   				   				
   				<label for="file">Title</label><br>
   				<textarea style=" resize:none; height:24px; width:100%; margin-bottom:16px;" type="text" name="title6"></textarea><br>
				<label for="file">Paragraph</label><br>
   				<textarea style=" resize:none; height:100px; width:100%; margin-bottom:16px;" type="text" name="introduction6"></textarea><br>
   				   				
   				   				
   				<label for="file">Title</label><br>
   				<textarea style=" resize:none; height:24px; width:100%; margin-bottom:16px;" type="text" name="title7"></textarea><br>
				<label for="file">Paragraph</label><br>
   				<textarea style=" resize:none; height:100px; width:100%; margin-bottom:16px;" type="text" name="introduction7"></textarea><br>
   				   				
   				   				
   				<label for="file">Title</label><br>
   				<textarea style=" resize:none; height:24px; width:100%; margin-bottom:16px;" type="text" name="title8"></textarea><br>
				<label for="file">Paragraph</label><br>
   				<textarea style=" resize:none; height:100px; width:100%; margin-bottom:16px;" type="text" name="introduction8"></textarea><br>
   				   				
   				   				
   				<label for="file">Title</label><br>
   				<textarea style=" resize:none; height:24px; width:100%; margin-bottom:16px;" type="text" name="title9"></textarea><br>
				<label for="file">Paragraph</label><br>
   				<textarea style=" resize:none; height:100px; width:100%; margin-bottom:16px;" type="text" name="introduction9"></textarea><br>
   				   				
   				   				
   				<label for="file">Title</label><br>
   				<textarea style=" resize:none; height:24px; width:100%; margin-bottom:16px;" type="text" name="title10"></textarea><br>
				<label for="file">Paragraph</label><br>
   				<textarea style=" resize:none; height:100px; width:100%; margin-bottom:16px;" type="text" name="introduction10"></textarea><br>
   				</div>
   				
   				
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