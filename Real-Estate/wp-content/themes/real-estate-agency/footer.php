<?php
// Do not allow direct access to the file.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * The template for displaying the footer
 * Contains the closing of the #content div and all content after.
 */
?>
	</div><!-- #content -->
	<footer id="colophon" class="site-footer" itemscope="itemscope" itemtype="http://schema.org/WPFooter">
		<?php if ( esc_attr( get_theme_mod( 'social_media_activate' ) ) ) { ?>
			<div class="social-bottom social">
					<div  style="float: none;" class="fa-icons">
						<?php real_estate_agency_social_section(); ?>
					</div>
			</div>
		<?php } ?>
			<div class="footer-center">

				<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
					<div class="footer-widgets">
						<?php dynamic_sidebar( 'footer-1' ); ?>
					</div>
				<?php endif; ?>

				<?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
					<div class="footer-widgets">
						<?php dynamic_sidebar( 'footer-2' ); ?>
					</div>
				<?php endif; ?>

				<?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
					<div class="footer-widgets">
						<?php dynamic_sidebar( 'footer-3' ); ?>
					</div>
				<?php endif; ?>

				<?php if ( is_active_sidebar( 'footer-4' ) ) : ?>
					<div class="footer-widgets">
						<?php dynamic_sidebar( 'footer-4' ); ?>
					</div>
				<?php endif; ?>

			</div>		
		<div class="site-info">
		<?php
		if ( get_theme_mod( 'real_estate_agency_copyright' ) ) {
			echo esc_html( get_theme_mod( 'code_copyright_text' ) );
		}
		else { ?>
			<a class="powered" href="<?php echo esc_url( __( 'https://wordpress.org/', 'real-estate-agency' ) ); ?>">
				<?php
				esc_html_e( 'Powered by WordPress', 'real-estate-agency' );
				?>
			</a>
			<p>
				<?php esc_html_e( 'All rights reserved', 'real-estate-agency' ); ?>  &copy; <?php bloginfo( 'name' ); ?>			
				<a title="Seos Theme - Real Estate Agency" href="<?php echo esc_url( 'https://seosthemes.com/', 'real-estate-agency' ); ?>" target="_blank"><?php esc_html_e( ' Real Estate Agency Theme by Seos Themes', 'real-estate-agency' ); ?></a>
			</p>
		<?php } ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
	<?php if( get_theme_mod( 'activate_back_to_top', true ) ) { real_estate_agency_to_top(); } ?>

<?php wp_footer(); ?>

</body>
</html>
