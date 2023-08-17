<?php
/**
*Template name: Цены
*/
get_header();
?>


<section class="prices">
    <div class="container">
        <h1 class="title"><?php the_title(); ?></h1>
        <div class="prices__tabs">
            <div class="tabs__nav">
                <?php while (have_rows('czeny')): the_row();  
                            $category = get_sub_field('kategoriya');
                ?>
                <?php while (have_rows('kategoriya')): the_row();  
                            $category = get_sub_field('nazvanie_kategorii');
                            $numberOfCategory = get_sub_field('nomer_kategorii');
                ?>
                <button class="tabs__btn" data-index="<?php echo $numberOfCategory; ?>"><?php echo $category; ?></button>
                <?php endwhile; ?>
                <?php endwhile; ?>
            </div>
            <div class="tabs__content">
                <?php while (have_rows('czeny')): the_row();?>
                 <?php while (have_rows('kategoriya')): the_row();  
                            $rownumber = get_sub_field('nomer_kategorii');
                        ?>
                <div class="tabs__pane" data-row="<?php echo $rownumber; ?>">
                        <?php while (have_rows('vneshnij_spisok')): the_row();  
                                    $outer_name = get_sub_field('zagolovok_vneshnego_spiska');
                                    $outer_price = get_sub_field('czena_vneshnego_spiska');
                        ?>
                    <div class="tabs__pane__item">
                        <a class="toggle" href="javascript:void(0);">
                            <div class="tabs__pane__name">
                                <?php echo $outer_name; ?>
                                <svg viewBox="0 0 14 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 1l6 6 6-6" stroke="#0E0F11" stroke-width="2" stroke-linecap="round" />
                                </svg>
                            </div>
                            <div class="tabs__pane__info">
                                <p class="price">от <?php echo $outer_price; ?> ₽</p>
                                <button class="button">Подробнее</button>
                            </div>
                        </a>
                        <div class="inner">
                            <?php while (have_rows('vnutrennij_spisok')): the_row();  
                                        $inner_name = get_sub_field('zagolovok_vnutrennego_spiska');
                                        $inner_price = get_sub_field('czena_vnutrennego_spiska');
                            ?>
                            <div class="inner__item">
                                <div class="tabs__pane__name">
                                    <?php echo $inner_name; ?>
                                </div>
                                <div class="tabs__pane__info">
                                    <p class="price">от <?php echo $inner_price; ?></p>
                                </div>
                            </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                    <?php endwhile; ?>
            </div>
            <?php endwhile; ?>
            <?php endwhile; ?>
        </div>
    </div>
</section>




<script>
    class ItcTabs {
        constructor(target, config) {
            const defaultConfig = {};
            this._config = Object.assign(defaultConfig, config);
            this._elTabs = typeof target === 'string' ? document.querySelector(target) : target;
            this._elButtons = this._elTabs.querySelectorAll('.tabs__btn');
            this._elPanes = this._elTabs.querySelectorAll('.tabs__pane');
            this._eventShow = new Event('tab.itc.change');
            this._init();
            this._events();
        }
        _init() {
            this._elTabs.setAttribute('role', 'tablist');
            this._elButtons.forEach((el, index) => {
                el.dataset.index = index;
                el.setAttribute('role', 'tab');
                this._elPanes[index].setAttribute('role', 'tabpanel');
            });
        }
        show(elLinkTarget) {
            const elPaneTarget = this._elPanes[elLinkTarget.dataset.index];
            const elLinkActive = this._elTabs.querySelector('.tabs__btn_active');
            const elPaneShow = this._elTabs.querySelector('.tabs__pane_show');
            if (elLinkTarget === elLinkActive) {
                return;
            }
            elLinkActive ? elLinkActive.classList.remove('tabs__btn_active') : null;
            elPaneShow ? elPaneShow.classList.remove('tabs__pane_show') : null;
            elLinkTarget.classList.add('tabs__btn_active');
            elPaneTarget.classList.add('tabs__pane_show');
            this._elTabs.dispatchEvent(this._eventShow);
            elLinkTarget.focus();
        }
        showByIndex(index) {
            const elLinkTarget = this._elButtons[index];
            elLinkTarget ? this.show(elLinkTarget) : null;
        };
        _events() {
            this._elTabs.addEventListener('click', (e) => {
                const target = e.target.closest('.tabs__btn');
                if (target) {
                    e.preventDefault();
                    this.show(target);
                }
            });
        }
    }

    const elTab = document.querySelector('.prices__tabs');
    // инициализация elTab как табы
    const tab = new ItcTabs(elTab);

    const index = localStorage.getItem('tabs-index');
    index > -1 ? tab.showByIndex(index) : null;

    elTab.addEventListener('tab.itc.change', (e) => {
        const index = elTab.querySelector('.tabs__btn_active').dataset.index;
        localStorage.setItem('tabs-index', index);
    })



    window.addEventListener('DOMContentLoaded', (e) => {
        const filterItem = document.querySelectorAll('.tabs__btn');

        filterItem[0].classList.add('tabs__btn_active');
    })
</script>


<?php theme_sidebar( 'form' ); ?>

<?php get_footer(); ?>