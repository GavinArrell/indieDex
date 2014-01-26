$(document).ready(function() {
	
	accountManagement_load(2);
	
	$('#accountManagementButton_editInfo').click(function() {accountManagement_load(0);});
	$('#accountManagementButton_notifs').click(function()   {accountManagement_load(1);});
	$('#accountManagementButton_messages').click(function() {accountManagement_load(2);});
	$('#accountManagementButton_status').click(function()   {accountManagement_load(3);});
	
});

function accountManagement_load(button) {
	$('#accountStatus').hide();
	$('#accountNotifications').hide();
	$('#accountMessageBoard').hide();
	$('#accountInfoEditTable').hide();
	
	switch(button) {
		case 0 : $('#accountInfoEditTable').show(); break;
		case 1 : $('#accountNotifications').show(); break;
		case 2 : $('#accountMessageBoard').show();  break;
		case 3 : $('#accountStatus').show();        break;
	}
	
	accountManagement_highlightButton(button);
}

function accountManagement_highlightButton(button) {
	
	$('.accountManagementButton').removeClass('accountManagementButtonSelected');
		
	if(button == 0) {$('#accountManagementButton_editInfo').addClass('accountManagementButtonSelected');}
	if(button == 1) {$('#accountManagementButton_notifs').addClass('accountManagementButtonSelected');}
	if(button == 2) {$('#accountManagementButton_messages').addClass('accountManagementButtonSelected');}
	if(button == 3) {$('#accountManagementButton_status').addClass('accountManagementButtonSelected');}
}
