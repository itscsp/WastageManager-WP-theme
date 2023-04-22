<?php

/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

$bootstrap_version = get_theme_mod('understrap_bootstrap_version', 'bootstrap4');
$navbar_type       = get_theme_mod('understrap_navbar_type', 'collapse');
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,400&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link href="https://fonts.googleapis.com/css2?family=Just+Another+Hand&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
	<?php do_action('wp_body_open'); ?>
	<div class="site" id="page">

		<!-- ******************* The Navbar Area ******************* -->
		<header id="wrapper-navbar">


			<div class="top-header">
				<div class="container">

					<div class="row align-items-center">
						<div class="col-md-8 col-lg-5">
							<div class="mobile-holder-logo">
								<a href="/">
									<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="logo">
								</a>

							</div>
						</div>
						<div class="col-md-4 col-lg-7">
							<div class="top-header-contact">
								<a href="tel:1800 927 831">
									<i class="fa fa-phone"></i> 1800 927 831
								</a>
								<a href="mailto:info@weatcostwast.com" class="top-header-contact-email">
									<i class="fa fa-envelope"></i> info@weatcostwast.com
								</a>
								<div class="mobile-menu-dropdown">
									<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation', 'understrap'); ?>">
										<span>Menu</span><i class="fa fa-bars"></i>
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<a class="skip-link <?php echo understrap_get_screen_reader_class(true); ?>" href="#content">
				<?php esc_html_e('Skip to content', 'understrap'); ?>
			</a>

			<?php
			$container = get_theme_mod('understrap_container_type');
			?>

			<nav id="main-nav" class="navbar navbar-expand-xl navbar-dark" aria-labelledby="main-nav-label">

				<h2 id="main-nav-label" class="screen-reader-text">
					<?php esc_html_e('Main Navigation', 'understrap'); ?>
				</h2>


				<div class="container">



					<div class="search-input-holder">

						<div class="title">Quote:</div>
						<input type="text" placeholder="Type your suburb here">

					</div>
					<!-- Your site branding in the menu -->

					<div class="mobile-menu-dropdown">
						<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation', 'understrap'); ?>">
							<span>Menu</span><i class="fa fa-bars"></i>
						</button>
					</div>

					<!-- The WordPress Menu goes here -->
					<?php
					wp_nav_menu(
						array(
							'theme_location'  => 'primary',
							'container_class' => 'collapse navbar-collapse',
							'container_id'    => 'navbarNavDropdown',
							'menu_class'      => 'navbar-nav ms-auto',
							'fallback_cb'     => '',
							'menu_id'         => 'main-menu',
							'depth'           => 2,
							'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
						)
					);
					?>

				</div><!-- .container(-fluid) -->

			</nav><!-- #main-nav -->

		</header><!-- #wrapper-navbar -->