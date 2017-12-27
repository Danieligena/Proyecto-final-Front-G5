<?php 
	
	function dl_enqueue_scripts() {
		$theme_data = wp_get_theme();

		/* Deregister Scripts */
		wp_deregister_script( 'jquery' );
		wp_deregister_script( 'jquery-migrate' );

		/* Register Scripts */
		wp_register_script('jquery-3.2.1', get_parent_theme_file_uri('/assets/js/jquery-3.2.1.min.js'),null, null, false);
		wp_register_script('bootstrap', get_parent_theme_file_uri('/assets/js/bootstrap.min.js'), array('jquery-3.2.1'), null, false);
		wp_register_script('smoothScroll', get_parent_theme_file_uri('assets/js/jquery.smoothscroll.min.js'), array('jquery-3.2.1'), null, false);
		wp_register_script('api', get_parent_theme_file_uri('assets/js/api.js'), array('jquery-3.2.1'), null, false);
		wp_localize_script('api', 'site', array("theme_path"	=> get_template_directory_uri()));
		wp_register_script('slick', get_parent_theme_file_uri('assets/slick/slick.min.js'), array('jquery-3.2.1'), null, false);
		wp_register_script('flexslider', get_parent_theme_file_uri('/assets/js/lib/jquery.flexslider.js'), array('jquery-3.2.1'), null, false);
		wp_register_script('main', get_parent_theme_file_uri('/assets/js/main.js'), array('jquery-3.2.1'), null, false);
		
		/* Enqueue Scripts */
		wp_enqueue_script('bootstrap');
		wp_enqueue_script('smoothScroll');
		wp_enqueue_script('api');
		if (is_page('start')) {
			wp_enqueue_script('slick');
			wp_enqueue_script('flexslider');
		}
		wp_enqueue_script('main');
	}

	add_action( 'wp_enqueue_scripts', 'dl_enqueue_scripts' );
?>