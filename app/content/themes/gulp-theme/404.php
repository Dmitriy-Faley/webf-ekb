<?php get_header(); ?>
<div class="container">
    <div class="breadcrumbs"><?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?></div>
    <div class="container_error">

        <div class="wrapper">

            <div class="text-center" >

                <h1 class="error404-numb">404</h1>

                <h3 class="error404-text">Упс......Страница не найдена<span class="error404-icon"><img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/error-icon.svg" alt=""></span></h3>

                <a href="/" class="button">Вернуться на главную</a>

            </div>

        </div>

    </div>
</div>

<?php get_footer(); ?>
