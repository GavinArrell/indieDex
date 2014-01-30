$('#rightContainer').ready(function() {
	
	$.ajax({
		type: 'GET',
		url: '../php/isLoggedIn.php',
		success: function(response) {
			if(response == "true") {showProfile();}
			else {showSignUp();}
		}
	});
	
});

function showProfile() {
	
}
