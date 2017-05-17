<?php
/**
 * The template part for displaying content
 *
 * @package Dickinsons
 * @since Dickinsons 1.0.0
 */
?>

<article class="item-product item<?= has_post_thumbnail() ? ' has-thumbnail' : '' ?>">
	<?php the_title( sprintf( '<h3><a href="%s">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
	<div class="details">
		<?php if(has_post_thumbnail()) : ?>
			<figure>
				<?php dickinsons_post_thumbnail('full'); ?>
			</figure>
		<?php endif; ?>
		<div class="description">
			<?php dickinsons_excerpt(); ?>
		</div>
	</div>

	<div class="tags--market-segment"><?php saraya_market_segment(); ?></div>
</article>



