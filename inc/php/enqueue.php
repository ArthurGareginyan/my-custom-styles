<?php

/**
 * Prevent Direct Access
 *
 * @since 0.1
 */
defined('ABSPATH') or die("Restricted access!");

/**
 * Load scripts and style sheet for settings page
 *
 * @since 4.0
 */
function mcstyles_load_scripts_admin($hook) {

    // Return if the page is not a settings page of this plugin
    if ( 'appearance_page_my-custom-styles' != $hook ) {
        return;
    }

    // Style sheet
    wp_enqueue_style( 'mcstyles-admin-css', MCSTYLES_URL . 'inc/css/admin.css' );

    // JavaScript
    wp_enqueue_script( 'mcstyles-admin-js', MCSTYLES_URL . 'inc/js/admin.js' );

    // Bootstrap library
    wp_enqueue_style( 'mcstyles-bootstrap-css', MCSTYLES_URL . 'inc/lib/bootstrap/bootstrap.css' );
    wp_enqueue_style( 'mcstyles-bootstrap-theme-css', MCSTYLES_URL . 'inc/lib/bootstrap/bootstrap-theme.css' );
    wp_enqueue_script( 'mcstyles-bootstrap-js', MCSTYLES_URL . 'inc/lib/bootstrap/bootstrap.js' );

    // CodeMirror library
    wp_enqueue_style( 'mcstyles-codemirror-css', MCSTYLES_URL . 'inc/lib/codemirror/codemirror.css' );
    wp_enqueue_script( 'mcstyles-codemirror-js', MCSTYLES_URL . 'inc/lib/codemirror/codemirror-compressed.js' );
    wp_enqueue_script( 'mcstyles-codemirror-active-line-js', MCSTYLES_URL . 'inc/lib/codemirror/addons/active-line.js' );

}
add_action( 'admin_enqueue_scripts', 'mcstyles_load_scripts_admin' );
