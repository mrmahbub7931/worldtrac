<?php
/**
 * Single post partial template.
 *
 * @package worldtrac
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>  
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	<header class="single-page-header">
		<h3><?php the_title(); ?></h3>
	</header>
	<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

	<div class="entry-content">
		
		<?php the_content(); ?>

	</div><!-- .entry-content -->

</article><!-- #post-## -->
