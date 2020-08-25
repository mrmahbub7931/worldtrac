<?php
/**
 * The Front page template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 * Template name: Home page
 * @package worldtrac
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>
<?php $options = get_option( 'techmix' );?>
	<?php $slides = $options['home-slide']; ?>
	<section class="cd-hero js-cd-hero js-cd-autoplay">
		<ul class="cd-hero__slider">
			<?php $i = 0; foreach ($slides as $slide) : $i++;?>
<li class="cd-hero__slide <?php if($i === 1) echo "cd-hero__slide--selected";  ?> js-cd-slide" style="background-image: url('<?php echo $slide['bg-image'];?>')">
						
						<div class="cd-hero__content cd-hero__content--full-width">
							<h2><?php echo $slide['slide-heading']; ?></h2>
							<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, explicabo.</p> -->
							<a href="#0" class="cd-hero__btn"><?php echo $slide['slide-btn'];?></a>
						</div> <!-- .cd-hero__content -->
				</li>
						<?php endforeach; ?>
		</ul> <!-- .cd-hero__slider -->

		<div class="cd-hero__nav js-cd-nav">
			<nav>
				<span class="cd-hero__marker cd-hero__marker--item-1 js-cd-marker"></span>
				
				<ul>
				<?php $i = 0; foreach ($slides as $slide) : $i++;?>
					<li class="<?php if($i === 1) echo "cd-selected";?>"><a href="#0"><?php echo $slide['slide-control-text']?></a></li>
					<?php endforeach; ?>
				</ul>
			</nav> 
		</div> <!-- .cd-hero__nav -->
	</section> <!-- .cd-hero -->

<section class="worldtrac_query_section">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 col-md-12">
				<div class="query_box">
					<div class="search_query_cat">
						<form action="" method="post">
							<h1 class="font-rs">We champion the bold to achieve the extraordinary.</h1>
							<p>Answer two questions and put our thinking to work on your challenges.</p>
							<ol>
								<li>1. What is your industry?</li>
								<span class="question_count">Question 1 of 2</span>
							</ol>
							<?php
							// $children = get_term_children($options['query_category_one'],'query');
							// var_dump($children);
							$termchildren = get_terms('posts',array('child_of' => $options['query_category_one']));

							var_dump($termchildren);
							$taxonomies = get_terms( array(
								'taxonomy' => 'query_taxonomy',
								'hide_empty' => false
							) );
							if ( !empty( $taxonomies ) && !is_wp_error( $taxonomies ) ): ?>
							
								<ul>
									<?php foreach ( $taxonomies as $term ) : ?>
										<li><a href="javascript:void(0)"><?php echo $term->name?></a></li>
									<?php endforeach; ?>
								</ul>
							<?php  endif; ?>
						</form>
					</div>
					<div class="query_image">
						<img src="<?php echo get_theme_file_uri()?>/assets/img/homepage-1.png" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- end worldtrac_query_section -->
<section class="worldtrac_section_slide_area">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="home_section_slide">
					<div class="single_section_slide">
						<div class="section_slide_thumb">
							<img src="<?php echo get_theme_file_uri()?>/assets/img/section-slide-1.png" alt="">
						</div>
						<div class="section_slide_content">
							<h1>Bold steps forward.</h1>
							<p>See how we’ve helped ambitious clients achieve extraordinary outcomes.</p>
							<div class="slide_single_post">
								<ul>
									<li>
										<h4>Featured client success story</h4>
										<div class="section_slide_posts_box">
											<h3>Sales blueprint puts IT Services Co.'s growth back on track</h3>
											<button class="s_slide_btn">Read Story <i class="fas fa-angle-right"></i></button>
										</div>	
									</li>
									
									<li>
										<h4>How we helped</h4>
										<div class="section_slide_posts_box">
											<h3>Go-to-market Mobilizer</h3>
											<p>Build a detailed analysis of market opportunity—and mobilize your sales teams to attack it.</p>
											<button class="s_slide_btn">View offering <i class="fas fa-angle-right"></i></button>
										</div>	
									</li>

								</ul>
							</div>
							<div class="slide_controll">
								<div class="slide_cat">
									<a href="#">See all client results</a>
								</div>
								<div class="slide_nav">
									<button class="nav-prev"><i class="fas fa-angle-left"></i></button>
									<button class="nav-next"><i class="fas fa-angle-right"></i></button>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- end -->
<section class="worldtrac_career_bg" style="background-image: url('<?php echo get_theme_file_uri()?>/assets/img/career-bg.jpg'); background-size: cover;">
<div class="worldtrac_content_table">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<span class="cat_name"><a href="#">Careers</a></span>
				<h1>Worldtrac and You</h1>
				<button class="career_btn">Start Here</button>
			</div>
		</div>
	</div>
</div>
</section>
<!-- end  worldtrac_career_bg-->

<section class="worldtrac_latest_insights">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="section-heading"><h3>Our Latest Insights</h3></div>
			</div>
		</div>
		<div class="latest_insights_inner" style="width: 100%">
			<div class="row">
				<div class="col-12 col-md-6">
						<div class="single_insigths_content">
							<div class="thumb">
								<img src="<?php echo get_theme_file_uri() ?>/assets/img/inshights-1.jpg" alt="">
							</div>
							<div class="caption">
								<span class="cat_name">enterprise</span>
								<h3>Back-to-Work Warning Signs: Rising Covid-19 Cases and the Classroom Crisis</h3>
								<p>Americans are becoming more hesitant about returning to the workplace and sending their kids back to school.</p>
								<span class="bookmark"><i class="far fa-bookmark"></i></span>
							</div>
						</div>
				</div>
				
				<div class="col-12 col-md-6">
						<div class="single_insigths_content">
							<div class="thumb">
								<img src="<?php echo get_theme_file_uri() ?>/assets/img/inshights.jpg" alt="">
							</div>
							<div class="caption">
								<span class="cat_name">enterprise</span>
								<h3>Back-to-Work Warning Signs: Rising Covid-19 Cases and the Classroom Crisis</h3>
								<p>Americans are becoming more hesitant about returning to the workplace and sending their kids back to school.</p>
								<span class="bookmark"><i class="far fa-bookmark"></i></span>
							</div>
						</div>
				</div>

			</div>
			<div class="row">
				<div class="col-12 text-center my-5">
					<button class="btn_insights">See all insights</button>
				</div>
			</div>
		</div>
		
	</div>
</section>
<!-- end  worldtrac_latest_insights-->
<section class="worldtrac_help_section">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="help_section_inner">
					<div class="single_help_section">
						<h1>What can we help you achieve?</h1>
						<button class="help_btn">let's get to work</button>
					</div>
					
					<div class="single_help_section">
						<h1>Where will your career take you?</h1>
						<button class="help_btn">let's get to work</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>
