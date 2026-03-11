<?php
/**
 * Plugin Name: Wiform
 * Description: Modern WordPress plugin built with Vue 3 and Vite.
 * Version: 1.0.0
 * Author: webim
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * 1. Add the Menu Item to the Sidebar
 */
add_action('admin_menu', function() {
    add_menu_page(
        'Wiform Settings',    // Page title
        'Wiform',             // Menu title
        'manage_options',     // Capability required
        'wiform-admin',       // Menu slug
        'wiform_admin_html',  // Function that outputs the HTML
        'dashicons-forms',    // Icon
        100                   // Position
    );
});

/**
 * 2. The HTML Container for Vue
 */
function wiform_admin_html() {
    echo '<div class="wrap">
            <div id="app"></div> 
          </div>';
}

/**
 * 3. Load the Compiled Assets
 */
add_action('admin_enqueue_scripts', function($hook) {
    // Only load our scripts on our specific plugin page
    if ($hook !== 'toplevel_page_wiform-admin') {
        return;
    }

    $plugin_url = plugin_dir_url(__FILE__);

    // Load Tailwind CSS from the dist folder
    wp_enqueue_style('wiform-styles', $plugin_url . 'dist/assets/index.css', [], '1.0.0');

    // Load Vue JS from the dist folder
    wp_enqueue_script('wiform-scripts', $plugin_url . 'dist/assets/index.js', [], '1.0.0', true);
});