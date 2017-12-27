<?php get_header(); ?>

<body>
	<!-- START SIDEBAR -->
	<div class="sidebar">
		<ul>
			<li><a href="#photolith">1. Fotolito</a></li>
			<li><a href="#frame">2. Bastidor</a></li>
			<li><a href="#developing">3. Revelado</a></li>
			<li><a href="#print">4. Impresión</a></li>
			<li><a href="#where">5. ¿Dónde Comprar?</a></li>
			<li><a href="#results">6. Resultados</a></li>
		</ul>
	</div>
	<button class="sidebar-btn">
		<i class="fa fa-plus plus" aria-hidden="true"></i>
		<span> PASOS</span>
	</button>
	<!-- END START SIDEBAR -->
	<!-- HEADER -->
	<div class="container-fluid start-intro">
		<div class="row">
			<div class="col-xs-12 col-md-6 col-md-offset-3 text-center">
				<h2><strong>¡EMPECEMOS!</strong></h2>
				<h4>El manual está dividido en 4 partes donde enlistaremos los materiales necesarios y el proceso para llevar a cabo cada una de ellas. <strong>Al final encontrarás recomendaciones de dónde encontrar y comprar los materiales necesarios.</strong></h4>

			</div>
		</div>
	</div>
	<!-- END HEADER -->
	<!-- MAIN -->
	<!-- 1 PHOTOLITH -->
	<main>
		<div class="container-fluid start-title1">
			<div class="row">
				<div class="col-xs-12 col-md-6 col-md-offset-3 text-center">
					<h3>
						<strong>
						1 - CREANDO EL FOTOLITO
						</strong>
					</h3>
				</div>
			</div>
		</div>
		<div id="photolith"></div>
		<div class="container-fluid photolith">
			<div class="row">
				<div class="col-xs-12">
					<h4 class="text-center">Materiales Necesarios</h4>
				</div>

				<?php
					$arg = array(
						'post_type'		 => 'items1',
						'posts_per_page' => 4
					);
				
					$get_arg = new WP_Query( $arg );
				
					while ( $get_arg->have_posts() ) {
						$get_arg->the_post();
					?>
						<div class="col-xs-12 col-md-6 text-center <?php the_field('clase'); ?>">
							<?php the_post_thumbnail('items'); ?>
							<p><strong><?php the_title(); ?></strong></p>
						</div>
				
					<?php } wp_reset_postdata();
				?>

			</div>
			<div class="row">
				<div class="col-xs-12">
					<h4 class="text-center">Proceso</h4>
				</div>
				<div class="col-xs-12 col-md-8 col-md-offset-2 text-center photo-item">
					<p>1. Imprime en blanco y negro la imagen que quieras imprimir después en serigrafía. Te recomendamos que para empezar sea relativamente simple pero que te guste mucho para que te motive ver los resultados.</p>
				</div>
				<div class="col-xs-12 col-md-8 col-md-offset-2 text-center photo-item">
					<p>2. Una vez impreso tu diseño (y armado, si es que lo imprimiste por partes), colócalo en una superficie plana y fíjalo en las orillas con masking tape. Corta un trozo de papel diamante del mismo tamaño del diseño y ponlo encima de la impresión; asegúralo de igual forma.</p>
				</div>
				<div class="col-xs-12 col-md-8 col-md-offset-2 text-center photo-item">
					<p>3. Con los sharpies y rotuladores traspasa el diseño al papel diamante, el que terminará siendo tu fotolito.</p>
				</div>
				<div class="col-xs-12 col-md-8 col-md-offset-2 text-center photo-item">
					<p>4. Mientras mejor definido esté tu diseño, mejor se revelará en el bastidor y luego en tu prenda.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<h4 class="text-center">Proceso</h4>
				</div>
				<div class="col-xs-12 col-md-8 col-md-offset-2 text-center photo-item">
					<p>Otra opción a todo este proceso,es mandar a imprimir en papel diamante o en micas transparente para asegurar una mejor calidad de revelado y ahorra algo de tiempo.</p>
				</div>
				<div class="col-xs-12 col-md-8 col-md-offset-2 text-center photo-item">
					<p>Si quieres probar con un diseño más grande que el tamaño carta u oficio, te recomendamos crear tu imagen a tamaño real y dividirla usando el programa <a href="http://posterazor.sourceforge.net/" target="_blank">PosteRazor</a>, el que te permite dividir una imagen sin importar el tamaño en varias hojas del tamaño que tu quieras, así, después de imprimir sólo debes unir las páginas correspondientes.</p>
				</div>
			</div>
		</div>
		<!-- END 1 PHOTOLITH -->
		<!-- 2 FRAME -->
		<div class="container-fluid start-title2">
			<div class="row">
				<div class="col-xs-12 col-md-6 col-md-offset-3 text-center">
					<h3>
						<strong>
						2 - ARMANDO EL BASTIDOR
						</strong>
					</h3>
				</div>
			</div>
		</div>
		<div id="frame"></div>
		<div class="container-fluid frame">
			<div class="row">
				<div class="col-xs-12">
					<h4 class="text-center">Materiales Necesarios</h4>
				</div>

				<?php
					$arg = array(
						'post_type'		 => 'items2',
						'posts_per_page' => 6
					);
				
					$get_arg = new WP_Query( $arg );
				
					while ( $get_arg->have_posts() ) {
						$get_arg->the_post();
					?>
						<div class="col-xs-12 col-md-6 text-center <?php the_field('clase'); ?>">
							<?php the_post_thumbnail('items'); ?>
							<p><strong><?php the_title(); ?></strong></p>
						</div>
				
					<?php } wp_reset_postdata();
				?>

			</div>
			<div class="row">
				<div class="col-xs-12">
					<h4 class="text-center">Proceso</h4>
				</div>
				<div class="col-xs-12 col-md-8 col-md-offset-2 text-center frame-item">
					<p>1. Cortar o pedir dimensionados los listones según el tamaño de tu bastidor. Considera que el área útil es diferente al área total del bastidor, donde el área útil debe exceder al menos en 6 u 8 cm. por lado con respecto al diseño que ya tienes listo en tu fotolito. </p>
				</div>
				<div class="col-xs-12 col-md-8 col-md-offset-2 text-center frame-item">
					<p>2. Clava los listones para que le des forma al bastidor.</p>
				</div>
				<div class="col-xs-12 col-md-8 col-md-offset-2 text-center frame-item">
					<p>3. Moja un poco la tela y ponla encima del marco de tu bastidor</em></p>
				</div>
				<div class="col-xs-12 col-md-8 col-md-offset-2 text-center frame-item">
					<p>3.a Una vez posicionada la tela sobre el bastidor, engrapa un lado de la tela a la madera. Coloca grapas en forma seguida y en diagonal para evitar que se desgarre la tela</p>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<h4 class="text-center">Proceso</h4>
				</div>
				<div class="col-xs-12 col-md-8 col-md-offset-2 text-center frame-item">
					<p>3.b Pídele a tu amigo/a que estire un lado adyacente y el opuesto al que ya está engrapado. Debe hacerlo con fuerza pero cuidando que la tela no se deforme. Cuando vean que hay un lado bien puesto, engrapa un lado adyacente del que ya está listo. </p>
				</div>
				<div class="col-xs-12 col-md-8 col-md-offset-2 text-center frame-item">
					<p>3.c Siguiendo el método anterior y sin olvidar tensar fuertemente la tela engrapa los lados restantes</p>
				</div>
				<div class="col-xs-12 col-md-8 col-md-offset-2 text-center frame-item">
					<p>4. Finalmente tendrás tu bastidor completo y tensado. Puede que este proceso te tome más práctica para que quede bien, pero haz la prueba todas las veces que sea necesario, ya que un bastidor bien tenso es clave para la calidad de impresión y duración que pueda entregar.</em></p>
				</div>
				<div class="col-xs-12 col-md-8 col-md-offset-2 text-center frame-item">
					<p><em>Al igual que con la impresión del fotolito, siempre puedes mandar a realizar tu bastidor, eligiendo marco de madera o aluminio y la calidad de la tela.</em></p>
				</div>
			</div>
		</div>
		<!-- END 2 FRAME -->
		<!-- 3 DEVELOPING -->
		<div class="container-fluid start-title1">
			<div class="row">
				<div class="col-xs-12 col-md-6 col-md-offset-3 text-center">
					<h3>
						<strong>
						3 - REVELANDO EL BASTIDOR
						</strong>
					</h3>
				</div>
			</div>
		</div>
		<div id="developing"></div>
		<div class="container-fluid developing">
			<div class="row">
				<div class="col-xs-12">
					<h4 class="text-center">Materiales Necesarios</h4>
				</div>

				<?php
					$arg = array(
						'post_type'		 => 'items3',
						'posts_per_page' => 4
					);
				
					$get_arg = new WP_Query( $arg );
				
					while ( $get_arg->have_posts() ) {
						$get_arg->the_post();
					?>
						<div class="col-xs-12 col-md-6 text-center <?php the_field('clase'); ?>">
							<?php the_post_thumbnail('items'); ?>
							<p><strong><?php the_title(); ?></strong></p>
						</div>
				
					<?php } wp_reset_postdata();
				?>

			</div>
			<div class="row">
				<div class="col-xs-12">
					<h4 class="text-center">Materiales Necesarios</h4>
				</div>

				<?php
					$arg = array(
						'post_type'		 => 'items3',
						'posts_per_page' => 4,
						'offset'		 => 4
					);
				
					$get_arg = new WP_Query( $arg );
				
					while ( $get_arg->have_posts() ) {
						$get_arg->the_post();
					?>
						<div class="col-xs-12 col-md-6 text-center <?php the_field('clase'); ?>">
							<?php the_post_thumbnail('items'); ?>
							<p><strong><?php the_title(); ?></strong></p>
						</div>
				
					<?php } wp_reset_postdata();
				?>

			</div>
			<div class="row">
				<div class="col-xs-12">
					<h4 class="text-center">Materiales Necesarios</h4>
				</div>

				<?php
					$arg = array(
						'post_type'		 => 'items3',
						'posts_per_page' => 4,
						'offset'		 => 8
					);
				
					$get_arg = new WP_Query( $arg );
				
					while ( $get_arg->have_posts() ) {
						$get_arg->the_post();
					?>
						<div class="col-xs-12 col-md-6 text-center <?php the_field('clase'); ?>">
							<?php the_post_thumbnail('items'); ?>
							<p><strong><?php the_title(); ?></strong></p>
						</div>
				
					<?php } wp_reset_postdata();
				?>

			</div>
			<div class="row">
				<div class="col-xs-12">
					<h4 class="text-center">Proceso: 1 - Limpiar</h4>
				</div>
				<div class="col-xs-12 col-md-8 col-md-offset-2 text-center developing-item">
					<p>1. Limpia la tela de tu bastidor tensado con lavaloza y una esponja. Hazlo de forma suave y cubriendo toda el área.</p>
				</div>
				<div class="col-xs-12 col-md-8 col-md-offset-2 text-center developing-item">
					<p>2. Elimina los residuos tanto de posible suciedad como de limpiador. Finalmente enjuaga y deja secar. Esto ayuda a que la emulsión se adhiera de la mejor forma a la tela y evitar así los problemas que pueda dar una tela sucia la momento de revelar.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<h4 class="text-center">Proceso: 2 - Hacer Pruebas</h4>
				</div>
				<div class="col-xs-12 col-md-8 col-md-offset-2 text-center developing-item">
					<p>1. Antes de revelar nuestro bastidor, tenemos que averiguar cuánto tiempo debemos poner a la luz nuestra emulsión para que se grabe la imagen y quede fija, para esto ocuparemos un sector de la tela de nuestro bastidor tensado (alguna orilla o borde) o podemos antes hacer un mini-bastidor especialmente para estas pruebas de tiempo.</p>
				</div>
				<div class="col-xs-12 col-md-8 col-md-offset-2 text-center developing-item">
					<p>2. Nos aseguramos que no ingrese luz a la habitación y desde ahora se comienza a trabajar sólo con luz roja o amarilla.</p>
				</div>
				<div class="col-xs-12 col-md-8 col-md-offset-2 text-center developing-item">
					<p>3. Abrimos la emulsión y con un squeegee o espátula se aplica un poco por la parte externa del bastidor, se esparce en ese lado y también lo que sobre por la parte trasera. Debe quedar una capa ligera pero que cubra de forma uniforme la porción de tela que elegimos. Hay que cuidar que la parte externa del bastidor y la tela es la que quede bien aplicada la emulsión, en la parte interna sólo se esparcirá el exceso.</p>
				</div>
				<div class="col-xs-12 col-md-8 col-md-offset-2 text-center developing-item">
					<p>4. Utilizamos el secador de pelo para poder secar la emulsión. Con mucho cuidado y después de un tiempo secando, tocamos la emulsión con la punta de los dedos y cuando deje de estar pegajoso podremos seguir.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<h4 class="text-center">Proceso: 2 - Hacer Pruebas</h4>
				</div>
				<div class="col-xs-12 col-md-8 col-md-offset-2 text-center developing-item">
					<p>5. Creamos fotolito nuevo para estas pruebas con un trozo pequeño de papel diamante, en el que escribimos o dibujamos algo con sharpies y tiralíneas. Lo adherimos a nuestra mesa de luz con pequeños trozos de masking tape en las puntas; la ilustración debe quedar de la misma forma en que se lee, no al revés ni nada, sino tal cual.</p>
				</div>
				<div class="col-xs-12 col-md-8 col-md-offset-2 text-center developing-item">
					<p>6. Colocamos el bastidor con la zona que tiene la emulsión encima de nuestro fotolito de prueba y una vez centrado colocamos peso encima del bastidor, justo en la zona del fotolito y la emulsión. Esto hará que la imagen al revelar no se corra y se eviten arrugas o pliegues.</p>
				</div>
				<div class="col-xs-12 col-md-8 col-md-offset-2 text-center developing-item">
					<p>7. Prendemos la mesa de luz y en este momento también cronometramos el tiempo. Sugerimos dejar prendida la mesa de luz por 10 minutos para una primera prueba y ver los resultados. Pasados los 10 minutos vamos rápidamente a un lugar donde podamos limpiar nuestro bastidor, idealmente con manguera y esponja. Debe ser rápido porque la emulsión sigue haciendo efecto y pueden grabarse cosas que no queramos en nuestra malla. Removemos el excedente de la emulsión y de esta forma ya podemos ver si el tiempo que le dimos fue suficiente o no. Hay que tener cuidado al pasar la esponja.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<h4 class="text-center">Proceso: 2 - Hacer Pruebas</h4>
				</div>
				<div class="col-xs-12 col-md-8 col-md-offset-2 text-center developing-item">
					<p>8. Si la emulsión se sale muy fácil y rápido al pasar la esponja o con el agua, es porque le faltó tiempo. Si la emulsión, luego de varios minutos bajo el agua y pasadas de esponja todavía no se logra apreciar nuestro diseño de prueba es porque el tiempo fue demasiado. En cambio si la emulsión va saliendo de a poco mientras vamos limpiando y el diseño se ve claramente es porque el tiempo era el necesario.</p>
				</div>
				<div class="col-xs-12 col-md-8 col-md-offset-2 text-center developing-item">
					<p>9. Luego de terminar de limpiar nuestro bastidor, dejamos secar por completo, idealmente bajo el sol. Ahora ya tendremos nuestro tiempo ideal para poder revelar nuestro bastidor definitivo.</p>
				</div>
				<div class="col-xs-12 col-md-8 col-md-offset-2 text-center developing-item">
					<p>10. Sabemos que la imagen está bien grabada en nuestra malla cuando nuestro diseño no está tapado por la emulsión, de esta forma, la tinta puede pasar a través de las zonas que están dibujadas y no va a pasar por las zonas que están emulsionadas.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<h4 class="text-center">Proceso: 3 - Revelado Definitivo</h4>
				</div>
				<div class="col-xs-12 col-md-8 col-md-offset-2 text-center developing-item">
					<p>1. Para revelar nuestro bastidor definitivo realizamos lo mismo que cuando hicimos nuestra prueba para medir el tiempo, pero a mayor escala.</p>
				</div>
				<div class="col-xs-12 col-md-8 col-md-offset-2 text-center developing-item">
					<p>2. Apagando la luz y ocupando la iluminación propia del cuarto oscuro, aplicamos la emulsión sobre nuestro bastidor definitivo ya limpio y seco con una espátula o squeegee. Esparcimos primero por la parte externa y luego sólo el excedente por la parte interior.</p>
				</div>
				<div class="col-xs-12 col-md-8 col-md-offset-2 text-center developing-item">
					<p>3. Secamos utilizando el secador de pelo y cuando deje de estar pegajoso preparamos el fotolito de nuestro diseño definitivo en la mesa de luz. Lo fijamos con pequeños trozos de masking tape y luego ponemos nuestro bastidor encima, procurando que la zona emulsionada cubra por completo el diseño; esto se puede ver a través de la malla a pesar de ya tener la emulsión.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<h4 class="text-center">Proceso: 3 - Revelado Definitivo</h4>
				</div>
				<div class="col-xs-12 col-md-8 col-md-offset-2 text-center developing-item">
					<p>4. Agregamos peso encima de toda el área del bastidor que recibirá luz, prendemos la mesa de luz y cronometramos el tiempo que ya debemos tener calculado.</p>
				</div>
				<div class="col-xs-12 col-md-8 col-md-offset-2 text-center developing-item">
					<p>5. Luego de que pase el tiempo, llevamos rápidamente a limpiar y remover la emulsión. Cuidadosamente nos apoyamos con la esponja para remover excedentes. Una vez que la imagen se ve con claridad dejamos secar por completo.</p>
				</div>
				<div class="col-xs-12 col-md-8 col-md-offset-2 text-center developing-item">
					<p>6. Te recomendamos guardar la emulsión en el refrigerador, específicamente abajo, en la parte de las verduras. La emulsión recomendada en este curso viene lista para usar, por lo que su durabilidad es como máximo 3 a 3 meses y medio si es que se guarda apropiadamente, además, hay que evitar que ésta tenga cualquier contacto con la luz, sino puede quedar inutilizada, como cuando los rollos fotográficos antiguamente se velaban y no se podían utilizar nuevamente.</p>
				</div>
			</div>
		</div>
		<!-- END 3 DEVELOPING -->
		<!-- 4 PRINT -->
		<div class="container-fluid start-title2">
			<div class="row">
				<div class="col-xs-12 col-md-6 col-md-offset-3 text-center">
					<h3>
						<strong>
						4 - A IMPRIMIR
						</strong>
					</h3>
				</div>
			</div>
		</div>
		<div id="print"></div>
		<div class="container-fluid print">
			<div class="row">
				<div class="col-xs-12">
					<h4 class="text-center">Materiales Necesarios</h4>
				</div>

				<?php
					$arg = array(
						'post_type'		 => 'items4',
						'posts_per_page' => 4
					);
				
					$get_arg = new WP_Query( $arg );
				
					while ( $get_arg->have_posts() ) {
						$get_arg->the_post();
					?>
						<div class="col-xs-12 col-md-6 text-center <?php the_field('clase'); ?>">
							<?php the_post_thumbnail('items'); ?>
							<p><strong><?php the_title(); ?></strong></p>
						</div>
				
					<?php } wp_reset_postdata();
				?>

			</div>
			<div class="row">
				<div class="col-xs-12">
					<h4 class="text-center">Materiales Necesarios</h4>
				</div>

				<?php
					$arg = array(
						'post_type'		 => 'items4',
						'posts_per_page' => 4,
						'offset'		 => 4
					);
				
					$get_arg = new WP_Query( $arg );
				
					while ( $get_arg->have_posts() ) {
						$get_arg->the_post();
					?>
						<div class="col-xs-12 col-md-6 text-center <?php the_field('clase'); ?>">
							<?php the_post_thumbnail('items'); ?>
							<p><strong><?php the_title(); ?></strong></p>
						</div>
				
					<?php } wp_reset_postdata();
				?>
				
			</div>
			<div class="row">
				<div class="col-xs-12">
					<h4 class="text-center">Proceso</h4>
				</div>
				<div class="col-xs-12 col-md-8 col-md-offset-2 text-center print-item">
					<p>1. Toma la polera o prenda que quieras imprimir y ubícala sobre una mesa o superficie lisa.</p>
				</div>
				<div class="col-xs-12 col-md-8 col-md-offset-2 text-center print-item">
					<p>2. Con un trozo de madera o cartón piedra, ponlo en medio de la polera, esto es para que al momento de imprimir la tinta no pase al otro lado de la prenda y la manche, además nos ayuda a evitar arrugas.</p>
				</div>
				<div class="col-xs-12 col-md-8 col-md-offset-2 text-center print-item">
					<p>3. Una vez ubicada la polera, pon el bastidor ya listo y seco encima y en la posición que quieres que se imprima la imagen, lo más común es centrarla en relación a la prenda que imprimirás.</p>
				</div>
				<div class="col-xs-12 col-md-8 col-md-offset-2 text-center print-item">
					<p>4. Con la racleta o espátula, toma un poco de tinta y deposítala en la parte superior de dentro del bastidor; esta zona de la malla debe estar protegida con emulsión, así que la tinta no tiene porqué manchar tu polera. Repite el proceso de colocar tinta hasta que creas que es suficiente para el diseño que elegiste.</p>
				</div>
				<div class="col-xs-12 col-md-8 col-md-offset-2 text-center print-item">
					<p>5. Si tu amig@ está cerca, pídele que afirme el bastidor, sino, con una mano afirma el marco y con la otra mano comienza a deslizar la racleta.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<h4 class="text-center">Proceso</h4>
				</div>
				<div class="col-xs-12 col-md-8 col-md-offset-2 text-center print-item">
					<p>6. Pasa la espátula desde arriba (donde está depositada la tinta) hacia abajo y de manera firme. Cuando hayas movido la tinta de arriba hacia abajo, repite el proceso una vez más, esta vez desde abajo hacia arriba.</p>
				</div>
				<div class="col-xs-12 col-md-8 col-md-offset-2 text-center print-item">
					<p>7. Deja la racleta a un lado y suelta el bastidor si lo tenías afirmado. Ahora con mucho cuidado sujeta tu prenda o polera hacia la mesa o la superficie donde se encuentre y que tu amig@ (o tú, con la otra mano) levante desde abajo hacia arriba el bastidor. Realiza este proceso con seguridad.</p>
				</div>
				<div class="col-xs-12 col-md-8 col-md-offset-2 text-center print-item">
					<p>8. Con tu polera ya impresa, debes dejar secar la tinta. Puedes dejarla estirada en alguna superficie o ponerla en los colgadores de ropa, cuidando de no doblarla para que no se manche.</p>
				</div>
				<div class="col-xs-12 col-md-8 col-md-offset-2 text-center print-item">
					<p>9. Si quieres seguir imprimiendo ese mismo diseño, puedes realizar el mismo proceso con tu bastidor, sino, debes limpiarlo para que la tinta no se seque en la malla y tape tu diseño, para esto debes limpiarlo con idealmente con una manguera que proporcione chorro de agua y con una esponja pasar suavemente por la malla para remover la tinta.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<h4 class="text-center">Cuidados de la prenda</h4>
				</div>
				<div class="col-xs-12 col-md-8 col-md-offset-2 text-center print-item">
					<p>1. Una vez seca tu polera o prenda impresa, es necesario que la des vuelta y planchar el diseño por detrás, esto para asegurar la tinta.</p>
				</div>
				<div class="col-xs-12 col-md-8 col-md-offset-2 text-center print-item">
					<p>2. Para que no se achique con los lavados, hazlo con agua helada y sin pasarlas por la centrifugadora, sino que dejarlas secar al aire libre en colgador.</p>
				</div>
			</div>
		</div>
		<!-- END 4 PRINT -->
		<!-- WHERE -->
		<div class="container-fluid start-title3">
			<div class="row">
				<div class="col-xs-12 col-md-6 col-md-offset-3 text-center">
					<h3>
						<strong>
						5 - ¿DÓNDE COMPRAR MATERIALES?
						</strong>
					</h3>
				</div>
			</div>
		</div>
		<div id="where"></div>
		<div class="container-fluid where">
			<div class="row">
				<div class="col-xs-12 col-md-6 col-md-offset-3 text-center">
					<table class="table">
						<tr>
							<th class="text-center">Material</th>
							<th class="text-center">Cantidad</th>
							<th class="text-center">Precio</th>
							<th class="text-center">¿Dónde?</th>
						</tr>

						<?php
							$arg = array(
								'post_type'		 => 'buyitems',
								'posts_per_page' => 10
							);
						
							$get_arg = new WP_Query( $arg );
						
							while ( $get_arg->have_posts() ) {
								$get_arg->the_post();
							?>
								<tr>
									<td><?php the_field('material'); ?></td>
									<td><?php the_field('cantidad'); ?></td>
									<td>$ <?php the_field('precio'); ?></td>
									<td><a href="<?php the_field('web'); ?>" target="_blank"><?php the_field('donde'); ?></a></td>
								</tr>
						
							<?php } wp_reset_postdata();
						?>
					</table>
				</div>
			</div>
		</div>
		<!-- END WHERE -->
		<!-- RESULTS -->
		<div class="container-fluid start-title1">
			<div class="row">
				<div class="col-xs-12 col-md-6 col-md-offset-3 text-center">
					<h3>
						<strong>
						6 - ALGUNOS RESULTADOS
						</strong>
					</h3>
				</div>
			</div>
		</div>
		<div id="results"></div>
		<div class="container-fluid results">
			<div class="row">
				<div class="col-xs-12 col-md-6 col-md-offset-3 text-center">
					<div class="flexslider">
						<ul class="slides">

							<?php
								$arg = array(
									'post_type'		 => 'results',
									'posts_per_page' => 11
								);
							
								$get_arg = new WP_Query( $arg );
							
								while ( $get_arg->have_posts() ) {
									$get_arg->the_post();
								?>
									
									<li>
										<?php the_post_thumbnail(results); ?>
									</li>
							
								<?php } wp_reset_postdata();
							?>

						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- END RESULTS -->
	</main>
	<!-- END MAIN -->
	<!-- CONTACT -->
	<?php get_template_part('contact') ?>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/js/lib/jquery.flexslider.js"></script>
</body>

<?php get_footer(); ?>