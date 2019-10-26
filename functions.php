<?php
/**
 * Shipyard Theme Functions
 *
 * @package Shipyard-Theme
 */

if (!current_user_can('manage_options')){
    add_filter('show_admin_bar', '__return_false');
}

function shpyd_enqueue_styles(){
    wp_enqueue_style("add_normalize", 		get_template_directory_uri() 	. "/assets/css/normalize.css");
    wp_enqueue_style("add_webflow_css",  	get_template_directory_uri() 	. "/assets/css/webflow.css");
    wp_enqueue_style("add_shipyard_css",  	get_template_directory_uri() 	. "/assets/css/screencast-theme.webflow.css");
    wp_enqueue_style("add_roboto_font",  								    '"Roboto:100,100italic,300,300italic,regular,italic,500,500italic,700,700italic,900,900italic"', false);
    wp_enqueue_script('add_webflow_js', 	get_template_directory_uri() 	. '/assets/js/webflow.js', array( 'jquery' ));

    wp_enqueue_style("shipyard-theme-style", get_stylesheet_uri());
}
add_action("wp_enqueue_scripts", "shpyd_enqueue_styles");

function shpyd_setup(){

    add_theme_support( 'title-tag' );

    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 825, 510, true );

    load_theme_textdomain( 'shipyard-theme' );
    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );


    // This theme uses wp_nav_menu() in two locations.
    register_nav_menus( array(
        'logged-in'     => __("Logged-In Menu", "shpyd-login"),
        'logged-out'    => __("Logged-Out Menu", "shpyd-logout"),

    ));

    add_theme_support( 'post-formats', array(
        'aside',
        'image',
        'video',
        'quote',
        'link',
        'gallery',
        'audio',

    ) );

    // Indicate widget sidebars can use selective refresh in the Customizer.
    add_theme_support( 'customize-selective-refresh-widgets' );

}
add_action( 'after_setup_theme', 'shpyd_setup' );


/**
 * Automatically add product to cart on visit
 */
//add_action( 'template_redirect', 'add_product_to_cart' );
//function add_product_to_cart() {
//    if ( ! is_admin() ) {
//        $product_id = 45; //replace with your own product id
//        $found = false;
//        //check if product already in cart
//        if ( sizeof( WC()->cart->get_cart() ) > 0 ) {
//            foreach ( WC()->cart->get_cart() as $cart_item_key => $values ) {
//                $_product = $values['data'];
//                if ( $_product->get_id() == $product_id )
//                    $found = true;
//            }
//            // if product not found, add it
//            if ( ! $found )
//                WC()->cart->add_to_cart( $product_id );
//        } else {
//            // if no products in cart, add it
//            WC()->cart->add_to_cart( $product_id );
//        }
//    }
//}

/**
 * shpyd_custom_ovverride_checkout_fields
 * Unsets checkout fields
 *
 * @param $fields
 * @return mixed
 */
function shpyd_custom_override_checkout_fields( $fields ) {
    unset($fields['billing']['billing_first_name']);
    unset($fields['billing']['billing_last_name']);
    unset($fields['billing']['billing_company']);
    unset($fields['billing']['billing_address_1']);
    unset($fields['billing']['billing_address_2']);
    unset($fields['billing']['billing_city']);
    unset($fields['billing']['billing_postcode']);
    unset($fields['billing']['billing_country']);
    unset($fields['billing']['billing_state']);
    unset($fields['billing']['billing_phone']);
    unset($fields['order']['order_comments']);
    //unset($fields['billing']['billing_email']);
    return $fields;
}
add_filter( 'woocommerce_checkout_fields' , 'shpyd_custom_override_checkout_fields' );


function shpyd_remove_product_tabs( $tabs ) {
    unset( $tabs['additional_information'] );
    return $tabs;
}

add_filter( 'woocommerce_product_tabs', 'shpyd_remove_product_tabs', 98 );
