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
	<div class="container">
		<div class="site-title">
			<?php dickinsons_the_breadcrumbs(); ?>
			<h1 class="title"><span>
				<?php the_archive_title(); ?>
			</span><img src="<?= get_template_directory_uri(); ?>/images/flower-bracket.png" alt=""/></h1>
		</div>
		<div class="main-container clearfix">

			<section class="blog-content" role="main">

				<?php if ( have_posts() ) : ?>

					<?php
					// Start the loop.
					while ( have_posts() ) : the_post();
						get_template_part( 'template-parts/content', get_post_format() );
					endwhile;

					get_template_part( 'template-parts/content', 'pagination' );

				// If no content, include the "No posts found" template.
				else :
					get_template_part( 'template-parts/content', 'none' );

				endif;
				?>

			</section>

			<?php get_sidebar(); ?>
		</div>
	</div>
</main>
<?php get_footer(); ?>
