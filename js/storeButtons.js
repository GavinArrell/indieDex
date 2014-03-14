$(document).ready(function() {
	
	store_load(0);
	
	$('#storeButton_indieDex').click(function()   {store_load(0);});
	$('#storeButton_game1').click(function() {store_load(1);});
	$('#storeButton_game2').click(function()   {store_load(2);});
	$('#storeButton_game3').click(function() {store_load(3);});
	$('#storeButton_cart').click(function() {store_load(4);});
	
});

function store_load(button) {
	$('#storeIndieDex').hide();
	$('#storeGame1').hide();
	$('#storeGame2').hide();
	$('#storeGame3').hide();
	$('#storeCart').hide();
	
	switch(button) {
		case 0 : $('#storeIndieDex').show(); break;
		case 1 : $('#storeGame1').show(); break;
		case 2 : $('#storeGame2').show(); break;
		case 3 : $('#storeGame3').show(); break;
		case 4 : $('#storeCart').show(); break;
	}
	
	store_highlightButton(button);
}

function store_highlightButton(button) {
	
	$('.storeButton').removeClass('storeButtonSelected');
		
	if(button == 0) {$('#storeButton_indieDex').addClass('storeButtonSelected');}
	if(button == 1) {$('#storeButton_game1').addClass('storeButtonSelected');}
	if(button == 2) {$('#storeButton_game2').addClass('storeButtonSelected');}
	if(button == 3) {$('#storeButton_game3').addClass('storeButtonSelected');}
	if(button == 4) {$('#storeButton_cart').addClass('storeButtonSelected');}
}