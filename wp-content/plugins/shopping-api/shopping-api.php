<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              elmmedia.com
 * @since             1.0.1
 * @package           Shopping_Api
 *
 * @wordpress-plugin
 * Plugin Name:       Shopping Api
 * Plugin URI:        elmmedia.com
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.1
 * Author:            ELM Media
 * Author URI:        elmmedia.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       shopping-api
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
define( 'SHOPPING_API_VERSION', '1.0.1' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-shopping-api-activator.php
 */
function activate_shopping_api() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-shopping-api-activator.php';
	Shopping_Api_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-shopping-api-deactivator.php
 */
function deactivate_shopping_api() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-shopping-api-deactivator.php';
	Shopping_Api_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_shopping_api' );
register_deactivation_hook( __FILE__, 'deactivate_shopping_api' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-shopping-api.php';
require 'plugin-update-checker/plugin-update-checker.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_shopping_api() {

	$plugin = new Shopping_Api();
	$plugin->run();

}
run_shopping_api();


$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
    'https://github.com/ramendas1234/shopping-api/',
    __FILE__,
    'shopping-api'
);

//Set the branch that contains the stable release.
$myUpdateChecker->setBranch('master');

//Optional: If you're using a private repository, specify the access token like this:
//$myUpdateChecker->setAuthentication('your-token-here');