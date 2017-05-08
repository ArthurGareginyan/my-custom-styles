<?php
/**
 * Plugin Name: My Custom Styles
 * Plugin URI: https://github.com/ArthurGareginyan/my-custom-styles
 * Description: Easily and safely add your custom styles (CSS) to WordPress website's HEAD section directly out of your WordPress Dashboard without need of an external editor.
 * Author: Arthur Gareginyan
 * Author URI: http://www.arthurgareginyan.com
 * Version: 4.0
 * License: GPL3
 * Text Domain: my-custom-styles
 * Domain Path: /languages/
 *
 * Copyright 2015-2017 Arthur Gareginyan (email : arthurgareginyan@gmail.com)
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
 *
 *               █████╗ ██████╗ ████████╗██╗  ██╗██╗   ██╗██████╗
 *              ██╔══██╗██╔══██╗╚══██╔══╝██║  ██║██║   ██║██╔══██╗
 *              ███████║██████╔╝   ██║   ███████║██║   ██║██████╔╝
 *              ██╔══██║██╔══██╗   ██║   ██╔══██║██║   ██║██╔══██╗
 *              ██║  ██║██║  ██║   ██║   ██║  ██║╚██████╔╝██║  ██║
 *              ╚═╝  ╚═╝╚═╝  ╚═╝   ╚═╝   ╚═╝  ╚═╝ ╚═════╝ ╚═╝  ╚═╝
 *
 *   ██████╗  █████╗ ██████╗ ███████╗ ██████╗ ██╗███╗   ██╗██╗   ██╗ █████╗ ███╗   ██╗
 *  ██╔════╝ ██╔══██╗██╔══██╗██╔════╝██╔════╝ ██║████╗  ██║╚██╗ ██╔╝██╔══██╗████╗  ██║
 *  ██║  ███╗███████║██████╔╝█████╗  ██║  ███╗██║██╔██╗ ██║ ╚████╔╝ ███████║██╔██╗ ██║
 *  ██║   ██║██╔══██║██╔══██╗██╔══╝  ██║   ██║██║██║╚██╗██║  ╚██╔╝  ██╔══██║██║╚██╗██║
 *  ╚██████╔╝██║  ██║██║  ██║███████╗╚██████╔╝██║██║ ╚████║   ██║   ██║  ██║██║ ╚████║
 *   ╚═════╝ ╚═╝  ╚═╝╚═╝  ╚═╝╚══════╝ ╚═════╝ ╚═╝╚═╝  ╚═══╝   ╚═╝   ╚═╝  ╚═╝╚═╝  ╚═══╝
 *
 */


/**
 * Prevent Direct Access
 *
 * @since 0.1
 */
defined('ABSPATH') or die("Restricted access!");

/**
 * Define global constants
 *
 * @since 3.4
 */
defined('MCSTYLES_DIR') or define('MCSTYLES_DIR', dirname(plugin_basename(__FILE__)));
defined('MCSTYLES_BASE') or define('MCSTYLES_BASE', plugin_basename(__FILE__));
defined('MCSTYLES_URL') or define('MCSTYLES_URL', plugin_dir_url(__FILE__));
defined('MCSTYLES_PATH') or define('MCSTYLES_PATH', plugin_dir_path(__FILE__));
defined('MCSTYLES_TEXT') or define('MCSTYLES_TEXT', 'my-custom-styles');
defined('MCSTYLES_VERSION') or define('MCSTYLES_VERSION', '4.0');

/**
 * Load the plugin modules
 *
 * @since 4.0
 */
require_once( MCSTYLES_PATH . 'inc/php/core.php' );
require_once( MCSTYLES_PATH . 'inc/php/enqueue.php' );
require_once( MCSTYLES_PATH . 'inc/php/version.php' );
require_once( MCSTYLES_PATH . 'inc/php/functional.php' );
require_once( MCSTYLES_PATH . 'inc/php/page.php' );
require_once( MCSTYLES_PATH . 'inc/php/messages.php' );
require_once( MCSTYLES_PATH . 'inc/php/uninstall.php' );
