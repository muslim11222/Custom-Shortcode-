<?php 





if(!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

class Custom_post_type_Practice{
     public function __construct(){
         add_action('init', array($this, 'register_custom_post_type'));
     }

     // This function will register a custom post type called 'Practice'
     public function register_custom_post_type(){
          register_post_type('practice', array(
               'labels' => array(
                    'name'          => __('Products'),
				'singular_name' => __('Product'),
               ),
               'public' => true,
               'has_archive' => true,
               'supports' => array('title', 'editor', 'thumbnail'),
          ));
     }
}



?>