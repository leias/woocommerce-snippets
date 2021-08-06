// Adjust Product loop classes for first/last items
add_filter( 'post_class', 'PROJECTNAME_prefix_post_class', 21 );
function PROJECTNAME_prefix_post_class( $classes ) {
    if(is_shop() || is_product_category()) {
        if ( 'product' == get_post_type() ) {
            $classes = array_diff( $classes, array( 'first', 'last' ) );
        }    
        $loop_index = wc_get_loop_prop( 'loop', 0 );
        $columns    = wc_get_loop_prop( 'columns', 4 );

        if($loop_index == 1) { $loop_index ++; }
        wc_set_loop_prop( 'loop', $loop_index );

        if ( 0 === ( $loop_index - 1 ) % $columns || 1 === $columns ) {
            $classes[] = 'first';
        } elseif ( 0 === $loop_index % $columns ) {
            $classes[] = 'last';
        } 
    }
    return $classes;
}
