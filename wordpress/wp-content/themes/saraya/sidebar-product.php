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
						echo '<a href="' . $image['url'] . '" title="' . $image['title'] . '"><img src="' . $image['url'] . '" /></a>';
					}
					echo '</div>';


					echo '<div class="gallery">';
					foreach ($images['value'] as $index => $image) {
						echo '<a href="' . $image['sizes']['medium'] . '" title="' . $image['title'] . '"><img src="' . $image['sizes']['medium'] . '" /></a>';
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


