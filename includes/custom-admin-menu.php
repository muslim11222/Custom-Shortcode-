<?php 




if(!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

class admin_menu_page{
     public function __construct(){
          add_action('admin_menu', array($this, 'add_admin_menu'));
          add_action( 'admin_enqueue_scripts', array($this, 'themeslug_enqueue_style') );
     }

     public function themeslug_enqueue_style() {
          wp_enqueue_script( 'custom-admin-style', CUSTOM_SHORTCODE_PLUGIN_URL . 'assets/js/admin.js', array(), '1.0', true);
     }
     
     public function add_admin_menu(){
          add_menu_page(
               'Custom Admin Page', // Page title
               'Custom Admin', // Menu title
               'manage_options', // Capability
               'custom-admin-page', // Menu slug
               array($this, 'render_admin_page'), // Callback function to render the page
               'dashicons-admin-generic', // Icon URL (optional)
               6 // Position (optional)
          );
     }
     
     public function render_admin_page(){
    ?>
          <div class="wrap">
               <h1>Video Preview System</h1>

               <input type="text" id="video_url" placeholder="Enter video URL (YouTube/Vimeo)" style="width: 400px;">
               <button id="load_video" class="button button-primary">Load Video</button>

               <div id="video_container" style="margin-top:20px;"></div>
          </div>

   
     <?php
}
}




?>