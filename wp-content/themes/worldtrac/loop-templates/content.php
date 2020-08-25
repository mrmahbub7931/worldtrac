<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package worldtrac
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">


		

	</header><!-- .entry-header -->

	<?php echo get_the_post_thumbnail( $post->ID, 'full' ); ?>

	<div class="entry-content">

		<?php the_content(); ?>

		<?php
		// wp_link_pages( array(
		// 	'before' => '<div class="page-links">' . __( 'Pages:', 'worldtrac' ),
		// 	'after'  => '</div>',
		// ) );
		?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php worldtrac_entry_footer(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
