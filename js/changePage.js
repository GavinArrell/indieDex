var currentPage = 1;
var lastPage = 1;

$(document).ready(function() {
	$('#pageButtonFirst').click(function() {gotoPage(0);});
	$('#pageButton1').click(function() {movePage(0);});
	$('#pageButton2').click(function() {movePage(1);});
	$('#pageButton2').click(function() {movePage(2);});
	$('#pageButton4').click(function() {movePage(3);});
	$('#pageButton5').click(function() {movePage(4);});
	$('#pageButtonLast').click(function() {gotoPageIndex(getLastPage());});
	$('#pageButtonIndex').click(function() {startCustomPageMove();});
});

function gotoPage(index) {
	$.ajax({
		type: 'post',
		url: '../showcontent.php',
		data: {
			value: index,
			action: "gotoPage"
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
	if(currentPage < 5) {
		gotoPage(buttonID);
		currentPage = buttonID;
		return;
	}
	
	if(currentPage > getLastPage()-5) {
		gotoPage(getLastPage()-4+buttonID);
		currentPage = getLastPage()-4+buttonID;
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
	var index = prompt("What page would you like to go to?", currentPage);
	if(index != null && index > 0 && index < getLastPage+1) {
		gotoPage(index-1);
		currentPage = index;
	}
}

function getLastPage() {
	$.ajax({
		type: 'post',
		url: '../showcontent.php',
		data: {
			value: index,
			action: "getLastPage"
		},
		success: function(data) {
			lastPage = data;
			alert(data);
		},
		error: function() {
			alert("ERROR");
		}
	});
}
