<?php
/**
 * The template for the sidebar containing the main widget area
 *
 * @package Dickinsons
 * @since Dickinsons 1.0.0
 */
?>

<aside class="site-rail-menu" role="complementary">
	<a class="site-rail-menu--close">Close</a>

	<?php if ( is_active_sidebar( 'right-hand-rail-sidebar' )  ) : ?>
		<div class="scrolling">

		<?php dynamic_sidebar( 'right-hand-rail-sidebar' ); ?>

			<div class="slogan">
				<div class="h1"><a href="<?= get_option('latest_news_link_' . ICL_LANGUAGE_CODE) ?>"><i class="fa fa-newspaper-o"></i> <span><?= get_option('latest_news_' . ICL_LANGUAGE_CODE) ?></span></a></div>
				<div class="where-to-buy">
					<a href="<?= get_option('where_to_buy_link_' . ICL_LANGUAGE_CODE) ?>" class="button button--red"><i class="fa fa-shopping-cart"></i> &nbsp; <?= get_option('where_to_buy_' . ICL_LANGUAGE_CODE) ?></a>
				</div>
				<div class="connect">
					<?= get_option('slogan_' . ICL_LANGUAGE_CODE) ?>
				</div>
			</div>

		</div>
	<?php endif; ?>

</aside>


