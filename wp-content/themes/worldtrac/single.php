<?php
/**
 * The template for displaying all single posts.
 *
 * @package worldtrac
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
?>

<div class="wrapper" id="single-wrapper">

	<div class="container-fluid">

		<div class="row">
			<div class="col-md-9 col-12">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'loop-templates/content', 'single' ); ?>

				<?php endwhile; // end of the loop. ?>


			</div>

			<?php get_template_part( 'sidebar-templates/sidebar', 'right' ); ?>
		</div><!-- .row -->

	</div><!-- Container-fluid end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
