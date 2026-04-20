<?php

 $query = new WP_Query(array(
     'post_type' => 'post',
 ));

if($query->have_posts()){
     while($query->have_posts()){
          $query->the_post();
     }
}
    ?>
          <h2> <?php the_title(); ?> </h2>
          <p> <?php the_content(); ?> </p>

          <p>
               <?php 
                    if(has_post_thumbnail()){
                         the_post_thumbnail('medium');
                    }
               ?>
          </p>
     <?php
?>