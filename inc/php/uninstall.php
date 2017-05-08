<?php

/**
 * Prevent Direct Access
 *
 * @since 0.1
 */
defined('ABSPATH') or die("Restricted access!");

/**
 * Delete options on uninstall
 *
 * @since 0.1
 */
function mcstyles_uninstall() {
    delete_option( 'mcstyles_settings' );
}
register_uninstall_hook( __FILE__, 'mcstyles_uninstall' );
