<?php
/**
 * theme enqueue scripts
 *
 * @package theme
 */


/*
 * Load Jquery from core Wordpress in footer
 */
function move_jquery_into_footer( $wp_scripts ) {

	if( is_admin() ) { // disable below in back-end
		return;
	}

	wp_dequeue_script('jquery');
	wp_dequeue_script('jquery-core');
	wp_dequeue_script('jquery-migrate');

	wp_enqueue_script('jquery', false, array(), false, true);
	wp_enqueue_script('jquery-core', false, array(), false, true);
	wp_enqueue_script('jquery-migrate', false, array(), false, true);
}
//add_action( 'wp_enqueue_scripts', 'move_jquery_into_footer' );


/**
 * Enqueue styles
 */
function child_enqueue_styles() {

	// get the version of style.css
	$version = wp_get_theme()->get('Version');

	wp_enqueue_style( 'heli-events-voyages-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), $version, 'all' );

}

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );
