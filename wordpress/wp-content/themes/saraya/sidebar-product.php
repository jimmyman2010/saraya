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

		<div class="product-images">
			<?php
			// Start the loop.
			while ( have_posts() ) : the_post();

				$images = get_field_object('images');

				if($images['value'] && is_array($images['value'])){
					echo '<div class="popup-gallery slide">';
					foreach ($images['value'] as $index => $image) {
						echo '<div class="popup-gallery-item" style="display: none;"><a href="' . $image['url'] . '" title="' . $image['title'] . '"><img src="' . $image['url'] . '" /></a></div>';
					}
					echo '</div>';


					echo '<div class="gallery">';
					foreach ($images['value'] as $index => $image) {
						echo '<div class="gallery-item"><a href="javascript:void(0);" title="' . $image['title'] . '"><img src="' . $image['sizes']['thumb_footer'] . '" /></a></div>';
					}
					echo '</div>';
				}

				// End of the loop.
			endwhile;
			?>

		</div>

		<?php dynamic_sidebar( 'sidebar_product' ); ?>

	</aside>
<?php endif; ?>


