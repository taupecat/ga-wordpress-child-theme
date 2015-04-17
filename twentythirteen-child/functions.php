<?php

function ga_stylesheets() {
	wp_dequeue_style( 'twentythirteen-style' );
	wp_deregister_style( 'twentythirteen-style' );
	wp_dequeue_style( 'twentythirteen-fonts' );
	wp_deregister_style( 'twentythirteen-fonts' );

	wp_register_style( 'parent-style', get_template_directory_uri() . '/style.css' );
	wp_register_style( 'child-fonts', '//fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic|Roboto+Slab:400,700' );
	wp_register_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'parent-style', 'child-fonts' ) );
	wp_enqueue_style( 'child-style' );
}
add_action( 'wp_enqueue_scripts', 'ga_stylesheets', 15 );

function ga_header_background_positioning() {
?>
<style>
.site-header {
	background-position: bottom;
}
</style>
<?php
}
add_action( 'wp_head', 'ga_header_background_positioning', 15 );

/**
 * Add support for a custom header image.
 */
require get_stylesheet_directory() . '/inc/custom-header.php';
