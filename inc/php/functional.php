<?php

/**
 * Prevent Direct Access
 *
 * @since 0.1
 */
defined( 'ABSPATH' ) or die( "Restricted access!" );

/**
 * Include custom CSS in HEAD section
 *
 * @since 4.1
 */
function mcstyles_add_styling() {

    // Read variables from DB
    $options = get_option( MCSTYLES_SETTINGS . '_settings' );
    $content = isset( $options['mcstyles-content'] ) && !empty( $options['mcstyles-content'] ) ? $options['mcstyles-content'] : ' ';
    $enable = isset( $options['enable'] ) && !empty( $options['enable'] ) ? $options['enable'] : ' ';

    // If the user entered code is disabled...
    if ( $enable == 'on') {
        return;   // EXIT
    }

    // If content is empty...
    if ( empty( $content ) OR $content == ' ' ) {
        return;   // EXIT
    }

    // Cleaning
    $content = trim( $content );

    // Prepare the user entered code for execution
    $contents_out = '<style type="text/css">' . "\n";
    $contents_out .= $content . "\n";
    $contents_out .= '</style>' . "\n";

    // Return prepared code
    echo $contents_out;
}
add_action( 'wp_head', MCSTYLES_PREFIX . '_add_styling' );
