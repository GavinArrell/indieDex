updateSession_updateBoth(0);

$(document).ready(function() {
	$('a').click(function() {
		updateSession_updateBoth(0);
	});
});

function updateSession_updateBoth(call) {
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
				htmlString += '<a href="profile.php?user='+users[i]+'">'+ users[i] +'</a>';
			}
			
			$('#onlineUsersSidebar').html(htmlString);
			
		},
		error: function() {
			error_log("phpCallsOnLoad.js -> phpCallsOnLoad_updateSession() ajax called error");
		}
	});
}
