<?php

/**
 * Plugin Name:         WP Project Management
 * Text Domain:         wppm
 */

// if file call directory, abort
if (!defined('WPINC')) {
    die;
}

// plugin constants
define('WPPM_VERSION', '0.0.1');

// activation
register_activation_hook(__FILE__, function () {
    plugin_dir_path(__FILE__) . 'includes/class-wppm-activator.php';
    WPPM_Activator::activate();
});

// deactivation