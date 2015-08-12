<?php


	// Load Theme CSS
	function theme_styles(){

		wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() . '/css/bootstrap.css');
		wp_enqueue_style( 'main', get_stylesheet_directory_uri() . '/css/df_style.css');
		wp_enqueue_style( 'bxslider', get_stylesheet_directory_uri() . '/css/jquery.bxslider.css');
	}
	add_action( 'wp_enqueue_scripts', 'theme_styles' );

	//Load Js
	function theme_js() {

		wp_enqueue_script( 'Jquery', '//code.jquery.com/jquery-1.11.3.min.js');
		wp_enqueue_script( 'bootstrap Js', get_template_directory_uri() . '/js/bootstrap.js', array('jquery'), '', true);
		wp_enqueue_script( 'bxslider Js', get_template_directory_uri() . '/js/jquery.bxslider.js', array('jquery'), '', true);
		wp_enqueue_script( 'globe-Js', get_template_directory_uri() . '/js/globe.js', array('jquery'), '', true);

	}

	add_action('wp_enqueue_scripts', 'theme_js');

	// Register Custom Navigation Walker
	require_once('wp_bootstrap_navwalker.php');

	register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'THEMENAME' ),
	
	) );



?>
