<?php
/**
 * Custom hooks.
 *
 * @package worldtrac
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! function_exists( 'worldtrac_site_info' ) ) {
  /**
   * Add site info hook to WP hook library.
   */
  function worldtrac_site_info() {
    do_action( 'worldtrac_site_info' );
  }
}

if ( ! function_exists( 'worldtrac_add_site_info' ) ) {
  add_action( 'worldtrac_site_info', 'worldtrac_add_site_info' );

  /**
   * Add site info content.
   */
  function worldtrac_add_site_info() {
    $the_theme = wp_get_theme();
    
    $site_info = 'Proudly Powerd By <a href="http://www.techmix.xyz">Techmix</a>';

    echo apply_filters( 'worldtrac_site_info_content', $site_info ); // WPCS: XSS ok.
  }
}
