<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package Dickinsons
 * @since Dickinsons 1.0.0
 */

get_header(); ?>

<main class="site-main">
	<div class="site-breadcrumb">
		<div class="container">
			<ul class="breadcrumbs">
				<li><span class="divider">»</span><?php saraya_brand(); ?></li>
				<li><span class="divider">»</span><?php saraya_product_type(); ?></li>
				<li><span class="divider">»</span><?php the_title(); ?></li>
			</ul>
		</div>
	</div>

	<div class="main-container">

		<div class="container clearfix">
			<section class="blog-content" role="main">
				<?php
				// Start the loop.
				while ( have_posts() ) : the_post();

					// Include the single post content template.
					get_template_part( 'template-parts/content', 'single-product' );
					get_template_part( 'template-parts/content', 'related' );

					// End of the loop.
				endwhile;
				?>

			</section>

			<?php get_sidebar('product'); ?>
		</div>
	</div>
</main>
<?php get_footer(); ?>