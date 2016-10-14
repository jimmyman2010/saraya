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

<body <?php body_class(); ?>>

<div id="site-container" class="site-container">
	<header class="site-header">
		<div class="container clearfix">
			<a href="<?= esc_url( home_url( '/' ) ); ?>" class="logo"><img src="<?= get_template_directory_uri(); ?>/images/logo.jpg" alt="<?php bloginfo( 'name' ); ?>" /></a>
			<div class="meta-info">
				<?= get_option('slogan_' . ICL_LANGUAGE_CODE) ?>
				<div class="language">
					<a href="javascript:void(0);" class="language--toggle"></a>
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
			<div class="bar"></div>
		</nav>
	</header>

