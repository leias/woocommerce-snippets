// Allow order editing after payment authorization
add_filter( 'wc_order_is_editable', '__return_true' );
