<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage beccamakesatheme
 * @since Becca Makes a Theme 1.0
 */
?>

		</div><!-- #main -->


		<footer id="colophon" class="site-footer" role="contentinfo">
			<div id="footer" class="footer widget-area" role="complementary">
				<?php
					if(is_active_sidebar('footer-1')){
						dynamic_sidebar('footer-1');
					}
				?>
			</div>
			<div class="social-btns">
				<a href="http://www.twitter.com/beccaliz" class="soc-icon tw"></a>
				<a href="http://www.facebook.com/beccanelsonwrites" class="soc-icon fb"></a>
				<a href="https://www.linkedin.com/in/rebeccanelson88" class="soc-icon ln"></a>
				<a href="http://www.github.com/beccanelson" class="soc-icon gh"></a>
			</div>
			<div class="site-info">
				<div class="site-description">
				<center>
					<p>Copyright &copy 2015 <?php bloginfo('name'); ?>, all rights reserved.</p>
				</div>
				</center>
				
			<!-- <nav class="social-media-navigation" role="navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'social-media', 'menu_class' => 'social-media-menu' ) ); ?>
			</nav> -->

			</div><!-- .site-info -->
		</footer><!-- #colophon -->

	</div><!-- #page -->

	<?php wp_footer(); ?>

</body>
</html>