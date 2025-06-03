<?php
/**
 * Plugin Name: Multilingual Plugin
 * Description: A simple plugin with multilingual support.
 * Version: 1.0
 * Author: Your Name
 * Text Domain: multilingual-plugin
 * Domain Path: /languages
 */

// Load plugin textdomain
function mltp_load_textdomain() {
    load_plugin_textdomain( 'multilingual-plugin', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );
}
add_action( 'plugins_loaded', 'mltp_load_textdomain' );

// Example translated string
function mltp_hello_world() {
    if(!is_admin()){
        echo '<p>' . esc_html__( 'Hello, world!', 'multilingual-plugin' ) . '</p>';
        die;
    }
}
add_action( 'init', 'mltp_hello_world' );
