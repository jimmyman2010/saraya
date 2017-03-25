<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Dickinsons
 * @since Dickinsons 1.0.0
 */

get_header(); ?>

<main class="site-main">
	<div class="site-title child" style="background-color: transparent;">
		<div class="container">
			<div class="title">
				<h1>Our product</h1>
				<h2>Choose the filter below to search the catalogue of our products</h2>
			</div>
		</div>
	</div>

	<?php get_template_part( 'template-parts/content', 'product-search' ); ?>

	<div class="site-breadcrumb">
		<div class="container">
			<?php dickinsons_the_breadcrumbs(); ?>
		</div>
	</div>

	<div class="main-container clearfix">

		<div class="container">
			<section class="blog-content" role="main">

				<?php if ( have_posts() ) : ?>

					<?php
					// Start the loop.
					while ( have_posts() ) : the_post();
						get_template_part( 'template-parts/content-product', get_post_format() );
					endwhile;

					get_template_part( 'template-parts/content', 'pagination' );

				// If no content, include the "No posts found" template.
				else :
					get_template_part( 'template-parts/content', 'none' );

				endif;
				?>

			</section>

			<?php get_sidebar('product'); ?>
		</div>
	</div>
</main>
<?php get_footer(); ?>
