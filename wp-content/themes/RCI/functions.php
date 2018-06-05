<?php
    add_theme_support( 'menus' );
	function rciTheme(){
		wp_enqueue_style('style',get_stylesheet_uri());
	}

	add_action('wp_enqueue_scripts','rciTheme');

    //navigation menus
	register_nav_menus(
		array(
			'primary' => __('Primary Menu'),
			'footer' => __('Footer Menu')
		)
	);

	// function get_top_anchestorID(){
 // 	global $post;
 // 	if ($post->post_parent) {
 // 		$ancestors = array_reverse(get_post_ancestors($post->ID));
 // 		return $ancestors[0];
 // 	}else{
 // 		return $post->ID;
 // 	}
 // }/////
?>