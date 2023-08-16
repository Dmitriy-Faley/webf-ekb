jQuery(function ($) {
    $("#blogs-more").on("click", function () {
        const button = $(this);
        button.html("Загрузка...");

        const data = {
            "action": "load_more",
            "query": button.data("param-posts"),
            "page": current_page,
            "tpl": button.data("tpl")
        }

        $.ajax({
            url: "/wp/wp-admin/admin-ajax.php",
            data: data,
            type: "POST",
            success: function (data) {
                if (data) {
                    button.html("Показать ещё");
                    button.prev().append(data);
                    current_page++;
                    if (current_page == button.attr("data-max-pages")) {
                        button.remove();
                    }
                } else {
                    button.remove();
                }

                const links = [...document.querySelectorAll(".blog__tags a")];
                const postsTags = [...document.querySelectorAll(".data__teg span")];
                const cards = [...document.querySelectorAll(".projects__content__item")];

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
            }
        });
    });
});


jQuery(function ($) {
    $("#portfolio-more").on("click", function () {
        const button = $(this);
        button.html("Загрузка...");

        const data = {
            "action": "load_more__portf",
            "query": button.data("param-posts"),
            "page": current_page,
            "tpl": button.data("tpl")
        }

        $.ajax({
            url: "/wp/wp-admin/admin-ajax.php",
            data: data,
            type: "POST",
            success: function (data) {
                if (data) {
                    button.html("Показать ещё");
                    button.prev().append(data);
                    current_page++;
                    if (current_page == button.attr("data-max-pages")) {
                        button.remove();
                    }
                } else {
                    button.remove();
                }

                const links = [...document.querySelectorAll(".blog__tags a")];
                const postsTags = [...document.querySelectorAll(".data__teg span")];
                const cards = [...document.querySelectorAll(".projects__content__item")];

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
            }
        });
    });
});

