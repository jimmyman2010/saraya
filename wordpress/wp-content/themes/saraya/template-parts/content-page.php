<?php
/**
 * The template used for displaying page content
 *
 * @package Dickinsons
 * @since Dickinsons 1.0.0
 */
?>

<div class="site-title <?= has_post_thumbnail() ? 'has-background' : '' ?> <?= empty( $post->post_parent )? '' : 'child' ?>">
	<div class="container">
		<div class="title">
			<h1><?php echo empty( $post->post_parent ) ? get_the_title( $post->ID ) : get_the_title( $post->post_parent ); ?></h1>
			<h2><?php echo empty( $post->post_parent ) ? '' : get_the_title( $post->ID ); ?></h2>
			<?php echo get_the_post_thumbnail(null, 'banner') ?>
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

			<?php dickinsons_post_thumbnail(); ?>

			<div class="site-article--content body">
				<?php the_content(); ?>
			</div>
		</article>
	</div>

</div>