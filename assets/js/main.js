$(document).ready(function(){
	$(".nav a").on("click", function(){
		$(".nav").find(".active").removeClass("active");
		$(this).parent().addClass("active");
	});

	var mediaquery = window.matchMedia("(max-width: 768px)");
	var logo2 = document.querySelector('.ss-logo2');

	/* transformar totalmente a vanilla js */

	$(function() {
	    if($(window).width() <= 768){
	        logo2.classList.add("hidden");
	    }
	    else {
	        logo2.classList.remove("hidden");
	    }
	});
	
	function navbarlogo(mediaquery) {
		if (mediaquery.matches) {
			logo2.classList.add("hidden");
		} else {
			logo2.classList.remove("hidden");
		}
	};

	mediaquery.addListener(navbarlogo);

	$('.carousel').carousel({
   		interval: 2500,
   		pause: null
  	});

  	$('html').smoothScroll(300);
});