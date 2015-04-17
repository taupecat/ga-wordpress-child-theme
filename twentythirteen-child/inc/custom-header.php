<?php
/**
 * Remove the actions added by the parent theme
 */
function remove_twentythirteen_actions() {
	$success = remove_action( 'after_setup_theme', 'twentythirteen_custom_header_setup', 11 );
	unregister_default_headers( array( 'circle', 'diamond', 'star' ) );
}
add_action( 'init', 'remove_twentythirteen_actions', 5 );

/**
 * Set up the WordPress core custom header arguments and settings.
 *
 * @uses add_theme_support() to register support for 3.4 and up.
 * @uses twentythirteen_header_style() to style front-end.
 * @uses twentythirteen_admin_header_style() to style wp-admin form.
 * @uses twentythirteen_admin_header_image() to add custom markup to wp-admin form.
 * @uses register_default_headers() to set up the bundled header images.
 *
 * @since Twenty Thirteen 1.0
 */
function twentythirteen_child_custom_header_setup() {
	$args = array(
		// Text color and image (empty to use none).
		'default-text-color'     => '220e10',
		'default-image'          => '%s/images/headers/circle.png',

		// Set height and width, with a maximum value for the width.
		'height'                 => 230,
		'width'                  => 1600,

		// Callbacks for styling the header and the admin preview.
		'wp-head-callback'       => 'twentythirteen_header_style',
		'admin-head-callback'    => 'twentythirteen_admin_header_style',
		'admin-preview-callback' => 'twentythirteen_admin_header_image',
	);

	add_theme_support( 'custom-header', $args );

	/*
	 * Default custom headers packaged with the theme.
	 * %s is a placeholder for the theme template directory URI.
	 */
	register_default_headers( array(
		'circle-purple' => array(
			'url'           => get_stylesheet_directory_uri() . '/images/headers/circle-purple.png',
			'thumbnail_url' => get_stylesheet_directory_uri() . '/images/headers/circle-purple-thumbnail.png',
			'description'   => _x( 'Circle', 'header image description', 'twentythirteen' )
		),
	) );
}
add_action( 'after_setup_theme', 'twentythirteen_child_custom_header_setup', 12 );
