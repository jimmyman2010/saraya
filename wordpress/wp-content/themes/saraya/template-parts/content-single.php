<?php
/**
 * The template part for displaying single posts
 *
 * @package Dickinsons
 * @since Dickinsons 1.0.0
 */
?>

<div class="body">

	<?php the_content(); ?>

</div>

<div class="item">
	<div class="meta"><?php dickinsons_entry_date(); ?><span class="separate">|</span><?php dickinsons_entry_category(); ?></div>
	<div class="tags"><?php dickinsons_entry_tag(false); ?></div>
</div>

