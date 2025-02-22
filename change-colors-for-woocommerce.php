<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              flawlessthemes.com
 * @since             1.0.0
 * @package           Change_Colors_For_Woocommerce
 *
 * @wordpress-plugin
 * Plugin Name:       Change Colors for WooCommerce
 * Plugin URI:        
 * Description:       Change Colors for WooCommerce will help you to change woocommerce default styles like button colors and other Woocommerce Elements.
 * Version:           1.0.0
 * Author:            flawlesstheme
 * Author URI:        flawlessthemes.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       change-colors-for-woocommerce
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'CHANGE_COLORS_FOR_WOOCOMMERCE_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-change-colors-for-woocommerce-activator.php
 */
function activate_change_colors_for_woocommerce() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-change-colors-for-woocommerce-activator.php';
	Change_Colors_For_Woocommerce_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-change-colors-for-woocommerce-deactivator.php
 */
function deactivate_change_colors_for_woocommerce() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-change-colors-for-woocommerce-deactivator.php';
	Change_Colors_For_Woocommerce_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_change_colors_for_woocommerce' );
register_deactivation_hook( __FILE__, 'deactivate_change_colors_for_woocommerce' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-change-colors-for-woocommerce.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_change_colors_for_woocommerce() {

	$plugin = new Change_Colors_For_Woocommerce();
	$plugin->run();

}
run_change_colors_for_woocommerce();
