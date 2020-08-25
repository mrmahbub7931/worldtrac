<?php
/**
 * The right sidebar containing the main widget area.
 *
 * @package worldtrac
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! is_active_sidebar( 'right-sidebar' ) ) {
	return;
}

// when both sidebars turned on reduce col size to 3 from 4.
$sidebar_pos = get_theme_mod( 'worldtrac_sidebar_position' );
?>

<div class="col-md-3 d-none d-sm-none d-md-block widget-area" id="right-sidebar" role="complementary">
<?php dynamic_sidebar( 'right-sidebar' ); ?>

</div><!-- #right-sidebar -->
