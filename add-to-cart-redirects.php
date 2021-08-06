// Custom redirects after "Add to Cart" on specific pages
function PROJECTNAME_add_to_cart_redirect( $url ) {
	if ( $_SERVER['REQUEST_URI'] == '/order/' ) {
		return 'https://' . $_SERVER['SERVER_NAME'] . '/order/';
	} elseif ( $_SERVER['REQUEST_URI'] == '/select-subscription/' ) {
		return 'https://' . $_SERVER['SERVER_NAME'] . '/select-subscription/';
	} else {
		return $url;	
	}
}
add_filter( 'woocommerce_add_to_cart_redirect', 'PROJECTNAME_add_to_cart_redirect', 10, 1 );
