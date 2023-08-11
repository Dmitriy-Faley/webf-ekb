<?php
/**
*Template name: Шаблон статьи
*Template Post Type: post
*/
get_header();
?>

<section class="article">
        <div class="article__content">
            <div class="article__img">
                <?php the_post_thumbnail('full'); ?>
            </div>
            <div class="article__content-wrapper">
                <div class="content-table">
                    <?php echo do_shortcode('[lwptoc]') ?>
                </div>
                <div class="content-area">
                    <div class="area__header">
                        <div class="content-area__tags">
                            <?php 
                                $posttags = get_the_tags();
                                if ( $posttags ) {
                                    echo '<a href="#">' . $posttags[1]->name . '</a> 
                                          <a href="#">' . $posttags[0]->name .'</a>';
                                }
                            ?>
                        </div>
                        <div class="content-area__send">
                            <div class="send">
                                <img src="/content/themes/gulp-theme/assets/img/icons/send-icon.svg" alt="send" class="send">
                            </div>
                            <ul>
                                <li>
                                    <a href="https://twitter.com/intent/tweet?original_referer=http%3A%2F%2Ffiddle.jshell.net%2F_display%2F&text=<?php the_title()?>&url=<?php get_permalink()?>" target="_blank" onclick="return Share.me(this)">
                                        <img src="/content/themes/gulp-theme/assets/img/icons/twitt-icon.svg" alt="twitter">
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/cws/share?url=<?php get_permalink()?>" target="_blank" onclick="return Share.me(this);">
                                        <img src="/content/themes/gulp-theme/assets/img/icons/linked-icon.svg" alt="linkedIn">
                                    </a>
                                </li>
                                <li>
                                    <a href="https://telegram.me/share/url?url=<?php get_permalink()?>" target="_blank" onclick="return Share.me(this);">
                                        <img src="/content/themes/gulp-theme/assets/img/icons/telegram-icon.svg" alt="telegram">
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php get_permalink()?>" class="link"  onclick="copyURI(event)">
                                        <img src="/content/themes/gulp-theme/assets/img/icons/link-icon.svg" alt="link">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="content-area__info">
                        <div class="date"><?php echo get_the_date()?></div>
                        <div class="time">Время прочтения: <?php echo gp_read_time(); ?> минут</div>
                    </div>

                    <?php
                        foreach ($posts as $post) {
                            setup_postdata($post);
                        ?>

                        
                        <?php
                        }
                        wp_reset_postdata();
                    ?>

                    <div class="content-area__author">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/author-icon.svg" alt="author">
                        <p>от <?php the_author(); ?>, <?php the_author_meta('user_description'); ?></p>
                    </div>
                    <div class="content-area__text">
                        <h1 class="h1"><?php the_title(); ?></h1>
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
</section>
<section class="article__more">
    <div class="article__content">
        <?php the_field('chitat_dalshe'); ?>
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
                    <div class="projects__content__item <?php $post_categories = get_the_category($blog_posts->the_post->ID);
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
                <?php endif; ?>
        </div>
        <button class="button button-more" id="blogs-more">Все статьи</button>
    </div>
</section>
<?php get_footer(); ?>


<script>
    //active class for article-headers
    const headers = document.querySelectorAll('.lwptoc_item');

    headers.forEach(el => {
        el.addEventListener('click', (e) => {
            headers.forEach(item => {
                item.classList.remove('active');
            })
            el.classList.add('active');
        })
    });

    //open and send the links
    const sendButton = document.querySelector('.send');
    const linksList = document.querySelector('.content-area__send ul');

    const moreButton = document.querySelector('#blogs-more');

    sendButton.addEventListener('click', (e) => {
        linksList.classList.toggle('active');
    })

    Share = {
            me : function(el){
                Share.popup(el.href);
                return false;
            },

            popup: function(url) {
                window.open(url,'','toolbar=0,status=0,width=626,height=436');
            }
        };

    //copy the link

    window.addEventListener("load", function () {
        document.querySelector('.link').onclick = () => {
            window.event.preventDefault();
            let copytext = document.createElement('input');
            copytext.value = window.location.href;
            document.body.appendChild(copytext);
            copytext.select();
            document.execCommand('copy');
            document.body.removeChild(copytext);
        }
    });  

    moreButton.addEventListener('click', (e) => {
        document.querySelector('#menu-item-46 a').click();
    })

</script>