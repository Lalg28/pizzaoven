<?php

/**
 * Storefront automatically loads the core CSS even if using a child theme as it is more efficient
 * than @importing it in the child theme style.css file.
 *
 * Uncomment the line below if you'd like to disable the Storefront Core CSS.
 *
 * If you don't plan to dequeue the Storefront Core CSS you can remove the subsequent line and as well
 * as the sf_child_theme_dequeue_style() function declaration.
 */
//add_action( 'wp_enqueue_scripts', 'sf_child_theme_dequeue_style', 999 );

/**
 * Dequeue the Storefront Parent theme core CSS
 */
function sf_child_theme_dequeue_style() {
    wp_dequeue_style( 'storefront-style' );
    wp_dequeue_style( 'storefront-woocommerce-style' );
}

/**
 * Note: DO NOT! alter or remove the code above this text and only add your custom PHP functions below this text.
 */

 function pizza_oven_assets() {
    wp_enqueue_style( 'pizzaoven', get_stylesheet_directory_uri(). '/assets/css/app.min.css' , array('storefront-style'), '1.4', 'screen' );
    
    wp_enqueue_script( 'hello-js', get_stylesheet_directory_uri(). '/assets/js/helloBro.js', array(), '1.0', true );
 }

 add_action( 'wp_enqueue_scripts', 'pizza_oven_assets' );

 function pizza_oven_remove_hook(){
	
	remove_action( 'storefront_header', 'storefront_product_search', 40 );
	remove_action( 'storefront_header', 'storefront_header_container_close', 41 );
	// add_action( 'storefront_header', 'storefront_header_container_close', 51 );
    remove_action( 'storefront_header', 'storefront_primary_navigation_wrapper', 42 );

    remove_action( 'homepage', 'storefront_product_categories', 20 );
    remove_action( 'homepage', 'storefront_recent_products', 30 );
    remove_action( 'homepage', 'storefront_featured_products', 40 );
    remove_action( 'homepage', 'storefront_popular_products', 50 );
    remove_action( 'homepage', 'storefront_on_sale_products', 60 );
}

add_action( 'storefront_header', 'pizza_oven_remove_hook', 1 );
add_action( 'homepage', 'pizza_oven_remove_hook', 1 );

