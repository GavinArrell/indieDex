$(document).ready(function() {
	
	$('.accountManagementButton').click(function() {
		accountManagement_highlightButton($(this));
		switch($(this).attr('id')) {
			case 1 : accountManagement_loadEditInfo();      alert("hi"); break;
			case 2 : accountManagement_loadNotifications(); break;
			case 3 : accountManagement_loadMessageBoard();  break;
			case 4 : accountManagement_loadStatus();       break;
		}
	});
	
});

function accountManagement_loadEditInfo() {
	$('#accountStatus').hide();
	
	$('#accountInfoEditTable').show();
}

function accountManagement_highlightButton(button) {
	$('.accountManagementButton').css("color: white;");
	$(this).css("color: orange;");
}
