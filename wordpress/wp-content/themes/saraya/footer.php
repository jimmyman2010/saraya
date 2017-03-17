<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Dickinsons
 * @since Dickinsons 1.0.0
 */
?>

	</div> <!-- close site-wrapper -->
	<footer class="site-footer">

		<section class="socials-network">
			<div class="container">
				<?= get_option('connect_with_us_' . ICL_LANGUAGE_CODE) ?>
				<?php
				if ( has_nav_menu( 'footer_horizontal' ) ) {
					wp_nav_menu( array(
						'theme_location' => 'footer_horizontal',
						'menu_class' => 'nav',
						'container' => 'ul'
					) );
				} ?>
			</div>
		</section>

		<section class="subscribe">
			<div class="container">
				<div class="subscribe-form">
					<?= get_option('subscribe_' . ICL_LANGUAGE_CODE) ?>
				</div>
			</div>
		</section>

		<section class="footer--info">
			<div class="container">
				<div class="three-column">

					<div class="latest-news">
						<?php echo dickinsons_recent_post(); ?>
						<a href="<?= get_option('all_articles_link_' . ICL_LANGUAGE_CODE) ?>" class="button button--green">
							<?= get_option('all_articles_' . ICL_LANGUAGE_CODE) ?>
						</a>
					</div>
					<div class="information">
						<h3><?= get_option('information_' . ICL_LANGUAGE_CODE) ?></h3>
						<?php
						if ( has_nav_menu( 'footer' ) ) {
							wp_nav_menu( array(
								'theme_location' => 'footer',
								'menu_class' => 'nav',
								'container' => 'ul'
							) );
						} ?>
					</div>
					<div class="contact">
						<?= get_option('contact_' . ICL_LANGUAGE_CODE) ?>
					</div>
				</div>


				<div class="copyright">
					<a href="#body" class="back-to-top anchor"><i class="fa fa-angle-up"></i></a>
					<?= get_option('copyright_' . ICL_LANGUAGE_CODE) ?>
				</div>
			</div>
		</section>
	</footer>

</div>

<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "f5aa822b-dd9d-40c5-ab1d-949e4ccb9e9c", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>

<?php wp_footer(); ?>
</body>
</html>
