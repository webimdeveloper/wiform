<?php
/**
 * Plugin Name: Wiform (Hello World)
 * Description: A test plugin to verify CI/CD deployment.
 * Version: 0.0.1
 */

// Prevent direct access
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Simple admin notice to prove it works on the server
add_action('admin_notices', function() {
    echo '<div class="notice notice-success is-dismissible"><p>Hello World 
from Wiform v0.0.1!</p></div>';
});
