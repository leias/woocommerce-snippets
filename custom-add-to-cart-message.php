// Custom Add to Cart Success Message
add_filter( 'woocommerce_add_to_cart_message', 'custom_add_to_cart_message' );
function custom_add_to_cart_message ($message) {
    global $woocommerce,$is_cart_added;
    
    // Output success messages
    $custom_message = sprintf( __( 'Product successfully added to your cart.', 'woocommerce' ), get_the_title( $product_id ) );
		$custom_message .= sprintf('<a href="%s" class="button">%s</a> %s', get_permalink( wc_get_page_id( 'cart' ) ), __( 'Check Out <i class="fas fa-long-arrow-right"></i>', 'woocommerce' ), $added_text );
		$custom_message .= sprintf('<a href="/shop/" class="button">%s</a> %s', __( 'Continue Shopping <i class="fas fa-long-arrow-right"></i>', 'woocommerce' ), $added_text );
    
    $is_cart_added = 1;
    return $custom_message;
}
