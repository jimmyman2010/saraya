<?php
/**
 * Template Name: Blue Template Page
 *
 * @package Dickinsons
 * @since Dickinsons 1.0.0
 */

get_header(); ?>

<script> document.getElementById('site-container').className += ' blue-template'; </script>

<main class="site-main">

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
