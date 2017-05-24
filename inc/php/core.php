<?php

/**
 * Prevent Direct Access
 *
 * @since 0.1
 */
defined( 'ABSPATH' ) or die( "Restricted access!" );

/**
 * Register text domain
 *
 * @since 4.1
 */
function mcstyles_textdomain() {
    load_plugin_textdomain( MCSTYLES_TEXT, false, MCSTYLES_DIR . '/languages/' );
}
add_action( 'init', MCSTYLES_PREFIX . '_textdomain' );

/**
 * Print direct link to plugin admin page
 *
 * Fetches array of links generated by WP Plugin admin page ( Deactivate | Edit )
 * and inserts a link to the plugin admin page
 *
 * @since  4.1
 * @param  array $links Array of links generated by WP in Plugin Admin page.
 * @return array        Array of links to be output on Plugin Admin page.
 */
function mcstyles_settings_link( $links ) {
    $page = '<a href="' . admin_url( 'themes.php?page=' . MCSTYLES_SLUG . '.php' ) .'">' . __( 'Settings', MCSTYLES_TEXT ) . '</a>';
    array_unshift( $links, $page );
    return $links;
}
add_filter( 'plugin_action_links_' . MCSTYLES_BASE, MCSTYLES_PREFIX . '_settings_link' );

/**
 * Print link to My Custom Styles PRO page
 *
 * @since 4.1
 */
function mcstyles_upgrade_link( $links ) {
    $upgrade_page = '<a href="//www.arthurgareginyan.com/plugin-my-custom-styles-pro.html" target="_blank"><b style="color:red;">' . __( 'Upgrade to PRO', MCSTYLES_TEXT ) . '</b></a>';
    array_unshift( $links, $upgrade_page );
    return $links;
}
add_filter( 'plugin_action_links_' . MCSTYLES_BASE, MCSTYLES_PREFIX . '_upgrade_link' );

/**
 * Print additional links to plugin meta row
 *
 * @since 4.1
 */
function mcstyles_plugin_row_meta( $links, $file ) {

    if ( strpos( $file, MCSTYLES_SLUG . '.php' ) !== false ) {

        $new_links = array(
                           'donate' => '<a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=8A88KC7TFF6CS" target="_blank"><span class="dashicons dashicons-heart"></span> ' . __( 'Donate', MCSTYLES_TEXT ) . '</a>',
                           'upgrage' => '<a href="//www.arthurgareginyan.com/plugin-my-custom-styles-pro.html" target="_blank"><span class="dashicons dashicons-star-filled"></span> ' . __( 'Upgrade to PRO', MCSTYLES_TEXT ) . '</a>'
                           );
        $links = array_merge( $links, $new_links );
    }

    return $links;
}
add_filter( 'plugin_row_meta', MCSTYLES_PREFIX . '_plugin_row_meta', 10, 2 );

/**
 * Register plugin's submenu in the "Appearance" Admin Menu
 *
 * @since 4.1
 */
function mcstyles_register_submenu_page() {
    $menu_title = __( 'Custom Styles', MCSTYLES_TEXT );
    $capability = 'edit_theme_options';
    add_theme_page( MCSTYLES_NAME, $menu_title, $capability, MCSTYLES_SLUG, MCSTYLES_PREFIX . '_render_submenu_page' );
}
add_action( 'admin_menu', MCSTYLES_PREFIX . '_register_submenu_page' );

/**
 * Register settings
 *
 * @since 4.1
 */
function mcstyles_register_settings() {
    register_setting( MCSTYLES_SETTINGS . '_settings_group', MCSTYLES_SETTINGS . '_settings' );
    register_setting( MCSTYLES_SETTINGS . '_settings_group', MCSTYLES_SETTINGS . '_service_info' );
}
add_action( 'admin_init', MCSTYLES_PREFIX . '_register_settings' );
