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

	<footer class="site-footer">

		<section class="subscribe">
			<div class="container">
				<div class="subscribe-form">
					<?= get_option('subscribe_' . ICL_LANGUAGE_CODE) ?>
				</div>
			</div>
		</section>
		<div class="bar"></div>
		<section class="socials-network">
			<div class="container">
				<p class="copy"><?= get_option('connect_with_us_' . ICL_LANGUAGE_CODE) ?></p>
				<p class="socials">
					<a target="_blank" href="https://www.instagram.com/dickinsonsvn/"><i class="fa fa-instagram"></i></a>
					<a target="_blank" href="https://www.facebook.com/dickinsonsvn/"><i class="fa fa-facebook"></i></a>
					<a target="_blank" href="https://twitter.com/DickinsonsAsia"><i class="fa fa-twitter"></i></a>
					<a target="_blank" href="#"><i class="fa fa-skype"></i></a>
				</p>
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
		<section class="footer--info">
			<div class="container">
				<div class="three-column">
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

					<div class="latest-news">
						<?php echo dickinsons_recent_post(); ?>
						<a href="<?= get_option('all_articles_link_' . ICL_LANGUAGE_CODE) ?>" class="view-all">
							<i class="fa fa-newspaper-o"></i> <?= get_option('all_articles_' . ICL_LANGUAGE_CODE) ?>
						</a>
					</div>
				</div>


				<div class="copyright">
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
