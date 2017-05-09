<?php
	add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 640, 640, true ); 

	function my_theme_enqueue_styles() {
	    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

	}
?>