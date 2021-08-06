// Add "Best Seller" badge to Featured products
add_action( 'woocommerce_before_shop_loop_item_title', 'PROJECTNAME_bestseller_badge', 3 );            
function PROJECTNAME_bestseller_badge() {
    global $product;
    if ( $product->is_featured() ) {
        echo '<span class="badge">Best Seller</span>';
    }
}
