/**
 * @snippet       1 Column Layout @ WooCommerce Shop
 * @author        Khalid Almallahi
 * @testedwith    WooCommerce 3.9
 */
 
add_filter( 'loop_shop_columns', 'loop_columns', 999 );
 
function loop_columns() {
   return 1; 
}
