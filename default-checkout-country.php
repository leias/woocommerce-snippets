// Change the default country for billing and shipping on the checkout page
add_filter( 'default_checkout_billing_country', 'PROJECTNAME_default_checkout_country', 99, 1  );
add_filter( 'default_checkout_shipping_country', 'PROJECTNAME_default_checkout_country', 99, 1  );

function PROJECTNAME_default_checkout_country() {
  return 'US'; // country code
}
