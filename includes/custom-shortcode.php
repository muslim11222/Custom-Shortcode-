<?php 

if(!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
class Custom_Shortcode {

     public function __construct() {
          add_shortcode('custom_shortcode', array($this, 'render_custom_shortcode'));
     }

     // This function will render the content of the shortcode
     public function render_custom_shortcode() {
          ob_start(); // Start output buffering
               require_once CUSTOM_SHORTCODE_PLUGIN_DIR . 'templates/custom-shortcode-template.php'; // Include the template file
          return ob_get_clean(); // Return the buffered content
      }
}
?>