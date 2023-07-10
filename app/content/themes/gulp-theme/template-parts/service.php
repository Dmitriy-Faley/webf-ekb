<?php
/**
*Template name: Услуга
*/
get_header();
?>


<section class="header-service">
    <div class="container">
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
        <?php 
            /*
            $parent_title = the_title(); // получаем title родительского пункта меню
            $args = array(
            'menu_class'=>'', // класс меню
            'theme_location' => 'button_menu', // название меню
            'submenu' => $parent_title // переменная с title родительского пункта
            );
            wp_nav_menu($args);
            */
        ?>
        <ul class="subservices__links">
            <li><a href="#">Создание сайта «под ключ»</a></li>
            <li><a href="#">Разработка программного модуля для сайта</a></li>
            <li><a href="#">Готовые сайты</a></li>
            <li><a href="#">Лицензирование</a></li>
            <li><a href="#">Технологии</a></li>
            <li><a href="#">Аутсорсинг</a></li>
            <li><a href="#">Аутстаффинг</a></li>
        </ul>
    </div>
</section>

<section class="service-content">
    <div class="container">
        <div class="service-content__wrapper">
            <?php the_field('vidy_saitov'); ?>
        </div>
        <?php the_field('podhod_k_sozdaniyu'); ?>
    </div>
</section>

<?php theme_sidebar( 'form' ); ?>

<section class="service-content__steps">
    <div class="container">
        <?php the_field('etapy_sozdaniya_sajta'); ?>
    </div>
</section>

<section class="service-content__client">
    <div class="container">
        <?php the_field('podhod_k_klientam'); ?>
    </div>
</section>
<?php get_footer(); ?>