<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package Dickinsons
 * @since Dickinsons 1.0.0
 */

get_header(); ?>

<main class="site-main">
	<div class="site-title <?= (has_post_format( 'image' ) && has_post_thumbnail()) ? 'has-background' : '' ?> child">
		<div class="container">
			<div class="title">
				<h1>Our Blog</h1>
				<h2>& Latest News</h2>
				<?php if(has_post_format( 'image' ) && has_post_thumbnail()) {
					echo get_the_post_thumbnail(NULL, 'banner');
				} ?>

			</div>
		</div>
	</div>
	<div class="site-breadcrumb">
		<div class="container">
			<?php dickinsons_the_breadcrumbs(); ?>
		</div>
	</div>

	<div class="main-container">

		<header class="single-title">
			<div class="container">
				<div class="body">
					<?php  dickinsons_first_category(); ?>
					<?php the_title( '<h1>', '</h1>' ); ?>
				</div>
				<div class="meta">
					<span class="tags"><?php dickinsons_entry_tag(false); ?></span><span class="separate">|</span><?php dickinsons_entry_date(); ?>
				</div>
			</div>
			<div class="excerpt">
				<div class="container">
					<div class="body">
						<?php the_excerpt(); ?>
					</div>
				</div>
			</div>
		</header>

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