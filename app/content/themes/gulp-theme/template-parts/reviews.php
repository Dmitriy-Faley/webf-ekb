<?php
/**
*Template name: Отзывы
*/
get_header();
?>

<section class="reviews-page">
    <div class="container">
        <h1 class="title">Отзывы</h1>
        <div class="reviews__content">
            <div class="reviews__item">
                <div class="item__info">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/review1.png" alt="review">
                    <div>
                        <p class="name">Полина Ходасевич</p>
                        <p class="job">Директор магазина</p>
                    </div>
                </div>
                <div class="item__text">
                    Если с настройкой Яндекс Директ я как-то совладала самостоятельно (хотя там все понятно и логично),
                    то с
                    контектсной рекламой в Гугле были колоссальные затруднения. По совету коллеги я обратилась в эту
                    компанию,
                    осталась абсолютно удовлетворена! А именно - в течение трех дней копировали все рекламные материалы
                    с текстами
                    и фото из Я-Директ и отдали мне под ключ. А там такое количество одних только рекламируемых товаров,
                    что у
                    меня руки опускались делать даже это самостоятельно. Очень быстро работают и команда
                    профессиональная.
                </div>
            </div>
            <div class="reviews__item">
                <div class="item__info">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/review1.png" alt="review">
                    <div>
                        <p class="name">Полина Ходасевич</p>
                        <p class="job">Директор магазина</p>
                    </div>
                </div>
                <div class="item__text">
                    Заказывали разработку мобильной версии лендинга - очень довольны! Подход к работе профессиональный,
                    сроки соблюдают. Нам не пришлось вносить никаких корректировок - все настолько понравилось!
                </div>
            </div>
            <div class="reviews__item">
                <div class="item__info">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/review1.png" alt="review">
                    <div>
                        <p class="name">Полина Ходасевич</p>
                        <p class="job">Директор магазина</p>
                    </div>
                </div>
                <div class="item__text">
                    Обращался для продвижения своего сайта ремонтной компании, результат приятно удивил, через месяц
                    заметил прирост потенциальных клиентов, посещения начали расти, в поисковой выдаче сайт добавил
                    позиции. На достигнутом не останавливаюсь и продолжаю плодотворно сотрудничать. Хороший результат за
                    приемлемую цену
                </div>
            </div>
            <div class="reviews__item">
                <div class="item__info">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/review1.png" alt="review">
                    <div>
                        <p class="name">Полина Ходасевич</p>
                        <p class="job">Директор магазина</p>
                    </div>
                </div>
                <div class="item__text">
                    В короткие сроки смогли продвинуть мой сайт зоотоваров. Очень доволен что воспользовался именно их
                    услугами. Цены у них вполне адекватные на услуги. Могу смело всем рекомендовать.
                </div>
            </div>
        </div>
    </div>
</section>




<?php theme_sidebar( 'form' ); ?>

<?php get_footer(); ?>