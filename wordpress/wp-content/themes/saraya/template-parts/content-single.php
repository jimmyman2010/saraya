<?php
/**
 * The template part for displaying single posts
 *
 * @package Dickinsons
 * @since Dickinsons 1.0.0
 */
?>

<header class="single-title">
	<?php the_title( '<h2>', '</h2>' ); ?>
	<div class="meta">
		<?php dickinsons_entry_date(); ?> | <?php dickinsons_entry_category(); ?>
	</div>
</header>

<div class="body">

	<?php the_content(); ?>

</div>

<div class="tag-line">
	<?php dickinsons_entry_tag(true); ?>
</div>
<div class="viral-tools">
	<div class="viral-tools--left">
		<span class='st_facebook_large' displayText='Facebook'></span>
		<span class='st_sharethis_large' displayText='ShareThis'></span>
	</div>
	<div class="viral-tools--right">
		<span class='st_facebook_large' displayText='Facebook'></span>
		<span class='st_twitter_large' displayText='Tweet'></span>
		<span class='st_pinterest_large' displayText='Pinterest'></span>
		<span class='st_googleplus_large' displayText='Google +'></span>
		<span class='st_sharethis_large' displayText='ShareThis'></span>
	</div>
</div>
