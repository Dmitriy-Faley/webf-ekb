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
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/articles/article1.png" alt="shopify">
            </div>
            <div class="article__content-wrapper">
                <div class="content-table">
                    <?php the_field('soderzhanie'); ?>
                </div>
                <div class="content-area">
                    <div class="area__header">
                        <div class="content-area__tags">
                            <a href="#">Статьи</a>
                            <a href="#">Разработка</a>
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
                        <!-- <div class="date">1 день назад</div> -->
                        <div class="date"><?php echo get_the_date()?></div>
                        <div class="time">Время прочтения: <?php the_field('data_i_vremya'); ?></div>
                    </div>
                    <div class="content-area__author">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/author-icon.svg" alt="author">
                        <p>от <?php the_field('avtor'); ?>, должность в компании <span>Веб Фокус</span></p>
                    </div>
                    <div class="content-area__text">
                        <?php the_field('zagolovok_stati'); ?>
                        <?php the_field('razdely_stati'); ?>
                    </div>
                </div>
            </div>
        </div>
</section>
<section class="article__more">
    <div class="article__content">
        <?php the_field('chitat_dalshe'); ?>
        <div class="projects__content">
            <div class="projects__content__item">
                <div>
                    <a href="#" class="item__img">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/articles/article1.png"
                            alt="projects">
                    </a>
                </div>
                <div class="item__data">
                    <div class="data__tag">
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
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/articles/article2.png"
                            alt="projects">
                    </a>
                </div>
                <div class="item__data">
                    <div class="data__tag">
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
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/articles/article3.png"
                            alt="projects">
                    </a>
                </div>
                <div class="item__data">
                    <div class="data__tag">
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
        <button class="button button-more" id="blogs-more">Все статьи</button>
    </div>
</section>
<?php get_footer(); ?>


<script>
    //active class for article-headers
    const headers = document.querySelectorAll('.content-table>ul>li');

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

    const a = document.querySelector('.link');
    const link = a.href;

    function copyURI(evt) {
        evt.preventDefault();
        navigator.clipboard.writeText(evt.target.getAttribute('href')).then(() => {
            console.log(evt.target.getAttribute('href'));
        }, () => {
            throw new Error('failed to copy');
        });    
}

</script>