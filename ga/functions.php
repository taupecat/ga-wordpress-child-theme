<?php

function ga_stylesheets() {
	wp_dequeue_style( 'twentythirteen-style' );
	wp_register_style( 'twentythirteen-style', get_template_directory_uri() . '/style.css' );
	wp_register_style( 'ga-stylesheet', get_stylesheet_uri(), array( 'twentythirteen-style' ) );
	wp_enqueue_style( 'ga-stylesheet' );
}
add_action( 'wp_enqueue_scripts', 'ga_stylesheets' );
