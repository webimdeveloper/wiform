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
 * 1. Add the Menu Item
 */
add_action('admin_menu', function() {
    add_menu_page('Wiform Settings', 'Wiform', 'manage_options', 'wiform-admin', 'wiform_admin_html', 'dashicons-forms', 100);
});

function wiform_admin_html() {
    echo '<div class="wrap"><div id="app"></div></div>';
}

/**
 * 2. THE SMART LOADER (Ensure this is inside the <?php tags!)
 */
add_action('admin_enqueue_scripts', function($hook) {
    if ($hook !== 'toplevel_page_wiform-admin') return;

    $is_local = (strpos($_SERVER['HTTP_HOST'], 'wiform2.local') !== false);
    $plugin_url = plugin_dir_url(__FILE__);

    if ($is_local) {
        // Load from Vite Dev Server (for HMR)
        echo '<script type="module" src="http://localhost:5173/@vite/client"></script>';
        echo '<script type="module" src="http://localhost:5173/src/main.ts"></script>';
    } else {
        // Load from compiled Dist folder
        wp_enqueue_style('wiform-styles', $plugin_url . 'dist/assets/index.css', [], '1.0.0');
        wp_enqueue_script('wiform-scripts', $plugin_url . 'dist/assets/index.js', [], '1.0.0', true);
    }
});