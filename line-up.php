<?php

/**
 *
 * @link              http://lineupnow.com
 * @since             1.0.0
 * @package           Line_Up
 *
 * @wordpress-plugin
 * Plugin Name:       Line-Up
 * Plugin URI:        lineupnow.com
 * Description:       Embed your Line-Up Plugin to sell tickets on your WordPress site
 * Version:           1.0.3
 * Author:            Planvine Ltd
 * Author URI:        http://lineupnow.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}
/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-line-up-activator.php
 */
function activate_line_up() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-line-up-activator.php';
	Line_Up_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-line-up-deactivator.php
 */
function deactivate_line_up() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-line-up-deactivator.php';
	Line_Up_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_line_up' );
register_deactivation_hook( __FILE__, 'deactivate_line_up' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-line-up.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_line_up() {

	$plugin = new Line_Up();
	$plugin->run();

}
run_line_up();
