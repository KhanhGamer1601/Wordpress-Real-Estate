<?php
// Do not allow direct access to the file.
if( ! defined( 'ABSPATH' ) ) {
    exit;
}
/**
 * Sample implementation of the Custom Header feature
 */

/**
 * Set up the WordPress core custom header feature.
 */
function real_estate_agency_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'real_estate_agency_custom_header_args', array(
		'default-image'          => get_template_directory_uri() . '/images/header.jpg',
		'default-text-color'     => 'FFFFFF',
		'width'                  => 1000,
		'height'                 => 450,
		'flex-height'            => true,
		'wp-head-callback'       => 'real_estate_agency_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'real_estate_agency_custom_header_setup' );

if ( ! function_exists( 'real_estate_agency_header_style' ) ) :
	/**
	 * Styles the header image and text displayed on the blog.
	 */
	function real_estate_agency_header_style() {
		$header_text_color = get_header_textcolor();

		/*
		 * If no custom options for text are set, let's bail.
		 * get_header_textcolor() options: Any hex value, 'blank' to hide text. Default: add_theme_support( 'custom-header' ).
		 */
		if ( get_theme_support( 'custom-header', 'default-text-color' ) === $header_text_color ) {
			return;
		}

		// If we get this far, we have custom styles. Let's do this.
		?>
		<style type="text/css">
		<?php
		// Has the text been hidden?
		if ( ! display_header_text() ) :
			?>
			.site-title,
			.site-description {
				position: absolute;
				clip: rect(1px, 1px, 1px, 1px);
			}
		<?php
		// If the user has set a custom color for the text use that.
		else :
			?>
			.site-title a, .site-branding .site-title a, .site-title,
			.site-description {
				color: #<?php echo esc_attr( $header_text_color ); ?> !important;
			}
		<?php endif; ?>
		</style>
		<?php
	}
endif;

