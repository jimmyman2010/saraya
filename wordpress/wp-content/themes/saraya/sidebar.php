<?php
/**
 * The template for the sidebar containing the main widget area
 *
 * @package Dickinsons
 * @since Dickinsons 1.0.0
 */
?>

<?php if ( is_active_sidebar( 'sidebar' )  ) : ?>
	<aside class="left-rail" role="complementary">
		<?php dynamic_sidebar( 'sidebar' ); ?>

		<?= get_option('our_products_' . ICL_LANGUAGE_CODE) ?>

	</aside>
<?php endif; ?>


