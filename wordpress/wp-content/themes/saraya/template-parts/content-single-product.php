<?php
/**
 * The template part for displaying single posts
 *
 * @package Dickinsons
 * @since Dickinsons 1.0.0
 */
?>


<div class="product-title body">
	<h2><?php saraya_product_type(); ?></h2>
	<?php the_title( '<h1>', '</h1>' ); ?>
	<div class="tags--market-segment"><?php saraya_market_segment(); ?></div>
</div>

<br/>

<div class="product-summary body">
	<?php the_content(); ?>
</div>

<div class="placeholder-mobile"></div>

<div class="product-details body">
	<h3>Product details</h3>
	<ul>
		<?php $details = [
			'available_in',
			'how_to_use',
			'active_ingredients',
			'fragrance',
			'colour',
			'product_code',
			'units_per_case',
			'cen_standards',
			'other',
			'note'
		] ?>
		<?php

		foreach($details as $detail) {
			$tmp = get_field_object($detail);
			if ($tmp && $tmp['value']) {
			    if(ICL_LANGUAGE_CODE && ICL_LANGUAGE_CODE === 'en') {
                    echo '<li><strong>' . $tmp['label'] . ':</strong><span>' . $tmp['value'] . '</span></li>';
                } else {
                    echo '<li><strong>' . $tmp['instructions'] . ':</strong><span>' . $tmp['value'] . '</span></li>';
                }
			}
		}?>
	</ul>
</div>

<div class="body">
	<?php echo get_field_object('summary')['value']; ?>
</div>

<div class="extra-link body">
	<ul>
		<?php
		$tmp = get_field_object('have_a_question');
		if ($tmp && $tmp['value']) {
			echo '<a target="_blank" class="button button--large button--white" href="' . $tmp['value'] . '"><i class="fa fa-envelope-o"></i>' . $tmp['label'] . '</a>';
		}
		?>
		<?php
		$tmp = get_field_object('download_the_flyer');
		if ($tmp && $tmp['value']) {
			echo '<a target="_blank" class="button button--large button--white" title="' . $tmp['value']['title'] . '" href="' . $tmp['value']['url'] . '"><i class="fa fa-download"></i>' . $tmp['label'] . '</a>';
		}
		?>
		<?php
		$tmp = get_field_object('where_to_buy');
		if ($tmp && $tmp['value']) {
			echo '<a target="_blank" class="button button--large button--red" href="' . $tmp['value'] . '"><i class="fa fa-shopping-cart"></i>' . $tmp['label'] . '</a>';
		}
		?>
	</ul>
</div>


