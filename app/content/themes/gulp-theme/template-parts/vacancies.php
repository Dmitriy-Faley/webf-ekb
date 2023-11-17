<?php
/**
*Template name: Вакансии
*/
get_header();
?>


<?php if( have_rows('vakansii') ): ?>
<section class="distribution">
    <div class="container">
        <div class="breadcrumbs"><?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?></div>
        <h1 class="title"><?php the_title(); ?></h1>
        <div class="distribution__content">
            <div class="distribution__content--info">
                <div class="tabs__nav">
                    <button class="button-filter active" data-filter="all">Все</button>
                    <?php while (have_rows('vakansii')): the_row();  
                        $category = get_sub_field('kategoriya_vakansii');
                    ?>
                    <button class="button-filter"
                        data-filter="<?php echo $category; ?>"><?php echo $category; ?></button>
                    <?php endwhile; ?>
                </div>

                <ul class="accordion">
                    <?php while (have_rows('vakansii')): the_row();  
                        $category = get_sub_field('kategoriya_vakansii');
                    ?>

                    <?php while (have_rows('informacziya_o_vakansii')): the_row();
                        $opyt = get_sub_field('opyt');
                        $name = get_sub_field('naimenovanie_vakansii');
                        $pay = get_sub_field('zarplata');
                        $shortDesk = get_sub_field('kratkoe_opisanie');
                        //category = get_sub_field('kategoriya_vakansii');
                    ?>
                    <li class="tabs__pane__item question card <?php echo $category; ?>">
                        <a class="toggle" href="javascript:void(0);">
                            <div class="tabs__item__info">
                                <p class="data"><?php echo $opyt; ?></p>
                                <p class="name"><?php echo $name; ?></p>
                                <p class="price"><?php echo $pay; ?> ₽</p>
                                <p class="desk"><?php echo $shortDesk; ?></p>
                            </div>
                            <object><a href="#response" rel="modal:open" class="button">Откликнуться</a></object>
                        </a>
                        <div class="inner">
                            <?php while (have_rows('podrobnoe_opisanie')): the_row();  
                                $titleDetailedDesk = get_sub_field('zagolovok_podrobnogo_opisaniya');
                                $listDetailDesk = get_sub_field('spisok_podrobnogo_opisaniya');
                            ?>
                            <div class="inner__item">
                                <p class="heading"><?php echo $titleDetailedDesk; ?></p>
                                <?php echo $listDetailDesk; ?>
                            </div>
                            <?php endwhile; ?>
                            <!-- <a href="#response" rel="modal:open" class="button button-inner">Откликнуться</a> -->
                        </div>
                        <a href="#response" rel="modal:open" class="button button-inner">Откликнуться</a>
                    </li>
                    <?php endwhile; ?>
                    <?php endwhile; ?>
                </ul>

            </div>
        </div>
    </div>
</section>
<?php endif; ?>


<!-- Modal HTML embedded directly into document -->
<div div id="response" class="modal modal-vacancie">
    <div class="modal-content">
        <div class="modal-form">
            <!-- <form method="post" class="form">
        <p class="title">Связаться с нами</p>
        <input type="text" name="name" placeholder="Имя" required minlength="2">
        <input type="tel" name="phone" placeholder="Телефон" required>
        <div class="form__button">
          <button class="button">Отправить</button>
          <p>Нажимая на кнопку "Отправить", вы соглашаетесь с <a href="#">условиями политики конфиденциальности</a>
          </p>
        </div>
      </form> -->
            <?php echo do_shortcode('[contact-form-7 id="141" title="Отклик на вакансию"]'); ?>
        </div>
        <div class="modal__icons">
            <img class="icon" src="<?php echo get_template_directory_uri() ?>/assets/img/icons/ee.svg" alt="icon">
            <img class="icon" src="<?php echo get_template_directory_uri() ?>/assets/img/icons/about2.svg" alt="icon">
            <img class="icon" src="<?php echo get_template_directory_uri() ?>/assets/img/icons/about4.svg" alt="icon">
        </div>
    </div><!-- content -->
    <a href="#" rel="modal:close" style="display:none;">Close</a>
</div>




<?php theme_sidebar( 'form' ); ?>

<?php get_footer(); ?>

<script>
    //Прикрепить резюме
    $(document).ready(function () {
        $('input[name="file-137"]').change(function (e) {
            var fileName = e.target.files[0].name;
            $('.file_pretext').text(fileName);
        });
    });


    document.querySelectorAll(".distribution__content .button").forEach(item => {
        item.addEventListener('click', function () {
            const wrap = item.closest('.question');
            document.querySelector('.vacancie-title-name').textContent = wrap.querySelector('.distribution__content .name').textContent;
            document.querySelector('.input-vacancie-name').value = wrap.querySelector('.distribution__content .name').textContent;
        });
    });
</script>