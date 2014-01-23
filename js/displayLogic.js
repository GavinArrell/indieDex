var organiseFilter_TOP   = 0;
var organiseFilter_NEW   = 1;
var organiseFilter_HOT   = 0;
var organiseFilter_TREND = 0;

var tagConsole_PC        = 0;
var tagConsole_MAC       = 0;
var tagConsole_LINUX     = 0;
var tagConsole_PS4       = 0;
var tagConsole_PS3       = 0;
var tagConsole_XBOXONE   = 0;
var tagConsole_XBOX360   = 0;
var tagConsole_WIIU      = 0;
var tagConsole_WII       = 0;
var tagConsole_IOS       = 0;
var tagConsole_ANDROID   = 0;

var tagGenre_ACTION      = 0;
var tagGenre_ADVENTURE   = 0;
var tagGenre_MUSIC       = 0;
var tagGenre_MMO         = 0;
var tagGenre_PUZZLE      = 0;
var tagGenre_RPG         = 0;
var tagGenre_SHOOTER     = 0;
var tagGenre_SPORT       = 0;
var tagGenre_STRATEGY    = 0;

var tagRelease_2013      = 0;
var tagRelease_2012      = 0;
var tagRelease_2011      = 0;
var tagRelease_2010      = 0;
var tagRelease_PRE2009   = 0;

var tagStars_5           = 0;
var tagStars_4           = 0;
var tagStars_3           = 0;
var tagStars_2           = 0;
var tagStars_1           = 0;

var tagPrice_MORE25      = 0;
var tagPrice_15TO25      = 0;
var tagPrice_LESS15      = 0;
var tagPrice_FREE        = 0;                                              
                                                                          
$(document).ready(function() {                                            
	$('.checkboxFilter').click(function() {
		switch($(this).val()) {                                           
			case "PC"            : tagConsole_PC      = (tagConsole_PC      == 0)?1:0; break;
			case "Mac"           : tagConsole_MAC     = (tagConsole_MAC     == 0)?1:0; break;
			case "Linux"         : tagConsole_LINUX   = (tagConsole_LINUX   == 0)?1:0; break;
			case "PS4"           : tagConsole_PS4     = (tagConsole_PS4     == 0)?1:0; break;
			case "PS3"           : tagConsole_PS3     = (tagConsole_PS3     == 0)?1:0; break;
			case "Xbox One"      : tagConsole_XBOXONE = (tagConsole_XBOXONE == 0)?1:0; break;
			case "Xbox 360"      : tagConsole_XBOX360 = (tagConsole_XBOX360 == 0)?1:0; break;
			case "Wii U"         : tagConsole_WIIU    = (tagConsole_WIIU    == 0)?1:0; break;
			case "Wii"           : tagConsole_WII     = (tagConsole_WII     == 0)?1:0; break;
			case "IOS"           : tagConsole_IOS     = (tagConsole_IOS     == 0)?1:0; break;
			case "Android"       : tagConsole_ANDROID = (tagConsole_ANDROID == 0)?1:0; break;
			                                                                
			case "Action"        : tagGenre_ACTION    = (tagGenre_ACTION    == 0)?1:0; break;
			case "Adventure"     : tagGenre_ADVENTURE = (tagGenre_ADVENTURE == 0)?1:0; break;
			case "Music"         : tagGenre_MUSIC     = (tagGenre_MUSIC     == 0)?1:0; break;
			case "MMO"           : tagGenre_MMO       = (tagGenre_MMO       == 0)?1:0; break;
			case "Puzzle"        : tagGenre_PUZZLE    = (tagGenre_PUZZLE    == 0)?1:0; break;
			case "RPG"           : tagGenre_RPG       = (tagGenre_RPG       == 0)?1:0; break;
			case "Shooter"       : tagGenre_SHOOTER   = (tagGenre_SHOOTER   == 0)?1:0; break;
			case "Sport"         : tagGenre_SPORT     = (tagGenre_SPORT     == 0)?1:0; break;
			case "Strategy"      : tagGenre_STRATEGY  = (tagGenre_STRATEGY  == 0)?1:0; break;
			                                                                
			case "2013"          : tagRelease_2013    = (tagRelease_2013    == 0)?1:0; break;
			case "2012"          : tagRelease_2012    = (tagRelease_2012    == 0)?1:0; break;
			case "2011"          : tagRelease_2011    = (tagRelease_2011    == 0)?1:0; break;
			case "2010"          : tagRelease_2010    = (tagRelease_2010    == 0)?1:0; break;
			case "2009-"         : tagRelease_PRE2009 = (tagRelease_PRE2009 == 0)?1:0; break;
			                                                                
			case "5Stars"        : tagStars_5         = (tagStars_5         == 0)?1:0; break;
			case "4Stars"        : tagStars_4         = (tagStars_4         == 0)?1:0; break;
			case "3Stars"        : tagStars_3         = (tagStars_3         == 0)?1:0; break;
			case "2Stars"        : tagStars_2         = (tagStars_2         == 0)?1:0; break;
			case "1Stars"        : tagStars_1         = (tagStars_1         == 0)?1:0; break;
			                                                              
			case "£25.00+"       : tagPrice_MORE25    = (tagPrice_MORE25    == 0)?1:0; break;
			case "£25.00-£15.00" : tagPrice_15TO25    = (tagPrice_15TO25    == 0)?1:0; break;
			case "£15.00-"       : tagPrice_LESS15    = (tagPrice_LESS15    == 0)?1:0; break;
			case "Free"          : tagPrice_FREE      = (tagPrice_FREE      == 0)?1:0; break;
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
	organisedContent.clear();
	alert("blop" + organisedContent.length);
	for(var i=0; i<item.length; i++) {
		item[i][2] = 0;
		//In php: load tags from database (or check on server? probably this... maybe)
		
		checkLoop:
		for(var n=0; n<35; n++) {
			switch(1) {
				case tagConsole_PC      : if(item[i][1].indexOf("tagPC")        != -1) {item[i][2]++;} tagConsole_PC      = 2; break;
				case tagConsole_MAC     : if(item[i][1].indexOf("tagMAC")       != -1) {item[i][2]++;} tagConsole_MAC     = 2; break;
				case tagConsole_LINUX   : if(item[i][1].indexOf("tagLINUX")     != -1) {item[i][2]++;} tagConsole_LINUX   = 2; break;
				case tagConsole_PS4     : if(item[i][1].indexOf("tagPS4")       != -1) {item[i][2]++;} tagConsole_PS4     = 2; break;
				case tagConsole_PS3     : if(item[i][1].indexOf("tagPS3")       != -1) {item[i][2]++;} tagConsole_PS3     = 2; break;
				case tagConsole_XBOXONE : if(item[i][1].indexOf("tagXBOXONE")   != -1) {item[i][2]++;} tagConsole_XBOXONE = 2; break;
				case tagConsole_XBOX360 : if(item[i][1].indexOf("tagXBOX360")   != -1) {item[i][2]++;} tagConsole_XBOX360 = 2; break;
				case tagConsole_WIIU    : if(item[i][1].indexOf("tagWIIU")      != -1) {item[i][2]++;} tagConsole_WIIU    = 2; break;
				case tagConsole_WII     : if(item[i][1].indexOf("tagWII")       != -1) {item[i][2]++;} tagConsole_WII     = 2; break;
				case tagConsole_IOS     : if(item[i][1].indexOf("tagIOS")       != -1) {item[i][2]++;} tagConsole_IOS     = 2; break;
				case tagConsole_ANDROID : if(item[i][1].indexOf("tagANDROID")   != -1) {item[i][2]++;} tagConsole_ANDROID = 2; break;
	                                                                                                                       
				case tagGenre_ACTION    : if(item[i][1].indexOf("tagACTION")    != -1) {item[i][2]++;} tagGenre_ACTION    = 2; break;
				case tagGenre_ADVENTURE : if(item[i][1].indexOf("tagADVENTURE") != -1) {item[i][2]++;} tagGenre_ADVENTURE = 2; break;
				case tagGenre_MUSIC     : if(item[i][1].indexOf("tagMUSIC")     != -1) {item[i][2]++;} tagGenre_MUSIC     = 2; break;
				case tagGenre_MMO       : if(item[i][1].indexOf("tagMMO")       != -1) {item[i][2]++;} tagGenre_MMO       = 2; break;
				case tagGenre_PUZZLE    : if(item[i][1].indexOf("tagPUZZLE")    != -1) {item[i][2]++;} tagGenre_PUZZLE    = 2; break;
				case tagGenre_RPG       : if(item[i][1].indexOf("tagRPG")       != -1) {item[i][2]++;} tagGenre_RPG       = 2; break;
				case tagGenre_SHOOTER   : if(item[i][1].indexOf("tagSHOOTER")   != -1) {item[i][2]++;} tagGenre_SHOOTER   = 2; break;
				case tagGenre_SPORT     : if(item[i][1].indexOf("tagSPORT")     != -1) {item[i][2]++;} tagGenre_SPORT     = 2; break;
				case tagGenre_STRATEGY  : if(item[i][1].indexOf("tagSTRATEGY")  != -1) {item[i][2]++;} tagGenre_STRATEGY  = 2; break;
	                                                                                                                        
				case tagRelease_2013    : if(item[i][1].indexOf("tag2013")      != -1) {item[i][2]++;} tagRelease_2013    = 2; break;
				case tagRelease_2012    : if(item[i][1].indexOf("tag2012")      != -1) {item[i][2]++;} tagRelease_2012    = 2; break;
				case tagRelease_2011    : if(item[i][1].indexOf("tag2011")      != -1) {item[i][2]++;} tagRelease_2011    = 2; break;
				case tagRelease_2010    : if(item[i][1].indexOf("tag2010")      != -1) {item[i][2]++;} tagRelease_2010    = 2; break;
				case tagRelease_PRE2009 : if(item[i][1].indexOf("tagPRE2009")   != -1) {item[i][2]++;} tagRelease_PRE2009 = 2; break;
				                                                                                                            
				case tagStars_5         : if(item[i][1].indexOf("tag5Stars")    != -1) {item[i][2]++;} tagStars_5         = 2; break;
				case tagStars_4         : if(item[i][1].indexOf("tag4Stars")    != -1) {item[i][2]++;} tagStars_4         = 2; break;
				case tagStars_3         : if(item[i][1].indexOf("tag3Stars")    != -1) {item[i][2]++;} tagStars_3         = 2; break;
				case tagStars_2         : if(item[i][1].indexOf("tag2Stars")    != -1) {item[i][2]++;} tagStars_2         = 2; break;
				case tagStars_1         : if(item[i][1].indexOf("tag1Stars")    != -1) {item[i][2]++;} tagStars_1         = 2; break;
	                                                                                                                        
				case tagPrice_MORE25    : if(item[i][1].indexOf("tagMORE25")    != -1) {item[i][2]++;} tagPrice_MORE25    = 2; break;
				case tagPrice_15TO25    : if(item[i][1].indexOf("tag15TO25")    != -1) {item[i][2]++;} tagPrice_15TO25    = 2; break;
				case tagPrice_LESS15    : if(item[i][1].indexOf("tagLESS15")    != -1) {item[i][2]++;} tagPrice_LESS15    = 2; break;
				case tagPrice_FREE      : if(item[i][1].indexOf("tagFREE")      != -1) {item[i][2]++;} tagPrice_FREE      = 2; break;
				
				default: resetTagValues(); break checkLoop;
			}
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

var htmlString;

function printContent() {
	//$('#contentContainer').html();
	htmlString = '';
	alert(organisedContent.length);
	for(var i=0; i<9 && i<organisedContent.length; i++) {
		htmlString += organisedContent[i][0];
	}
	alert(htmlString);
	$('#contentContainer').html(htmlString);
	$('.contentMore').hide();
}

function resetTagValues() {
	tagConsole_PC      = (2)?1:0;
	tagConsole_MAC     = (2)?1:0;
	tagConsole_LINUX   = (2)?1:0;
	tagConsole_PS4     = (2)?1:0;
	tagConsole_PS3     = (2)?1:0;
	tagConsole_XBOXONE = (2)?1:0;
	tagConsole_XBOX360 = (2)?1:0;
	tagConsole_WIIU    = (2)?1:0;
	tagConsole_WII     = (2)?1:0;
	tagConsole_IOS     = (2)?1:0;
	tagConsole_ANDROID = (2)?1:0;
	                           
	tagGenre_ACTION    = (2)?1:0;
	tagGenre_ADVENTURE = (2)?1:0;
	tagGenre_MUSIC     = (2)?1:0;
	tagGenre_MMO       = (2)?1:0;
	tagGenre_PUZZLE    = (2)?1:0;
	tagGenre_RPG       = (2)?1:0;
	tagGenre_SHOOTER   = (2)?1:0;
	tagGenre_SPORT     = (2)?1:0;
	tagGenre_STRATEGY  = (2)?1:0;
	                           
	tagRelease_2013    = (2)?1:0;
	tagRelease_2012    = (2)?1:0;
	tagRelease_2011    = (2)?1:0;
	tagRelease_2010    = (2)?1:0;
	tagRelease_PRE2009 = (2)?1:0;
	                            
	tagStars_5         = (2)?1:0;
	tagStars_4         = (2)?1:0;
	tagStars_3         = (2)?1:0;
	tagStars_2         = (2)?1:0;
	tagStars_1         = (2)?1:0;
	                            
	tagPrice_MORE25    = (2)?1:0;
	tagPrice_15TO25    = (2)?1:0;
	tagPrice_LESS15    = (2)?1:0;
	tagPrice_FREE      = (2)?1:0;
}

function clearTagValues() {
	tagConsole_PC      = 0;
	tagConsole_MAC     = 0;
	tagConsole_LINUX   = 0;
	tagConsole_PS4     = 0;
	tagConsole_PS3     = 0;
	tagConsole_XBOXONE = 0;
	tagConsole_XBOX360 = 0;
	tagConsole_WIIU    = 0;
	tagConsole_WII     = 0;
	tagConsole_IOS     = 0;
	tagConsole_ANDROID = 0;
	                     
	tagGenre_ACTION    = 0;
	tagGenre_ADVENTURE = 0;
	tagGenre_MUSIC     = 0;
	tagGenre_MMO       = 0;
	tagGenre_PUZZLE    = 0;
	tagGenre_RPG       = 0;
	tagGenre_SHOOTER   = 0;
	tagGenre_SPORT     = 0;
	tagGenre_STRATEGY  = 0;
	                     
	tagRelease_2013    = 0;
	tagRelease_2012    = 0;
	tagRelease_2011    = 0;
	tagRelease_2010    = 0;
	tagRelease_PRE2009 = 0;
	                      
	tagStars_5         = 0;
	tagStars_4         = 0;
	tagStars_3         = 0;
	tagStars_2         = 0;
	tagStars_1         = 0;
	                      
	tagPrice_MORE25    = 0;
	tagPrice_15TO25    = 0;
	tagPrice_LESS15    = 0;
	tagPrice_FREE      = 0;
}
