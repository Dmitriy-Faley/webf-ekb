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
                    <h3>Содержание</h3>
                    <ul>
                        <li class="table-item active"><a href="#one">Быстрая и простая настройка и использование</a></li>
                        <li class="table-item"><a href="#two">Никаких забот с техникой</a></li>
                        <li class="table-item"><a href="#three">Безопасность и надежность</a></li>
                        <li class="table-item"><a href="#four">Круглосуточная поддержка клиентов</a></li>
                        <li class="table-item"><a href="#five">Готовность к мобильным устройствам</a></li>
                        <li class="table-item"><a href="#six">Настраиваемый</a></li>
                        <li class="table-item"><a href="#seven">Для этого есть приложение</a></li>
                        <li class="table-item"><a href="#eight">Инструменты для SEO и маркетинга</a></li>
                        <li class="table-item"><a href="#nine">Восстановление брошенной корзины</a></li>
                        <li class="table-item"><a href="#ten">Собственный платежный шлюз</a></li>
                    </ul>
                </div>
                <div class="content-area">
                    <div class="area__header">
                        <div class="content-area__tags">
                            <a href="#">Статьи</a>
                            <a href="#">Разработка</a>
                        </div>
                        <div class="content-area__send">
                            <img src="/content/themes/gulp-theme/assets/img/icons/send-icon.svg" alt="send">
                            <ul>
                                <li>
                                    <img src="/content/themes/gulp-theme/assets/img/icons/twitt-icon.svg" alt="twitter">
                                </li>
                                <li>
                                    <img src="/content/themes/gulp-theme/assets/img/icons/linked-icon.svg" alt="linkedIn">
                                </li>
                                <li>
                                    <img src="/content/themes/gulp-theme/assets/img/icons/telegram-icon.svg" alt="telegram">
                                </li>
                                <li>
                                    <img src="/content/themes/gulp-theme/assets/img/icons/link-icon.svg" alt="link">
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="content-area__info">
                        <div class="date">1 день назад</div>
                        <div class="time">Время прочтения: 3 минуты</div>
                    </div>
                    <div class="content-area__author">
                        <img src="/content/themes/gulp-theme/assets/img/icons/author-icon.svg" alt="author">
                        <p>от Имя Фамилия, должность в компании <span>Веб Фокус</span></p>
                    </div>
                    <div class="content-area__text">
                        <h1>Преимущества Shopify — 10 причин полюбить его</h1>
                        <div id="one" class="text-block">
                            <h3>Быстрая и простая настройка и использование</h3>
                            <p><span>Shopify</span> предлагает простой способ быстро запустить интернет-магазин без суеты вокругсерверов и затрат на разработку, которые могут быть понесены при использовании саморазмещающихся платформ, таких как Magento. Интерфейс администратора чист, удобен и интуитивно понятен, поскольку все функции логически структурированы. На сайте Shopify вы также можете найти обширную документацию и видеоруководства. Все, что вам действительно нужно, — это продукт, который вы хотите продать.</p>
                        </div>
                        <div id="two" class="text-block">
                            <h3>Никаких забот с техникой</h3>
                            <p>Хорошие новости! Для запуска базового магазина Shopify вам не потребуется никаких технических знаний; все программное обеспечение и хостинг предоставляются компанией Shopify. Это не только облегчает процесс запуска, но и, скорее всего, хостинг Shopify будет быстрее и надежнее, чем вы могли бы добиться самостоятельно, к тому же он легко выдержит любые скачки трафика, которые вы можете получить. Shopify также позаботится обо всех обновлениях программного обеспечения. Так что вы можете сосредоточить все свои усилия на продажах и не беспокоиться о технических проблемах, ура.</p>
                        </div>
                        <div id="three" class="text-block">
                            <h3>Безопасность и надежность</h3>
                            <p>Если у вас есть магазин электронной коммерции, вы будете иметь дело с конфиденциальной информацией о клиентах, включая данные кредитных карт, а также с нетерпеливыми покупателями. Это означает, что ваш сайт должен быть быстрым, безопасным и всегда онлайн. Одним из главных преимуществ размещенного решения является надежность, которую оно обеспечивает. Shopify возьмет на себя все заботы по обслуживанию и обновлению сервера, чтобы ваш магазин и корзина всегда были доступны и обеспечивали быструю загрузку страниц.</p>
                            <p>Для вашего магазина могут быть включены SSL-сертификаты для шифрования всех данных и передачи их через безопасное соединение, а также Shopify позаботится о соответствии стандарту PCI (требуется, когда вы работаете с кредитными картами).</p>
                        </div>
                        <div id="four" class="text-block">
                            <h3>Круглосуточная поддержка клиентов</h3>
                            <p>Shopify уделяет большое внимание поддержке клиентов. Они доступны 24 часа в сутки, 7 дней в неделю, и время ответа довольно мгновенное, что означает, что ваш бизнес никогда не будет предоставлен сам себе. Вы можете связаться с ними по телефону, электронной почте или через веб-чат. Кроме того, есть несколько форумов сообщества, обширная документация в Справочном центре Shopify, а также ряд передовых руководств Shopify University.</p>
                        </div>
                        <div id="five" class="text-block">
                            <h3>Готовность к мобильным устройствам</h3>
                            <p>Поскольку посещаемость веб-сайтов с мобильных устройств сейчас выше, чем с настольных, важно иметь сайт, оптимизированный для мобильных устройств. К счастью, Shopify знает об этом. Все темы Shopify являются мобильно отзывчивыми, а платформа включает бесплатную встроенную корзину для мобильной коммерции, что означает, что ваш магазин отлично выглядит на всех устройствах, а ваши клиенты могут свободно совершать покупки, где бы они ни находились.</p>
                            <p>Кроме того, есть бесплатные приложения для iPhone и Android, которые позволят вам управлять своим магазином на ходу, если вы того пожелаете.</p>
                        </div>
                        <div id="six" class="text-block">
                            <h3>Настраиваемый</h3>
                            <p>В магазине тем Shopify на выбор предлагается 160 тем (бесплатных и платных), все из которых отвечают требованиям мобильных устройств, а также сотни тем, доступных на таких сайтах, как ThemeForest. Каждая тема также полностью настраивается путем редактирования кода. Так что создать красивый и уникальный интернет-магазин, который соответствует вашему фирменному стилю, проще простого!</p>
                        </div>
                        <div id="seven" class="text-block">
                            <h3>Для этого есть приложение</h3>
                            <p>Магазин приложений Shopify — это сокровищница функциональных возможностей, которые вы можете добавить в свой магазин. Вы можете добавить отзывы, программы лояльности, списки пожеланий клиентов, получить подробную аналитику, распечатать этикетки и упаковочные листы, интегрироваться с бухгалтерским программным обеспечением, программами доставки и сайтами социальных сетей, не говоря уже обо всех доступных маркетинговых приложениях. Более 1 500 приложений на выбор, поэтому, что бы вы ни хотели сделать, для этого наверняка найдется приложение. Обратите внимание, что многие из них бесплатны, но более половины — платные.</p>
                        </div>
                        <div id="eight" class="text-block">
                            <h3>Инструменты для SEO и маркетинга</h3>
                            <p>Хорошо иметь красивый интернет-магазин, но если его никто не посещает, вы быстро захлопнете виртуальные ставни. Еще одним преимуществом Shopify являются мощные функции поисковой оптимизации (SEO), которые помогут вашему сайту занять более высокое место в результатах поиска, чтобы клиенты могли найти вас. У вас также есть доступ к расширенной аналитике, которая покажет вам, откуда приходят ваши клиенты, и вы сможете соответствующим образом адаптировать свой маркетинг. Возможно, вы захотите прибегнуть к помощи SEO-компании.</p>
                            <p>Магазин приложений дает вам доступ к огромному количеству маркетинговых инструментов, включая интеграцию с социальными сетями, обзоры товаров и маркетинг по электронной почте. В стандартной комплектации Shopify позволяет создавать коды скидок. На следующем уровне доступны подарочные сертификаты. Иконки социальных сетей включены во все темы. И если вы немного ошеломлены цифровым маркетингом и временем, которое он может занять, Shopify Kit был разработан, чтобы помочь вам. Он действует как виртуальный сотрудник, рекомендуя и выполняя маркетинговые задачи на основе ваших продуктов, аудитории и показателей магазина.</p>
                        </div>
                        <div id="nine" class="text-block">
                            <h3>Восстановление брошенной корзины</h3>
                            <p>Что произойдет, если посетитель вашего магазина положит товар в корзину, но уйдет, не купив его? Согласно статистике, так поступают более двух третей потенциальных покупателей. Shopify предлагает услугу восстановления брошенной корзины, которая автоматически отслеживает и отправляет электронные письма этим потенциальным клиентам, чтобы напомнить им о необходимости завершить покупку; это простой способ потенциально получить больший доход.</p>
                        </div>
                        <div id="ten" class="text-block">
                            <h3>Собственный платежный шлюз</h3>
                            <p>Shopify интегрирован с десятками платежных шлюзов, но также предлагает свой собственный, который работает на базе Stripe. Если вы решите использовать его, вы не понесете никаких комиссий за транзакцию, а также получите выгоду от более низких комиссий по кредитным картам. Для его использования также не требуется торговый счет.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<section class="article__more">
    <div class="article__content">
        <h2>Читать дальше</h2>
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
    const links = document.querySelectorAll('.table-item');

    links.forEach(el => {
        el.addEventListener('click', (e) => {
            links.forEach(item => {
                item.classList.remove('active');
            })
            el.classList.add('active');
        })
    })
    console.log(links)
</script>