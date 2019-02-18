<?php
/**
 * Plugin Name:     Enfold social share links
 * Plugin URI:      https://incuca.net
 * Description:     Enfold social share links
 * Author:          INCUCA
 * Author URI:      https://incuca.net
 * Text Domain:     ic-enfold-social-share
 * Version:         0.1.0
 *
 * @package         Ic_Enfold
 */

// Add shortcodes to Enfold
add_filter('avia_load_shortcodes', 'ic_enfold_social_share_shortcodes', 12, 1);

function ic_enfold_social_share_shortcodes($paths)
{
	$plugin_dir = plugin_dir_path(__FILE__);
	array_push($paths, $plugin_dir.'/shortcodes/');
	return $paths;
}