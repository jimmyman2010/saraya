<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package Dickinsons
 * @since Dickinsons 1.0.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,400italic,600,700,800&subset=latin,vietnamese,latin-ext' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=David+Libre:700&subset=latin,vietnamese,latin-ext' rel='stylesheet' type='text/css'>

	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> id="body">

<div id="site-container" class="site-container">
	<header class="site-header">

		<div class="container clearfix">
			<a href="<?= esc_url( home_url( '/' ) ); ?>" class="logo"><img src="<?= get_template_directory_uri(); ?>/assets/images/logo.png" alt="<?php bloginfo( 'name' ); ?>" /></a>
			<div class="meta-info">
				<div class="where-to-buy">
					<a href="<?= get_option('where_to_buy_link_' . ICL_LANGUAGE_CODE) ?>" class="button button--red"><i class="fa fa-shopping-cart"></i> &nbsp; <?= get_option('where_to_buy_' . ICL_LANGUAGE_CODE) ?></a>
				</div>
				<div class="language">
					<?php do_action('icl_language_selector'); ?>
				</div>
			</div>
		</div>

		<nav class="site-menu">
			<div class="container">
				<a href="javascript:void(0);" class="toggle-main-menu">
					<span></span>
					<span></span>
					<span></span>
				</a>
				<div class="main-menu-wrap">
					<?php
					if ( has_nav_menu( 'primary' ) ) {
						wp_nav_menu( array(
							'theme_location' => 'primary',
							'menu_class' => 'main-menu',
							'container' => 'ul'
						) );
					} ?>
				</div>
			</div>
		</nav>

		<div class="slogan">
			<div class="container">
				<div class="h1"><i class="fa fa-newspaper-o"></i> <span>LATEST NEWS</span></div>
				<div class="connect">
					<?= get_option('slogan_' . ICL_LANGUAGE_CODE) ?>
				</div>
			</div>
		</div>

		<div class="submenu">
			<div class="container">
				<ul class="menu-link">
					<li class="links">
						<h3>Market Segments & Products</h3>
						<ul>
							<li><a href="#">Healthcare Hygiene</a></li>
							<li><a href="#">Food Sanitation</a></li>
							<li><a href="#">Public Health Hygiene</a></li>
							<li><a href="#">Consumer</a></li>
						</ul>
					</li>
					<li>
						<h4>Healthcare Products</h4>
						<figure>
							<a href="#">
								<img src="images/menu/img1.jpg" alt=""/>
							</a>
						</figure>
					</li>
					<li>
						<h4>Public Health Hygiene</h4>
						<figure>
							<a href="#">
								<img src="images/menu/img2.jpg" alt=""/>
							</a>
						</figure>
					</li>
					<li>
						<h4>Food Sanitation</h4>
						<figure>
							<a href="#">
								<img src="images/menu/img3.jpg" alt=""/>
							</a>
						</figure>
					</li>
					<li>
						<h4>Cusomers</h4>
						<figure>
							<a href="#">
								<img src="images/menu/img4.jpg" alt=""/>
							</a>
						</figure>
					</li>
				</ul>
			</div>
		</div>

	</header>

