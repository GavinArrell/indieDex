var organiseFilter_TOP   = false;
var organiseFilter_NEW   = true;
var organiseFilter_HOT   = false;
var organiseFilter_TREND = false;

var tagConsole_PC        = false;
var tagConsole_MAC       = false;
var tagConsole_LINUX     = false;
var tagConsole_PS4       = false;
var tagConsole_PS3       = false;
var tagConsole_XBOXONE   = false;
var tagConsole_XBOX360   = false;
var tagConsole_WIIU      = false;
var tagConsole_WII       = false;
var tagConsole_IOS       = false;
var tagConsole_ANDROID   = false;

var tagGenre_ACTION      = false;
var tagGenre_ADVENTURE   = false;
var tagGenre_MUSIC       = false;
var tagGenre_MMO         = false;
var tagGenre_PUZZLE      = false;
var tagGenre_RPG         = false;
var tagGenre_SHOOTER     = false;
var tagGenre_SPORT       = false;
var tagGenre_STRATEGY    = false;

var tagRelease_2013      = false;
var tagRelease_2012      = false;
var tagRelease_2011      = false;
var tagRelease_2010      = false;
var tagRelease_PRE2009   = false;

var tagStars_5           = false;
var tagStars_4           = false;
var tagStars_3           = false;
var tagStars_2           = false;
var tagStars_1           = false;

var tagPrice_MORE25      = false;
var tagPrice_15TO25      = false;
var tagPrice_LESS15      = false;
var tagPrice_FREE        = false;

$(document).ready(function() {
	$('.checkboxFilter').click(function() {
		switch($(this).val()) {
			case "PC"            : tagConsole_PC      = !tagConsole_PC;      break;
			case "Mac"           : tagConsole_MAC     = !tagConsole_MAC;     break;
			case "Linux"         : tagConsole_LINUX   = !tagConsole_LINUX;   break;
			case "PS4"           : tagConsole_PS4     = !tagConsole_PS4;     break;
			case "PS3"           : tagConsole_PS3     = !tagConsole_PS3;     break;
			case "Xbox One"      : tagConsole_XBOXONE = !tagConsole_XBOXONE; break;
			case "Xbox 360"      : tagConsole_XBOX360 = !tagConsole_XBOX360; break;
			case "Wii U"         : tagConsole_WIIU    = !tagConsole_WIIU;    break;
			case "Wii"           : tagConsole_WII     = !tagConsole_WII;     break;
			case "IOS"           : tagConsole_IOS     = !tagConsole_IOS;     break;
			case "Android"       : tagConsole_ANDROID = !tagConsole_ANDROID; break;
			
			case "Action"        : tagGenre_ACTION    = !tagGenre_ACTION;    break;
			case "Adventure"     : tagGenre_ADVENTURE = !tagGenre_ADVENTURE; break;
			case "Music"         : tagGenre_MUSIC     = !tagGenre_MUSIC;     break;
			case "MMO"           : tagGenre_MMO       = !tagGenre_MMO;       break;
			case "Puzzle"        : tagGenre_PUZZLE    = !tagGenre_PUZZLE;    break;
			case "RPG"           : tagGenre_RPG       = !tagGenre_RPG;       break;
			case "Shooter"       : tagGenre_SHOOTER   = !tagGenre_SHOOTER;   break;
			case "Sport"         : tagGenre_SPORT     = !tagGenre_SPORT;     break;
			case "Strategy"      : tagGenre_STRATEGY  = !tagGenre_STRATEGY;  break;
			
			case "2013"          : tagRelease_2013    = !tagRelease_2013;    break;
			case "2012"          : tagRelease_2012    = !tagRelease_2012;    break;
			case "2011"          : tagRelease_2011    = !tagRelease_2011;    break;
			case "2010"          : tagRelease_2010    = !tagRelease_2010;    break;
			case "2009-"         : tagRelease_PRE2009 = !tagRelease_PRE2009; break;
			
			case "5Stars"        : tagStars_5         = !tagStars_5;         break;
			case "4Stars"        : tagStars_4         = !tagStars_4;         break;
			case "3Stars"        : tagStars_3         = !tagStars_3;         break;
			case "2Stars"        : tagStars_2         = !tagStars_2;         break;
			case "1Stars"        : tagStars_1         = !tagStars_1;         break;
			
			case "£25.00+"       : tagPrice_MORE25    = !tagPrice_MORE25;    break;
			case "£25.00-£15.00" : tagPrice_15TO25    = !tagPrice_15TO25;    break;
			case "£15.00-"       : tagPrice_LESS15    = !tagPrice_LESS15;    break;
			case "Free"          : tagPrice_FREE      = !tagPrice_FREE;      break;
		}
		
		filterContent();
	});
});

var article1 = '<div class="contentBoxContainer"><div class="contentBoxPicture"><img src="img/fez.png"/></div><div class="contentBoxText"><h2>FEZ</h2><p>A 2D platform game with a twist! In a world where everything is flat, one fez wearing hero discovers the third demension and an adventure unfolds!</p></div><div class="contentMore"><p>Fez (stylized as FEZ) is a 2012 puzzle platform game developed by indie developer Polytron Corporation and produced by Polytron, Trapdoor, and Microsoft Studios. It is a 2D game set in a 3D world, as the two-dimensional player-character receives a fez that reveals a third dimension and consequently tears the fabric of his universe. Fez\'s puzzles are built around the core mechanic of rotating between four 2D views of a 3D space, as four sides around a cube, where the environment realigns between views to create new paths.The game was an "underdog darling of the indie game scene" during its high-profile and protracted five-year development cycle. Fez designer and Polytron founder Phil Fish received celebrity for his outspoken public persona and prominence in the 2012 documentary Indie Game: The Movie, which followed the game\'s final stages of development and Polytron\'s related legal issues. The game was released as a yearlong Xbox Live Arcade exclusive on April 13, 2012 to critical acclaim, and was later ported to other platforms.Fez won several awards, including the 2012 Independent Games Festival\'s Grand Prize, 2011 Indiecade\'s Best in Show and Best Story/World Design, and 2008 Independent Games Festival\'s Excellence in Visual Art. It was Eurogamer\'s 2012 Game of the Year. Fez had sold one million copies by the end of 2013. A sequel was planned, but was later canceled as Fish abruptly left the industry.</p></div><p class="readMore">Read More</p></div>;';

item = [];
//ID - TAGS - RELEVANCE TO FILTERS
item[0] = [article1, "tagXBOXONE tagXBOX360 tagPUZZLE tag2012 tag5Stars tagLESS15", 0];
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

function filterContent() {
	for(var i=0; i<item.length; i++) {
		item[i][2] = 0;
		//In php: load tags from database (or check on server? probably this... maybe)
		
		switch(true) {
			case tagConsole_PC      : if(item[i][1].indexOf("tagPC")        != -1) {item[i][2]++;}; break;
			case tagConsole_MAC     : if(item[i][1].indexOf("tagMAC")       != -1) {item[i][2]++;}; break;
			case tagConsole_LINUX   : if(item[i][1].indexOf("tagLINUX")     != -1) {item[i][2]++;}; break;
			case tagConsole_PS4     : if(item[i][1].indexOf("tagPS4")       != -1) {item[i][2]++;}; break;
			case tagConsole_PS3     : if(item[i][1].indexOf("tagPS3")       != -1) {item[i][2]++;}; break;
			case tagConsole_XBOXONE : if(item[i][1].indexOf("tagXBOXONE")   != -1) {item[i][2]++;}; break;
			case tagConsole_XBOX360 : if(item[i][1].indexOf("tagXBOX360")   != -1) {item[i][2]++;}; break;
			case tagConsole_WIIU    : if(item[i][1].indexOf("tagWIIU")      != -1) {item[i][2]++;}; break;
			case tagConsole_WII     : if(item[i][1].indexOf("tagWII")       != -1) {item[i][2]++;}; break;
			case tagConsole_IOS     : if(item[i][1].indexOf("tagIOS")       != -1) {item[i][2]++;}; break;
			case tagConsole_ANDROID : if(item[i][1].indexOf("tagANDROID")   != -1) {item[i][2]++;}; break;
                                                                                                    
			case tagGenre_ACTION    : if(item[i][1].indexOf("tagACTION")    != -1) {item[i][2]++;}; break;
			case tagGenre_ADVENTURE : if(item[i][1].indexOf("tagADVENTURE") != -1) {item[i][2]++;}; break;
			case tagGenre_MUSIC     : if(item[i][1].indexOf("tagMUSIC")     != -1) {item[i][2]++;}; break;
			case tagGenre_MMO       : if(item[i][1].indexOf("tagMMO")       != -1) {item[i][2]++;}; break;
			case tagGenre_PUZZLE    : if(item[i][1].indexOf("tagPUZZLE")    != -1) {item[i][2]++;}; break;
			case tagGenre_RPG       : if(item[i][1].indexOf("tagRPG")       != -1) {item[i][2]++;}; break;
			case tagGenre_SHOOTER   : if(item[i][1].indexOf("tagSHOOTER")   != -1) {item[i][2]++;}; break;
			case tagGenre_SPORT     : if(item[i][1].indexOf("tagSPORT")     != -1) {item[i][2]++;}; break;
			case tagGenre_STRATEGY  : if(item[i][1].indexOf("tagSTRATEGY")  != -1) {item[i][2]++;}; break;
                                                                                                    
			case tagRelease_2013    : if(item[i][1].indexOf("tag2013")      != -1) {item[i][2]++;}; break;
			case tagRelease_2012    : if(item[i][1].indexOf("tag2012")      != -1) {item[i][2]++;}; break;
			case tagRelease_2011    : if(item[i][1].indexOf("tag2011")      != -1) {item[i][2]++;}; break;
			case tagRelease_2010    : if(item[i][1].indexOf("tag2010")      != -1) {item[i][2]++;}; break;
			case tagRelease_PRE2009 : if(item[i][1].indexOf("tagPRE2009")   != -1) {item[i][2]++;}; break;
			
			case tagStars_5         : if(item[i][1].indexOf("tag5Stars")    != -1) {item[i][2]++;}; break;
			case tagStars_4         : if(item[i][1].indexOf("tag4Stars")    != -1) {item[i][2]++;}; break;
			case tagStars_3         : if(item[i][1].indexOf("tag3Stars")    != -1) {item[i][2]++;}; break;
			case tagStars_2         : if(item[i][1].indexOf("tag2Stars")    != -1) {item[i][2]++;}; break;
			case tagStars_1         : if(item[i][1].indexOf("tag1Stars")    != -1) {item[i][2]++;}; break;

			case tagPrice_MORE25    : if(item[i][1].indexOf("tagMORE25")    != -1) {item[i][2]++;}; break;
			case tagPrice_15TO25    : if(item[i][1].indexOf("tag15TO25")    != -1) {item[i][2]++;}; break;
			case tagPrice_LESS15    : if(item[i][1].indexOf("tagLESS15")    != -1) {item[i][2]++;}; break;
			case tagPrice_FREE      : if(item[i][1].indexOf("tagFREE")      != -1) {item[i][2]++;}; break;
		}
		
		if(item[i][2] > 0) {organiseContent(item[i]);}
	}
	
	printContent();
}

function organiseContent(item) {
	for(var i=0; i<organisedContent.length; i++) {
		if(organisedContent[i][2] < item[2]) {organisedContent.splice(i, 0, item); return;}
	}
	
	organisedContent.push(item);
}

function printContent() {
	//$('#contentContainer').html();
	var htmlString = "";
	for(var i=0; i<9 && i<organisedContent.length; i++) {
		htmlString += organisedContent[i][0];
	}
	
	$('#contentContainer').html(htmlString);
	$('.contentMore').hide();
}

