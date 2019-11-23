<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of #main and all content
 * after. Calls sidebar-footer.php for bottom widgets.
 *
 * @package Fluida
 */

?>
		<?php cryout_absolute_bottom_hook(); ?>

		<aside id="colophon" role="complementary" <?php cryout_schema_microdata( 'sidebar' );?>>
			<div id="colophon-inside" <?php fluida_footer_colophon_class();?>>
				<?php get_sidebar( 'footer' );?>
			</div>
		</aside><!-- #colophon -->

	</div><!-- #main -->

	<footer id="footer" class="cryout" role="contentinfo" <?php cryout_schema_microdata( 'footer' );?>>
		<?php
			$the_theme = wp_get_theme();
			do_action( 'cryout_footer_hook' );
			echo '<div id="site-copyright">' . do_shortcode( wp_kses_post( cryout_get_option( 'fluida_copyright' ) ) ) . '</div>';
			echo '<div style="display:block;float:right;clear: right;font-size: .9em;" class="made-with-love">Made with <3 By Jesse Shaw</div>';
		?>
	</footer>

	</div><!-- site-wrapper -->
	<?php wp_footer(); ?>
</body>
</html>
