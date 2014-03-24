var itemList = [];

$(document).ready(function() {
	
	$('.storeAddItem').live('click', function() {
		

		var itemBar = $(this).parent().html().replace('storeAddItem">Add', 'storeRemoveItem itemNo_'+ itemList.length +'">Remove');
		var itemImg = $(this).closest('.storeItem').find('.storeItemImageCont').html();

		itemList.push('<div class="storeItem"> <div class="storeItemImageCont"> '+ itemImg +' </div> <div class="storeItemBar"> ' + itemBar + ' </div> </div>');

		reloadCart();
		
	});
	
	$('.storeRemoveItem').live('click', function() {
		
		var searchNoStart = $(this).parent().html().indexOf('itemNo_') + 7;
		var searchNoEnd   = $(this).parent().html().indexOf('>Remove');
		
		var itemNo = parseInt($(this).parent().html().substring(searchNoStart, searchNoEnd));
		itemList[itemNo] = "";
		
		reloadCart();
		
	});
	
	$('.storeBuyItem').live('click', function() {
		
		var count = 0;
		for(var i=0; i<itemList.length; i++) {
			if(itemList[i] != "") {count++;}
		}
		
		if(count == 0) {alert('There are no items in your cart!');}
		else {alert('You bought '+ count +' items! Thanks and enjoy!');}
		
		itemList = [];
		reloadCart();
		
	});
	
});

function reloadCart() {
	
	var htmlString = '<div id="storeItemsContainer">';

	for(var i=0; i<itemList.length; i++) {
		htmlString += itemList[i];
	}
	
	htmlString += '<div id="storeBuyItemCont"><div class="button storeBuyItem">Checkout</div></div></div>';
	$('#storeCart').html(htmlString);
}
