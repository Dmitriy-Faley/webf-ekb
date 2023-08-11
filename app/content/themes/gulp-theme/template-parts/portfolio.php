<?php
/**
*Template name: Портфолио
*/
get_header();
?>


<section class="projects portfolio">
    <div class="container">
        <h3 class="title portfolio__title">Портфолио</h3>
        <div class="portfolio__tags">
            <ul class="keys__list">
                <?php
                    $category_all = get_category(27, "portfoliocat");
                    echo '<li href="#"><a class="active vse" data-id="' . intval($category_all->term_id) . '"  data-link="' . get_category_link($category_all->term_id) . '">Все</a></li>';
                    $categories = get_categories(array('taxonomy' => 'portfoliocat', 'hide_empty' => 0, 'hierarchical' => 1, 'child_of' => '27'));
                    foreach ($categories as $category) {
                        echo '<li href="#"><a class="' . $category->slug . '" data-id="' . intval($category->term_id) . '"  data-link="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a></li>';
                ?>

                <?php };?>
            </ul>
        </div>
        <div class="projects__content">
        <?php
            // запрос
            $wpb_all_query = new WP_Query(array(
                'tax_query' => array(
                    array(
                        'taxonomy' => 'portfoliocat',
                        'field'    => 'id',
                        'terms'    => '27'
                    )
                ),
                'post_type'=>'portfolio', 
                'post_status'=>'publish', 
                'posts_per_page'=>-1
    )); ?>
            <?php if ( $wpb_all_query->have_posts() ) : ?>
            <ul class="card-list">
                <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
                    <div class="projects__content__item <?php $post_categories = get_the_terms(get_the_ID(), "portfoliocat");
                                   foreach ($post_categories as $post_category) {
                                      echo ' '. $post_category->slug.' ';
                                    }; ?>" style="position: static;">
                        <div>
                            <a href="<?php the_permalink(); ?>" class="item__img">
                                <?php the_post_thumbnail(); ?>
                            </a>
                        </div>
                        <div class="item__data">
                            <div class="data__teg">
                                   <?php $post_categories = get_the_terms(get_the_ID(), "portfoliocat");
                                   foreach ($post_categories as $post_category) {
                                       echo '<span  href="#" data-id="' . intval($post_category->term_id) . '"  data-link="' . get_category_link($post_category->term_id) . '">' . $post_category->name . '</span>';
                                    }; ?>
                            </div>
                            <div class="data__info">
                                <a href="<?php the_permalink(); ?>" class="title"><?php the_title(); ?></a>
                                <p class="desk">Сфера проекта</p>
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
        <button class="button button-more" id="portfolio-more">Показать еще</button>
    </div>
</section>


<?php get_footer(); ?>


<script>
    $(document).ready(function () {
        let colvoHelpfulItem = document.querySelectorAll('.portfolio .projects__content .projects__content__item').length;

        if (colvoHelpfulItem <= 9) {
            $('#portfolio-more').addClass('hidden');
        }

        $('#portfolio-more').on('click', function () {
            $('.portfolio .projects__content .projects__content__item').addClass('active_cards');
            $(this).addClass('hidden');
        });
    });

    const links = [...document.querySelectorAll(".portfolio__tags a")];
    const postsTags = [...document.querySelectorAll(".data__teg span")];
    const cards = [...document.querySelectorAll(".projects__content__item")];
    const listOfCards = document.querySelector(".card-list");
    const height = listOfCards.style.height;
    console.log(listOfCards);

    links.forEach(el => {
        el.addEventListener('click', (e) => {
            links.forEach(el => {
                el.classList.remove('active');
            })

            e.target.classList.add('active');
        cards.forEach(card => {
                postsTags.forEach(itemTag => {
                    if(card.classList.contains(el.classList[0])) {
                        card.classList.remove('hide');
                        card.classList.remove('anima');
                        card.style.position = 'static';
                    } else {
                        card.classList.add('anima');
                        card.classList.add('hide');
                    }
                    if(el.classList.contains('vse')) {
                        card.classList.remove('hide');
                        card.classList.remove('anima');
                        card.style.position = 'static !important';
                    }

                    if(card.classList.contains('anima')) {
                        card.style.position = 'absolute';
                    } else {
                        card.style.position = 'static';
                    }
                });
            })
        });
    });
</script>