$(document).ready(function(){
	//NAV - Entrega la clase ACTIVE al hacer click 
	$(".nav a").on("click", function(){
		$(".nav").find(".active").removeClass("active");
		$(this).parent().addClass("active");
	});

	//NAV LOGO - cambia el logo según el ancho

	var mediaquery = window.matchMedia("(max-width: 768px)");
	var logo2 = document.querySelector('.ss-logo2');

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

  	// SIDEBAR - start - vanilla JS

  	/*$('.sidebar-btn').click(function(){
  		$('.sidebar').toggleClass('sidebar-active');
  		$(this).children().first().toggleClass('toggle');
  	})*/

  	var sidebarBtn = document.querySelector('.sidebar-btn');
  	var sidebar = document.querySelector('.sidebar');
  	sidebarBtn.addEventListener('click', function(){
  		sidebar.classList.toggle('sidebar-active');
  		this.children[0].classList.toggle('toggle');
  	})

	// JQUERY PLUGIN - llamado a smoothScroll

  	$('html').smoothScroll(300);

  	// JQUERY PLUGIN - llamado a slick

  	var slickParams = 
  	{
		dots: false,
		infinite: false,
		speed: 300,
		adaptiveHeight: true,
		responsive: [
			{
				breakpoint: 1800,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 2,
				}
			},
			{
				breakpoint: 1024,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1,
				}
			},
			{
				breakpoint: 900,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1
				}
			}
		]
	}

  	$('.photolith').slick(slickParams);
  	$('.frame').slick(slickParams);
});