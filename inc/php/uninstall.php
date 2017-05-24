<?php

/**
 * Prevent Direct Access
 *
 * @since 0.1
 */
defined( 'ABSPATH' ) or die( "Restricted access!" );

/**
 * Delete options on uninstall
 *
 * @since 4.1
 */
function mcstyles_uninstall() {
    delete_option( MCSTYLES_SETTINGS . '_settings' );
}
register_uninstall_hook( __FILE__, MCSTYLES_PREFIX . '_uninstall' );
