<?php 





if(!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

class Custom_metabox_Practice{
     public function __construct() {
          add_action('add_meta_boxes', array($this, 'add_custom_metabox'));
          add_action('save_post', array($this, 'add_custom_save'));
     }

     public function add_custom_save($post_id){
          if(isset($_POST['practice_text'])){
               $practice_text = sanitize_text_field($_POST['practice_text']);
               update_post_meta($post_id, '_practice_text', $practice_text);
          }

           if(isset($_POST['practice_email'])){
               $practice_email = sanitize_text_field($_POST['practice_email']);
               update_post_meta($post_id, '_practice_email', $practice_email);
          }


           if(isset($_POST['practice_number']) && $_POST['practice_number'] !== ''){
               $practice_number = sanitize_text_field($_POST['practice_number']);
               update_post_meta($post_id, '_practice_number', $practice_number);
          }
     }

     // This function will add a custom metabox to the post edit screen
     public function add_custom_metabox() {
          add_meta_box(
               'custom_metabox',
               'Custom Metabox',
               array($this, 'render_custom_metabox'),
               'post', // You can change this to 'page' or any custom post type
          );
     }

     // This function will render the content of the custom metabox
     public function render_custom_metabox($post){
          $your_text = get_post_meta($post->ID, '_practice_text', true);
          $your_email = get_post_meta($post->ID, '_practice_email', true);
          $your_number = get_post_meta($post->ID, '_practice_number', true);


        ?>
          <P>
               <label for="">Name</label><br>
               <input type="text" name="practice_text" value="<?php echo $your_text; ?>" placeholder="Enter Your Name">
          </p>
          <p>
               <label for="">Email</label><br>
               <input type="email" name="practice_email" value="<?php echo $your_email ?>" placeholder="Enter Your Email">
          </p>   
          <p>
               <label for="">Nomber</label><br>
               <input type="number" name="practice_number" value="<?php echo $your_number ?>" placeholder="Enter Your Number">
          </p>

     <?php 
     }
}



?>