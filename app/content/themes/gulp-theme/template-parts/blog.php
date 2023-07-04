<?php
/**
*Template name: Блог
*/
get_header();
?>

<section class="projects blog">
    <div class="container">
        <h1 class="title blog__title"><?php the_title(); ?></h1>
        <div class="blog__tags">
            <ul class="tag__list">
                <?php
                    $category_all = get_category(10);
                    echo '<li href="#"data-id="' . intval($category_all->term_id) . '"  data-link="' . get_category_link($category_all->term_id) .' "><a class="list-item active">Все</a></li>';
                    $categories = get_categories(array('hide_empty' => 0, 'hierarchical' => 1, 'child_of' => '10'));
                    foreach ($categories as $category) {
                        echo '<li href="#" data-id="' . intval($category->term_id) . '"  data-link="' . get_category_link($category->term_id) . '"><a class="list-item">' . $category->cat_name . '</a></li>';
                ?>

                <?php };?>
            </ul>
        </div>
        <div class="projects__content">

        <?php
            // запрос
            $wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>
            <?php if ( $wpb_all_query->have_posts() ) : ?>
            <ul class="project-list">
                <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
                    <div class="projects__content__item">
                        <div>
                            <a href="<?php the_permalink(); ?>" class="item__img">
                                <?php the_post_thumbnail(); ?>
                            </a>
                        </div>
                        <div class="item__data">
                            <div class="data__teg">
                                   <?php $post_categories = get_the_category($blog_posts->the_post->ID);
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
            </ul>
                <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <p><?php _e( 'Извините, нет записей, соответствуюших Вашему запросу.' ); ?></p>
            <?php endif; ?>
        </div>
        <button class="button button-more" id="blogs-more">Показать еще</button>
    </div>
</section>


<?php get_footer(); ?>


<script>
    $(document).ready(function () {
        let colvoHelpfulItem = document.querySelectorAll('.blog .projects__content .projects__content__item').length;

        if (colvoHelpfulItem <= 9) {
            $('#blogs-more').addClass('hidden');
        }

        $('#blogs-more').on('click', function () {
            $('.blog .projects__content .projects__content__item').addClass('active_cards');
            $(this).addClass('hidden');
        });
    });

    jQuery(document).ready(function ($) {
  var cat_id = window.location;
  var paged = 1;
  var top_block = $(".blog .container h1").offset().top;
 
  $(".list-item").on("click", function (e) {
    var id = $(this).data("id");
    var mayThis = $(this);
    $(".project-list")
      .empty()
    var data = {
      action: "load_posts_from_category_by_ajax",
    //   security: blog.security,
      id: id,
      beforeSend: function (xhr) {},
    };
    $(mayThis).addClass("active");
    $(".nav__button").not(mayThis).removeClass("active");
    setTimeout(load_posts_from_category, 1000);
    function load_posts_from_category() {
      $.post(blog.ajaxurl, data, function (response) {
        if ($.trim(response) != "") {
          $(".blog__list").replaceWith(response);
          paged = 1;
          if (document.documentElement.clientWidth < 1025) {
            $(".share__btn").on("click", function () {
              $(this).parent().toggleClass("active");
            });
            $(".blog__item .nav__toggle").on("click", function () {
              $(this).parent().toggleClass("active");
            });
          }
          if (document.documentElement.clientWidth > 1025) {
            $(".share__toggle").on("mouseenter", function () {
              $(this).addClass("active");
            });
            $(".share__toggle").on("mouseleave", function () {
              $(this).removeClass("active");
            });
          }
        }
      });
    }
    $(".list-item").not(mayThis).removeClass("active");
    setTimeout(load_posts_from_category, 1000);
    function load_posts_from_category() {
      $.post(blog.ajaxurl, data, function (response) {
        if ($.trim(response) != "") {
          $(".tag__list").replaceWith(response);
          paged = 1;
        }
      });
    }
  });


  var nav_btns = $('.list-item');
  $.each(nav_btns, function () { 
    var mayThis = $(this);
    if ($(this).data('link') == cat_id) {
      $(mayThis).trigger('click');
    }
  });
});
</script>

//TODO: найти "блок" и вывести карточки