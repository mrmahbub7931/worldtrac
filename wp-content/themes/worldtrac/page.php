<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package worldtrac
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

$container   = get_theme_mod( 'worldtrac_container_type' );

?>

<div class="wrapper" id="page-wrapper">

<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="blog-page-header">
					<h3><?php echo wp_title( '' )?></h3>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora quaerat nostrum tenetur quo placeat, ducimus fugiat. Corrupti, provident neque repellat veniam quos rem quis accusantium reiciendis excepturi explicabo velit ut.</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">

				<main class="site-main" id="main">
	
					<?php if ( have_posts() ) : ?>
	
						<?php /* Start the Loop */ ?>
	
						<?php while ( have_posts() ) : the_post(); ?>
	
							<?php
	
							/*
							 * Include the Post-Format-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
							 */
							get_template_part( 'loop-templates/content', get_post_format() );
							?>
	
						<?php endwhile; ?>
	
					<?php else : ?>
	
						<?php get_template_part( 'loop-templates/content', 'none' ); ?>
	
					<?php endif; ?>
	
				</main><!-- #main -->
			</div>

			<!-- The pagination component -->
			<?php worldtrac_pagination(); ?>
		

	</div><!-- .row -->

</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
