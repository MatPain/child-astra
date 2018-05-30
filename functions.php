<?php
/**
 * Child Astra Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Child Astra
 * @since 1.0.0
 */




/**
* Customize the WordPress admin
*/
require get_stylesheet_directory().'/inc/admin.php';

/**
 * Theme setup and custom theme supports.
 */
require get_stylesheet_directory() . '/inc/clean.php';

/**
 * Load functions to secure your WP install.
 */
require get_stylesheet_directory() . '/inc/security.php';

/**
 * Enqueue scripts and styles.
 */
require get_stylesheet_directory() . '/inc/enqueue.php';

/**
 * Load Editor functions.
 */
require get_stylesheet_directory() . '/inc/editor.php';

/**
 * Remove 4.2 Emoji Support
 */
require get_stylesheet_directory().'/inc/disable-emoji.php';



/**
 * Load Beaver Builder functions.
 */
if ( class_exists( 'FLBuilder' ) )
	require get_stylesheet_directory().'/inc/plugins/beaver-builder.php';

/**
 * Load Yoast functions.
 */
if ( defined( 'WPSEO_VERSION' ) )
	require get_stylesheet_directory() . '/inc/plugins/yoast.php';

/**
 * Load Woocommerce functions.
 */
if ( class_exists( 'Woocommerce' ) )
	require get_stylesheet_directory() . '/inc/plugins/woocommerce.php';
