<?php
/**
*Template name: О компании
*/
get_header();
?>


<?php
$terms = get_terms( [
	'taxonomy' => 'post_tag',
	'hide_empty' => false,
] );
  foreach ($terms as $term) :
    echo '<a class="stati_tabs-a" href="/cases-tag/' . $term->slug . '" title=" ' . $term->name . '">' . $term->name . '</a>';        
  endforeach;

?>


<?php 
$parent_title = get_the_title($post->post_parent); // получаем title родительского пункта меню
$args = array(
 'menu_class'=>'my-menu', // класс меню
 'theme_location' => 'button_menu', // название меню
 'submenu' => $parent_title // переменная с title родительского пункта
 );
wp_nav_menu($args);
//wp_nav_menu();

//do_action();
?>

<?php theme_sidebar( 'form' ); ?>

<?php get_footer(); ?>