<?php

/**
 * Prevent Direct Access
 */
defined( 'ABSPATH' ) or die( "Restricted access!" );

/**
 * Prepare the custom code
 */
function spacexchimp_p003_prepare() {

    // Put value of plugin constants into an array for easier access
    $plugin = spacexchimp_p003_plugin();

    // Retrieve options from database and declare variables
    $options = get_option( $plugin['settings'] . '_settings' );
    $data = !empty( $options['snippets'] ) ? $options['snippets'] : '';
    $enable = !empty( $options['enable'] ) ? $options['enable'] : '';

    // Prepare a variable for storing the processed data
    $data_out = "";

    // If data is not empty...
    if ( ! empty( $data ) ) {

        // If the custom code is enabled...
        if ( $enable == "on") {

            // Add an additional code to the beginning of the variable
            $data_out = '<style type="text/css">' . "\n";

            // Prepare a variable for storing the processing data, and perform data processing
            $data_tmp = $data;
            $data_tmp = trim( $data_tmp ); // Cleaning

            $data_out .= $data_tmp;

            // Add an additional code to the end of the variable
            $data_out .= "\n" . '</style>' . "\n";
        }
    }

    // Return the processed data
    echo $data_out;
}

/**
 * Inject the custom code into the website's frontend
 */
add_action( 'wp_head', 'spacexchimp_p003_prepare' );
