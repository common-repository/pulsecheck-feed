<?php
/**
* @package PulsecheckFeed
*/

/*
 * Plugin Name: PulseCheck - Feed
 * Plugin URI: https://www.pulsecheck.co.za
 * Description: This plugin adds a specified pulsecheck feed to the website.
 * Version: 1.0.1
 * Author: Ross Kohler
 * Author URI:  https://www.pulsecheck.co.za
 * License: GPL2
 */

define('PULSECHECK_FEED_VERSION','1.00');
define('PULSECHECK_PLUGIN_URL', plugin_dir_url(__FILE__));
define('PULSECHECK_PLUGIN_DIR', plugin_dir_path(__FILE__));

require_once(PULSECHECK_PLUGIN_DIR . 'class.pulsecheck-shortcode.php');


if(is_admin()){
	require_once(PULSECHECK_PLUGIN_DIR . 'class.pulsecheck-admin.php');
	add_action('admin_menu',array('Pulsecheck_Admin','add_menu'));
	add_action('admin_init',array('Pulsecheck_Admin','pulsecheck_plugin_settings'));
	add_action('admin_notices',array('Pulsecheck_Admin','display_notice'));
}

add_action('wp_enqueue_scripts',array('Pulsecheck_shortcode','enqueue_javascripts'));
add_shortcode('pulsecheck_feed', array('Pulsecheck_Shortcode','generate_iframe'));

