<?php
/**
 * Plugin Name: My Custom Styles
 * Plugin URI: http://mycyberuniverse.com/my_programs/wp-plugin-my-custom-styles.html
 * Description: EASILY and SAFELY add your custom styles (CSS) to WordPress website's header.
 * Author: Arthur "Berserkr" Gareginyan
 * Author URI: http://www.arthurgareginyan.com
 * Version: 1.5
 * License: GPL3
 * Text Domain: mcstyles
 * Domain Path: /languages/
 *
 * Copyright 2015  Arthur "Berserkr" Gareginyan  (email : arthurgareginyan@gmail.com)
 *
 * This file is part of "My Custom Styles".
 *
 * "My Custom Styles" is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * "My Custom Styles" is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with "My Custom Styles".  If not, see <http://www.gnu.org/licenses/>.
 *
 */

/**
 * Prevent Direct Access
 */
defined('ABSPATH') or die("Restricted access!");

/**
 * Register text domain
 *
 * @since 0.1
 */
function mcstyles_textdomain() {
	load_plugin_textdomain( 'mcstyles', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
}
add_action( 'init', 'mcstyles_textdomain' );

/**
 * Print direct link to Custom Styles admin page
 *
 * Fetches array of links generated by WP Plugin admin page ( Deactivate | Edit )
 * and inserts a link to the Custom Styles admin page
 *
 * @since  0.1
 * @param  array $links Array of links generated by WP in Plugin Admin page.
 * @return array        Array of links to be output on Plugin Admin page.
 */
function mcstyles_settings_link( $links ) {
	$settings_page = '<a href="' . admin_url( 'themes.php?page=my-custom-styles.php' ) .'">' . __( 'Settings', 'mcstyles' ) . '</a>';
	array_unshift( $links, $settings_page );
	return $links;
}
$plugin = plugin_basename( __FILE__ );
add_filter( "plugin_action_links_$plugin", 'mcstyles_settings_link' );

/**
 * Register "Custom Styles" submenu in "Appearance" Admin Menu
 *
 * @since 0.1
 */
function mcstyles_register_submenu_page() {
	add_theme_page( __( 'My Custom Styles', 'mcstyles' ), __( 'Custom Styles', 'mcstyles' ), 'edit_theme_options', basename( __FILE__ ), 'mcstyles_render_submenu_page' );
}
add_action( 'admin_menu', 'mcstyles_register_submenu_page' );

/**
 * Attach Settings Page
 *
 * @since 0.2
 */
require_once( plugin_dir_path( __FILE__ ) . 'inc/settings_page.php' );

/**
 * Register settings
 *
 * @since 0.1
 */
function mcstyles_register_settings() {
	register_setting( 'mcstyles_settings_group', 'mcstyles_settings' );
}
add_action( 'admin_init', 'mcstyles_register_settings' );

/**
 * Enqueue the CodeMirror scripts and styles
 *
 * @since 1.4
 */
function mcstyles_enqueue_codemirror_scripts($hook) {

    // Return if the page is not a settings page of this plugin
    if ( 'appearance_page_my-custom-styles' != $hook ) {
        return;
    }

    // CodeMirror
    wp_enqueue_script('codemirror', plugin_dir_url(__FILE__) . 'inc/codemirror/codemirror-compressed.js');
    wp_enqueue_style('codemirror_style', plugin_dir_url(__FILE__) . 'inc/codemirror/codemirror.css');
    wp_enqueue_script('codemirror-setting', plugin_dir_url(__FILE__) . 'inc/editor.js', array(), false, true);

    // Style sheet
    wp_enqueue_style('styles', plugin_dir_url(__FILE__) . 'inc/style.css');
}
add_action( 'admin_enqueue_scripts', 'mcstyles_enqueue_codemirror_scripts' );

/**
 * Include custom CSS in header
 *
 * @since 1.0
 */
function mcstyles_add_styling() {
    // Read variables from BD
    $options = get_option( 'mcstyles_settings' );
    $content = esc_textarea( $options['mcstyles-content'] );
    
    // Cleaning
    $content = trim( $content );
    
    // Styling
    if (!empty($content)) {
        echo '<style type="text/css">' . "\n";
        echo $content . "\n";
        echo '</style>' . "\n";
    }
}
add_action( 'wp_head', 'mcstyles_add_styling' );

/**
 * Delete options on uninstall
 *
 * @since 0.1
 */
function mcstyles_uninstall() {
    delete_option( 'mcstyles_settings' );
}
register_uninstall_hook( __FILE__, 'mcstyles_uninstall' );


/* That's all folks! */
?>
