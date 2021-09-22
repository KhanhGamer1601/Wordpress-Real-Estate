<?php // Do not allow direct access to the file.
if( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * WooCommerce Functions
 */

 
/* View Product Button */
add_action('woocommerce_after_shop_loop_item','real_estate_agency_replace_add_to_cart');

function real_estate_agency_replace_add_to_cart() {
	
		global $product;
		$link = esc_url($product->get_permalink());
		echo do_shortcode('<a href="'.$link.'" class="button viewbutton">'. __( "View Product", 'real-estate-agency' ) .'</a>');
	
}

