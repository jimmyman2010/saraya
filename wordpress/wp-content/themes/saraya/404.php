<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package Dickinsons
 * @since Dickinsons 1.0.0
 */

get_header(); ?>

<main class="site-main">
	<div class="site-title">
		<div class="container">
			<div class="title">
				<h1><?php _e( 'Page not found.', 'dickinsons' ); ?></h1>
			</div>
		</div>
	</div>
	<div class="site-breadcrumb">
		<div class="container">
			<?php dickinsons_the_breadcrumbs(); ?>
		</div>
	</div>

	<div class="main-container clearfix">
		<div class="container">
			<article class="site-article" role="main">
				<div class="site-article--content body">
					<h3 class="title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'dickinsons' ); ?></h3>
					<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'dickinsons' ); ?></p>
					<?php get_search_form(); ?>
				</div>
			</article>
		</div>

	</div>

</main>
<?php get_footer(); ?>
