<?php
/**
*Template name: Партнеры
*/
get_header();
?>

<section class="parners">
    <div class="container">
        <div class="breadcrumbs"><?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?></div>
        <h1 class="title"><?php the_title(); ?></h1>
        <div class="parners__icons">
            <div class="icons__item">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/partners/BMW-logo.svg" alt="parners:icon">
            </div>
            <div class="icons__item">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/partners/audi.png" alt="parners:icon">
            </div>
            <div class="icons__item">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/partners/volkswagen_logo.svg" alt="parners:icon">
            </div>
            <div class="icons__item">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/partners/motor.svg" alt="parners:icon">
            </div>
            <div class="icons__item">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/partners/adidas.png" alt="parners:icon">
            </div>
            <div class="icons__item">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/partners/bosch.svg" alt="parners:icon">
            </div>
            <div class="icons__item">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/partners/canon.svg" alt="parners:icon">
            </div>
            <div class="icons__item">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/partners/dell.svg" alt="parners:icon">
            </div>
            <div class="icons__item">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/partners/hp.svg" alt="parners:icon">
            </div>
            <div class="icons__item">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/partners/jysk.png" alt="parners:icon">
            </div>
            <div class="icons__item">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/partners/nvidia.svg" alt="parners:icon">
            </div>
            <div class="icons__item">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/partners/pandora.png" alt="parners:icon">
            </div>
            <div class="icons__item">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/partners/vs.svg" alt="parners:icon">
            </div>
            <div class="icons__item">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/partners/xerox.png" alt="parners:icon">
            </div>
            <div class="icons__item">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/partners/mango.png" alt="parners:icon">
            </div>
            <div class="icons__item">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/partners/starbucks.svg" alt="parners:icon">
            </div>
            <div class="icons__item">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/partners/valio.svg" alt="parners:icon">
            </div>
            <div class="icons__item">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/partners/toshiba.svg" alt="parners:icon">
            </div>
            <div class="icons__item">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/partners/vans.svg" alt="parners:icon">
            </div>
            <div class="icons__item">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/partners/oriflame.svg" alt="parners:icon">
            </div>
            <div class="icons__item">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/partners/ninja.svg" alt="parners:icon">
            </div>
            <div class="icons__item">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/partners/hesburger.svg" alt="parners:icon">
            </div>
            <div class="icons__item">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/partners/purina.svg" alt="parners:icon">
            </div>
            <div class="icons__item">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/partners/marriott.svg" alt="parners:icon">
            </div>
            <div class="icons__item">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/partners/wella.svg" alt="parners:icon">
            </div>
            <div class="icons__item">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/partners/lavazza.svg" alt="parners:icon">
            </div>
            <div class="icons__item">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/partners/bsburger.svg" alt="parners:icon">
            </div>
        </div>
    </div>
</section>


<?php theme_sidebar( 'form' ); ?>


<?php get_footer(); ?>