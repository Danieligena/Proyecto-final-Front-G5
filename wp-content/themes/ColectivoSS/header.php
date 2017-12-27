<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Colectivo Sin Serif | Aprende Serigrafía</title>
	<!-- CSS & JS -->
	<?php wp_head(); ?>

</head>
<body>
	<!-- NAVBAR -->
	<nav class="navbar navbar-default navbar-fixed-top all-nav">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display--> 
		    <div class="navbar-header col-sm-3">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<h1>
					<a href="#">
						<img class="img-responsive ss-logo1" src="<?php bloginfo('template_url'); ?>/assets/img/ss-logo.svg" alt="Logo Reducido Colectivo Sin Serif">
						<img class="img-responsive ss-logo2 hidden" src="<?php bloginfo('template_url'); ?>/assets/img/sinserif-logo.svg" alt="Logo Colectivo Sin Serif">
					</a>
				</h1>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		    	<?php if ( has_nav_menu( 'header-menu' ) ) { ?>
					<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'menu_class' => 'nav navbar-nav navbar-right', 'container' => '' ) ); ?>
				<?php } ?>
		      <!-- <ul class="nav navbar-nav navbar-right">
		        <li class="active"><a href="#home">Inicio</a></li>
		        <li><a href="start.html">Empieza a Serigrafiar</a></li>
		        <li><a href="#contact">Contacto</a></li>
		      </ul> -->
		    </div>
		</div>
	</nav>
	<!-- END NAVBAR -->