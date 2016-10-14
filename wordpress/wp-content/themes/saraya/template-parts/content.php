<?php
/**
 * The template part for displaying content
 *
 * @package Dickinsons
 * @since Dickinsons 1.0.0
 */
?>

<article class="item<?= has_post_thumbnail() ? ' has-thumbnail' : '' ?>">
	<?php if(has_post_thumbnail()) : ?>
	<figure>
		<?php dickinsons_post_thumbnail(); ?>
		<figcaption>
			<?php dickinsons_entry_tag(false); ?>
		</figcaption>
	</figure>
	<?php endif; ?>

	<div class="details">
		<?php the_title( sprintf( '<h2><a href="%s">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
		<div class="meta">
			<?php dickinsons_entry_date(); ?> | <?php dickinsons_entry_category(); ?>
		</div>

		<?php dickinsons_excerpt(); ?>
	</div>
</article>



