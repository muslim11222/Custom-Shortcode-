<?php 
/**  
 * Plugin Name: Custom Shortcode
 * Description: A simple plugin to create a custom shortcode.
 * Version: 1.0
 * Author: Muslim khan
 * url: https://www.muslimkhan.com  
 * 
 */
if(!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
define('CUSTOM_SHORTCODE_PLUGIN_DIR', plugin_dir_path(__FILE__));
define('CUSTOM_SHORTCODE_PLUGIN_URL', plugin_dir_url(__FILE__));

require_once CUSTOM_SHORTCODE_PLUGIN_DIR . 'includes/custom-shortcode.php';
require_once CUSTOM_SHORTCODE_PLUGIN_DIR . 'includes/custom-metabox.php';
require_once CUSTOM_SHORTCODE_PLUGIN_DIR . 'includes/custom-post-type.php';


new Custom_Shortcode();
new Custom_metabox_Practice();
new Custom_post_type_Practice();
?>