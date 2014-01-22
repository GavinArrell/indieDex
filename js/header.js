$(document).ready(function() {
  	$('header').hover(
  		function() {
  			header_fadeIn();
  		},
  		function() {
  			if($(window).scrollTop() >0) {header_fadeOut();}
  		}
  	);
  });
  
$(window).scroll(function() {
	var header_isHovered = $('header').is(':hover');
	
	if($(window).scrollTop() > 0 && !header_isHovered) {header_fadeOut();}
	else {header_fadeIn();}
});

function header_fadeIn() {
	$('header').stop(true, false).fadeTo("slow", 1);
}
function header_fadeOut() {
	$('header').stop(true, false).fadeTo("slow", 0.2);
}
