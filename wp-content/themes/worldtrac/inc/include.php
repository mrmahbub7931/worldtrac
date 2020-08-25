<?php
/**
 * include file
 *
 * @package worldtrac
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

add_action( 'after_setup_theme', 'techmix_include_file' );


if ( ! function_exists( 'techmix_include_file' ) ) {
    function techmix_include_file() {
        /**
         * Framework internal file
         */
        require_once get_theme_file_path() .'/inc/codestar-framework/codestar-framework.php';

        /**
         * Framework External File
         */
        require get_template_directory() . '/inc/theme-options.php';

    }
}