<?php
/**
 * Plugin Name: react-plugin
 * Plugin URI: a url
 * Description: A react application
 * Version: 0.1
 * Text Domain: react-plugin
 * Author: Me
 * Author URI: 
 */

// First register resources with init 
function react_plugin_init() {
    $path = "/frontend/static";
    if(getenv('WP_ENV')=="development") {
        $path = "/frontend/build/static";
    }
    wp_register_script("react_plugin_js", plugins_url($path."/js/main.js", __FILE__), array(), "1.0", false);
    wp_register_style("react_plugin_css", plugins_url($path."/css/main.css", __FILE__), array(), "1.0", "all");
}

add_action( 'init', 'react_plugin_init' );

// Function for the short code that calls React app
function react_plugin() {
    wp_enqueue_script("react_plugin_js", '1.0', true);
    wp_enqueue_style("react_plugin_css");
    return "<div id=\"react_plugin\"></div>";
}

add_shortcode('react_plugin', 'react_plugin');