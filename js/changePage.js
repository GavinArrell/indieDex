var currentPage = 0;
var lastPage = 0;

$(document).ready(function() {
	getLastPage();
	updatePageNumbers();
	
	$('#pageButtonFirst').click(function() {gotoPage(0); updatePageNumbers();});
	$('#pageButton1').click(function() {movePage(0); updatePageNumbers();});
	$('#pageButton2').click(function() {movePage(1); updatePageNumbers();});
	$('#pageButton3').click(function() {movePage(2); updatePageNumbers();});
	$('#pageButton4').click(function() {movePage(3); updatePageNumbers();});
	$('#pageButton5').click(function() {movePage(4); updatePageNumbers();});
	$('#pageButtonLast').click(function() {gotoPageIndex(lastPage); updatePageNumbers();});
	$('#pageButtonIndex').click(function() {startCustomPageMove(); updatePageNumbers();});
});

function gotoPage(index) {
	$.ajax({
		type: 'POST',
		url: '../showcontent.php',
		data: {
			value: index,
			action: "gotoPage",
			order: getContentFilterOrder(),
			consoleFilters: getContentConsoleFilters(),
			genreFilters: getContentGenreFilters(),
			yearFilters: getContentYearFilters(),
			starFilters: getContentStarFilters(),
			priceFilters: getContentPriceFilters(),
			staffFilters: getContentStaffFilters()
		},
		success: function(data) {
			var htmlString = "";
			for(var i=0; i<data.length; i++) {
				htmlString += data[i];
			}
			
			$("#contentItemContainer").html(htmlString);
			$('.contentMore').hide();
		},
		error: function() {
			alert("ERROR");
		}
	});
}

function movePage(buttonID) {
	if(currentPage <= 5) {
		
		var temp = 0;
		if(buttonID < lastPage) {temp = buttonID;}
		else {temp = lastPage-1;}
		
		gotoPage(temp);
		currentPage = temp;
		return;
	}
	
	if(currentPage > lastPage-5) {
		gotoPage(lastPage-4+buttonID);
		currentPage = lastPage-4+buttonID;
		return;
	}

	switch(buttonID) {
		case 0: gotoPage(currentPage-2); currentPage -= 2; break;
		case 1: gotoPage(currentPage-1); currentPage -= 1; break;
		case 2: gotoPage(currentPage);                     break;
		case 3: gotoPage(currentPage+1); currentPage += 1; break;
		case 4: gotoPage(currentPage+2); currentPage += 2; break;
	}
}

function startCustomPageMove() {
	var index = prompt("What page would you like to go to?", currentPage+1);
		 if(index == null) {alert("You've entered an invalid page.");}
	else if(isNaN(index))  {alert("You must enter a number.");}
	else if(index < 1)     {alert("You must enter a positive value.");}
	else if(parseFloat(index) != parseInt(index)) {alert("You must enter a whole number.");}
	else {
		if(index > lastPage) {index = lastPage;}
		gotoPage(index-1);
		currentPage = index-1;
	}
}

function getLastPage() {
	$.ajax({
		type: 'POST',
		url: '../showcontent.php',
		data: {
			value: -1,
			action: "getLastPage",
			order: -1,
			consoleFilters: -1,
			genreFilters: -1,
			yearFilters: -1,
			starFilters: -1,
			priceFilters: -1,
			staffFilters: -1
		},
		success: function(data) {
			lastPage = data;
		},
		error: function() {
			alert("ERROR");
		}
	});
}

function updatePageNumbers() {
	$('#pageButton1').html('-');
	$('#pageButton2').html('-');
	$('#pageButton3').html('-');
	$('#pageButton4').html('-');
	$('#pageButton5').html('-');
	
	if(currentPage < 3) {
		if(currentPage >= 0) {$('#pageButton1').html(1);}
		if(currentPage > 0)  {$('#pageButton2').html(2);}
		if(currentPage > 1)  {$('#pageButton3').html(3);}
		if(currentPage > 2)  {$('#pageButton4').html(4);}
		if(currentPage > 3)  {$('#pageButton5').html(5);}
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
	if(currentPage < 2) {
		switch(currentPage) {
			case 0 : $('#pageButton1').css("background-color", "#999999"); return;
			case 1 : $('#pageButton2').css("background-color", "#999999"); return;
			default: break;
		}
	}
	
	if(currentPage > lastPage-3) {
		switch(currentPage) {
			case lastPage-2 : $('#pageButton4').css("background-color", "#999999"); return;
			case lastPage-1 : $('#pageButton5').css("background-color", "#999999"); return;
			default: break;
		}
	}
	
	$('#pageButton3').css("background-color", "#999999");
}
