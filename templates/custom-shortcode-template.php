<?php




$query = new WP_Query(array(
     'post_type' => 'practice',
));

?>

<ul>

     <?php 

          while($query->have_posts() ) :
          $query->the_post();
     ?>

     <li> <?php the_title(); ?> </li>
     <li> <?php the_content(); ?> </li>
     <li>
          <?php
     
               if(has_post_thumbnail() ){
                    the_post_thumbnail('medium');
               }
          
          ?>
     </li>

     <?php endwhile; ?>
</ul>





