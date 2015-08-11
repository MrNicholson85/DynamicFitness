<?php


	// Load Theme CSS
	function theme_styles(){

		wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css');
		wp_enqueue_style( 'main', get_template_directory_uri() . '/css/df_style.css');
		wp_enqueue_style( 'bxslider', get_template_directory_uri() . '/css/jquery.bxslider.css');
	}
	add_action( 'wp_enqueue_scripts', 'theme_styles' );

	//Load Js
	function theme_js() {
		wp_enqueue_script( 'Jquery', '//code.jquery.com/jquery-1.11.3.min.js');
		wp_enqueue_script( 'bootstrap Js', get_template_directory_uri() . '/js/bootstrap.js', array('jquery'), '', true);
		wp_enqueue_script( 'bxslider Js', get_template_directory_uri() . '/js/jquery.bxslider.min.js', array('jquery'), '', true);
	}
	add_action('wp_enqueue_scripts', 'theme_js');


	// Register Custom Navigation Walker
	require_once('wp_bootstrap_navwalker.php');

    wp_nav_menu( array(
        'menu'              => 'primary',
        'theme_location'    => 'primary',
        'depth'             => 2,
        'container'         => 'div',
        'container_class'   => 'collapse navbar-collapse',
				'container_id'      => 'bs-example-navbar-collapse-1',
        'menu_class'        => 'nav navbar-nav',
        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
        'walker'            => new wp_bootstrap_navwalker())
    );

		register_nav_menus( array(
		    'primary' => __( 'Primary Menu', 'THEMENAME' ),
		));

		

?>
