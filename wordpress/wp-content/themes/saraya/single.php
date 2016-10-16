<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package Dickinsons
 * @since Dickinsons 1.0.0
 */

get_header(); ?>

<main class="site-main">
	<div class="site-title <?= has_post_thumbnail() ? 'has-background' : '' ?> child">
		<div class="container">
			<div class="title">
				<h1>Our Blog</h1>
				<h2>& Latest News</h2>
				<?php echo get_the_post_thumbnail(null, 'banner') ?>
			</div>
		</div>
	</div>
	<div class="site-breadcrumb">
		<div class="container">
			<?php dickinsons_the_breadcrumbs(); ?>
		</div>
	</div>


	<div class="main-container">
		<div class="container clearfix">

			<section class="blog-content" role="main">

				<?php
				// Start the loop.
				while ( have_posts() ) : the_post();

					// Include the single post content template.
					get_template_part( 'template-parts/content', 'single' );
					get_template_part( 'template-parts/content', 'related' );

					// End of the loop.
				endwhile;
				?>

			</section>

			<?php get_sidebar(); ?>
		</div>
	</div>
</main>
<?php get_footer(); ?>