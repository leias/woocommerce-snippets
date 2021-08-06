// Remove specific Post Meta if order is set to Cancelled status
function onCancelled ($order_id){	
	if ( metadata_exists( 'post', $order_id, 'META_KEY' ) ) {
		delete_post_meta($order_id, 'META_KEY');
	}	
}
add_action( 'woocommerce_order_status_cancelled', 'onCancelled');
