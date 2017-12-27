<!-- FOOTER -->
	<footer class="container-fluid">
		<div class="row">
			<div class="col-xs-8 col-xs-offset-2 col-md-4 col-md-offset-4">
				<h1>
					<a href="#home">
						<img class="img-responsive logo-footer" src="<?php bloginfo('template_url'); ?>/assets/img/sinserif-logo.svg" alt="Logo Colectivo Sin Serif">
					</a>
				</h1>
				<?php get_template_part('share', 'below') ?>
				<p class="text-center">
					2017 - 2018
				</p>
			</div>
		</div>
	</footer>
	<!-- END FOOTER -->
	<!-- GOOGLE MAPS -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBsO2qJ9mNbwzKXy2m6BQ8ogIkuYLgZZoU&callback=initMap" async defer></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/js/api.js"></script>
	<!-- Google Analytics -->
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-111378506-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-111378506-1');
	</script>
</body>
</html>