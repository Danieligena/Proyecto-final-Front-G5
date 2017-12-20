$(document).ready(function(){
	//NAV - Entrega la clase ACTIVE al hacer click 
	$(".nav a").on("click", function(){
		$(".nav").find(".active").removeClass("active");
		$(this).parent().addClass("active");
	});

	//NAV LOGO - cambia el logo según el ancho

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

	// SLIDER - velocidad del carrousel

	$('.carousel').carousel({
   		interval: 2500,
   		pause: null
  	});

  	// SIDEBAR - start

  	$('.sidebar-btn').click(function(){
  		$('.sidebar').toggleClass('sidebar-active');
  		$(this).children().first().toggleClass('toggle');
  	})

	// JQUERY PLUGIN - llamado a smoothScroll

  	$('html').smoothScroll(300);

  	// JQUERY PLUGIN - llamado a slick

  	$('.fotolito').slick({
		dots: false,
		infinite: false,
		speed: 300,
		slidesToShow: 1,
		slidesToScroll: 1,
		responsive: [
			{
				breakpoint: 1024,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
					infinite: true,
				}
			},
			{
				breakpoint: 600,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1
				}
			},
			{
				breakpoint: 480,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1
				}
			}
		]
	});
});