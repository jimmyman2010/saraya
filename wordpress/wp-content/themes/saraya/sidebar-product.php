<?php
/**
 * The template for the sidebar containing the main widget area
 *
 * @package Dickinsons
 * @since Dickinsons 1.0.0
 */
?>

<?php if ( is_active_sidebar( 'sidebar_product' )  ) : ?>
	<aside class="left-rail left-rail--product" role="complementary">
		<?php dynamic_sidebar( 'sidebar_product' ); ?>

	</aside>
<?php endif; ?>


