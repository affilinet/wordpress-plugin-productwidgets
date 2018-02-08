<?php

/*
Plugin Name: affilinet Product Widgets
Plugin URI: https://www.affili.net/de/publisher/tools/influencer-web-extension
Description: A brief description of the Plugin.
Version: 0.92
Author: affilinet
Author URI: https://www.affili.net/
License: GPLv2 or later
*/

define("AFFILINET_PRODUCT_WIDGETS_PLUGIN_DIR", dirname(__FILE__) . DIRECTORY_SEPARATOR);
define("AFFILINET_PRODUCT_WIDGETS_PLUGIN_FILE", plugin_basename( __FILE__) );

foreach (glob( AFFILINET_PRODUCT_WIDGETS_PLUGIN_DIR . "classes/*.php") as $filename) {
	include $filename;
}

new AffilinetWidgetsPlugin();
