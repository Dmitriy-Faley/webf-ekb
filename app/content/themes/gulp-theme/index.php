<?php get_header(); ?>

    <?php
      $posttags = get_the_tags();
      if( $posttags ){
          foreach( $posttags as $tag ){
              echo $tag->name . ' ';
          }
      }

        $parent_title = get_the_title($post->post_parent); // получаем title родительского пункта меню
        $args = array(
            'menu_class'=>'my-menu', // класс меню
            'theme_location' => 'top_menu', // название меню
            'submenu' => $parent_title // переменная с title родительского пункта
        );
        wp_nav_menu($args);
    ?>




<?php get_footer(); ?>