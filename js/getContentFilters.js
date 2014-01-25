var organisationMode   = 0;

var checkboxConsoleValues = ["PC", "Mac", "Linux", "PS4", "PS3", "Xbox One", "Xbox 360", "Wii U", "Wii", "IOS", "Android"];
var checkboxGenreValues   = ["Action", "Adventure", "Music", "MMO", "Puzzle", "RPG", "Shooter", "Sport", "Strategy"];
var checkboxYearValues    = ["BETA", "2014", "2013", "2012", "2011", "pre2010"];
var checkboxStarValues    = ["5", "4", "3", "2", "1"];
var checkboxPriceValues   = ["£25.00+", "£25.00-£15.00", "£15.00-", "Free"];
var checkboxStaffValues   = ["Staff"];

$(document).ready(function() {
	$('.checkBoxFilter').prop('checked', false);
	
	$('.checkboxFilter').click(function() {gotoPage(0);});
	
	$('.filterTop').click(function()   {organisationMode = 0; gotoPage(0); return false;});
	$('.filterNew').click(function()   {organisationMode = 1; gotoPage(0); return false;});
	$('.filterHot').click(function()   {organisationMode = 2; gotoPage(0); return false;});
	$('.filterTrend').click(function() {organisationMode = 3; gotoPage(0); return false;});
});

function getContentFilterOrder() {
	var order;
	switch(organisationMode) {
		case 0 : order = "id ASC";  break;
		case 1 : order = "id DESC"; break;
		case 2 : order = "id ASC";  break;  
		case 3 : order = "id DESC"; break;  
	}
	return organisationMode;
}

function getContentConsoleFilters() {
	var filters = [];
	for(var i=0; i<checkboxConsoleValues.length; i++) {
		if($("input[type=checkbox][value="+ checkboxConsoleValues[i] +"]").is(':checked')) {
			filters.push(";"+checkboxConsoleValues[i].toLowerCase+";");
		}
	}
	
	if(filters.length == 0) {filters.push("");}
	return filters;
}

function getContentGenreFilters() {
	var filters = [];
	for(var i=0; i<checkboxGenreValues.length; i++) {
		if($("input[type=checkbox][value="+ checkboxGenreValues[i] +"]").is(':checked')) {
			filters.push(";"+checkboxGenreValues[i].toLowerCase+";");
		}
	}
	
	if(filters.length == 0) {filters.push("");}
	return filters;
}

function getContentYearFilters() {
	var filters = [];
	for(var i=0; i<checkboxYearValues.length; i++) {
		if($("input[type=checkbox][value="+ checkboxYearValues[i] +"]").is(':checked')) {
			filters.push(";"+checkboxYearValues[i].toLowerCase+";");
		}
	}
	
	if(filters.length == 0) {filters.push("");}
	return filters;
}

function getContentStarFilters() {
	var filters = [];
	for(var i=0; i<checkboxStarValues.length; i++) {
		if($("input[type=checkbox][value="+ checkboxStarValues[i] +"]").is(':checked')) {
			filters.push(";"+checkboxStarValues[i].toLowerCase+";");
		}
	}
	
	if(filters.length == 0) {filters.push("");}
	return filters;
}

function getContentPriceFilters() {
	var filters = [];
	for(var i=0; i<checkboxPriceValues.length; i++) {
		if($("input[type=checkbox][value="+ checkboxPriceValues[i] +"]").is(':checked')) {
			filters.push(";"+checkboxPriceValues[i].toLowerCase+";");
		}
	}
	
	if(filters.length == 0) {filters.push("");}
	return filters;
}

function getContentStaffFilters() {
	var filters = [];
	for(var i=0; i<checkboxStaffValues.length; i++) {
		if($("input[type=checkbox][value="+ checkboxStaffValues[i] +"]").is(':checked')) {
			filters.push(";"+checkboxStaffValues[i].toLowerCase+";");
		}
	}
	
	if(filters.length == 0) {filters.push("");}
	return filters;
}




