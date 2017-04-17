<?php
/**
 * Template Name: No Title
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package Saraya
 * @since Saraya 1.0.0
 */

get_header(); ?>

<main class="site-main site-main--no-title">

	<?php
	// Start the loop.
	while ( have_posts() ) : the_post();

		if (siteorigin_panels_render()){
			get_template_part('template-parts/content', 'page-builder');
		} else {
			// Include the page content template.
			get_template_part('template-parts/content', 'page');
		}

		// End of the loop.
	endwhile;
	?>

</main>
<?php get_footer(); ?>
