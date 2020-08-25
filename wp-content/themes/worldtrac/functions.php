<?php
/**
 * worldtrac functions and definitions
 *
 * @package worldtrac
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$worldtrac_includes = array(
	'/theme-settings.php',                  // Initialize theme default settings.
	'/setup.php',                           // Theme setup and custom theme supports.
	'/custom-post.php',                     // Custom post file.
	'/include.php',                         // Include php file.
	'/load_next_post_ajax.php',             // load next post ajax php file.
	'/load_author_post_ajax.php',             // load next post ajax php file.
	'/widgets.php',                         // Register widget area.
	'/enqueue.php',                         // Enqueue scripts and styles.
	'/template-tags.php',                   // Custom template tags for this theme.
	'/pagination.php',                      // Custom pagination for this theme.
	'/hooks.php',                           // Custom hooks.
	'/extras.php',                          // Custom functions that act independently of the theme templates.
	'/customizer.php',                      // Customizer additions.
	'/custom-comments.php',                 // Custom Comments file.
	'/jetpack.php',                         // Load Jetpack compatibility file.
	'/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker.
	'/woocommerce.php',                     // Load WooCommerce functions.
	'/editor.php',                          // Load Editor functions.
);

foreach ( $worldtrac_includes as $file ) {
	$filepath = locate_template( 'inc' . $file );
	if ( ! $filepath ) {
		trigger_error( sprintf( 'Error locating /inc%s for inclusion', $file ), E_USER_ERROR );
	}
	require_once $filepath;
}
/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
// function wpdocs_custom_excerpt_length( $length ) {
//     return 20;
// }
// add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );
remove_filter('get_the_excerpt', 'wp_trim_excerpt');


// user social meta
add_filter( 'user_contactmethods','wpse_user_contactmethods', 10, 1 );
function wpse_user_contactmethods( $contact_methods ) {
    $contact_methods['facebook'] = __( 'Facebook URL', 'text_domain'    );
    $contact_methods['twitter']  = __( 'Twitter URL', 'text_domain' );
    $contact_methods['linkedin'] = __( 'LinkedIn URL', 'text_domain'    );
    $contact_methods['youtube']  = __( 'YouTube URL', 'text_domain' );

    return $contact_methods;
}