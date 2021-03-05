<?php
/*
Plugin Name: WSUWP Legacy Templates
Version: 0.0.2
Description: Add legacy template JSON feeds.
Author: washingtonstateuniversity, Danial Bleile
Author URI: https://github.com/washingtonstateuniversity/
Plugin URI: https://github.com/washingtonstateuniversity/wsuwp-plugin-legacy-templates
Text Domain: wsuwp-plugin-legacy-templates
Requires at least: 4.7
Tested up to: 5.2.0
Requires PHP: 7.0
*/

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

require_once __DIR__ . '/includes/web-template.php';
