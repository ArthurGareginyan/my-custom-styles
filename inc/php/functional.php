<?php

/**
 * Prevent Direct Access
 */
defined( 'ABSPATH' ) or die( "Restricted access!" );

/**
 * Prepare the custom code
 * @return string by using "echo"
 */
function spacexchimp_p003_prepare() {

    // Put value of plugin constants into an array for easier access
    $plugin = spacexchimp_p003_plugin();

    // Put the value of the plugin options into an array for easier access
    $options = spacexchimp_p003_options();

    // Prepare a variable for storing the processed data
    $data_out = "";

    // If data is not empty...
    if ( ! empty( $options['snippets'] ) ) {

        // If the custom code is enabled...
        if ( $options['enable'] === true ) {

            // Add an additional code to the beginning of the variable
            $data_out = '<style type="text/css">' . "\n";

            // Prepare a variable for storing the processing data, and perform data processing
            $data_tmp = $options['snippets'];
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
 * Inject the custom code into the website's frontend (head section)
 */
add_action( 'wp_head', 'spacexchimp_p003_prepare' );
