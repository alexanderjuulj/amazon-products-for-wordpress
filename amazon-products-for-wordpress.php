<?php
/*
 * Plugin Name:       Amazon Product for WordPress
 * Description:       Set up products from Amazon and displays them in a custom post type.
 * Version:           1.0.0
 * Author:            Alexander Juul Jakobsen
 * Author URI:        https://alexanderjuulj.com
 * License:           The MIT License
 * License URI:       https://opensource.org/license/mit/
 * Requires PHP:      7.1.0
 * Text Domain:       apfwp
*/

// Set up custom post type
include plugin_dir_path(__FILE__) . '/inc/post-type.php';

// Check if ACF is installed
if (!class_exists('ACF')) {
    // Include ACF Pro fields
    include plugin_dir_path(__FILE__) . '/inc/acf-fields.php';
}

// Include the template functions
include plugin_dir_path(__FILE__) . '/inc/template-function.php';

// Enqueue scripts and styles for the plugin 
function apfwp_enqueue_scripts() {   
    // Flexslider by WooThemes. Used for the Gallery.
    wp_enqueue_script( 'flexslider-script', plugin_dir_url( __FILE__ ) . 'inc/flexslider/jquery.flexslider-min.js', '2.7.2', true );
    wp_enqueue_style( 'flexslider-style', plugin_dir_url( __FILE__ ) . 'inc/flexslider/flexslider.css', '2.7.2' );
    // Script activating Flexslider and Slick.js
    wp_enqueue_script( 'amazon-product-script', plugin_dir_url( __FILE__ ) . 'public/js/amazon-products-min.js', '1.0.0', true );
    // Styles
    wp_enqueue_style( 'amazon-product-style', plugin_dir_url( __FILE__ ) . 'public/scss/main.css', '1.0.0' );
}
add_action('wp_enqueue_scripts', 'apfwp_enqueue_scripts');