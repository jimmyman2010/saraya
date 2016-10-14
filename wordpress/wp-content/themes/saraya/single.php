<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package Dickinsons
 * @since Dickinsons 1.0.0
 */

get_header(); ?>

<main class="site-main">
	<div class="container">
		<div class="site-title">
			<?php dickinsons_the_breadcrumbs(); ?>
			<h1 class="title"><span>
				Blog
			</span><img src="<?= get_template_directory_uri(); ?>/images/flower-bracket.png" alt=""/></h1>
		</div>
		<div class="main-container clearfix">

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