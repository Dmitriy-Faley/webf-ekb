<?php
/**
*Template name: Шаблон кейса
*Template Post Type: keys
*/
get_header();
?>
<style type="text/css">
body {
    background: <?php the_field('czvet_fona'); ?> !important;
}
</style>

<?php if( get_field('chernyj_fon') ): ?>

<script>
    document.body.classList.add('black');
</script>

<?php endif; ?>

<section class="keys">
    <div class="breadcrumbs"><?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?></div>
    <div class="container">
        <div class="keys__header">
            <div class="keys__header-left">
                <div class="content-area__tags">
                    <?php $post_categories = get_the_terms(get_the_ID(), "keyscat");
                        foreach ($post_categories as $post_category) {
                            echo '<span  href="#" data-id="' . intval($post_category->term_id) . '">' . $post_category->name . '</span>';
                        }; ?>
                </div>
                <div class="content-area__title">
                    <h1 class="h1"><?php the_title(); ?>
                    <?php
                        $image = get_field('ikonka_zagolovka');

                    if( !empty($image) ): ?>
                    <img src="<?php echo $image['url']; ?>" alt="title_icon">
                    <?php endif; ?>

                </h1>
                </div>
                <div class="content-area__info">
                <?php while (have_rows('shapka_kejsa')): the_row();
                    ?>
                <?php if( get_row_layout() == 'Описание' ):
                    ?>
                    <?php the_sub_field('opisanie'); ?>
                    <?php endif; ?>
                    <?php endwhile; ?>
                    <div class="info-list">
                    <?php while (have_rows('shapka_kejsa')): the_row();
                    ?>
                    <?php if( get_row_layout() == 'Описание' ):
                        ?>
                        <p class="info-item"><span>Клиент:</span> <?php the_sub_field('klient'); ?></p>
                        <p class="info-item"><span>Сфера проекта:</span> <?php the_sub_field('sfera_proekta'); ?></p>
                        <p class="info-item"><span>Срок реализации:</span> <?php echo the_sub_field('srok_realizaczii'); ?></p>
                    <?php endif; ?>
                    <?php endwhile; ?>
                    </div>
                    <div class="info-link">
                    <?php while (have_rows('shapka_kejsa')): the_row();
                    ?>
                    <?php if( get_row_layout() == 'Описание' ):
                        ?>
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/Group.svg" alt="link_icon">
                        <a href="<?php echo the_sub_field('ssylka_na_straniczu'); ?>">Посетить сайт</a>
                        <p></p>
                        <?php endif; ?>
                    <?php endwhile; ?>
                    </div>
                </div>
            </div>
            <div class="keys__header-right">
                <div class="keys__header-img">
                    <?php the_post_thumbnail(); ?>
                </div>
            </div>
        </div>
        <?php while (have_rows('o_proekte')): the_row();?>
        <div class="keys__about">
            <div class="about-project">
                <?php if( get_row_layout() == 'О проекте' ):?>
                    <h2><?php echo the_sub_field('zagolovok'); ?></h2>
                    <?php echo the_sub_field('opisanie'); ?>
                <?php endif; ?>
            </div>
        </div>
        <?php endwhile; ?>

        <?php if (have_rows('posty')):?>
        <div class="keys__posts">
            <h2>Посты</h2>
            <div class="posts-foto_double">
                <?php while (have_rows('posty')): the_row();?>
                <?php if( get_row_layout() == 'пара_картинок' ):?>
                    <?php while (have_rows('foto')): the_row();
                            $image = get_sub_field('kartinki');
                            $color = get_sub_field('czvet_fona');
                    ?>
                    <div class="double-item" style="background-color: <?php echo $color; ?>">
                        <img src="<?php echo $image['url']; ?>" alt="post-banner">
                    </div>
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php endwhile; ?>
            </div>
            <?php while (have_rows('posty')): the_row();?>
                <?php if( get_row_layout() == 'галерея' ):
                    $color = get_sub_field('czvet_fona');?>
            <div class="posts-gallery" style="background-color: <?php echo $color; ?>">
                    <?php while (have_rows('galereya_kartinok')): the_row();
                            $image = get_sub_field('foto');
                    ?>
                        <img src="<?php echo $image['url']; ?>" alt="post-galery">
                    <?php endwhile; ?>
            </div>
                <?php endif; ?>
            <?php endwhile; ?>
            <?php while (have_rows('posty')): the_row();?>
                <?php if( get_row_layout() == 'рекламное_фото' ):
                     $image = get_sub_field('foto');
                     $color = get_sub_field('czvet_fona');
            ?>
            <div class="posts-marketing" style="background-color: <?php echo $color; ?>">
                        <img src="<?php echo $image['url']; ?>" alt="post-marketing">
                <?php endif; ?>
                <?php endwhile; ?>
            </div>
            <?php while (have_rows('posty')): the_row();?>
                <?php if( get_row_layout() == 'скриншоты' ):
                    $color =  get_sub_field('czvet_fona');
                ?>
            <div class="posts-screen <?php echo the_sub_field('klass'); ?>" style="background-color: <?php echo $color; ?>">
                <?php while (have_rows('ekrany')): the_row();
                                $image = get_sub_field('foto');
                    ?>
                    <img src="<?php echo $image['url']; ?>" alt="post-screen">
                    <?php endwhile; ?>
            </div>
                <?php endif; ?>
            <?php endwhile; ?>
            <?php while (have_rows('posty')): the_row();?>
                <?php if( get_row_layout() == 'слипшийся_коллаж' ):
                    $color =  get_sub_field('czvet_fona');
                ?>
            <div class="posts-collage <?php echo the_sub_field('klass'); ?>" style="background-color: <?php echo $color; ?>">
                <?php while (have_rows('galereya')): the_row();
                                $image = get_sub_field('foto');
                    ?>
                    <img src="<?php echo $image['url']; ?>" alt="post-collage">
                    <?php endwhile; ?>
            </div>
                <?php endif; ?>
            <?php endwhile; ?>

            <div class="posts-foto_end">
            <?php while (have_rows('posty')): the_row();?>
                <?php if( get_row_layout() == 'завершающее_фото' ):
                    $image = get_sub_field('foto');
                    $logo = get_sub_field('logo');
                ?>
                    <div class="foto-first">
                        <img src="<?php echo $image['url']; ?>" alt="pet-foto">
                        <div class="foto-logo">
                            <img src="<?php echo $logo['url']; ?>" alt="pet-logo">
                        </div>
                    </div>
                <?php endif; ?>
            <?php endwhile; ?>
            </div>
        </div>
        <?php endif; ?>

        <?php if (have_rows('bannery')):?>
        <div class="keys__banner">
            <h2>Рекламные баннеры</h2>
            <div class="banner-wrapper">
            <?php while (have_rows('bannery')): the_row();?>
            <?php if( get_row_layout() == 'строка_баннеров' ):?>
                <?php while (have_rows('galereya')): the_row();
                        $banner = get_sub_field('foto');
                ?>
                <img src="<?php echo $banner['url']; ?>" alt="banner">
                <?php endwhile; ?>
            <?php endif; ?>
            <?php endwhile; ?>
            </div>
        </div>
        <?php endif; ?>

        <?php if (have_rows('etapy_razrabotki')): ?>
        <div class="keys__steps">
            <h2>Этапы разработки</h2>
            <div class="steps-wrapper">
            <?php while (have_rows('etapy_razrabotki')): the_row();?>
            <?php if( get_row_layout() == 'Описание этапов' ):?>
                <?php echo the_sub_field('opisaniie'); ?>
            <?php endif; ?>
            <?php endwhile; ?>

                <div class="steps-accordion">
            <?php while (have_rows('etapy_razrabotki')): the_row();?>
            <?php if( get_row_layout() == 'Аккордион этапов' ):?>
                <?php while (have_rows('Etap')): the_row();
                        $name = get_sub_field('nazvanie_etapa');
                ?>
                <?php while (have_rows('soderzhanie_etapa')): the_row();
                        $entry = get_sub_field('vnutrennee_opisanie');
                ?>
                    <div class="step-item">
                        <p class="toggle"><?php echo $name; ?><span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19" fill="none">
                                <rect x="9" width="1" height="19" rx="0.5" fill="#0E0F11"/>
                                <rect x="19" y="9" width="1" height="19" rx="0.5" transform="rotate(90 19 9)" fill="#0E0F11"/>
                            </svg>
                        </span></p>
                        <div class="inner">
                            <?php echo $entry; ?>
                        </div>
                    </div>
                <?php endwhile; ?>
                <?php endwhile; ?>
            <?php endif; ?>
            <?php endwhile; ?>
                </div>
            </div>
        </div>
        <?php endif; ?>

        <?php if (have_rows('tipografika')): the_row();?>
        <div class="keys__graph">
            <div class="graph-description">
                <h2>Типографика</h2>
                <?php while (have_rows('tipografika')): the_row();?>
                <?php if( get_row_layout() == 'Описание типографики' ):?>
                    <?php echo the_sub_field('opisanie'); ?>
                <?php endif; ?>
                <?php endwhile; ?>
            </div>
            <?php while (have_rows('tipografika')): the_row();?>
            <?php if( get_row_layout() == 'фото' ):
                $imageOne = get_sub_field('kartinka_sleva');
                ?>
            <div class="graph-images">
                <img src="<?php echo $imageOne['url']; ?>" alt="typography_left">
                <div class="graph-right">
                    <?php while (have_rows('kartinki_sprava')): the_row();
                        $image = get_sub_field('izobrazhenie');
                    ?>
                        <img src="<?php echo $image['url']; ?>" alt="" />
                    <?php endwhile; ?>
                </div>
            </div>
            <?php endif; ?>
            <?php endwhile; ?>
        </div>
        <?php endif; ?>

        <?php if(have_rows('czvetovaya_palitra')):?>
        <div class="keys__color">
            <div class="color-description">
                <h2>Цветовая палитра</h2>
                <?php while (have_rows('czvetovaya_palitra')): the_row();?>
                <?php if( get_row_layout() == 'Описание палитры' ):?>
                    <?php echo the_sub_field('opisanie'); ?>
                <?php endif; ?>
                <?php endwhile; ?>
            </div>
            <?php while (have_rows('czvetovaya_palitra')): the_row();?>
            <?php if( get_row_layout() == 'фото_палитры' ):?>
            <div class="color-images">
                    <?php while (have_rows('palitra')): the_row();
                        $image = get_sub_field('foto');
                        $hex = get_sub_field('hex');
                        $firsthex = get_sub_field('hex-color');
                     ?>
                <div class="item-color">

                        <img src="<?php echo $image['url']; ?>" alt="colors_right">
                        <p class="color-hex"><?php echo $hex; ?></p>
                        <p><?php echo $firsthex; ?></p>
                </div>
                <?php endwhile; ?>
            </div>
            <?php endif; ?>
            <?php endwhile; ?>
            <?php while (have_rows('czvetovaya_palitra')): the_row();?>
                <?php if( get_row_layout() == 'большое_фото' ):
                        $image = get_sub_field('gradient');?>
                        <div class="color_dop-after">
                            <img src="<?php echo $image['url']; ?>" alt="colors_gradient">
                        </div>
                <?php endif; ?>
                <?php endwhile; ?>
        </div>
        <?php endif; ?>

        <?php if (have_rows('ikonki')):?>
        <div class="keys__icons">
            <div class="icons-description">
                <h2>Иконки</h2>
                <?php while (have_rows('ikonki')): the_row();?>
                    <?php if( get_row_layout() == 'строка_иконок' ):?>
                        <?php echo the_sub_field('opisanie_ikonok'); ?>
                    <?php endif; ?>
                    <?php endwhile; ?>
            </div>
            <div class="icons-wrapper">
            <?php while (have_rows('ikonki')): the_row();?>
            <?php if( get_row_layout() == 'строка_иконок' ):?>
                <?php while (have_rows('galereya')): the_row();
                        $banner = get_sub_field('foto');
                ?>
                <img src="<?php echo $banner['url']; ?>" alt="banner">
                <?php endwhile; ?>
            <?php endif; ?>
            <?php endwhile; ?>
            </div>
        </div>
        <?php endif; ?>

        <?php if(have_rows('informaczionnaya_arhitektura')):?>
        <div class="keys__arhitect">
            <div class="arhitect-description">
            <?php while (have_rows('informaczionnaya_arhitektura')): the_row();?>
                <?php if( get_row_layout() == 'Описание архитектуры' ):?>
                <h2><?php echo the_sub_field('zagolovok'); ?></h2>
                    <?php echo the_sub_field('opisanie'); ?>
                <?php endif; ?>
                <?php endwhile; ?>
            </div>
            <div class="arhitect-images">
            <?php while (have_rows('informaczionnaya_arhitektura')): the_row();?>
            <?php if( get_row_layout() == 'архитектура' ):
                $image = get_sub_field('shema_arhitektury');
            ?>
                <img src="<?php echo $image['url']; ?>" alt="architect">
            <?php endif; ?>
            <?php endwhile; ?>
            </div>
            <?php while (have_rows('informaczionnaya_arhitektura')): the_row();?>
                <?php if( get_row_layout() == 'большое_фото' ):
                        $image = get_sub_field('foto');?>
                        <div class="architect_dop-after">
                            <img src="<?php echo $image['url']; ?>" alt="colors_gradient">
                        </div>
                <?php endif; ?>
            <?php endwhile; ?>
        </div>
        <?php endif; ?>

        <div class="keys__pages">
            <?php while (have_rows('opisanie_stranicz')): the_row();?>
            <?php if( get_row_layout() == 'Часть страницы' ): ?>
            <div class="page-description">
                <h2>
                    <?php the_sub_field('zagolovok'); ?>
                </h2>
                    <?php the_sub_field('opisanie'); ?>
            </div>
            <div class="page-image">
                <?php while (have_rows('izobrazhenie')): the_row();
                    $image = get_sub_field('kartinka');
                 ?>
				<img src="<?php echo $image['url']; ?>" alt="page_image" />
                <?php endwhile; ?>
                <div class="page-image_more dop <?php the_sub_field('klass'); ?>">
                    <?php while (have_rows('dop_izobrazheniya')): the_row();
                                $image = get_sub_field('foto');
                            ?>
                        <img src="<?php echo $image['url']; ?>" class="<?php the_sub_field('klass'); ?>" alt="page_image-more" />
                    <?php endwhile; ?>
                </div>
            </div>
            <?php endif; ?>
            <?php endwhile; ?>

            <?php while (have_rows('opisanie_stranicz')): the_row();?>
            <?php if( get_row_layout() == 'многовариантивные страницы' ):
                $bigFoto = get_sub_field('glavnoe_foto')
                ?>
            <div class="page-more">
                <h2><?php the_sub_field('zagolovok'); ?> </h2>
                <?php the_sub_field('opisanie'); ?>
                        <?php if(!empty($bigFoto)):?>
                            <img src="<?php echo $bigFoto['url']; ?>" alt="page_image-more" />
                        <?php endif; ?>
            </div>
            <div class="page-image__more <?php the_sub_field('klass'); ?>">
            <?php while (have_rows('galereya')): the_row();
                        $image = get_sub_field('foto');
                     ?>
				<img src="<?php echo $image['url']; ?>" alt="page_image-more" />
            <?php endwhile; ?>
            </div>
            <?php endif; ?>
            <?php endwhile; ?>

            <?php while (have_rows('opisanie_stranicz')): the_row();?>
            <?php if( get_row_layout() == 'адаптивы' ):?>
                <div class="page-responsive">
                    <h2>Адаптивы</h2>
                    <div class="responsive-slider <?php the_sub_field('klass'); ?>">
                    <?php while (have_rows('foto_adaptivov')): the_row();
                                            $image = get_sub_field('foto');
                                            $color = get_sub_field('czvet_fona');
                                        ?>
                                    <div class="responsive-color" style="background-color: <?php echo $color; ?>">
                                        <img src="<?php echo $image['url']; ?>" alt="page_image-more"/>
                                    </div>
                                <?php endwhile; ?>
                    </div>
                    <?php while (have_rows('foto_dlya_adaptiva')): the_row();?>
                        <?php if ( get_row_layout() == 'картинка'):
                        $responsive = get_sub_field('kartinka');
                        ?>
                            <img src="<?php echo $responsive['url']; ?>" alt="<?php echo $responsive['alt']; ?>" class="responsive"/>
                        <?php endif; ?>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
            <?php endwhile; ?>

        </div>

        <?php if (have_rows('seo_razrabotka')):?>
        <div class="keys__seo">
        <?php while (have_rows('seo_razrabotka')): the_row();?>
                <?php if( get_row_layout() == 'SEO' ):?>
                    <h2><?php echo the_sub_field('zagolovok'); ?></h2>
                    <?php echo the_sub_field('opisanie'); ?>
                <?php endif; ?>
                <?php endwhile; ?>
        </div>
        <?php endif; ?>

        <div class="keys__tech">
            <div class="tech-descr">
                <h2>Используемые технологии</h2>
                <div class="tech-items">
                <?php while (have_rows('ispolzuemye_tehnologii')): the_row();?>
                <?php if( get_row_layout() == 'технологии' ): ?>
                    <?php while (have_rows('galereya')): the_row();
                        $image = get_sub_field('ikonka');
                     ?>
                    <div><img src="<?php echo $image['url']; ?>" alt=""></div>
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php endwhile; ?>
                </div>
            </div>
            <div class="tech-list">
                <?php while (have_rows('ispolzuemye_tehnologii')): the_row();?>
                <?php if( get_row_layout() == 'схема технологий' ): ?>
                <div class="list-over">
                    <div class="over-left <?php if(empty(get_sub_field('frontend'))): ?>
                            none
                        <?php endif; ?>
                        ">
                        <p class="front"><span>Фронтэнд</span></p>
                        <p class="front"><?php the_sub_field('frontend'); ?></p>
                    </div>

                    <div class="over-right <?php if(empty(get_sub_field('bekend'))): ?>
                            none
                        <?php endif; ?>
                        ">
                        <p class="back"><span>Бэкэнд</span></p>
                        <p class="back"><?php the_sub_field('bekend'); ?></p>
                    </div>
                </div>
                <div class="list-under">
                    <div class="under-left <?php if(empty(get_sub_field('dizajn'))): ?>
                            none
                        <?php endif; ?>
                        ">
                        <p class="design"><span>Дизайн</span></p>
                        <p class="design"><?php the_sub_field('dizajn'); ?></p>
                    </div>
                    <div class="under-right <?php if(empty(get_sub_field('integracziya'))): ?>
                            none
                        <?php endif; ?>
                        ">
                        <p class="inter"><span>Интеграции</span></p>
                        <p class="inter"><?php the_sub_field('integracziya'); ?></p>
                    </div>
                </div>
                <?php endif; ?>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
</section>
<section class="keys__more">
    <div class="container">
        <h2>Другие наши работы</h2>
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
            ));?>

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
                            <div class="data__tag">
                            <?php $post_categories = get_the_terms(get_the_ID(), "keyscat");
                                   foreach ($post_categories as $post_category) {
                                       echo '<span  href="#" data-id="' . intval($post_category->term_id) . '">' . $post_category->name . '</span>';
                                    }; ?>
                            </div>
                            <div class="data__info">
                            <a href="<?php the_permalink(); ?>" class="title"><?php the_title(); ?></a>
                                        <p class="desk">
                                        <?php while (have_rows('shapka_kejsa')): the_row();
                                        ?>
                                        <?php if( get_row_layout() == 'Описание' ):
                                            ?>
                                        <?php the_sub_field('klient'); ?>
                                        <?php endif; ?>
                                        <?php endwhile; ?>
                                        </p>
                            </div>
                        </div>
                    </div>
            <?php endwhile; ?>
            </ul>
                <?php wp_reset_postdata(); ?>
                <?php endif; ?>
        </div>
        <a href="/portfolio/" class="button button-more">Все проекты</a>
    </div>
</section>
<?php get_footer(); ?>

<script>

    const activeMenuItem = document.querySelector('#menu-item-49');
    activeMenuItem.classList.add('current-menu-item');
    activeMenuItem.classList.add('current_page_item');

    const parentImage = document.querySelectorAll('.color-images')[0];
    const largeImage = parentImage.querySelectorAll('.item-color')[2];
    largeImage.classList.add('large');


    const accordionItem = document.querySelectorAll('.step-item');

    accordionItem.forEach(item => {
        const button = item.querySelector('p>span');
        const field = item.querySelector('.inner');
        button.addEventListener('click', (e) => {
            if(button.classList.contains('open')){
                field.classList.remove('vis');
                field.classList.remove('open');
                setTimeout(() => {
                    button.classList.remove('open');
                }, 100)
            } else {
                button.classList.add('open');
                field.classList.add('open');
                setTimeout(() => {
                    field.classList.add('vis');
                }, 100)
            }
        })
    })

    const pageMore = document.querySelector('.page-more>h2');
    if(pageMore && pageMore.innerHTML === ' ') {
        pageMore.style.display = 'none';
        pageMore.style.margin = '0';
    }

    const pageImageMore = document.querySelectorAll('.page-image__more');
    const pageImages = document.querySelectorAll('.page-image__more>img');
    const typographRight = document.querySelector('.graph-right');
    const typographLeft = document.querySelector('.graph-images>img');

    pageImageMore.forEach(page => {
        if(page.childNodes.length === 5) {
            page.classList.add('double');
        }
    })

    if(typographRight.childNodes.length === 3) {
        typographLeft.classList.add('double');
    }

    const moreButton = document.querySelector('#keys-more');
    moreButton.addEventListener('click', (e) => {
        document.querySelector('#menu-item-49 a').click();
    });
</script>
