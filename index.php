<?php
/**
 * Toby Yates Plugin
 *
 * @package     TY_Plugin
 * @version     1.0.0
 * @author      Greg Sweet <greg@ccdzine.com>
 * @copyright   Copyright © 2019, Greg Sweet
 * @link        https://github.com/ControlledChaos/ty-plugin
 * @link        https://controlledchaos.github.io/ty-plugin/
 * @license     GPL-3.0+ http://www.gnu.org/licenses/gpl-3.0.txt
 *
 * Plugin Name:  Toby Yates Plugin
 * Plugin URI:   https://github.com/ControlledChaos/ty-plugin
 * Description:  Functionality required for the Toby Yates portfolio site.
 * Version:      1.0.0
 * Author:       Controlled Chaos Design
 * Author URI:   http://ccdzine.com/
 * License:      GPL-3.0+
 * License URI:  https://www.gnu.org/licenses/gpl.txt
 * Text Domain:  ty-plugin
 * Domain Path:  /languages
 * Tested up to: 5.0.0
 */

/**
 * License & Warranty
 *
 * Toby Yates Plugin is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 2 of the License, or
 * any later version.
 *
 * Toby Yates Plugin is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Toby Yates Plugin. If not, see {URI to Plugin License}.
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Plugin folder path
 *
 * @since  1.0.0
 * @return string Returns the filesystem directory path (with trailing slash)
 *                for the plugin __FILE__ passed in.
 */
if ( ! defined( 'TYP_PATH' ) ) {
	define( 'TYP_PATH', plugin_dir_path( __FILE__ ) );
}

/**
 * Plugin folder URL
 *
 * @since  1.0.0
 * @return string Returns the URL directory path (with trailing slash)
 *                for the plugin __FILE__ passed in.
 */
if ( ! defined( 'TYP_URL' ) ) {
	define( 'TYP_URL', plugin_dir_url( __FILE__ ) );
}

/**
 * Get the core plugin file.
 * @since  1.0.0
 */
require_once TYP_PATH . '/ty-plugin.php';