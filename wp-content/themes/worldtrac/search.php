<?php
/**
 * The template for displaying search results pages.
 *
 * @package worldtrac
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

$container   = get_theme_mod( 'worldtrac_container_type' );

?>

<div class="wrapper" id="search-wrapper">

	<div class="container-fluid" id="content" tabindex="-1">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				
					<h1 class="page-title"><?php printf(
					/* translators:*/
					 esc_html__( 'Search Results for: %s', 'worldtrac' ),
						'<span>' . get_search_query() . '</span>' ); ?></h1>

			</header><!-- .page-header -->
		<div class="row">


					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>

						<?php
						/**
						 * Run the loop for the search to output the results.
						 * If you want to overload this in a child theme then include a file
						 * called content-search.php and that will be used instead.
						 */
						get_template_part( 'loop-templates/content', 'search' );
						?>

					<?php endwhile; ?>

				<?php else : ?>

					<?php get_template_part( 'loop-templates/content', 'none' ); ?>

					
				</div><!-- .row -->
				<?php endif; ?>

</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
