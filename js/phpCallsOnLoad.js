$(document).ready(function() {

	//phpCallsOnLoad_updateSession(0);
	
});

phpCallsOnLoad_updateSession(0);

function phpCallsOnLoad_updateSession(call) {
	
	/* CALL
	 * 0 - update timestamp AND refresh online list
	 * 1 - update timestamo
	 * 2 - refresh online list
	 */
	
	$.ajax({
		type: "GET",
		url: '../php/updateSession.php',
		dataType: 'JSON',
		data: {
			'call': call
		},
		success: function(users) {
			var htmlString = '<h4 class="center">'+ users.length +' Users Online</h4>';
			
			for(var i=0; i<users.length; i++) {
				if(i > 0) {htmlString += ', ';}
				htmlString += '<a href="">'+ users[i] +'</a>';
			}
			
			$('#onlineUsersSidebar').html(htmlString);
			
		},
		error: function() {
			error_log("phpCallsOnLoad.js -> phpCallsOnLoad_updateSession() ajax called error");
		}
	});
	
}
