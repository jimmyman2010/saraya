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

<div class="pagination">
	<div class="nav-links">
	<?php
	$prev_post = get_previous_post();
	if (!empty( $prev_post )): ?>
		<a class="prev page-numbers" href="<?php echo get_permalink( $prev_post->ID ); ?>"><i class="fa fa-angle-left"></i> PREVIOUS</a>
	<?php endif ?>
	<?php
	$next_post = get_next_post();
	if (!empty( $next_post )): ?>
		<a class="next page-numbers" href="<?php echo get_permalink( $next_post->ID ); ?>">NEXT <i class="fa fa-angle-right"></i></a>
	<?php endif; ?>
	</div>
</div>
