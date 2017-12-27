<?php 
	
	function dl_enqueue_style() {

		/* Register Scripts */
		wp_register_style('encondeSans', 'https://fonts.googleapis.com/css?family=Encode+Sans:500,800', null, null, 'screen');
		wp_register_style('bootstrap', get_parent_theme_file_uri('/assets/css/bootstrap.min.css'), null, null, 'screen');
		wp_register_style('fontAwesome', get_parent_theme_file_uri('/assets/css/font-awesome.min.css'), null, null, 'screen');
		wp_register_style('slick', get_parent_theme_file_uri('/assets/slick/slick.css'), null, null, 'screen');
		wp_register_style('slick-theme', get_parent_theme_file_uri('/assets/slick/slick-theme.css'), null, null, 'screen');
		wp_register_style('flexslider', get_parent_theme_file_uri('/assets/css/flexslider.css'), null, null, 'screen');
		wp_register_style('myStyle', get_parent_theme_file_uri('/assets/css/mainstyle.css'), null, null, 'screen');
		
		/* Enqueue Scripts */
		wp_enqueue_style('encondeSans');
		wp_enqueue_style('bootstrap');
		wp_enqueue_style('fontAwesome');
		if (is_page('start')) {
			wp_enqueue_style('slick');
			wp_enqueue_style('slick-theme');
			wp_enqueue_style('flexslider');
		}
		wp_enqueue_style('myStyle');
	}

	add_action( 'wp_enqueue_scripts', 'dl_enqueue_style' );
?>