<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package worldtrac
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

$container   = get_theme_mod( 'worldtrac_container_type' );
?>

<div class="wrapper" id="error-404-wrapper">

	<div class="container" id="content" tabindex="-1">

	<div class="row">

<div class="col-md-12 content-area" id="primary">

	<main class="site-main" id="main">

	<div class="mainbox not-found">
<div class="err">4</div>
<i class="far fa-question-circle fa-spin"></i>
<div class="err2">4</div>
<div class="msg">Maybe this page moved? Got deleted? Is hiding out in quarantine? Never existed in the first place?<p>Let's go <a href="<?php echo site_url( '/' )?>">home</a> and try from there.</p></div>
</div>

	</main><!-- #main -->

</div><!-- #primary -->

</div><!-- .row -->

	</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
