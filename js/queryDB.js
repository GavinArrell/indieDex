var search = "";

$(document).ready(function() {
	
	$('#searchBar').focus(function() {queryDB_emptyVal();});
	$('#searchBar').blur(function() {queryDB_resetVal();});
	
	$('#searchBar').bind("enterKey", function(e) {
		if(queryDB_checkInput()) {gotoPage(0, true);}
	});
	$('#searchBar').keyup(function(e) {
		if(e.keyCode == 13) {
			$(this).trigger("enterKey");
		}
	});
		
	$('#queryDBButton').click(function() {
		if(queryDB_checkInput()) {gotoPage(0, true);}
	});
	
	
	
});
function queryDB_resetVal() {
	if($('#searchBar').val().length == 0) {
		$('#searchBar').val("Search Titles...");
		search = "";
	}
}
function queryDB_emptyVal() {
	$('#searchBar').val() = "";
}

function queryDB_checkInput() {
	
	if($('#searchBar').val().length > 0) {
		search = $('#searchBar').val() != "Search Titles..." ? $('#searchBar').val() : "";
		return true;
	}
	return false;
	
}

function queryDB_getSearch() {
	return search;
}

function queryDB_setSearch(val) {
	search = val;
}
