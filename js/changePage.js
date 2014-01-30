var currentPage = 0;
var lastPage = 0;

var currentTable;
var currentHTML;

$(document).ready(function() {
	currentPage = 0;
	lastPage = 0;
	
	
	//get current table
	switch(general_getCurrentFileNameNoType()) {
		case "index"   : currentTable = "contentnews_table";   break;
		case "review" : currentTable = "contentreviews_table"; break;
		case "games"   : currentTable = "contentgames_table";  break;
		default : currentTable = "contentnews_table"; break;
	}
	
	$('#pageButtonFirst').click(function() {gotoPage(0, true);});
	$('#pageButton1').click(function()     { if($(this).html() != "-") {movePage(0);}} );
	$('#pageButton2').click(function()     { if($(this).html() != "-") {movePage(1);}} );
	$('#pageButton3').click(function()     { if($(this).html() != "-") {movePage(2);}} );
	$('#pageButton4').click(function()     { if($(this).html() != "-") {movePage(3);}} );
	$('#pageButton5').click(function()     { if($(this).html() != "-") {movePage(4);}} );
	$('#pageButtonLast').click(function()  {gotoPage(lastPage-1, true);});
	$('#pageButtonIndex').click(function() {startCustomPageMove();});
});

function gotoPage(index, jump) {
	showLoad();
	
	if(jump) {$('html, body').animate({scrollTop: 250}, 'slow');}
	$.ajax({
		type: 'GET',
		url: '../showcontent.php',
		dataType: 'JSON',
		data: {
			'index'          : index,
			'table'          : currentTable,
			'order'          : getContentFilterOrder(),
			'consoleFilters' : getContentConsoleFilters(),
			'genreFilters'   : getContentGenreFilters(),
			'yearFilters'    : getContentYearFilters(),
			'starFilters'    : getContentStarFilters(),
			'priceFilters'   : getContentPriceFilters(),
			'staffFilters'   : getContentStaffFilters(),
			'titleSearch'    : queryDB_getSearch()
		},
		success: function(data) {
			var htmlString = data[0] != "" ? data[0] : 'Looks like we don\'t have any games like that, <a href="index.php">know of some?</a>';
			
			currentPage = index;
			lastPage = data[1];
			updatePageNumbers();
			
			$('#contentItemContainer').html(htmlString);
			$('.contentMore').hide();
		},
		error: function() {
			error_log("changePage.js -> gotoPage() ajax called error");
		}
	});
	
	//window.history.replaceState("", "", "/page="+(index+1));
}

function showLoad() {
	
	currentHTML = $('#contentItemContainer').html();
	$('#contentItemContainer').html('<img id="contentLoader" src="../img/loading.gif">');
	
}

function movePage(buttonID) {
	if(currentPage <= 5) {
		
		var temp = 0;
		if(buttonID < lastPage) {temp = buttonID;}
		else {temp = lastPage-1;}
		
		gotoPage(temp, true);
		return;
	}
	
	if(currentPage > lastPage-5) {
		gotoPage(lastPage-4+buttonID, true);
		return;
	}

	switch(buttonID) {
		case 0: gotoPage(currentPage-2, true); break;
		case 1: gotoPage(currentPage-1, true); break;
		case 2: gotoPage(currentPage, true);   break;
		case 3: gotoPage(currentPage+1, true); break;
		case 4: gotoPage(currentPage+2, true); break;
	}
}

function startCustomPageMove() {
	var index = prompt("What page would you like to go to?", currentPage+1);
		 if(index == null) {alert("You've entered an invalid page.");}
	else if(isNaN(index))  {alert("You must enter a number.");}
	else if(index < 1)     {alert("You must enter a positive value.");}
	else if(parseFloat(index) != parseInt(index)) {alert("You must enter a whole number.");}
	else {
		if(index > lastPage) {alert("We don't have that many pages!\r\nTaking you to page "+lastPage+" instead."); index = lastPage;}
		gotoPage(index-1, true);
	}
}

function updatePageNumbers() {
	$('#pageButton1').html('-');
	$('#pageButton2').html('-');
	$('#pageButton3').html('-');
	$('#pageButton4').html('-');
	$('#pageButton5').html('-');
	
	if(currentPage < 3) {
		if(lastPage >= 1) {$('#pageButton1').html(1);}
		if(lastPage > 1)  {$('#pageButton2').html(2);}
		if(lastPage > 2)  {$('#pageButton3').html(3);}
		if(lastPage > 3)  {$('#pageButton4').html(4);}
		if(lastPage > 4)  {$('#pageButton5').html(5);}
		highlightCurrentPage();
		return;
	}
	
	if(currentPage > lastPage-4) {
		$('#pageButton1').html(lastPage-4);
		$('#pageButton2').html(lastPage-3);
		$('#pageButton3').html(lastPage-2);
		$('#pageButton4').html(lastPage-1);
		$('#pageButton5').html(lastPage);
		highlightCurrentPage();
		return;
	}
	
	$('#pageButton1').html((currentPage+1)-2);
	$('#pageButton2').html((currentPage+1)-1);
	$('#pageButton3').html((currentPage+1));
	$('#pageButton4').html((currentPage+1)+1);
	$('#pageButton5').html((currentPage+1)+2);
	
	highlightCurrentPage();
}

function highlightCurrentPage() {
	clearHighlighting();
	
	switch(currentPage) {
		case 0          : $('#pageButton1').addClass("pageButtonSelected"); break;
		case 1          : $('#pageButton2').addClass("pageButtonSelected"); break;
		case lastPage-2 : $('#pageButton4').addClass("pageButtonSelected"); break;
		case lastPage-1 : $('#pageButton5').addClass("pageButtonSelected"); break;
		default         : $('#pageButton3').addClass("pageButtonSelected"); break;
	}
	
}

function clearHighlighting() {
	$('#pageButton1').removeClass("pageButtonSelected");
	$('#pageButton2').removeClass("pageButtonSelected");
	$('#pageButton3').removeClass("pageButtonSelected");
	$('#pageButton4').removeClass("pageButtonSelected");
	$('#pageButton5').removeClass("pageButtonSelected");
}
