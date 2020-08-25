<?php
/**
 * Search results partial template.
 *
 * @package worldtrac
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<div class="col-12 col-md-4 col-lg-3 single-posts">
	<div class="thumb">
		<a href="<?php the_permalink()?>"><?php echo get_the_post_thumbnail(get_the_ID(), 'medium')?></a>
	</div>
	<div class="caption">
	<?php 
	$c = get_the_category();

	if (!empty($c[0])) {?>

	<a href="<?php echo get_category_link($c[0]->term_id)?>" class="category-list"><?php echo $c[0]->name; ?></a>

	<?php } ?>
	<a href="<?php the_permalink()?>"><h3><?php echo wp_trim_words( get_the_title(), 10 ); ?></h3></a>
	<p class="excerpt"><?php echo wp_trim_words( get_the_excerpt(), 20 ); ?></p>
		<div class="date-bookmark">
			<span class="post-date"><?php echo get_the_date(); ?></span>
			<span class="bookmark"><i class="far fa-bookmark"></i></span>
		</div>
	</div>
</div>

