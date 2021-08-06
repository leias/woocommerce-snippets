// Disable Guest Checkout if product is backordered
add_filter( 'pre_option_woocommerce_enable_guest_checkout', 'PROJECTNAME_require_login_backordered_products' );
function PROJECTNAME_require_login_backordered_products( $value ) {
    if ( !is_user_logged_in() ) { // If user is not logged in
      $available = '';
      // Check for item availability
      if ( WC()->cart ) {
          $cart = WC()->cart->get_cart();
          foreach ( $cart as $item ) {
              $stock_info = $item['data']->get_stock_quantity();
              if($stock_info < 1) {
                  $available = "no";
                  break;
              }
          }
      }
      // Messaging
      if($available == 'no') {
        wc_add_notice( __( 'Since items in your cart are backordered, you must sign in or create an account.' ), 'success' );
        echo '<style>.woocommerce-billing-fields, .woocommerce-shipping-fields, .woocommerce-additional-fields, #customer_details #reviewer, p#guest { display:none; }</style>';
      }  
    }
    return $value;
}
