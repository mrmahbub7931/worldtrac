<?php
/**
 * Check and setup theme's default settings
 *
 * @package worldtrac
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! function_exists ( 'worldtrac_setup_theme_default_settings' ) ) {
	function worldtrac_setup_theme_default_settings() {

		// check if settings are set, if not set defaults.
		// Caution: DO NOT check existence using === always check with == .
		// Latest blog posts style.
		$worldtrac_posts_index_style = get_theme_mod( 'worldtrac_posts_index_style' );
		if ( '' == $worldtrac_posts_index_style ) {
			set_theme_mod( 'worldtrac_posts_index_style', 'default' );
		}

		// Sidebar position.
		$worldtrac_sidebar_position = get_theme_mod( 'worldtrac_sidebar_position' );
		if ( '' == $worldtrac_sidebar_position ) {
			set_theme_mod( 'worldtrac_sidebar_position', 'right' );
		}

		// Container width.
		$worldtrac_container_type = get_theme_mod( 'worldtrac_container_type' );
		if ( '' == $worldtrac_container_type ) {
			set_theme_mod( 'worldtrac_container_type', 'container' );
		}
	}
}