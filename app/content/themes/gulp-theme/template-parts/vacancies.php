<?php
/**
*Template name: Вакансии
*/
get_header();
?>

<section class="vacancies">
    <div class="container">
        <h1 class="title">Вакансии</h1>
        <div class="tabs">
            <div class="tabs__nav">
                <button class="tabs__btn tabs__btn_active">Все</button>
                <button class="tabs__btn">UI/UX Designer</button>
                <button class="tabs__btn">Developer</button>
                <button class="tabs__btn">Контент-менеджер</button>
            </div>
            <div class="tabs__content">
                <div class="tabs__pane tabs__pane_show">
                    <div class="tabs__item">
                        <div class="tabs__item__info">
                            <p class="data">Требуемый опыт работы: 1–3 года. Полная занятость, гибкий график.</p>
                            <p class="name">UI/UX Designer</p>
                            <p class="price">80 000 - 100 000 ₽</p>
                            <p class="desk">Маркетинговое агентство полного цикла – такая формулировка четко отражает
                                нашу концепцию работы. Обеспечим соприкосновение с целевой аудиторией во всех точках –
                                от классической онлайн-рекламы до исправления репутации. Даже взыскательные заказчики в
                                итоге остаются довольны. По-другому не умее...</p>
                        </div>
                        <div>
                            <a href="#ex1" rel="modal:open" class="button">Откликнуться</a>
                        </div>
                    </div>
                </div>
                <div class="tabs__pane">
                    Содержимое 2...
                </div>
                <div class="tabs__pane">
                    Содержимое 3...
                </div>
                <div class="tabs__pane">
                    вфывфыв
                </div>
            </div>
        </div>
    </div>
</section>


<?php theme_sidebar( 'form' ); ?>

<?php get_footer(); ?>


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

    const elTab = document.querySelector('.tabs');
    // инициализация elTab как табы
    const tab = new ItcTabs(elTab);

    const index = localStorage.getItem('tabs-index');
    index > -1 ? tab.showByIndex(index) : null;

    elTab.addEventListener('tab.itc.change', (e) => {
        const index = elTab.querySelector('.tabs__btn_active').dataset.index;
        localStorage.setItem('tabs-index', index);
    })
</script>