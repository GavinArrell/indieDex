$(document).ready(function() {
	$('.contentMore').hide();
	
	$('.readMore').live("click", function() {
		$('.contentMore').hide();

		if($(this).text() == "Read More") {
			$('.readMore').text("Read More");
			$(this).text("Read Less");
			$(this).parent().children('.contentMore').show();
		}
		else {$('.readMore').text("Read More");}
	});
});