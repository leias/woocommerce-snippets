// Hide all other shipping rates when Free Shipping is available
function PROJECTNAME_hide_shipping_when_free_is_available( $rates ) {
	global $wp, $current_user;
	$free = array();
  $current_user = wp_get_current_user(); 
  $user_info = get_userdata($current_user->ID);
  
  if($user_info) {
    foreach( $user_info->roles as $role => $name ) {				
        foreach ( $rates as $rate_id => $rate ) {
          if ( 'local_pickup' === $rate->method_id ) {
            unset( $rates[$rate_id ] );
          }
          if ( 'free_shipping' === $rate->method_id ) {
            $free[ $rate_id ] = $rate;
            break;
          }
        }
    }
	
	}
	
	return ! empty( $free ) ? $free : $rates;
}
add_filter( 'woocommerce_package_rates', 'PROJECTNAME_hide_shipping_when_free_is_available', 10,2 );
