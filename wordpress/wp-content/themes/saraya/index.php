<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
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
