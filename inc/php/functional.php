<?php

/**
 * Prevent Direct Access
 */
defined( 'ABSPATH' ) or die( "Restricted access!" );

/**
 * Include custom CSS in HEAD section
 */
function spacexchimp_p003_add_styling() {

    // Read options from database and declare variables
    $options = get_option( SPACEXCHIMP_P003_SETTINGS . '_settings' );
    $content = !empty( $options['snippets'] ) ? $options['snippets'] : ' ';
    $enable = !empty( $options['enable'] ) ? $options['enable'] : ' ';

    // If the user entered code is disabled...
    if ( $enable != 'on') {
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
add_action( 'wp_head', 'spacexchimp_p003_add_styling' );
