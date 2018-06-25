<?php
    add_theme_support( 'menus' );
	function rciTheme(){
		wp_enqueue_style('style',get_stylesheet_uri());
	}

	function javaScripta()
	{
		wp_enqueue_script( 'javaScript', get_template_directory_uri() . '/javaScript.js');
	}

	add_action('wp_enqueue_scripts','rciTheme');
	add_action('wp_enqueue_scripts','javaScripta');

    //navigation menus

	register_nav_menus(
		array(
			'primary' => __('Primary Menu'),
			'footer' => __('Footer Menu'),
			'primary_kh' => __('Khmer Menu'),
			'test_menu' => __('testing')
		)
	);

	


?>