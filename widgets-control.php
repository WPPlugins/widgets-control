<?php
/**
 * Plugin Name: Widgets Control
 * Plugin URI: http://www.itthinx.com/
 * Description: A Widget toolbox that adds visibility management and helps to control where widgets and sidebars are shown efficiently.
 * Version: 1.7.0
 * Author: itthinx
 * Author URI: http://www.itthinx.com
 * Donate-Link: http://www.itthinx.com/plugins/widgets-control/
 * Text Domain: widgets-control
 * Domain Path: /languages
 * License: GPLv3
 * 
 * Copyright (c) 2015 - 2017 "kento" Karim Rahimpur www.itthinx.com
 * 
 * This code is released under the GNU General Public License Version 3.
 * The following additional terms apply to all files as per section
 * "7. Additional Terms." See COPYRIGHT.txt and LICENSE.txt.
 *
 * This code is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 * 
 * All legal, copyright and license notices and all author attributions
 * must be preserved in all files and user interfaces.
 * 
 * Where modified versions of this material are allowed under the applicable
 * license, modified version must be marked as such and the origin of the
 * modified material must be clearly indicated, including the copyright
 * holder, the author and the date of modification and the origin of the
 * modified material.
 * 
 * This material may not be used for publicity purposes and the use of
 * names of licensors and authors of this material for publicity purposes
 * is prohibited.
 * 
 * The use of trade names, trademarks or service marks, licensor or author
 * names is prohibited unless granted in writing by their respective owners.
 * 
 * Where modified versions of this material are allowed under the applicable
 * license, anyone who conveys this material (or modified versions of it) with
 * contractual assumptions of liability to the recipient, for any liability
 * that these contractual assumptions directly impose on those licensors and
 * authors, is required to fully indemnify the licensors and authors of this
 * material.
 * 
 * This header and all notices must be kept intact.
 * 
 * @author itthinx
 * @package widgets-control
 * @since 1.0.0
 */

if ( !defined( 'ABSPATH' ) ) {
	exit;
}

function widgets_plugin_set() {
	define( 'WIDGETS_PLUGIN_VERSION',  '1.7.0' );
	define( 'WIDGETS_PLUGIN_NAME',     'widgets-control' );
	define( 'WIDGETS_PLUGIN_DOMAIN',   'widgets-control' );
	define( 'WIDGETS_PLUGIN_FILE',     __FILE__ );
	define( 'WIDGETS_PLUGIN_BASENAME', plugin_basename( WIDGETS_PLUGIN_FILE ) );
	define( 'WIDGETS_PLUGIN_DIR',      plugin_dir_path( __FILE__ ) );
	define( 'WIDGETS_PLUGIN_LIB',      WIDGETS_PLUGIN_DIR . 'lib' );
	define( 'WIDGETS_PLUGIN_URL',      plugins_url( 'widgets-control' ) );
}

/**
 * Widget Plugin main class.
 */
class Widgets_Plugin {

	/**
	 * Plugin setup.
	 */
	public static function init() {
		if ( !defined( 'WIDGETS_PLUGIN_VERSION' ) ) {
			widgets_plugin_set();
			add_action( 'init', array( __CLASS__, 'wp_init' ) );
			require_once WIDGETS_PLUGIN_LIB . '/includes/constants.php';
			require_once WIDGETS_PLUGIN_LIB . '/conditions.php';
			require_once WIDGETS_PLUGIN_LIB . '/class-widgets-control-conditions.php';
			require_once WIDGETS_PLUGIN_LIB . '/class-widgets-plugin-options.php';
			require_once WIDGETS_PLUGIN_LIB . '/widgets.php';
			if ( is_admin() ) {
				require_once WIDGETS_PLUGIN_LIB . '/admin/class-widgets-plugin-admin.php';
				require_once WIDGETS_PLUGIN_LIB . '/admin/class-widgets-plugin-admin-settings.php';
			}
			require_once WIDGETS_PLUGIN_LIB . '/class-widgets-plugin-cache.php';
			require_once WIDGETS_PLUGIN_LIB . '/class-widgets-control-sidebars.php';
			require_once WIDGETS_PLUGIN_LIB . '/class-widgets-control-shortcodes.php';
		}
	}

	/**
	 * Hooked on the init action, loads translations.
	 */
	public static function wp_init() {
		load_plugin_textdomain( WIDGETS_PLUGIN_DOMAIN, null, 'widgets-control/languages' );
	}
}
Widgets_Plugin::init();
