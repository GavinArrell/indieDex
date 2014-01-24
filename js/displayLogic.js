var organisationMode   = 0;

var checkboxValues = [
						"PC", "Mac", "Linux", "PS4", "PS3", "Xbox One", "Xbox 360", "Wii U", "Wii", "IOS", "Android",
						"Action", "Adventure", "Music", "MMO", "Puzzle", "RPG", "Shooter", "Sport", "Strategy",
						"BETA", "2013", "2012", "2011", "2010", "2009-",
						"5Stars", "4Stars", "3Stars", "2Stars", "1Stars",
						"£25.00+", "£25.00-£15.00", "£15.00-", "Free",
						"Staff"
					 ];

var tag = [];
	tag[0]  = ["tagPC"        , 0];
	tag[1]  = ["tagMAC"       , 0];
	tag[2]  = ["tagLINUX"     , 0];
	tag[3]  = ["tagPS4"       , 0];
	tag[4]  = ["tagPS3"       , 0];
	tag[5]  = ["tagXBOXONE"   , 0];
	tag[6]  = ["tagXBOX360"   , 0];
	tag[7]  = ["tagWIIU"      , 0];
	tag[8]  = ["tagWII"       , 0];
	tag[9]  = ["tagIOS"       , 0];
	tag[10] = ["tagANDROID"   , 0];
	                         
	tag[11] = ["tagACTION"    , 0];
	tag[12] = ["tagADVENTURE" , 0];
	tag[13] = ["tagMUSIC"     , 0];
	tag[14] = ["tagMMO"       , 0];
	tag[15] = ["tagPUZZLE"    , 0];
	tag[16] = ["tagRPG"       , 0];
	tag[17] = ["tagSHOOTER"   , 0];
	tag[18] = ["tagSPORT"     , 0];
	tag[19] = ["tagSTRATEGY"  , 0];
	                         
	tag[20] = ["tagBETA"      , 0];
	tag[21] = ["tag2013"      , 0];
	tag[22] = ["tag2012"      , 0];
	tag[23] = ["tag2011"      , 0];
	tag[24] = ["tag2010"      , 0];
	tag[25] = ["tagPRE2009"   , 0];
	                         
	tag[26] = ["tag5Stars"    , 0];
	tag[27] = ["tag4Stars"    , 0];
	tag[28] = ["tag3Stars"    , 0];
	tag[29] = ["tag2Stars"    , 0];
	tag[30] = ["tag1Stars"    , 0];
	                         
	tag[31] = ["tagMORE25"    , 0];
	tag[32] = ["tag15TO25"    , 0];
	tag[33] = ["tagLESS15"    , 0];
	tag[34] = ["tagFREE"      , 0];
	
	tag[35] = ["tagSTAFF"     , 0];

$(document).ready(function() {
	$('.checkBoxFilter').prop('checked', false);
	
	$('.checkboxFilter').click(function() {
		for(var i=0; i<checkboxValues.length; i++) {
			if($(this).val() == checkboxValues[i]) {
				//checkboxValues[] and tag[] must be in the same order for this to work.. ehh :/
				tag[i][1] = (tag[i][1] === 0)?1:0;
			}
		}
		filterContent();
	});
	
	$('.filterTop').click(function()   {organisationMode = 0; $('.checkBoxFilter').prop('checked', false); filterContent(); return false;});
	$('.filterNew').click(function()   {organisationMode = 1; $('.checkBoxFilter').prop('checked', false); filterContent(); return false;});
	$('.filterHot').click(function()   {organisationMode = 2; $('.checkBoxFilter').prop('checked', false); filterContent(); return false;});
	$('.filterTrend').click(function() {organisationMode = 3; $('.checkBoxFilter').prop('checked', false); filterContent(); return false;});
	
	//filterContent();
});

function requestContent() {
	var temp = tag;
	temp.splice(0, 0, organisationMode);
	
	if (window.XMLHttpRequest) {
  		xmlhttp=new XMLHttpRequest();
	}
	else {
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
    		$('#contentContainer').html(xmlhttp.responseText);
			$('.contentMore').hide();
    	}
	};
  	
	xmlhttp.open("GET","getcontent.php?q="+temp,true);
	xmlhttp.send();
}

var noContentFound = '0 Results Found';
var article = [];
	article[0] = '<div class="contentBoxContainer"><div class="contentBoxPicture"><img src="img/fez.png"/></div><div class="contentBoxText"><h2>FEZ</h2><p>A 2D platform game with a twist! In a world where everything is flat, one fez wearing hero discovers the third demension and an adventure unfolds!</p></div><div class="contentMore"><p>Fez (stylized as FEZ) is a 2012 puzzle platform game developed by indie developer Polytron Corporation and produced by Polytron, Trapdoor, and Microsoft Studios. It is a 2D game set in a 3D world, as the two-dimensional player-character receives a fez that reveals a third dimension and consequently tears the fabric of his universe. Fez\'s puzzles are built around the core mechanic of rotating between four 2D views of a 3D space, as four sides around a cube, where the environment realigns between views to create new paths.The game was an "underdog darling of the indie game scene" during its high-profile and protracted five-year development cycle. Fez designer and Polytron founder Phil Fish received celebrity for his outspoken public persona and prominence in the 2012 documentary Indie Game: The Movie, which followed the game\'s final stages of development and Polytron\'s related legal issues. The game was released as a yearlong Xbox Live Arcade exclusive on April 13, 2012 to critical acclaim, and was later ported to other platforms.Fez won several awards, including the 2012 Independent Games Festival\'s Grand Prize, 2011 Indiecade\'s Best in Show and Best Story/World Design, and 2008 Independent Games Festival\'s Excellence in Visual Art. It was Eurogamer\'s 2012 Game of the Year. Fez had sold one million copies by the end of 2013. A sequel was planned, but was later canceled as Fish abruptly left the industry.</p></div><p class="readMore">Read More</p></div>';
	article[1] = '<div class="contentBoxContainer"><div class="contentBoxPicture"><img src="img/minecraft.png"/><nav><a class="readMore" href="#more2">Read More</a></nav></div><div class="contentBoxText"><h2>MINECRAFT</h2><p>A 3D voxel based sandox game! The most successful indie game in the world, with over 10 million copies sold on PC alone!</p></div><div id="main2" class="hide"><div id="more2"><p>Minecraft is a sandbox indie game originally created by Swedish programmer Markus "Notch" Persson and later developed and published by Mojang. It was publicly released for the PC on May 17, 2009, as a developmental alpha version and, after gradual updates, was published as a full release version on November 18, 2011. A version for Android was released a month earlier on October 7, and an iOS version was released on November 17, 2011. On May 9, 2012, the game was released on Xbox 360 as an Xbox Live Arcade game, co-developed by 4J Studios. All versions of Minecraft receive periodic updates.The creative and building aspects of Minecraft allow players to build constructions out of textured cubes in a 3D procedurally generated world. Other activities in the game include exploration, gathering resources, crafting, and combat. Gameplay in its commercial release has two principal modes: survival, which requires players to acquire resources and maintain their health and hunger; and creative, where players have an unlimited supply of resources, the ability to fly, and no health or hunger. A third gameplay mode named hardcore is the same as survival, differing only in difficulty; it is set to the most difficult setting and respawning is disabled, forcing players to delete their worlds upon death.Minecraft received five awards from the 2011 Game Developers Conference: it was awarded the Innovation Award, Best Downloadable Game Award, and the Best Debut Game Award from the Game Developers Choice Awards; and the Audience Award, as well as the Seumas McNally Grand Prize, from the Independent Games Festival in 2011. In 2012, Minecraft was awarded a Golden Joystick Award in the category Best Downloadable Game. As of October 23, 2013, the game has sold over 12.5 million copies on PC, and over 33 million copies across all platforms.</div> <!-- #about --></div> <!-- main --></div>';
	article[2] = '<div class="contentBoxContainer"><div class="contentBoxPicture"><img src="img/starbound.png"/><nav><a class="readMore" href="#more3">Read More</a></nav></div><div class="contentBoxText"><h2>STARBOUND</h2><p>A 2D voxel based platformer. This game is in beta, the user can play as many different alien species and explore the galaxy!</p></div><div id="main3" class="hide"><div id="more3"><p>Starbound is an indie game being produced by the UK-based independent game studio Chucklefish Ltd. Starbound takes place in a two-dimensional, procedurally generated universe which the player will explore in order to obtain new weapons, armor, and miscellaneous items. Starbound entered beta testing on December 4, 2013 for Microsoft Windows, OS X and Linux.</div> <!-- #about --></div> <!-- main --></div>';
	article[3] = '<div class="contentBoxContainer"><div class="contentBoxPicture"><img src="img/dayz.png"/></div><div class="contentBoxText"><h2>DAYZ</h2><p>Everyone\'s favourite ARMA 2 mod is going standalone! The mod which turned ARMA 2 into a zombie survival game with a cult following is now being developed as a full game.</p></div><div class="contentMore"><p>DayZ is a multiplayer open world survival horror video game in development by Bohemia Interactive and the stand-alone version of the award-winning mod of the same name. The game was test-released on December 16, 2013 for Microsoft Windows via digital distribution platform Steam, and is currently in early alpha testing.The game places the player in the fictional post-Soviet state of Chernarus, where an unknown virus has turned most of the population into violent zombies. As a survivor, the player must scavenge the world for food, water, weapons, and medicine, while killing or avoiding zombies, and killing, avoiding or co-opting other players in an effort to survive the zombie apocalypse.DayZ began development in 2012 when the mod\'s creator, Dean Hall, joined Bohemia Interactive to work on it. The development has been focused on altering the engine to suit the game\'s needs, developing a working client-server architecture, and introducing new features like diseases and a better inventory system. The game has sold over 1 million copies since its alpha release.</p></div><p class="readMore">Read More</p></div>';

var item = [];
//ID - TITLE - TAGS - RELEVANCE TO FILTERS - TOP - NEW - HOT - TREND
	item[0] = [0, "FEZ", "tagXBOXONE tagXBOX360 tagPUZZLE tag2012 tag5Stars tagLESS15", 0, 2, 2, -1, 3];
	item[1] = [1, "MINECRAFT", "tagPC tagMAC tagLINUX tagXBOXONE tagXBOX360 tagPS4 tagANDROID tagIOS tagACTION tagADVENTURE tag2011 tag5stars tagSTAFF", 0, 1, 4, 7, 2];
	item[2] = [2, "STARBOUND", "tagPC tagMAC tagLINUX tagANDROID tagACTION tagADVENTURE tagBETA tag4stars", 0, -1, 6, 12, -1];
	item[3] = [3, "DAYZ", "tagPC tagMAC tagLINUX tagACTION tagSHOOTER tagBETA tag3stars tag15TO25", 0, 4, 3, -1, 7];
/*
 * Imagine items[] as the database
 *
 * In php we'd place the ID in last so:
 * Search through all items (filterContent func)
 * Record ID of a relevant item and place it in load list (organiseContent func)
 * organiseContent will sort the most relevant to the top when its added
 * Continue the search (filterContent func resume)
 * 
 * Using article1 var because the data isn't being pulled from a db - no need for IDs atm
 */

var organisedContent = [];
//Will store all the relevant items - only 9 will be displayed per page

function requestFilteredContent() {
	
	//request
}

function filterContent() {
	organisedContent.length = 0;
	
	for(var i=0; i<item.length; i++) {
		item[i][3] = 0;
		//In php: load tags from database
		
		for(var n=0; n<tag.length; n++) { //Database tags
			if(tag[n][1] == 1) {
				//If item tags contain tag[n][0]
				if(item[i][2].indexOf(tag[n][0]) != -1) {
					item[i][3]++;
				}
			}
		}

		if(item[i][3] > 0) {organiseContent(item[i]);}
	}
	printContent();
}

function organiseContent(item) {
	for(var i=0; i<organisedContent.length; i++) {
		if(organisedContent[i][3] == item[3]) {
			if(prioritiseContent(item, organisedContent[i])) {organisedContent.splice(i, 0, item); return;}
			continue;
		}
		if(organisedContent[i][3] < item[3]) {organisedContent.splice(i, 0, item); return;}
	}
	
	organisedContent.push(item);
}

function organiseContentNoFilter() {
	for(var i=0; i<item.length; i++) {
		if(i>0) {
			if(prioritiseIndex(item[i]) != -1 && prioritiseIndex(item[i]) != organisedContent.length) {
				organisedContent.splice(prioritiseIndex(item[i]), 0, item[i]);
			}
			else if(prioritiseIndex(item[i]) != -1 && prioritiseIndex(item[i]) == organisedContent.length) {
				organisedContent.push(item[i]);
			}
		}
		else {
			if(prioritiseIndex(item[i]) != -1) {
				organisedContent.push(item[i]);
			}
		}
	}
}

var htmlString;

function printContent() {
	htmlString = loadContent();
	
	if(organisedContent.length === 0) {
		if(checkTagValues()) {organiseContentNoFilter(); htmlString = loadContent();}
		else {htmlString = noContentFound;}
	}
	
	$('#contentContainer').html(htmlString);
	$('.contentMore').hide();
}

function loadContent() {
	var string = '';
	for(var i=0; i<9 && i<organisedContent.length; i++) {
		string += article[organisedContent[i][0]];
	}
	return string;
}

function prioritiseIndex(newItem) {
	if(newItem[organisationMode+4] == -1) {return -1;}
	
	for(var i=0; i<organisedContent.length; i++) {
		if(newItem[organisationMode+4] <= organisedContent[i][organisationMode+4]) {return i;}
	}
	
	return organisedContent.length;
}

function prioritiseContent(newItem, oldItem) {
	if(newItem[organisationMode+4] <= oldItem[organisationMode+4] && newItem[organisationMode+4] != -1) {return true;}
	else {return false;}
}

function checkTagValues() {
	for(var i=0; i<tag.length; i++) {
		if(tag[i][1] !== 0) {return false;}
	}
	
	return true;
}
