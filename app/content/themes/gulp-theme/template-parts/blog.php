<?php
/**
*Template name: Блог
*/
get_header();
?>

<section class="projects blog">
    <div class="container">
        <div class="breadcrumbs"><?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?></div>
        <h1 class="title blog__title"><?php the_title(); ?></h1>
        <div class="blog__tags">
            <ul class="tag__list">
                <?php
                    $category_all = get_category(10);
                    echo '<li href="#"><a class="active vse" data-id="' . intval($category_all->term_id) . '"  data-link="' . get_category_link($category_all->term_id) . '">Все</a></li>';
                    $categories = get_categories(array('hide_empty' => 0, 'hierarchical' => 1, 'child_of' => '10'));
                    foreach ($categories as $category) {
                        echo '<li href="#"><a class="' . $category->slug . '" data-id="' . intval($category->term_id) . '"  data-link="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a></li>';
                ?>

                <?php };?>
            </ul>
        </div>
        <div class="projects__content">

        <?php
            // запрос

            $category = get_queried_object();
            $current_cat_id = $category->term_id;

            $wpb_all_query = new WP_Query(array(
                'posts_per_page' => 9,
                'post_type' => 'post',
                'cat' => $category->term_id,
                'number' => 9,
                )); ?>
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
                                       echo '<span  href="#" data-id="' . intval($post_category->term_id) . '"  data-link="' . get_category_link($post_category->term_id) . '">' . $post_category->name . '</span>';
                                    }; ?>
                            </div>
                            <div class="data__info">
                                <a href="<?php the_permalink(); ?>" class="title"><?php the_title(); ?></a>
                                <p class="desk"><?php echo get_the_date()?></p>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            </ul>
            <?php else : ?>
                <p><?php _e( 'Извините, нет записей, соответствуюших Вашему запросу.' ); ?></p>
            <?php endif; ?>
            <?php // AJAX загрузка постов
                    if ($wpb_all_query->max_num_pages > 1) { ?>
                        <button 
                            type="button"
                            id="blogs-more"
                            class="button button-more"
                            data-param-posts='<?= json_encode($wpb_all_query->query_vars); ?>' 
                            data-max-pages="<?= $wpb_all_query->max_num_pages; ?>"
                            data-tpl="blog"
                        >
                            Показать ещё
                        </button>
                    <?php } ?>
        </div>
    </div>
</section>


<?php get_footer(); ?>


<script>
    let current_page = 1;
    const links = [...document.querySelectorAll(".blog__tags a")];
    const postsTags = [...document.querySelectorAll(".data__teg span")];
    const cards = [...document.querySelectorAll(".projects__content__item")];
    const listOfCards = document.querySelector(".card-list");
    const height = listOfCards.style.height;

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
                    } else {
                        card.classList.add('anima');
                        card.classList.add('hide');
                    }

                    if(el.classList.contains('vse')) {
                        card.classList.remove('hide');
                        card.classList.remove('anima');
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