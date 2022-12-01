<?php get_header(); ?>

    <div class="container_error">

        <div class="wrapper">

            <div class="text-center" >

                <h1 class="error404-numb">404</h1>

                <h3 class="error404-text">Страница, которую вы ищете,<br> не удалось найти.</h3>

                <div class="btn_clic">

                    <a href="<?php echo esc_js('javascript:history.go(-1)'); ?>">Вернуться назад</a>

                </div>

            </div>

        </div>

    </div>

<?php get_footer(); ?>
