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
<section class="keys">
    <div class="container">
        <div class="keys__header">
            <div class="keys__header-left">
                <div class="content-area__tags">
                    <?php $post_categories = get_the_terms(get_the_ID(), "keyscat");
                        foreach ($post_categories as $post_category) {
                            echo '<span  href="#" data-id="' . intval($post_category->term_id) . '"  data-link="' . get_category_link($post_category->term_id) . '">' . $post_category->name . '</span>';
                        }; ?>
                </div>
                <div class="content-area__title">
                <?php
                    $image = get_field('ikonka_zagolovka');

                    if( !empty($image) ): ?>
                    <h1 class="h1"><?php the_title(); ?> <img src="<?php echo $image['url']; ?>" alt="title_icon"></h1>
                    <?php endif; ?>
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
        <div class="keys__about">
            <div class="about-project">
            <?php while (have_rows('o_proekte')): the_row();?>
            <?php if( get_row_layout() == 'О проекте' ):?>
                <h2><?php echo the_sub_field('zagolovok'); ?></h2>
                <?php echo the_sub_field('opisanie'); ?>
            <?php endif; ?>
            <?php endwhile; ?>
            </div>
            <div class="about-task">
            <?php while (have_rows('o_proekte')): the_row();?>
            <?php if( get_row_layout() == 'Задачи' ):?>
                <h2><?php echo the_sub_field('zagolovok'); ?></h2>
                <?php echo the_sub_field('opisanie'); ?>
            <?php endif; ?>
            <?php endwhile; ?>
            </div>
        </div>
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
                <?php while (have_rows('Etap')): the_row();?>
                <?php while (have_rows('nazvanie_etapa')): the_row();
                ?>
                    <div class="step-item">
                    <?php echo the_sub_field('nazvanie_etapa'); ?>
                    <span></span>
                        <div class="inner">
                                <?php while (have_rows('Etap')): the_row();?>
                                <?php while (have_rows('nazvanie_etapa')): the_row();
                                ?>
                                <?php while (have_rows('soderzhanie_etapa')): the_row();?>
                                    <div class="inner-descr">
                                    <?php echo get_sub_field('vnutrennee_opisanie'); ?>
                                    </div>
                                <?php endwhile; ?>
                                <?php endwhile; ?>
                                <?php endwhile; ?>
                        </div>
                    </div>
                <?php endwhile; ?>
                <?php endwhile; ?>
            <?php endif; ?>
            <?php endwhile; ?>
                </div>
            </div>
        </div>
        <div class="keys__graph">
            <div class="graph-description">
                <h2>Типографика</h2>
                <?php while (have_rows('tipografika')): the_row();?>
                <?php if( get_row_layout() == 'Описание типографики' ):?>
                    <?php echo the_sub_field('opisanie'); ?>
                <?php endif; ?>
                <?php endwhile; ?>
            </div>
            <div class="graph-images">
            <?php while (have_rows('tipografika')): the_row();?>
            <?php if( get_row_layout() == 'фото' ):?>
            <?php
                $imageOne = get_sub_field('kartinka_sleva');
                $imageTwo = get_sub_field('kartinka_sprava');
                $imageTwoTwo = get_sub_field('vtoraya_kartinka_sprava');
                ?>

                <img src="<?php echo $imageOne['url']; ?>" alt="typography_left">
                <div class="graph-right">
                    <img src="<?php echo $imageTwo['url']; ?>" alt="typography_right">
                    <img src="<?php echo $imageTwoTwo['url']; ?>" alt="typography_right">
                </div>
            <?php endif; ?>
            <?php endwhile; ?>
            </div>
        </div>
        <div class="keys__color">
            <div class="color-description">
                <h2>Цветовая палитра</h2>
                <?php while (have_rows('czvetovaya_palitra')): the_row();?>
                <?php if( get_row_layout() == 'Описание палитры' ):?>
                    <?php echo the_sub_field('opisanie'); ?>
                <?php endif; ?>
                <?php endwhile; ?>
            </div>
            <div class="color-images">
                <?php while (have_rows('czvetovaya_palitra')): the_row();?>
                <?php if( get_row_layout() == 'фото_палитры' ):?>
                    <?php while (have_rows('palitra')): the_row();
                        $image = get_sub_field('foto');
                        $firsthex = get_sub_field('hex-color');
                     ?>
                <div class="item-color">

                        <img src="<?php echo $image['url']; ?>" alt="typography_right">
                        <p class="color-hex">HEX</p>
                        <?php echo $firsthex; ?>
                </div>
                <?php endwhile; ?>
                <?php endif; ?>
                <?php endwhile; ?>
            </div>
        </div>
        <div class="keys__arhitect">
            <div class="arhitect-description">
                <h2>Информационная архитектура</h2>
                <?php while (have_rows('informaczionnaya_arhitektura')): the_row();?>
                <?php if( get_row_layout() == 'Описание архитектуры' ):?>
                    <?php echo the_sub_field('opisanie'); ?>
                <?php endif; ?>
                <?php endwhile; ?>
            </div>
            <div class="arhitect-images">
            <?php while (have_rows('informaczionnaya_arhitektura')): the_row();?>
            <?php if( get_row_layout() == 'архитектура' ):
                $image = get_sub_field('shema_arhitektury');
            ?>
                <img src="<?php echo $image['url']; ?>" alt="typography_right">
            <?php endif; ?>
            <?php endwhile; ?>
            </div>
        </div>
        <div class="keys__pages">
            <?php while (have_rows('opisanie_stranicz')): the_row();?>
            <?php if( get_row_layout() == 'Часть страницы' ):
                $image = get_sub_field('izobrazhenie');
            ?>
            <div class="page-description">
                <h2>
                    <?php the_sub_field('zagolovok'); ?>
                </h2>
                    <?php the_sub_field('opisanie'); ?>
            </div>
            <div class="page-image">
				<img src="<?php echo $image['url']; ?>" alt="page_image" />
            </div>
            <?php endif; ?>
            <?php endwhile; ?>
            <?php while (have_rows('opisanie_stranicz')): the_row();?>
            <?php if( get_row_layout() == 'многовариантивные страницы' ):
                $image = get_sub_field('izobrazhenie');
            ?>
            <div class="page-more">
            <h2>
                    <?php the_sub_field('zagolovok'); ?>
                </h2>
                    <?php the_sub_field('opisanie'); ?>
            </div>

            <div class="page-image__more">
            <?php while (have_rows('galereya')): the_row();
                        $image = get_sub_field('foto');
                     ?>
				<img src="<?php echo $image['url']; ?>" alt="page_image-more" />
            <?php endwhile; ?>
            </div>
            <?php endif; ?>
            <?php endwhile; ?>
        </div>
        <div class="keys__seo">
            <h2>SEO оптимизация</h2>
            <?php the_field('seo_optimizacziya'); ?>
        </div>
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
                    <div class="over-left">
                        <p class="front"><span>Фронтэнд</span></p>
                        <p class="front"><?php the_sub_field('frontend'); ?></p>
                    </div>
                    <div class="over-right">
                        <p class="back"><span>Бэкэнд</span></p>
                        <p class="back"><?php the_sub_field('bekend'); ?></p>
                    </div>
                </div>
                <div class="list-under">
                    <div class="under-left">
                        <p class="design"><span>Дизайн</span></p>
                        <p class="design"><?php the_sub_field('dizajn'); ?></p>
                    </div>
                    <div class="under-right">
                        <p class="inter"><span>Интеграции</span></span></p>
                        <p class="inter"><?php the_sub_field('integracziya'); ?></span></p>
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
                'post_type'=>'keys',
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
                            <div class="data__tag">
                                    <?php $post_categories = get_the_category($wpb_all_query->the_post);
                                        foreach ($post_categories as $post_category) {
                                            echo '<span  href="#" data-id="' . intval($post_category->term_id) . '"  data-link="' . get_category_link($post_category->term_id) . '">' . $post_category->name . '</span>';
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
        <button class="button button-more" id="blogs-more">Все проекты</button>
    </div>
</section>
<?php get_footer(); ?>
