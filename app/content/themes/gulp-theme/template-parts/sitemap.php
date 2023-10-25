<?php
/**
*Template name: Карта сайта
*/
get_header();
?>
<section class="sitemap">
    <div class="container">
        <div class="breadcrumbs"><?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?></div>
        <h1 class="title"><?php the_title(); ?></h1>
        <div class="sitemap_wrapper">
            <?php
                wp_nav_menu( [
                'menu'            => '', 
                'container'       => false, 
                'container_class' => '', 
                'container_id'    => '',
                'menu_class'      => 'sitemap-menu', 
                'menu_id'         => '',
                'echo'            => true,
                'theme_location'  => 'button_menu',
                'fallback_cb'     => 'wp_page_menu',
                'before'          => '',
                'after'           => '',
                'link_before'     => '',
                'link_after'      => '<span></span>',
                'items_wrap'      => '<ul id="%1$s" class="sitemap-menu__ul">%3$s</ul>',
                'depth'           => 0,
                'walker'          => '',
            ] );?>
        </div>
    </div>
</section>


<?php get_footer(); ?>