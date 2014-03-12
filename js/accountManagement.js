$(document).ready(function() {
	
	profileManagement_load(3);
	
	$('#profileManagementButton_notifs').click(function()   {profileManagement_load(0);});
	$('#profileManagementButton_messages').click(function() {profileManagement_load(1);});
	$('#profileManagementButton_status').click(function()   {profileManagement_load(2);});
	$('#profileManagementButton_editInfo').click(function() {profileManagement_load(3);});
	
});

function profileManagement_load(button) {
	$('#profileNotifications').hide();
	$('#profileMessageBoard').hide();
	$('#profileStatus').hide();
	$('#profileInfoEditTable').hide();
	
	switch(button) {
		case 0 : $('#profileNotifications').show(); break;
		case 1 : $('#profileMessageBoard').show();  break;
		case 2 : $('#profileStatus').show();        break;
		case 3 : $('#profileInfoEditTable').show(); break;
	}
	
	profileManagement_highlightButton(button);
}

function profileManagement_highlightButton(button) {
	
	$('.profileManagementButton').removeClass('profileManagementButtonSelected');
		
	if(button == 0) {$('#profileManagementButton_notifs').addClass('profileManagementButtonSelected');}
	if(button == 1) {$('#profileManagementButton_messages').addClass('profileManagementButtonSelected');}
	if(button == 2) {$('#profileManagementButton_status').addClass('profileManagementButtonSelected');}
	if(button == 3) {$('#profileManagementButton_editInfo').addClass('profileManagementButtonSelected');}
}
