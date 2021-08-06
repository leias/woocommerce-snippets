// Change "Default Sorting" to "Sort by" on shop page and in WooCommerce Product Settings
function PROJECTNAME_change_default_sorting_name( $catalog_orderby ) {
    $catalog_orderby = str_replace("Default sorting", "Sort by", $catalog_orderby);
    return $catalog_orderby;
}
add_filter( 'woocommerce_catalog_orderby', 'PROJECTNAME_change_default_sorting_name' );
add_filter( 'woocommerce_default_catalog_orderby_options', 'PROJECTNAME_change_default_sorting_name' );
