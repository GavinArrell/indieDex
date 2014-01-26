//HEADER FADE WITH SCROLL

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
	$('header').stop(true, false).fadeTo("", 1);
}
function header_fadeOut() {
	$('header').stop(true, false).fadeTo("", 0.2);
}

//HEADER CHILD MENUS

$(document).ready(function() {
	$('.headerGrandchild').hide();
	$('.headerChild').hover(
		function() {
			$(this).children(".headerGrandchild").show();
		},
		function() {
			$(this).children(".headerGrandchild").hide();
		}
	);
});
