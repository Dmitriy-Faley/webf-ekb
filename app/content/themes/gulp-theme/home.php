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
        <img class="icon one" src="<?php echo get_template_directory_uri() ?>/assets/img/icons/about1.svg" alt="icon">
        <img class="icon two" src="<?php echo get_template_directory_uri() ?>/assets/img/icons/super.svg" alt="icon">
        <img class="icon three" src="<?php echo get_template_directory_uri() ?>/assets/img/icons/about2.svg" alt="icon">
        <img class="icon four" src="<?php echo get_template_directory_uri() ?>/assets/img/icons/about3.svg" alt="icon">
      </div>
    </div>
  </div>
</section>



<!-- <section class="projects">
  <div class="container">
    <h3 class="title">Недавние проекты нашей компании<img
        src="<?php echo get_template_directory_uri() ?>/assets/img/icons/fire-title.svg" alt="fire"></h3>
    <div class="projects__content">
    <?php
            // запрос
            $wpb_all_query = new WP_Query(array(
                'tax_query' => array(
                    array(
                        'taxonomy' => 'keyscat',
                        'field'    => 'id',
                        'terms'    => '28'
                    )
                ),
                'post_type'=>'keys', 
                'post_status'=>'publish', 
                'posts_per_page'=>3,
                'order' => 'DESC'
    )); ?>
            <?php if ( $wpb_all_query->have_posts() ) : ?>
            <ul class="card-list">
                <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
                    <div class="projects__content__item <?php $post_categories = get_the_terms(get_the_ID(), "keyscat");
                                   foreach ($post_categories as $post_category) {
                                      echo ' '. $post_category->slug.' ';
                                    }; ?>">
                        <div>
                            <a href="<?php the_permalink(); ?>" class="item__img">
                                <?php the_post_thumbnail(); ?>
                            </a>
                        </div>
                        <div class="item__data">
                            <div class="data__teg">
                                   <?php $post_categories = get_the_terms(get_the_ID(), "keyscat");
                                   foreach ($post_categories as $post_category) {
                                       echo '<span  href="#" data-id="' . intval($post_category->term_id) . '">' . $post_category->name . '</span>';
                                    }; ?>
                            </div>
                            <div class="data__info">
                                <a href="<?php the_permalink(); ?>" class="title"><?php the_title(); ?></a>
                                <p class="desk"><?php while (have_rows('shapka_kejsa')): the_row();
                                        ?>
                                        <?php if( get_row_layout() == 'Описание' ):
                                            ?>
                                        <?php the_sub_field('klient'); ?>
                                        <?php endif; ?>
                                        <?php endwhile; ?></p>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </ul>
                 <?php wp_reset_postdata(); ?> 
            <?php else : ?>
                <p><?php _e( 'Извините, нет кейсов, соответствуюших Вашему запросу.' ); ?></p>
            <?php endif; ?>
    </div>
    <a href="/portfolio/" class="button">Все проекты</a>
  </div>
</section>  -->


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
          <div class="slider-wrapper">
            <?php
                // запрос
                $wpb_all_query = get_pages( [
                  'sort_order'   => 'ASC',
                  'sort_column'  => 'post_title',
                  'hierarchical' => 0,
                  'exclude'      => '',
                  'include'      => '',
                  'meta_key'     => 'otobrazhat_na_glavnoj',
                  'meta_value'   => 1,
                  'authors'      => '',
                  'exclude_tree' => '',
                  'number'       => '',
                  'offset'       => 0,
                  'post_type'    => 'page',
                  'posts_per_page'  => 10,
                  'post_status'  => 'publish',
                ] ); ?>
            <div class="swiper-wrapper container">
              <?php foreach( $wpb_all_query as $post ){ ?>
                  <div class="swiper-slide">
                    <div class="services__item">
                      <?php the_post_thumbnail(); ?>
                      <p class="name"><a href="<?php echo the_permalink() ; ?>"><?php the_title(); ?></a></p>
                      <p class="desk"><?php the_field('opisanie_dlya_kartochki'); ?></p>
                    </div>
                  </div>
                <?php } ?>
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
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/review3.png" alt="review">
          <div>
            <p class="name">Александр Бондарев</p>
            <p class="job">Владелец интернет-магазина</p>
          </div>
        </div>
        <div class="item__text">
        Сотрудничал с компанией в рамках разработки интернет-магазина. Хочу отметить высокий профессионализм и внимательное отношение к моим потребностям. Специалисты выслушали все мои пожелания к сайту. Предложили в том числе свои идеи. Весь процесс разработки сайта прошел гладко, команда, которая работала со мной, постоянно была на связи и предоставляла отчеты выполненных работ. Они действительно понимают, как сделать сайт, который привлечет посетителей и увеличит конверсию.
        </div>
      </div>
      <div class="reviews__item">
        <div class="item__info">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/review2.png" alt="review">
          <div>
            <p class="name">Екатерина Янко</p>
            <p class="job">Владелец интернет-магазина</p>
          </div>
        </div>
        <div class="item__text">
        Хочу выразить огромную благодарность команде за их профессионализм, творческий подход и отличную работу. Я с уверенностью рекомендую эту компанию всем, кто ищет надежного партнера для создания веб-проектов.
        </div>
      </div>
      <div class="reviews__item">
        <div class="item__info">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/review4.png" alt="review">
          <div>
            <p class="name">Анатолий Терешко</p>
            <p class="job">Маркетолог</p>
          </div>
        </div>
        <div class="item__text">
        Обращался за продвижением сайта в Веб Фокус и ребята превзошли все мои ожидания. Они не только повысили видимость в поисковых системах, но и создавали оптимизированный и качественный контент, который очень хорошо отработал в моей нише. Спасибо за вашу отличную работу и профессионализм.
        </div>
      </div>
      <div class="reviews__item">
        <div class="item__info">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/review1.png" alt="review">
          <div>
            <p class="name">Мария Новикова</p>
            <p class="job">Владелец интернет-магазина</p>
          </div>
        </div>
        <div class="item__text">
        Выражаю свою благодарность специалистам компании Веб Фокус, которые работали над моим проектом. От сотрудничества остались крайне положительные эмоции, все работы делали в срок и предоставляли подробные отчеты. Дополнительное обучили работе с сайтом, как что-то поменять, редактировать. Порадовала и базовая оптимизация, сайт хорошо ранжируется и без дополнительного продвижения.
        </div>
      </div>
      <div class="reviews__item">
        <div class="item__info">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/review5.png" alt="review">
          <div>
            <p class="name">Михаил Наумчик</p>
            <p class="job">Маркетолог</p>
          </div>
        </div>
        <div class="item__text">
        Хочу поблагодарить студию Веб Фокус за первоклассное продвижение моего сайта юридических услуг. Специалисты берутся за проекты в любой нише и любой сложности. Очень порадовал факт, что у компании есть юридические копирайтеры. Не пришлось дополнительно искать исполнителей по доработкам на сайт. Сделали абсолютно все необходимые работы под ключ.
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
    <!-- <div class="contacts__map">
      <div class="wrap-map" id="a5">
            <div class="map" id="map">
                <div class="map_inner">
                    <picture>
                        <source srcset="<?php echo get_template_directory_uri()?>/assets/img/map.webp" type="image/webp">
                        <img alt="Карта" class="lozad" data-src="<?php echo get_template_directory_uri()?>/assets/img/map.jpg">
                    </picture>
                </div>
            </div>
      </div>
    </div> -->
    <div class="contacts__map">
      <div id="map1" class="map"></div>
    </div>
  </div>
</section>


<section class="projects articles">
  <div class="container">
    <h3 class="title">Актуальные статьи и новости<img
        src="<?php echo get_template_directory_uri() ?>/assets/img/icons/fire-title.svg" alt="fire"></h3>
    <div class="projects__content">
    <?php
            // запрос
            $wpb_all_query = new WP_Query(array(
                'post_type'=>'post', 
                'post_status'=>'publish', 
                'posts_per_page'=>3, 
                'order' => 'DESC')); 
            ?>

            <?php if ( $wpb_all_query->have_posts() ) : ?>
            <ul class="card-list">
                <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
                
              <div class="projects__content__item <?php $post_categories = get_the_category($wpb_all_query->the_post);
                  foreach ($post_categories as $post_category) {
                      echo ' '. $post_category->slug.' ';
                      }; ?>">
                <div>
                  <a href="<?php the_permalink(); ?>" class="item__img">
                      <?php the_post_thumbnail(); ?>
                  </a>
                </div>
                <div class="item__data">
                  <div class="data__teg">
                    <?php $post_categories = get_the_category($wpb_all_query->the_post);
                      foreach ($post_categories as $post_category) {
                          echo '<span  href="#" data-id="' . intval($post_category->term_id) . '">' . $post_category->name . '</span>';
                      }; ?>
                  </div>
                  <div class="data__info">
                    <a href="<?php the_permalink(); ?>" class="title"><?php the_title(); ?></a>
                    <p class="desk"><?php echo get_the_date()?></p>
                  </div>
                </div>
              </div>
              <?php endwhile; ?>
              </ul>
                <?php wp_reset_postdata(); ?>
                <?php endif; ?>
    </div>
    <a href="/blog/" class="button">Все статьи</a>
  </div>
</section>



<?php get_footer(); ?>



<script>
  function get_vw() {
    return Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
  }

  var current = $(window).scrollTop();
  var brands_title = $(".strip .text");

  $(window).on("scroll", function (event) {
    current = $(window).scrollTop();

    if(brands_title.offset() !== 'undefined') {
      brands_title_top = brands_title.offset().top;
      brands_title_diff = current - brands_title_top + 100;
      brands_title_newPosition =
        (get_vw() - brands_title.outerWidth()) / 2 + brands_title_diff;

      brands_title.stop().css({
        left: brands_title_newPosition + "px",
      });
    } else {
      return;
    }
  });

  var service = $(".swiper-wrapper");

  $(window).on("scroll", function (event) {
    let current = $(window).scrollTop();

    service_top = service.offset().top;
    service_diff = current - service_top + 100;
    service_newPosition =
      (get_vw() - service.outerWidth()) / 2 + service_diff;

    service.stop().css({
      right: service_newPosition + "px",
    });
  });
</script>