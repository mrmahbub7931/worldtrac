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
$options = get_option( 'techmix' );
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
	</div><!-- Container end -->
	<?php 
	
		$b_featured_posts = $options['blog-featured-cat'];
		if ($b_featured_posts !== "" && isset($b_featured_posts)) :
			$cat = array();
			foreach ($b_featured_posts as $categories) :
				$cat[] = $categories;

				$catStr = implode(',',$cat);
				
                $current_year = date('Y');
                $current_month = date('m');
			endforeach;
				$posts = query_posts( "cat='.$catStr.'&order=DESC&posts_per_page=6" );
	?>
	<div class="blog-page-featured">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<div class="blog-featured-parent">
						<?php foreach( $posts as $post ) :  setup_postdata($post); ?>
							<div class="single-featured-news">
								<div class="thumb">
									<a href="<?php the_permalink()?>"><?php echo get_the_post_thumbnail(get_the_ID(),'large')?></a>
								</div>
								<div class="caption">

									<a href="<?php the_permalink()?>"><h3><?php echo wp_trim_words( get_the_title(), 10 ); ?></h3></a>
									<p class="excerpt"><?php echo wp_trim_words( get_the_excerpt(), 20 ); ?></p>
									<span class="post-date"><?php echo get_the_date(); ?></span>
									<div class="cat-bookmark">
										<?php 
	
											$c = get_the_category();
	
											if (!empty($c[0])) {?>
	
												<a href="<?php echo get_category_link($c[0]->term_id)?>" class="category-list"><?php echo $c[0]->name; ?></a>
	
											<?php }
	
										?>
										<span class="bookmark"><i class="far fa-bookmark"></i></span>
									</div>
								</div>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
		<?php endif; ?>
		<!-- end blog-page-featured -->
		<?php 
			$blog_three_posts = $options['blog-three-cat'];
			if ($blog_three_posts !== "" && isset($blog_three_posts)) :
				$cat = array();
				foreach ($blog_three_posts as $categories) :
					$cat[] = $categories;
	
					$catStr = implode(',',$cat);
					
					$current_year = date('Y');
					$current_month = date('m');
				endforeach;
					$posts = query_posts( "cat='.$catStr.'&order=DESC&posts_per_page=3" );
		?>
	<div class="blog-page-three-post-area">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
				<div class="blog-three-post">
						<?php foreach( $posts as $post ) :  setup_postdata($post); ?>
							<div class="single-three-news">
								<div class="thumb">
									<a href="<?php the_permalink()?>"><?php echo get_the_post_thumbnail(get_the_ID(),'medium')?></a>
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
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
			<?php endif; ?>
	<!-- end blog-page-three-post-area -->
	
<?php 
	$blog_two_posts = $options['blog-two-cat'];
	if ($blog_two_posts !== "" && isset($blog_two_posts)) :
		$cat = array();
		foreach ($blog_two_posts as $categories) :
			$cat[] = $categories;

			$catStr = implode(',',$cat);
			
			$current_year = date('Y');
			$current_month = date('m');
		endforeach;
			$posts = query_posts( "cat='.$catStr.'&order=DESC&posts_per_page=3" );
?>
	<div class="blog-page-two-post-area">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<div class="blog-two-post">
						<?php foreach( $posts as $post ) :  setup_postdata($post); ?>
							<div class="single-two-news">
								<div class="thumb">
									<a href="<?php the_permalink()?>"><?php echo get_the_post_thumbnail(get_the_ID(),'large')?></a>
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
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php endif; ?>
	<!-- end blog-page-three-post-area -->
	<div class="blog-posts-pagination">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<div class="section-heading">
						<h3>Latest Posts</h3>
					</div>
				</div>					
			</div>
			<!-- end row -->
		</div>
		<!-- end container-fluid -->
		<div class="blog-posts-area">
			<div class="container-fluid">
					<div class="row">
						<div class="col-12">

						
					<div class="single-posts-wrap">
				<?php
				$paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
				
					$args = array(
						'post_status'		=>	'publish',
						'post_type'			=>	'post',
						'posts_per_page'	=>	'4',
						'paged'         	=> $paged,
					);

					$query  = new WP_Query($args);
					if ($query->have_posts()) : ?>
				<div class="page-limit" data-page="/">
				<?php while($query->have_posts()) : $query->the_post(); ?>
			
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
								endwhile;
								?>
								</div>
							<?php endif;?>
				</div>
						</div>
					</div>
				<!-- end row -->
				<div class="row">
				<div class="col-12 text-center mt-5">
					<div class="post-paginate-control">
						<button id="prev_post"><i class="fas fa-chevron-left"></i></button>
						<button id="next_post" data-page="1" data-url="<?php echo admin_url('admin-ajax.php')?>"><i class="fas fa-chevron-right"></i></button>
					</div>
				</div>
				<!-- end row -->
				</div>
			</div>
			<!-- end container-fluid -->
		</div>
	</div>
	<!-- end blog-posts-pagination -->
</div><!-- Wrapper end -->
<?php //worldtrac_pagination(); ?>
<?php get_footer(); ?>
