<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package worldtrac
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$container = get_theme_mod( 'worldtrac_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,900;1,800&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="site" id="page">
<?php $options = get_option( 'techmix' );?>
<?php
	$header_bg = "";
	$border_bottom = "";
	$position = "";
	if (!is_front_page()) {
		$header_bg .= "#444";
		$border_bottom .= "1px solid #9c9c9c";
		$position .= "relative";
	}
?>
<div class="worldtrac_navbar" style="background: <?php echo $header_bg; ?>; position: <?php echo $position; ?>">
	<div class="header-top" style="border-bottom: <?php echo $border_bottom; ?>">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<div class="topbar-menu">
						<div class="topbar-left-menu">
						<?php $menus = $options['tobar-menu-left']?>
						<ul>
							<?php
							if (isset($menus)) :
								foreach ($menus as $menu_id) :
									$footer_menu = wp_get_nav_menu_items( $menu_id); 
										foreach ($footer_menu as $value) :
							?>
								<li><a class="font-os" href="<?php echo esc_url($value->url)?>"><?php echo $value->title?></a></li>
							<?php endforeach;  endforeach; endif; ?>
						</ul>
						</div>
						<div class="topbar-right-menu">
							<ul>
								<li> <a href="#"><i class="fas fa-globe"></i> Global | English <i class="fas fa-angle-down"></i></a></li>

								<li> <a href="#"><i class="far fa-folder"></i> Red Folder <i class="fas fa-angle-down"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="header-bottom">
		<div class="container-fluid">
			<div class="row" style="align-items: center;">
				<div class="col-12">
					<div class="menu-area-inner">
					<div class="logo-area">
							<span><i class="fas fa-bars"></i></span>
							<?php 
							$want_logo = $options['_want_logo'];
							$image = $options['logo'];
							$logo_text = $options['logo_text'];
							if ($want_logo == true) :
								?>
								<a href="<?php echo esc_url(site_url('/')) ?>"><img src="<?php echo esc_url($image); ?>" alt=""></a>
								<?php else:  ?>
									<a href="<?php echo esc_url(site_url('/')) ?>"><h3><?php echo esc_attr($logo_text); ?></h3></a>
							<?php endif; ?>
						</div>
						<div class="menu-area-left">
							<?php wp_nav_menu(
								array(
									'theme_location'  => 'primary',
									'container_class' => 'main-navbar',
									'container_id'    => 'main-navbar',
									'menu_class'      => 'navbar-menu',
									'menu_id'         => 'navbar-menu',
								)
							); ?>
						</div>
					</div>
						
				</div>
				
			</div>
		</div><!-- .container-fluid -->
	</div>
</div><!-- end main navbar -->


