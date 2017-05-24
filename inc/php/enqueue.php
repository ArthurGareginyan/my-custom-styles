<?php

/**
 * Prevent Direct Access
 *
 * @since 0.1
 */
defined( 'ABSPATH' ) or die( "Restricted access!" );

/**
 * Load scripts and style sheet for settings page
 *
 * @since 4.1
 */
function mcstyles_load_scripts_admin( $hook ) {

    // Return if the page is not a settings page of this plugin
    $settings_page = 'appearance_page_' . MCSTYLES_SLUG;
    if ( $settings_page != $hook ) {
        return;
    }

    // Style sheet
    wp_enqueue_style( MCSTYLES_PREFIX . '-admin-css', MCSTYLES_URL . 'inc/css/admin.css' );

    // JavaScript
    wp_enqueue_script( MCSTYLES_PREFIX . '-admin-js', MCSTYLES_URL . 'inc/js/admin.js', array(), false, true );

    // Bootstrap library
    wp_enqueue_style( MCSTYLES_PREFIX . '-bootstrap-css', MCSTYLES_URL . 'inc/lib/bootstrap/bootstrap.css' );
    wp_enqueue_style( MCSTYLES_PREFIX . '-bootstrap-theme-css', MCSTYLES_URL . 'inc/lib/bootstrap/bootstrap-theme.css' );
    wp_enqueue_script( MCSTYLES_PREFIX . '-bootstrap-js', MCSTYLES_URL . 'inc/lib/bootstrap/bootstrap.js' );

    // CodeMirror library
    wp_enqueue_style( MCSTYLES_PREFIX . '-codemirror-css', MCSTYLES_URL . 'inc/lib/codemirror/codemirror.css' );
    wp_enqueue_script( MCSTYLES_PREFIX . '-codemirror-js', MCSTYLES_URL . 'inc/lib/codemirror/codemirror-compressed.js' );
    wp_enqueue_script( MCSTYLES_PREFIX . '-codemirror-active-line-js', MCSTYLES_URL . 'inc/lib/codemirror/addons/active-line.js' );

}
add_action( 'admin_enqueue_scripts', MCSTYLES_PREFIX . '_load_scripts_admin' );
