<?php
/**
 * worldtrac enqueue scripts
 *
 * @package worldtrac
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! function_exists( 'worldtrac_scripts' ) ) {
	/**
	 * Load theme's JavaScript and CSS sources.
	 */
	function worldtrac_scripts() {
		// Get the theme data.
		wp_enqueue_style( 'bs-style', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), uniqid() );
		
		wp_enqueue_style( 'carousel-style', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), uniqid() );

		wp_enqueue_style( 'carousel-slick', get_template_directory_uri() . '/assets/css/slick.css', array(), uniqid() );
		
		wp_enqueue_style( 'fontawesome-style', get_template_directory_uri() . '/assets/css/fontawesome.min.css', array(), uniqid() );
		
		wp_enqueue_style( 'fontawesome-style', get_template_directory_uri() . '/assets/css/icons.css', array(), uniqid() );

		wp_enqueue_style( 'select_css', get_template_directory_uri() . '/assets/css/select2.min.css', array(), uniqid() );
		

		wp_enqueue_style( 'ionicons-style', get_template_directory_uri() . '/assets/css/ionicons.min.css', array(), uniqid() );

		wp_enqueue_style( 'hero-style', get_template_directory_uri() . '/assets/css/heroslide.css', array(), uniqid() );
		
		wp_enqueue_style( 'main-style', get_stylesheet_directory() );
		wp_enqueue_style( 'theme-style', get_template_directory_uri() . '/assets/css/style.css', array(), uniqid() );
		
		wp_enqueue_script( 'jquery' );

		wp_enqueue_script( 'bs-scripts', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), uniqid(), true );
		
		wp_enqueue_script( 'bsp-scripts', get_template_directory_uri() . '/assets/js/popper.min.js', array(), uniqid(), true );

		wp_enqueue_script( 'carousel-scripts', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), uniqid(), true );

		wp_enqueue_script( 'carousel-slick', get_template_directory_uri() . '/assets/js/slick.min.js', array(), uniqid(), true );

		wp_enqueue_script( 'fontawesome-scripts', '//kit.fontawesome.com/a076d05399.js', array(), uniqid(), true );

		wp_enqueue_script( 'select_js', get_template_directory_uri() . '/assets/js/select2.min.js', array(), uniqid(), true );
		
		wp_enqueue_script( 'theme-scripts', get_template_directory_uri() . '/assets/js/app.js', array(), uniqid(), true );
		
		wp_enqueue_script( 'hero-slide', get_template_directory_uri() . '/assets/js/heroSlide.js', array(), uniqid(), true );


		// wp_enqueue_script( 'theme-nextpost', get_template_directory_uri() . '/assets/js/nextpost.js', array('jquery'), uniqid(), false );

		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
} // endif function_exists( 'worldtrac_scripts' ).

add_action( 'wp_enqueue_scripts', 'worldtrac_scripts' );