<?php
/**
 * worldtrac load next post by ajax
 *
 * @package worldtrac
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

// ajax hook
add_action('wp_ajax_load_next_posts_ajax', 'worldtrac_load_next_posts_ajax_callback');
add_action('wp_ajax_nopriv_load_next_posts_ajax', 'worldtrac_load_next_posts_ajax_callback');

function worldtrac_load_next_posts_ajax_callback()
{
    $paged = $_POST["page"] + 1;
    $query = new WP_Query( array(
		'paged'         => $paged,
		'post_type' => 'post',
		'post_status' => 'publish',
		'posts_per_page' => 4,
    ) );
    if ($query->have_posts()) :
        echo '<div class="page-limit" data-page="/page/'.$paged.'">';
    while ($query->have_posts()) : $query->the_post();
        ?>
            <div class="single-posts">
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
        <?php
    endwhile;echo '</div>';endif;
    wp_reset_postdata();
	die();
}