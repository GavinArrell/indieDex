/**
 * @author Gavin
 */

$(document).ready(function(){
	clear();
	
	$("#sidebarSearch").mouseenter(function() {
		clear();
		$("#sidebar").removeClass("sidebarBorderRadiusTop");
		$("#sidebarSearch").removeClass("sidebarSearchBorderRadius");
		$("#sidebarSearch").addClass("sidebarSearchColour");
		$("#sidebarSearchContent").show();
	});
	
	$("#sidebarFilter").mouseenter(function() {
		clear();
		$("#sidebarFilter").addClass("sidebarFilterColour");
		$("#sidebarFilterContent").show();
	});
	
	$("#sidebarHome").mouseenter(function() {
		clear();
		$("#sidebarHome").addClass("sidebarHomeColour");
		$("#sidebarHomeContent").show();
	});
	
});

function clear() {
	$("#sidebar").addClass("sidebarBorderRadiusTop");
	
	$("#sidebarSearchContent").hide();
		$("#sidebarSearch").addClass("sidebarSearchBorderRadius");
		$("#sidebarSearch").removeClass("sidebarSearchColour");
	
	$("#sidebarFilterContent").hide();
		$("#sidebarFilter").removeClass("sidebarFilterColour");
	
	$("#sidebarHomeContent").hide();
		$("#sidebarHome").removeClass("sidebarHomeColour");
	
	$("#sidebarGamesContent").hide();
	
	$("#sidebarReviewsContent").hide();
	
	$("#sidebarTutorialsContent").hide();
	
	$("#sidebarCommunityContent").hide();
	
	$("#sidebarSettingsContent").hide();
	
}
