<?php
/**
 * The template used for displaying page content
 *
 * @package Dickinsons
 * @since Dickinsons 1.0.0
 */
?>

<div class="container">
	<div class="site-title">
		<?php dickinsons_the_breadcrumbs(); ?>
		<h1 class="title"><span><?php
		echo empty( $post->post_parent ) ? get_the_title( $post->ID ) : get_the_title( $post->post_parent );
		?></span><img src="<?= get_template_directory_uri(); ?>/images/flower-bracket.png" alt=""/></h1>
	</div>
</div>
<article class="main-container clearfix">

	<?php the_content(); ?>

</article>