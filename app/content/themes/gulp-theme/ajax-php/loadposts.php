<?php

/**loadmore posts*/

function true_load_posts()
{

	$args = unserialize(stripslashes($_POST['query']));
	$args['paged'] = $_POST['page'] + 1; // следующая страница
	$args['post_status'] = 'publish';


	// обычно лучше использовать WP_Query, но не здесь
	// query_posts( $args ); с богом 
	// если посты есть залупонька

	// Цикл WordPress
	$wpb_all_query = new query_posts($args);
	if ($wpb_all_query->have_posts()) {

		while ($wpb_all_query->have_posts()) {
			$wpb_all_query->the_post();
            ?>
			<div class="projects__content__item <?php $post_categories = get_the_category($wpb_all_query->the_post->ID);
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
                                   <?php $post_categories = get_the_category($wpb_all_query->the_post->ID);
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
            <?php

		}
	}

	die();
}


add_action('wp_ajax_loadPosts', 'true_load_posts');
add_action('wp_ajax_nopriv_loadPosts', 'true_load_posts');
