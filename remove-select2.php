// Remove Select2 for WooCommerce
function PROJECTNAME_disable_select2() {
    if ( class_exists('woocommerce') ) {
        wp_dequeue_style('select2');
        wp_deregister_style('select2');
        wp_dequeue_script('selectWoo');
        wp_deregister_script('selectWoo');
    } 
} 
add_action('wp_enqueue_scripts', 'PROJECTNAME_disable_select2', 100);
