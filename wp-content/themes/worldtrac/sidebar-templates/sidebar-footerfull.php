<?php
/**
 * Sidebar setup for footer full.
 *
 * @package worldtrac
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


?>

<!-- ******************* The Footer Full-width Widget Area ******************* -->
<?php $options = get_option( 'techmix' );?>
<div class="wrapper" id="wrapper-footer-full">
	<div class="footer-top">

		<div class="container-fluid" id="footer-full-content" tabindex="-1">

			<div class="row">
				<div class="col-md-7 m-padd-none">
					<div class="footer_c_details font-rs">
						<p><?php echo esc_html__( $options['footer-text'], "worldtrac" )?></p>
					</div>
				</div>
				<div class="col-md-5">
					<div class="footer_subscribe_form">
						<form action="">
							<div class="form-group">
								<div class="row">
									<div class="col-md-8 col-7 m-padd-none">
										<input type="email" placeholder="Your email address" id="email">
									</div>
									<div class="col-md-4 col-5 m-padd-none">
										<button class="red_btn subscribe_btn">Subscribe</button>
									</div>
								</div>
							</div>
							<div class="form-group">
								<input type="checkbox" name="checkbox" id="checkbox"> *I have read the Privacy Policy and agree to its terms.
							</div>
						</form>
					</div>
				</div>
			</div>

		</div>
	</div>

	<div class="footer-middle">
		<div class="container-fluid" id="footer-full-content" tabindex="-1">

				<div class="row">
					<div class="col-12 m-padd-none">
						<div class="footer_middle_flex">
							<div class="f-logo">
								<img src="<?php echo esc_url($options['footer-logo'])?>" alt="">
							</div>
							<div class="f-social">
								<ul>
									<?php
										foreach ($options['bottom_social_link'] as $s_linik) :
									?>
									<li><a href="<?php echo $s_linik['link']; ?>"><i class="<?php echo $s_linik['icon']?>"></i></a></li>
									<?php endforeach; ?>
								</ul>
							</div>
						</div>
					</div>
				</div>

		</div>
	</div>

	<div class="footer-bottom">
		<div class="container-fluid" id="footer-full-content" tabindex="-1">

			<div class="row">
				<div class="col-12 m-padd-none">
					<div class="footer_menu">
						<?php $menus_id = $options['footer_menu'];
							if ($menus_id) :
						?>
						
						<ul>
						<?php foreach ($menus_id as $menu) : 
							$footer_menu = wp_get_nav_menu_items($menu);
							foreach ($footer_menu as $value) :
							?>
							<li><a href="<?php echo esc_url( $value->url )?>"><?php echo $value->title?></a></li>
						<?php endforeach; endforeach; ?>
						</ul>
							<?php endif; ?>
					</div>
				</div>
			</div>

		</div>
	</div>
</div><!-- #wrapper-footer-full -->