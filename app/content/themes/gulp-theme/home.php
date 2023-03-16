<?php
/**
*Template name: Главная страница
*/
get_header();
?>


<section class="home-about">
  <div class="container">
    <div class="info">
      <h1 class="title">
        <span>Маркетинговое
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/lightning.svg" alt="">
        </span>
        <span>
          <p>агентство</p>
          <p>полного <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/fire.svg" alt=""></p>
        </span>
        <span>
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/fire.svg" alt="">цикла
        </span>
      </h1>
      <div class="dop">
        <p>Приспособим интернет под потребности клиента</p>
        <a href="#ex1" rel="modal:open" class="button">Заказать проект</a>
      </div>
    </div>
  </div>
</section>

<section class="aboutus">
  <div class="container">
    <div class="aboutus__content">
      <div class="aboutus__text">
        <h2 class="title"><?php the_field('zagolovok_o_kompanii'); ?></h2>
        <div class="aboutus__text">
          <p><?php the_field('pervyj_abzacz_opisanie'); ?></p>
          <p><?php the_field('vtoroj_abzacz_opisanie'); ?></p>
          <p><?php the_field('tretij_abzacz_opisanie'); ?></p>
        </div>
      </div>
      <div class="aboutus__icons">
        <img class="icon" src="<?php echo get_template_directory_uri() ?>/assets/img/icons/about1.svg" alt="icon">
        <img class="icon" src="<?php echo get_template_directory_uri() ?>/assets/img/icons/super.svg" alt="icon">
        <img class="icon" src="<?php echo get_template_directory_uri() ?>/assets/img/icons/about2.svg" alt="icon">
        <img class="icon" src="<?php echo get_template_directory_uri() ?>/assets/img/icons/about3.svg" alt="icon">
      </div>
    </div>
  </div>
</section>

<section class="projects">
  <div class="container">
    <h3 class="title">Недавние проекты нашей компании<img
        src="<?php echo get_template_directory_uri() ?>/assets/img/icons/fire-title.svg" alt="fire"></h3>
    <div class="projects__content">
      <div class="projects__content__item">
        <div>
          <a href="#" class="item__img">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/projects/project1.png" alt="projects">
          </a>
        </div>
        <div class="item__data">
          <div class="data__teg">
            <span>Ui/UX Дизайн</span>
            <span>Разработка сайта</span>
          </div>
          <div class="data__info">
            <a href="#" class="title">Название проекта</a>
            <p class="desk">Сфера проекта</p>
          </div>
        </div>
      </div>
      <div class="projects__content__item">
        <div>
          <a href="#" class="item__img">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/projects/project2.png" alt="projects">
          </a>
        </div>
        <div class="item__data">
          <div class="data__teg">
            <span>Ui/UX Дизайн</span>
            <span>Разработка сайта</span>
          </div>
          <div class="data__info">
            <a href="#" class="title">Название проекта</a>
            <p class="desk">Сфера проекта</p>
          </div>
        </div>
      </div>
      <div class="projects__content__item">
        <div>
          <a href="#" class="item__img">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/projects/project3.png" alt="projects">
          </a>
        </div>
        <div class="item__data">
          <div class="data__teg">
            <span>Ui/UX Дизайн</span>
            <span>Разработка сайта</span>
          </div>
          <div class="data__info">
            <a href="#" class="title">Название проекта</a>
            <p class="desk">Сфера проекта</p>
          </div>
        </div>
      </div>
    </div>
    <a href="#" class="button">Все проекты</a>
  </div>
</section>


<?php if( have_rows('sotrudniki', 60) ): ?>
<section class="team">
  <div class="container">
    <h3 class="title">Наша команда сотрудников</h3>
    <p class="subtitle">Наш коллектив – пчелиный улей, в котором постоянно что-то происходит. Некоторые сотрудники
      помнят, как выглядели первые сайты Рунета. За плечами – обширная практика, что позволило сформировать собственный
      подход к воплощению проектов в жизнь.</p>
    <div class="team__content">

    <?php while( have_rows('sotrudniki', 60) ): the_row(); 
        // переменные
        $imageSotrudnika = get_sub_field('kartinka_sotrudnika');
        $fioSotrudnika = get_sub_field('fio_sotrudnika');
        $dolznostSotrudnika = get_sub_field('dolzhnost_sotrudnika');
    ?>
      <div class="team__item">
          <img src="<?php echo $imageSotrudnika['url']; ?>" alt="<?php echo $imageSotrudnika['alt'] ?>" />
          <p class="name"><?php echo $fioSotrudnika; ?></p>
          <p class="job"><?php echo $dolznostSotrudnika; ?></p>
      </div>

    <?php endwhile; ?>

    </div>
    <a href="#ex1" rel="modal:open" class="button">Узнать больше</a>
  </div>
</section>
<?php endif; ?>


<section class="strip">
  <div>
    <p class="text">Web focus
      <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/like.svg" alt="smile">
      Web focus
      <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/surprice.svg" alt="smile">
      Web focus
      <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/vau.svg" alt="smile">
      Web focus
      <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/like.svg" alt="smile">
      Web focus
      <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/clapping.svg" alt="smile">
      Web focus
      <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/smile.svg" alt="smile">
      Web focus
      <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/surprice.svg" alt="smile">
      Web focus
    </p>
  </div>
</section>

<?php if( get_field('zagolovok_interesy_klienta') ): ?>
<section class="interests">
  <div class="container">
    <p class="title"><?php the_field('zagolovok_interesy_klienta'); ?></p>
    <div class="interests__content">
      <div>
        <p><?php the_field('pervyj_abzacz_interesy'); ?></p>
        <p><?php the_field('vtoroj_abzacz_interesy'); ?></p>
        
        <?php if( have_rows('spisok_interesov') ): ?>
        <ul>
        <?php while( have_rows('spisok_interesov') ): the_row(); 
          // переменные
          $textSpiska = get_sub_field('tekst_spiska');
        ?>
          <li><?php echo $textSpiska; ?></li>
        <?php endwhile; ?>
        </ul>
        <?php endif; ?>

      </div>
      <div>
        <p><?php the_field('tretij_abzacz_interesy'); ?></p>
        <a href="#ex1" rel="modal:open" class="button">Связаться с нами</a>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>

<div class="services">
  <div class="swiper-container">
    <div class="services__slider">

      <div class="services__content">
        <div class="container">
          <p class="title">Полный набор услуг по продвижению в Интернете</p>
          <p class="subtitle">Заказчик должен все получить в одном месте! Исповедуем только такой подход.
            Рекламно-маркетинговое агентство «Веб Фокус» охватывает все диджитал-направления:</p>
        </div>
        <div class="swiper-wrapper container">
          <div class="swiper-slide">
            <div class="services__item">
              <img src="<?php echo get_template_directory_uri() ?>/assets/img/serv1.svg" alt="serv">
              <p class="name">Cоздание сайтов</p>
              <p class="desk">Не ненужный бонус, а реально работающий инструмент. Виртуальный офис, который приносит
                не
                меньше, а то и больше прибыли, чем другие подразделения</p>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="services__item">
              <img src="<?php echo get_template_directory_uri() ?>/assets/img/serv1.svg" alt="serv">
              <p class="name">Cоздание сайтов</p>
              <p class="desk">Не ненужный бонус, а реально работающий инструмент. Виртуальный офис, который приносит
                не
                меньше, а то и больше прибыли, чем другие подразделения</p>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="services__item">
              <img src="<?php echo get_template_directory_uri() ?>/assets/img/serv1.svg" alt="serv">
              <p class="name">Cоздание сайтов</p>
              <p class="desk">Не ненужный бонус, а реально работающий инструмент. Виртуальный офис, который приносит
                не
                меньше, а то и больше прибыли, чем другие подразделения</p>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="services__item">
              <img src="<?php echo get_template_directory_uri() ?>/assets/img/serv1.svg" alt="serv">
              <p class="name">Cоздание сайтов</p>
              <p class="desk">Не ненужный бонус, а реально работающий инструмент. Виртуальный офис, который приносит
                не
                меньше, а то и больше прибыли, чем другие подразделения</p>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="services__item">
              <img src="<?php echo get_template_directory_uri() ?>/assets/img/serv1.svg" alt="serv">
              <p class="name">Cоздание сайтов</p>
              <p class="desk">Не ненужный бонус, а реально работающий инструмент. Виртуальный офис, который приносит
                не
                меньше, а то и больше прибыли, чем другие подразделения</p>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="services__item">
              <img src="<?php echo get_template_directory_uri() ?>/assets/img/serv1.svg" alt="serv">
              <p class="name">Cоздание сайтов</p>
              <p class="desk">Не ненужный бонус, а реально работающий инструмент. Виртуальный офис, который приносит
                не
                меньше, а то и больше прибыли, чем другие подразделения</p>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="services__item">
              <img src="<?php echo get_template_directory_uri() ?>/assets/img/serv1.svg" alt="serv">
              <p class="name">Cоздание сайтов</p>
              <p class="desk">Не ненужный бонус, а реально работающий инструмент. Виртуальный офис, который приносит
                не
                меньше, а то и больше прибыли, чем другие подразделения</p>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="services__item">
              <img src="<?php echo get_template_directory_uri() ?>/assets/img/serv1.svg" alt="serv">
              <p class="name">Cоздание сайтов</p>
              <p class="desk">Не ненужный бонус, а реально работающий инструмент. Виртуальный офис, который приносит
                не
                меньше, а то и больше прибыли, чем другие подразделения</p>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="services__item">
              <img src="<?php echo get_template_directory_uri() ?>/assets/img/serv1.svg" alt="serv">
              <p class="name">Cоздание сайтов</p>
              <p class="desk">Не ненужный бонус, а реально работающий инструмент. Виртуальный офис, который приносит
                не
                меньше, а то и больше прибыли, чем другие подразделения</p>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="services__item">
              <img src="<?php echo get_template_directory_uri() ?>/assets/img/serv1.svg" alt="serv">
              <p class="name">Cоздание сайтов</p>
              <p class="desk">Не ненужный бонус, а реально работающий инструмент. Виртуальный офис, который приносит
                не
                меньше, а то и больше прибыли, чем другие подразделения</p>
            </div>
          </div>
        </div>

        <div class="container">
          <p class="subtitle">
            Как видите, предлагаемый вариант взаимодействия позволит воплотить любой проект. Внимательные менеджеры
            легко
            прояснят непонятные моменты, дадут дельные советы по составлению ТЗ – сделают все, чтобы добиться гармонии с
            клиентом. Заслуживаем доверия!
          </p>
          <a href="#" class="button">Все услуги</a>
        </div>

      </div>

    </div>
  </div>
</div>


<?php theme_sidebar( 'form' ); ?>


<section class="reviews">
  <div class="container">
    <p class="title">Отзывы о нашей компании</p>
    <div class="desk">
      <p>Маркетинговое агентство полного цикла «Веб Фокус» оптимально подходит для организации присутствия Вашей
        компании в Мировой паутине. Работали с представителями различных сфер – от аренды спецтехники до поставщиков
        тюльпанов. Располагаем достаточной материально-технической базой.
      </p>
      <p>Имеем серьезные рейтинги в Сети, что подтверждается внушительным количеством отзывов. За каждым из них стоит
        усердная работа нашего коллектива. Гордимся каждым успешным проектом, ведь является убедительным
        доказательством, что для нас маркетинг – не пустое слово.
      </p>
    </div>
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
          Если с настройкой Яндекс Директ я как-то совладала самостоятельно (хотя там все понятно и логично), то с
          контектсной рекламой в Гугле были колоссальные затруднения. По совету коллеги я обратилась в эту компанию,
          осталась абсолютно удовлетворена! А именно - в течение трех дней копировали все рекламные материалы с текстами
          и фото из Я-Директ и отдали мне под ключ. А там такое количество одних только рекламируемых товаров, что у
          меня руки опускались делать даже это самостоятельно. Очень быстро работают и команда профессиональная.
        </div>
      </div>
      <div class="reviews__item">
        <div class="item__info">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/review2.png" alt="review">
          <div>
            <p class="name">Наталья Лученок</p>
            <p class="job">Директор магазина</p>
          </div>
        </div>
        <div class="item__text">
          Заказывали разработку мобильной версии лендинга - очень довольны! Подход к работе профессиональный, сроки
          соблюдают. Нам не пришлось вносить никаких корректировок - все настолько понравилось!
        </div>
      </div>
      <div class="reviews__item">
        <div class="item__info">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/review3.png" alt="review">
          <div>
            <p class="name">Андерс Войковичев</p>
            <p class="job">Директор магазина</p>
          </div>
        </div>
        <div class="item__text">
          Обращался для продвижения своего сайта ремонтной компании, результат приятно удивил, через месяц заметил
          прирост потенциальных клиентов, посещения начали расти, в поисковой выдаче сайт добавил позиции. На
          достигнутом не останавливаюсь и продолжаю плодотворно сотрудничать. Хороший результат за приемлемую цену
        </div>
      </div>
      <div class="reviews__item">
        <div class="item__info">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/review4.png" alt="review">
          <div>
            <p class="name">Владимир Волошинович</p>
            <p class="job">Директор магазина</p>
          </div>
        </div>
        <div class="item__text">
          Хорошее агентство интернет-маркетинга, помогли нам выйти на хорошую посещаемость сайта магазина, раскрутили за
          несколько месяцев до хорошего прироста продаж в соотношении с предыдущими периодами. Рекомендую.
        </div>
      </div>
      <div class="reviews__item">
        <div class="item__info">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/review5.png" alt="review">
          <div>
            <p class="name">Костя Сомов</p>
            <p class="job">Директор магазина</p>
          </div>
        </div>
        <div class="item__text">
          В короткие сроки смогли продвинуть мой сайт зоотоваров. Очень доволен что воспользовался именно их услугами.
          Цены у них вполне адекватные на услуги. Могу смело всем рекомендовать.
        </div>
      </div>
    </div>
  </div>
</section>

<section class="format">
  <div class="container">
    <p class="title">Привлекательный формат для бизнеса</p>
    <div class="format__content">
      <div>
        <p>Строим сотрудничество так, чтобы заказчик чувствовал уверенно и комфортно. В web-студии трудятся не только
          классные специалисты, но и просто хорошие люди. Ламповую атмосферу гарантируем!</p>
        <p>Сведена к минимуму бюрократическая составляющая. Отчетность предоставляется, но ровно в том объеме, который
          требуется для контроля проекта. Маркетинговое агентство работает исключительно на договорной основе, поэтому
          клиентские права защищены не обещаниями, а реальными документами.</p>
      </div>
      <div>
        <p>К каждому подходим персонифицированно, не навязываем лишние услуги, делаем на совесть, ведь рассчитываем на
          постоянное сотрудничество. Урвать деньги любой ценой – ни за что! Элементарно не видим в этом смысла, ведь не
          являемся «однодневкой», каких много в Рунете.</p>
        <p>Адрес, по которому расположена наша веб-студия – это все, что нужно знать о рекламной деятельности в
          Интернете. За месяц сделаем то, на что у других уходит год! Убедитесь на личном опыте, что не бросаем слов не
          ветер!</p>
      </div>
    </div>
  </div>
</section>

<section class="contacts">
  <div class="container">
    <div class="contacts__info">
      <div class="address">
        <?php the_field('adres', 'option') ?>
      </div>
      <div class="data">
        <a href="mailto:<?php the_field('pochta', 'option') ?>"><?php the_field('pochta', 'option') ?></a>
        <a href="tel:<?php the_field('telefon', 'option') ?>"><?php the_field('telefon', 'option') ?></a>
      </div>
    </div>
    <div class="contacts__map">
      <iframe
        src="<?php the_field('ssylka_na_yandeks_kartu', 'option') ?>"
        width="100%" height="485" frameborder="0"></iframe>
    </div>
  </div>
</section>


<section class="projects articles">
  <div class="container">
    <h3 class="title">Актуальные статьи и новости<img
        src="<?php echo get_template_directory_uri() ?>/assets/img/icons/fire-title.svg" alt="fire"></h3>
    <div class="projects__content">
      <div class="projects__content__item">
        <div>
          <a href="#" class="item__img">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/articles/article1.png" alt="projects">
          </a>
        </div>
        <div class="item__data">
          <div class="data__teg">
            <span>Статьи</span>
            <span>Разработка</span>
          </div>
          <div class="data__info">
            <a href="#" class="title">Преимущества Shopify — 10 причин полюбить его</a>
            <p class="desk">1 день назад</p>
          </div>
        </div>
      </div>
      <div class="projects__content__item">
        <div>
          <a href="#" class="item__img">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/articles/article2.png" alt="projects">
          </a>
        </div>
        <div class="item__data">
          <div class="data__teg">
            <span>Статьи</span>
            <span>SMM</span>
          </div>
          <div class="data__info">
            <a href="#" class="title">Одноклассники: как оформить группы?</a>
            <p class="desk">2 дня назад</p>
          </div>
        </div>
      </div>
      <div class="projects__content__item">
        <div>
          <a href="#" class="item__img">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/articles/article3.png" alt="projects">
          </a>
        </div>
        <div class="item__data">
          <div class="data__teg">
            <span>Статьи</span>
            <span>дизайн</span>
          </div>
          <div class="data__info">
            <a href="#" class="title">Что такое дизайн-системы и для чего они нужны?</a>
            <p class="desk">3 октября 2022</p>
          </div>
        </div>
      </div>
    </div>
    <a href="#" class="button">Все статьи</a>
  </div>
</section>



<?php get_footer(); ?>