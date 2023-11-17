<?php
/**
*Template name: Услуга
*/
get_header();
?>


<section class="header-service">
    <div class="container">
        <div class="breadcrumbs"><?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?></div>
        <div class="content">
            <div class="header-service__info">
                <h1 class="title"><?php the_title(); ?></h1>
                <div class="short__description">
                    <?php the_field('opisanie_v_shapke'); ?>
                    <a href="#ex1" rel="modal:open" class="button">Заказать</a>
                </div>
            </div>
            <div class="header-service__price">
                от <span><?php the_field('czena_v_shapke'); ?></span> ₽
            </div>
        </div>
    </div>
</section>

<section class="subservices">
    <div class="container">
        <ul class="subservices__links">
            <?php 
                add_filter('wp_nav_menu_objects', 'wp_nav_menu_objects_filter', 10, 2);

                //Вывод отфильтрованного меню (со всеми дочерними - скрываем стилями)
                $args = array(
                    'menu' => 'button_menu',
                );
                wp_nav_menu($args);
            ?>
        </ul>
    </div>
</section>

<section class="service-content сontent_before">
    <div class="container">
        <?php the_field('kontent_do_formy'); ?>
    </div>
</section>

<?php theme_sidebar( 'form' ); ?>

<section class="service-content__steps content_after">
    <div class="container">
        <?php the_field('kontent_posle_formy'); ?>
    </div>
</section>
<?php get_footer(); ?>

<script>
    const parent = document.querySelector('.subservices__links');
    const section = document.querySelector('.subservices');

    if(parent.childNodes.length != 0) {
        section.style.display = 'none';
    }

    const listParent = document.querySelectorAll('ol');

    listParent.forEach(parentItem => {
        const listChild = parentItem.querySelectorAll('li');
        listChild.forEach(listItem => {
            if(listItem.childNodes.length > 1) {
                parentItem.classList.add('list_bold');
            }
        })
    })
</script>