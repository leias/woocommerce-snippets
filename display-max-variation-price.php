// Show Maximum Variation Price only
add_filter( 'woocommerce_variable_sale_price_html', 'PROJECTNAME_show_max_variation_price_only', 10, 2 );
add_filter( 'woocommerce_variable_price_html', 'PROJECTNAME_show_max_variation_price_only', 10, 2 );
 
function PROJECTNAME_show_max_variation_price_only( $price, $product ) { 
	// Main Variation Price
	$prices = array( $product->get_variation_price( 'max', true ), $product->get_variation_price( 'min', true ) );

	$price = $prices[0] !== $prices[1] ? sprintf( __( '%1$s', 'woocommerce' ), wc_price( $prices[0] ) ) : wc_price( $prices[0] );

	// Sale Variation Price
	$prices = array( $product->get_variation_regular_price( 'max', true ), $product->get_variation_regular_price( 'min', true ) );
	sort( $prices );

	$saleprice = $prices[0] !== $prices[1] ? sprintf( __( '%1$s', 'woocommerce' ), wc_price( $prices[0] ) ) : wc_price( $prices[0] );

	// Output
	if ( $price !== $saleprice ) {    
		$price =  $price;    
  }    
  return $price;
}
