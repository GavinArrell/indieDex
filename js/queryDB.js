var search = "";
var defaultVal = true;
var keyWait = 0;

$(document).ready(function() {
	
	$('#searchBar').focus(function() {queryDB_emptyVal();});
	$('#searchBar').blur(function() {queryDB_resetVal();});
	
	$('#searchBar').keyup(function(e) {
		search = $('#searchBar').val();
		
		keyWait++;
		setTimeout(function() {
			if(keyWait == 1) {gotoPage(0, false); keyWait--;}
			else {keyWait--;}
		}, 375);
	});
	
});
function queryDB_resetVal() {
	if($('#searchBar').val() == "") {
		$('#searchBar').val("Search Titles...");
		defaultVal = true;
	}
	else {
		defaultVal = false;
	}
}
function queryDB_emptyVal() {
	if(defaultVal) {$('#searchBar').val("");}
}

function queryDB_checkInput() {
	
	search = !defaultVal ? $('#searchBar').val() : "";
	return true;
	
}

function queryDB_getSearch() {
	return search;
}

function queryDB_setSearch(val) {
	search = val;
}
