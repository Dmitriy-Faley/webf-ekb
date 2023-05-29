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
                от <?php the_field('czena_v_shapke'); ?>
            </div>
        </div>
    </div>
</section>


<?php theme_sidebar( 'form' ); ?>

<?php get_footer(); ?>