	<?php get_header(); ?>
	<!-- SLIDER -->
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
	<!-- Wrapper for slides -->
		<div id="home" class="carousel-inner" role="listbox">
			<div class="item active bg1"></div>

			<div class="item bg2"></div>

			<div class="item bg3"></div>
		</div>
		<!-- Controls -->
		<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left hidden-xs hidden-sm" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right hidden-xs hidden-sm" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	<header class="container-fluid">
		<div class="row">
			<div class="col-xs-12 col-md-6 col-md-offset-3 text-center title">
				<h1><strong>Bienvenid@ a nuestro primer Manual Básico de Serigrafía.</strong></h1>
			</div>
		</div>
	</header>
	<!-- END SLIDER -->
	<!-- MAIN -->
	<main>
		<div class="container-fluid intro">
			<div class="row">
				<div class="hidden-xs hidden-sm col-md-2 col-md-offset-10">
					<?php get_template_part('drop'); ?>
				</div>
				<div class="col-xs-12 col-md-8 col-md-offset-2 text-center intro-title">
					<h2><strong>CONSIDERACIONES BÁSICAS</strong></h2>
				</div>
			</div>
		</div>
		<div class="container-fluid intro-1">
			<div class="row">	
				<div class="col-xs-12 col-md-6 text-center intro-1col">
					<h3><strong>¿Qué Aprenderás?</strong></h3>
					<p>Los elementos necesarios, insumos, materiales, procedimientos y cuidados para que puedas comenzar a realizar tus impresiones en serigrafía usando telas (poleras, polerones, trozos de tela, etc.) y le des el uso que estimes conveniente. Siempre es bueno aprender cosas nuevas, más si ya tienes un interés previo.</p>
				</div>
				<div class="col-xs-12 col-md-6 text-center intro-1col">
					<h3><strong>Clima y Tintas</strong></h3>
					<p>Antes de empezar, y como dato previo, las tintas que usaremos para ejemplificar y llevar a cabo las impresiones son en base a agua (hay otras tintas que tienen como base otros elementos, como tintas al óleo o PVC). Una de las tantas características de estas tintas, es que rinden más a ciertas temperaturas.</p>
				</div>
				<div class="col-xs-12 col-md-6 col-md-offset-3 intro-table text-center">
					<table class="table">
						<tr>
							<th class="text-center">Temperatura</th>
							<th class="text-center">¿Es Óptimo?</th>
						</tr>
						<tr>
						  <td>Menor a 5°</td>
						  <td>Un poco helado, pero rinde bien</td>
						</tr>
						<tr>
						  <td>Entre 5° y 17°</td>
						  <td>Perfecto, rinde muy bien</td>
						</tr>
						<tr>
						  <td>Entre 18° y 25°</td>
						  <td>Todavía rinde, pero menos</td>
						</tr>
						<tr>
						  <td>Mayor a 26°</td>
						  <td>Rinde 2 o 3 pasadas máximo</td>
						</tr>
					</table>
				</div>
				<div class="col-xs-12 col-md-8 col-md-offset-2 text-center intro-2">
					<h3><strong>Revisa el clima actual en donde estés</strong></h3>
				</div>
				<div class="container-fluid intro-3">
					<div class="row">
						<div class="col-xs-12 col-md-4 col-md-offset-1 text-center">
							<div class="form-group">
								<select class="form-control select">
									<option>Selecciona una ubicación</option>
									<option value="ari">Arica, Región de Arica y Parinacota</option>
									<option value="iqq">Iquique, Región de Tarapacá</option>
									<option value="antof">Antofagasta, Región de Antofagasta</option>
									<option value="copia">Copiapó, Región de Atacama</option>
									<option value="lase">La Serena, Región de Coquimbo</option>
									<option value="valpo">Valparaíso, Región de Valparaíso</option>
									<option value="scl">Santiago, Región Metropolitana</option>
									<option value="rcg">Rancagua, Región de O'Higgins</option>
									<option value="tlc">Talca, Región del Maule</option>
									<option value="ccp">Concepción, Región del Bío-Bío</option>
									<option value="tmc">Temuco, Región de la Araucanía</option>
									<option value="vldv">Valdivia, Región de Los Ríos</option>
									<option value="montt">Puerto Montt, Región de Los Lagos</option>
									<option value="coyha">Coyhaique, Región de Aysén</option>
									<option value="ptaar">Punta Arenas, Región de Magallanes</option>
								</select>
							</div>
							<h4 class="text-center summary"></h4>
							<img src="<?php bloginfo("template_url"); ?>/assets/img/weather/thermometer.png" class="img-responsive center-block img-weather">
						</div>
						<div id="map" class="col-xs-12 col-md-6"></div>
						<div class="col-xs-12 col-md-8 col-md-offset-2 text-center intro-4">
							<div id="start"></div>
							<p>
								<strong>
									Anímate y comienza a seguir el manual. 
								</strong>
							</p>
							<button class="btn button-start">
								<a href="http://186.64.118.50/~feg5daniela/start/">
									¡A EMPEZAR!
								</a>
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
	<!-- END MAIN -->
	<?php get_template_part('contact'); ?>

	<?php get_footer(); ?>