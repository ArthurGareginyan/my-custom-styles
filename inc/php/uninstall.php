<?php

/**
 * Prevent Direct Access
 */
defined( 'ABSPATH' ) or die( "Restricted access!" );

/**
 * Delete options on uninstall
 */
function spacexchimp_p003_uninstall() {
    delete_option( SPACEXCHIMP_P003_SETTINGS . '_settings' );
}
register_uninstall_hook( __FILE__, 'spacexchimp_p003_uninstall' );
