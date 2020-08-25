<?php
/**
 * The template for displaying the author pages.
 *
 * Learn more: https://codex.wordpress.org/Author_Templates
 *
 * @package worldtrac
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
$container   = get_theme_mod( 'worldtrac_container_type' );
?>


<div class="wrapper" id="author-wrapper">

	<div class="container-fluid" id="content" tabindex="-1">
	
		<div class="row">
			<div class="col-10 offset-1">
			<header class="page-header author-header">

<?php
if ( isset( $_GET['author_name'] ) ) {
	$curauth = get_user_by( 'slug', $author_name );
} else {
	$curauth = get_userdata( intval( $author ) );
}

$author_website = $curauth->user_url;
?>

<?php 
	$author_facebook = get_the_author_meta( 'facebook', $curauth->ID );
	$author_twitter  = get_the_author_meta( 'twitter', $curauth->ID  );
	$author_linkedin = get_the_author_meta( 'linkedin', $curauth->ID );
	$author_youtube  = get_the_author_meta( 'youtube', $curauth->ID  ); 
?>
<?php if ( ! empty( $curauth->nickname ) || ! empty( $curauth->user_description ) ) : ?>
	<div class="auth-profile">
		<?php if ( ! empty( $curauth->ID ) ) : ?>
			<div class="author-thumb">
				<?php echo get_avatar( $curauth->ID ); ?>
			</div>
		<?php endif; ?>
		
	</div>
	<div class="auth-desc">
		<?php if ( ! empty( $curauth->nickname ) ) : ?>
			<dl>
				<dt><h1><?php echo esc_html( $curauth->nickname ); ?></h1></dt>
			</dl>
		<?php endif; ?>
		<?php if ( ! empty( $curauth->user_description ) ) : ?>
			<dl>
				<dd><?php esc_html_e( $curauth->user_description ); ?></dd>
			</dl>
		<?php endif; ?>
		
		<ul class="auth_social_icon">
			<?php if ($author_website): ?>
				<li><?php printf( '<a href="%s"><i class="fas fa-house-user"></i></a>',
			esc_url( $author_website )); ?></li>
			<?php endif ?>
			<?php if ($author_facebook): ?>
				<li><?php printf( '<a href="%s"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>',
				esc_url( $author_facebook )); ?>
				</li>
			<?php endif ?>
			<?php if ($author_linkedin): ?>
				<li><?php printf( '<a href="%s"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a>',
				esc_url( $author_linkedin )); ?>
				</li>
			<?php endif ?>
			<?php if ($author_twitter): ?>
				<li><?php printf( '<a href="%s"><i class="fab fa-twitter" aria-hidden="true"></i></a>',
				esc_url( $author_twitter )); ?>
				</li>
			<?php endif ?>
			<?php if ($author_youtube): ?>
				<li><?php printf( '<a href="%s"><i class="fab fa-youtube" aria-hidden="true"></i></a>',
			esc_url( $author_youtube )); ?>
				</li>
			<?php endif ?>
		</ul>
	</div>
	<?php endif; ?>

</header><!-- .page-header -->
			</div>
		</div>

		<div class="row single-author-post-wrap">


			
					<!-- The Loop -->
					<?php if ( have_posts() ) : ?>
						<?php while ( have_posts() ) : the_post(); ?>
						<?php get_template_part( 'loop-templates/content', 'author' ); ?>
						<?php endwhile; ?>

					<?php else : ?>

						<?php get_template_part( 'loop-templates/content', 'none' ); ?>

					<?php endif; ?>

					
				</div> <!-- .row -->
				<!-- The pagination component -->
				<div class="row">
					<div class="col-12 text-center mb-5">
					<button id="author_post_btn" class="font-rs" data-page="1" data-author="<?php echo $curauth->user_login; ?>" data-url="<?php echo admin_url('admin-ajax.php')?>"><img src="<?php echo get_template_directory_uri()?>/assets/img/spin.gif" class="none" /> Load more</button>
					</div>
				</div>

</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
