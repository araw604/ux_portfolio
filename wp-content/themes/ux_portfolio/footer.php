<?php
/**
 * The template for displaying the footer.
 *
 * @package Portfolio_theme
 */

?>

			</div>
			<div class="footerContainer">
				<span class="iconsSpan">
					<i class="fa fa-twitter-square fa-3x"></i>
					<i class="fa fa-medium fa-3x"></i>
					<i class="fa fa-facebook-square fa-3x"></i>
					<i class="fa fa-instagram fa-3x"></i>
					<i class="fa fa-linkedin-square fa-3x"></i>	
				</span>
				<ul class="planeDownloadlink">
					<li><i class="fa fa-paper-plane fa-2x"></i></li>
					<a href="http://www.tmz.com/"><li>Download my CV</li></a>

				</ul>
				<footer id="colophon" class="site-footer" role="contentinfo">
					<div class="site-info">
						<a href="<?php echo esc_url( 'https://wordpress.org/' ); ?>"><?php printf( esc_html( 'Powered by %s' ), 'araw' ); ?></a>
					</div>
				
				</footer><!-- #colophon -->
			</div>
		</div><!-- #page -->

		<?php wp_footer(); ?>


	</body>
</html>