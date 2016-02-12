<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
global $jmwsIdMyGadget;
global $jmwsIdMyGadgetTwentyThirteenHelper;
?>

		</div><!-- #main -->
		<?php $original_attributes = 'id="colophon" class="site-footer" role="contentinfo"'; ?>
		<footer <?php echo $jmwsIdMyGadget->getFooterAttributes($original_attributes); ?>>
			<?php if( $jmwsIdMyGadgetTwentyThirteenHelper->phoneFooterNavInTwentyThirteenPage ) : ?>
				<nav data-role="navbar">
					<?php wp_nav_menu( array('theme_location' => 'phone-footer-nav', 'container' => false) ); ?>
				</nav>
			<?php else: ?>
				<?php get_sidebar( 'main' ); ?>
				<div class="site-info">
					<?php do_action( 'twentythirteen_credits' ); ?>
					<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'twentythirteen' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'twentythirteen' ); ?>"><?php printf( __( 'Proudly powered by %s', 'twentythirteen' ), 'WordPress' ); ?></a>
				</div><!-- .site-info -->
			<?php endif; ?>
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>
