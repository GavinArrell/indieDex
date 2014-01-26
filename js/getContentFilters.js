var organisationMode   = 0;

var checkboxConsoleValues = ["PC", "Mac", "Linux", "PS4", "PS3", "XboxOne", "Xbox360", "WiiU", "Wii", "IOS", "Android"];
var checkboxGenreValues   = ["Action", "Adventure", "Music", "MMO", "Puzzle", "RPG", "Shooter", "Sport", "Strategy"];
var checkboxYearValues    = ["BETA", "2014", "2013", "2012", "2011", "pre2010"];
var checkboxStarValues    = ["5", "4", "3", "2", "1"];
var checkboxPriceValues   = ["25more", "15to25", "15less", "0"];
var checkboxStaffValues   = ["Staff"];

$(document).ready(function() {
	clearAllFilters();
	
	$('.checkboxFilter').click(function() {gotoPage(0, true);});
	
	$('.filterTop').click(function()   {organisationMode = 0; gotoPage(0, true); return false;});
	$('.filterNew').click(function()   {organisationMode = 1; gotoPage(0, true); return false;});
	$('.filterHot').click(function()   {organisationMode = 2; gotoPage(0, true); return false;});
	$('.filterTrend').click(function() {organisationMode = 3; gotoPage(0, true); return false;});
	
	$('#clearFilters').click(function() {clearAllFilters();});
	
	gotoPage(0, false);
});

function clearAllFilters() {
	$('.checkBoxFilter').prop('checked', false);
	$('#searchBar').val("Search Titles...");
	queryDB_setSearch("");
}

function getContentFilterOrder() {
	var order;
	switch(organisationMode) {
		case 0 : order = "id ASC";  break;
		case 1 : order = "id DESC"; break;
		case 2 : order = "id ASC";  break;  
		case 3 : order = "id DESC"; break;  
	}
	return order;
}

function getContentConsoleFilters() {
	var filters = [];
	for(var i=0; i<checkboxConsoleValues.length; i++) {
		if($("input[type=checkbox][value="+ checkboxConsoleValues[i] +"]").is(':checked')) {
			filters.push(checkboxConsoleValues[i].toLowerCase());
		}
	}
	
	return filters;
}

function getContentGenreFilters() {
	var filters = [];
	for(var i=0; i<checkboxGenreValues.length; i++) {
		if($("input[type=checkbox][value="+ checkboxGenreValues[i] +"]").is(':checked')) {
			filters.push(checkboxGenreValues[i].toLowerCase());
		}
	}
	
	return filters;
}

function getContentYearFilters() {
	var filters = [];
	for(var i=0; i<checkboxYearValues.length; i++) {
		if($("input[type=checkbox][value="+ checkboxYearValues[i] +"]").is(':checked')) {
			filters.push(checkboxYearValues[i].toLowerCase());
		}
	}
	
	return filters;
}

function getContentStarFilters() {
	var filters = [];
	for(var i=0; i<checkboxStarValues.length; i++) {
		if($("input[type=checkbox][value="+ checkboxStarValues[i] +"]").is(':checked')) {
			filters.push(checkboxStarValues[i].toLowerCase());
		}
	}
	
	return filters;
}

function getContentPriceFilters() {
	var filters = [];
	var count = 0;
	
	for(var i=0; i<checkboxPriceValues.length; i++) {
		if($("input[type=checkbox][value="+ checkboxPriceValues[i] +"]").is(':checked')) {
			
			var op        = $("input[type=checkbox][value="+ checkboxPriceValues[i] +"]").data('operator');
			var lowlimit  = $("input[type=checkbox][value="+ checkboxPriceValues[i] +"]").data('limit_low');
			var highlimit = $("input[type=checkbox][value="+ checkboxPriceValues[i] +"]").data('limit_high');
			
			filters[count] = [];
			filters[count][0] = op;
			filters[count][1] = lowlimit;
			filters[count][2] = highlimit;
			count++;
			
		}
	}
	
	return filters;
}

function getContentStaffFilters() {
	var ticked = false;
	if($("input[type=checkbox][value="+ checkboxStaffValues[i] +"]").is(':checked')) {
		ticked = true;
	}
	
	return ticked;
}
