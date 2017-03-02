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
	<link rel="apple-touch-icon" href="<?= get_template_directory_uri(); ?>/assets/favicon.png">
	<link rel="shortcut icon" href="<?= get_template_directory_uri(); ?>/assets/favicon.ico" type="image/x-icon">
	<link rel="icon" href="<?= get_template_directory_uri(); ?>/assets/favicon.ico" type="image/x-icon">


	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> id="body">

<div id="site-container" class="site-container">

	<aside class="site-rail-menu" role="complementary">
		<a class="site-rail-menu--close">Close</a>
		<div class="scrolling">
			<div id="nav_menu-2" class="widget widget_nav_menu"><div
					class="menu-right-hand-rail-menu-container"><ul
						id="menu-right-hand-rail-menu" class="menu"><li
							id="menu-item-50" class="menu--teal menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-50"><a
								href="http://www.ability.edu.au/course-options/">Course Options</a><ul
								class="sub-menu"><li
									id="menu-item-52" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-52"><a
										href="http://www.ability.edu.au/course-options/general-english/">General English</a></li><li
									id="menu-item-51" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-51"><a
										href="http://www.ability.edu.au/course-options/general-english-plus/">General English Plus</a></li><li
									id="menu-item-48" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-48"><a
										href="http://www.ability.edu.au/course-options/survivor-english/">Survivor English</a></li><li
									id="menu-item-45" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-45"><a
										href="http://www.ability.edu.au/course-options/pronunciation-fluency/">Pronunciation &#038; Fluency</a></li><li
									id="menu-item-434" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-434"><a
										href="http://www.ability.edu.au/course-options/cambridge-test-preparation/">Cambridge Test Preparation</a></li><li
									id="menu-item-49" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-49"><a
										href="http://www.ability.edu.au/course-options/ielts-test-preparation/">IELTS Test Preparation</a></li><li
									id="menu-item-47" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-47"><a
										href="http://www.ability.edu.au/course-options/english-for-academic-purposes/">English for Academic Purposes</a></li><li
									id="menu-item-46" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-46"><a
										href="http://www.ability.edu.au/course-options/flexible-timetables/">Flexible Timetables</a></li><li
									id="menu-item-476" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-476"><a
										href="http://www.ability.edu.au/course-options/extra-weekly-classes/">Extra Weekly Classes</a></li><li
									id="menu-item-494" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-494"><a
										href="http://www.ability.edu.au/course-options/ability-english-study-plans/">Study Plan Assistance</a></li><li
									id="menu-item-521" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-521"><a
										href="http://www.ability.edu.au/course-options/study-pathways/">Study Pathways</a></li><li
									id="menu-item-553" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-553"><a
										href="http://www.ability.edu.au/course-options/placement-test-booking/">Placement Test Booking</a></li></ul></li><li
							id="menu-item-53" class="menu--green menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-53"><a
								href="http://www.ability.edu.au/campus-culture/">Campus Culture</a><ul
								class="sub-menu"><li
									id="menu-item-55" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-55"><a
										href="http://www.ability.edu.au/campus-culture/sydney-campus/">Sydney Campus</a></li><li
									id="menu-item-54" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-54"><a
										href="http://www.ability.edu.au/campus-culture/melbourne-campus/">Melbourne Campus</a></li><li
									id="menu-item-349" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-349"><a
										href="http://www.ability.edu.au/campus-culture/international-friends/">International Friends</a></li><li
									id="menu-item-348" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-348"><a
										href="http://www.ability.edu.au/campus-culture/campus-activities/">Campus Activities</a></li><li
									id="menu-item-347" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-347"><a
										href="http://www.ability.edu.au/campus-culture/student-support/">Student Support</a></li><li
									id="menu-item-517" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-517"><a
										href="http://www.ability.edu.au/campus-culture/housing-support/">Housing Support</a></li></ul></li><li
							id="menu-item-350" class="menu--yellow menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-350"><a
								href="http://www.ability.edu.au/teaching-expert/">Teaching Experts</a><ul
								class="sub-menu"><li
									id="menu-item-371" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-371"><a
										href="http://www.ability.edu.au/teaching-expert/award-winning-courses/">Award Winning Courses</a></li></ul></li><li
							id="menu-item-557" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-557"><a
								href="#">Extras</a><ul
								class="sub-menu"><li
									id="menu-item-558" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-558"><a
										target="_blank" href="http://blog.ability.edu.au/">Students Blog</a></li><li
									id="menu-item-595" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-595"><a
										href="http://www.ability.edu.au/pay-to-study/">Pay to Study</a></li><li
									id="menu-item-658" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-658"><a
										href="http://www.ability.edu.au/course-options/placement-test-booking/">Placement Test Booking</a></li><li
									id="menu-item-644" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-644"><a
										href="http://www.ability.edu.au/docs/ABILITY-Terms-And-Conditions.pdf">Terms and Conditions</a></li><li
									id="menu-item-652" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-652"><a
										href="http://www.ability.edu.au/information-for-international-students/">Information for international students</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</aside>

	<header class="site-header">
		<div class="top-nav">
			<div class="container clearfix">
				<a href="<?= esc_url( home_url( '/' ) ); ?>" class="logo"><img src="<?= get_template_directory_uri(); ?>/assets/images/logo.png" alt="<?php bloginfo( 'name' ); ?>" /></a>
				<div class="meta-info">
					<div class="where-to-buy">
						<a href="<?= get_option('where_to_buy_link_' . ICL_LANGUAGE_CODE) ?>" class="button button--red"><i class="fa fa-shopping-cart"></i> &nbsp; <?= get_option('where_to_buy_' . ICL_LANGUAGE_CODE) ?></a>
					</div>
					<div class="language">
						<?php do_action('icl_language_selector'); ?>
					</div>
					<div class="right-rail-menu">
						<a class="site-rail-menu--toggle" href="javascript:void(0);">
							<span></span>
							<span></span>
							<span></span>
						</a>
					</div>
				</div>
			</div>
		</div>

		<div class="site-menu-wrapper">

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

			<?php echo clean_custom_menus('primary'); ?>

		</div>


	</header>

	<div class="site-wrapper">
		<div class="slogan">
			<div class="container">
				<div class="h1"><i class="fa fa-newspaper-o"></i> <span>LATEST NEWS</span></div>
				<div class="connect">
					<?= get_option('slogan_' . ICL_LANGUAGE_CODE) ?>
				</div>
			</div>
		</div>

