// Remove marketplace suggestions
add_filter( 'woocommerce_allow_marketplace_suggestions', '__return_false' );

// Remove connect your store to WooCommerce.com admin notice
add_filter( 'woocommerce_helper_suppress_admin_notices', '__return_true' );

// Remove WooCommerce Updater
remove_action('admin_notices', 'woothemes_updater_notice');

// Remove IgniteWoo Updater
remove_action('admin_notices', 'ignitewoo_updater_notice');
