<footer class="footer">
  <div class="container">
    <div class="footer__top">
      <div class="footer__contacts">
        <a href="/" class="footer__logo">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/logo.svg" alt="logo site" />
        </a>
        <a href="tel:+7 (985) 193-82-42">+7 (985) 193-82-42</a>
        <a href="mailto:info@web-f.ru">info@web-f.ru</a>
        <a href="#">г.Москва, ул. Вертолетчиков, д. 7, к. 1, офис 66</a>
      </div>
      <div class="footer__social">
        <div>
          <a href="#">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/insta.svg" alt="social" />
            Instagram
          </a>
          <a href="#">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/vk.svg" alt="social" />
            Вконтакте
          </a>
          <a href="#">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/fb.svg" alt="social" />
            Facebook
          </a>
          <a href="#">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/youtube.svg" alt="social" />
            Youtube
          </a>
          <a href="#">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/tg.svg" alt="social" />
            Telegram
          </a>
          <a href="#">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/whatsap.svg" alt="social" />
            WhatsApp
          </a>
          <a href="#">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/ok.svg" alt="social" />
            Одноклассники
          </a>
        </div>
      </div>
    </div>
    <div class="footer__bottom">
      <div>
        <p class="copy">© 2022 Веб Фокус</p>
      </div>
      <div class="footer__bottom__menu">
        <a href="#">Политика конфиденциальности</a>
        <a href="#">Условия использования</a>
        <a href="#">Карта сайта</a>
      </div>
    </div>
  </div>
</footer>


<a href="#ex1" rel="modal:open" class="wheel">
  <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/btn-fix.svg" alt="btn-fix">

  <div class="wheel__word">
    <div class="wheel__letter">с</div>
    <div class="wheel__letter">в</div>
    <div class="wheel__letter">я</div>
    <div class="wheel__letter">з</div>
    <div class="wheel__letter">а</div>
    <div class="wheel__letter">т</div>
    <div class="wheel__letter">ь</div>
    <div class="wheel__letter">с</div>
    <div class="wheel__letter">я</div>
  </div>

  <div class="wheel__word">
    <div class="wheel__letter">с</div>
  </div>

  <div class="wheel__word">
    <div class="wheel__letter">н</div>
    <div class="wheel__letter">а</div>
    <div class="wheel__letter">м</div>
    <div class="wheel__letter">и</div>
  </div>
</a>



<!-- Modal HTML embedded directly into document -->
<div div id="ex1" class="modal">
  <div class="modal-content">
    <div class="modal-form">
      <!-- <form method="post" class="form">
        <p class="title">Связаться с нами</p>
        <input type="text" name="name" placeholder="Имя" required minlength="2">
        <input type="tel" name="phone" placeholder="Телефон" required>
        <div class="form__button">
          <button class="button">Отправить</button>
          <p>Нажимая на кнопку "Отправить", вы соглашаетесь с <a href="#">условиями политики конфиденциальности</a>
          </p>
        </div>
      </form> -->
      <?php echo do_shortcode('[contact-form-7 id="5" title="Модальное окно"]'); ?>
    </div>
    <div class="modal__icons">
      <img class="icon" src="<?php echo get_template_directory_uri() ?>/assets/img/icons/ee.svg" alt="icon">
      <img class="icon" src="<?php echo get_template_directory_uri() ?>/assets/img/icons/about2.svg" alt="icon">
      <img class="icon" src="<?php echo get_template_directory_uri() ?>/assets/img/icons/about4.svg" alt="icon">
    </div>
  </div><!-- content -->
  <a href="#" rel="modal:close" style="display:none;">Close</a>
</div>





<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" referrerpolicy="no-referrer"></script>

<!-- jQuery Modal -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />

<script>
  var swiper = new Swiper(".services__content", {
    slidesPerView: 5,
    spaceBetween: 10,
    freeMode: {
      enabled: true,
      sticky: false,
      minimumVelocity: 5.50
    },
    mousewheel: true,

    breakpoints: {
      // when window width is >= 320px
      320: {
        slidesPerView: 1,
        spaceBetween: 15
      },
      // when window width is >= 480px
      480: {
        slidesPerView: 2,
        spaceBetween: 10
      },
      // when window width is >= 640px
      768: {
        slidesPerView: 5,
        spaceBetween: 40
      }
    }
  });

  /* var thumb = document.querySelectorAll(".thumbContainer");

  thumb.forEach(function (image, index) {
    var delay = index * 90;
    image.classList.add("fadeInSlide");
    image.style.animationDelay = delay + "ms";
  }); */
</script>



<script>
  // расстояние между словами
  const rotateBetweenWords = (value) => {
    const words = document.querySelectorAll('.wheel__word')
    let deg = 270

    for (let word of words) {
      word.style.transform = `rotate(${ deg }deg)`
      deg += value
    }
  }

  // расстояние между буквами
  const rotateBetweenLetters = (value) => {
    const letters = document.querySelectorAll('.wheel__letter')
    let deg = 0

    for (let letter of letters) {
      letter.style.transform = `rotate(${ deg }deg)`
      deg += value
    }
  }

  rotateBetweenWords(10);
  rotateBetweenLetters(12);
</script>


<!-- <script>
  // аккордеон
  $(".accordion__content_item a").each(function () {
    !$(this)
      .closest(".accordion__item")
      .find(".accordion__title")
      .addClass("new1");
  });

  $(".sub-menu").each(function () {
    // меню стрелочки 1920
    $(this).closest(".menu-item").find(".active_after_three").addClass("new2");
    // меню стрелочки 930
    $(this).closest(".menu-item").find(".submenu__link").addClass("new2");
  });


  //Добавление классов меню
  function classesMenu() {
    const submenuLi = document.querySelectorAll(".submenu>li"),
      submenuLiA = document.querySelectorAll(".submenu>li>a"),
      submenuLiUl = document.querySelectorAll(".submenu>li>ul"),
      submenuLiUlLi = document.querySelectorAll(".submenu>li>ul>li"),
      submenuLiUlLiA = document.querySelectorAll(".submenu>li>ul>li>a"),
      submenuLiUlLiUl = document.querySelectorAll(".submenu>li>ul>li>ul"),
      submenuLiUlLiUlLi = document.querySelectorAll(".submenu>li>ul>li>ul>li"),
      submenuLiUlLiUlLiA = document.querySelectorAll(".submenu>li>ul>li>ul>li>a"),
      submenuLiUlLiUlLiUl = document.querySelectorAll(
        ".submenu>li>ul>li>ul>li>ul"
      ),
      submenuLiUlLiUlLiUlLi = document.querySelectorAll(
        ".submenu>li>ul>li>ul>li>ul>li"
      ),
      submenuLiUlLiUlLiUlLiA = document.querySelectorAll(
        ".submenu>li>ul>li>ul>li>ul>li>a"
      );

    submenuLi.forEach((item) => {
      item.classList.add("submenu__list");
    });

    submenuLiA.forEach((item) => {
      item.classList.add("submenu__link");
      item.classList.add("submenu__link_li_a");
    });

    submenuLiUl.forEach((item) => {
      item.classList.add("pod_submenu");
    });

    submenuLiUlLi.forEach((item) => {
      item.classList.add("pod_submenu-link");
      item.classList.add("submenu__link-list");
    });

    submenuLiUlLiA.forEach((item) => {
      item.classList.add("sabmenu__link");
      item.classList.add("sabmenu__link-color");
      item.classList.add("sabmenu__link_two");
    });

    submenuLiUlLiUl.forEach((item) => {
      item.classList.add("pod_submenu-list");
    });

    submenuLiUlLiUlLi.forEach((item) => {
      item.classList.add("sabmenu__link");
      item.classList.add("sabmenu__link-2");
      item.classList.add("pod_submenu-list-link");
    });

    submenuLiUlLiUlLiA.forEach((item) => {
      item.classList.add("sabmenu__link");
      item.classList.add("sabmenu__link_three");
    });

    submenuLiUlLiUlLiUl.forEach((item) => {
      item.classList.add("pod_submenu-list-2");
    });

    submenuLiUlLiUlLiUlLi.forEach((item) => {
      item.classList.add("sabmenu__link");
      item.classList.add("sabmenu__link_five");
    });

    submenuLiUlLiUlLiUlLiA.forEach((item) => {
      item.classList.add("sabmenu__link");
      item.classList.add("sabmenu__link_four");
    });
  }

  classesMenu();

  const submenu = document.querySelector(".submenu");
  const subMenu = document.querySelectorAll(".sub-menu");
  const allHidden = document.querySelector(".all_hidden");
  const submenuLi = document.querySelectorAll(".submenuLi");
  const lineMenu2 = document.querySelector(".line-menu--2");
  const lineMenu1 = document.querySelector(".line-menu--1");
  const menuCloset = document.querySelector(".menu__closet");
  const menuHidden = document.querySelector(".menu__hidden");
  const wrapperMenu = document.querySelector(".wrapper-menu");
  const navMenuBtn = document.querySelector(".nav__menu-btn");
  const podSubmenu = document.querySelectorAll(".pod_submenu");
  const submenuLink = document.querySelectorAll(".submenu__link");
  const submenuHeight = document.querySelector(".submenu-height");
  const sabmenuLink = document.querySelectorAll(".sabmenu__link");
  const submenuList = document.querySelectorAll(".submenu__list");
  // const menuItem23Ul = document.querySelector('#menu-item-23>ul');
  const mobileBtnUp = document.querySelectorAll(".mobile-btn--up");
  const btnArrowImg = document.querySelectorAll(".btn-arrow--img");
  const menuHiddenBtn = document.querySelector(".menu__hidden-btn");
  const sabmenuLink2 = document.querySelectorAll(".sabmenu__link-2");
  const submenuBtnUp = document.querySelectorAll(".submenu-btn--up");
  const linkUnderline = document.querySelectorAll(".link_underline");
  const menuHiddenNone = document.querySelector(".menu__hidden-none");
  const headerNavFixed = document.querySelector(".header-nav--fixed");
  const subMenuList = document.querySelectorAll(".submenu__link-list");
  const podSubmenuList = document.querySelectorAll(".pod_submenu-list");
  const sabmenuLinkTwo = document.querySelectorAll(".sabmenu__link_two");
  const submenuLinkLiA = document.querySelectorAll(".submenu__link_li_a");
  const podSubmenuList2 = document.querySelectorAll(".pod_submenu-list-2");
  const submenuArrowImg = document.querySelectorAll(".submenu-arrow--img");
  const navMenuBtnMobile = document.querySelector(".nav__menu-btn--mobile");
  const activeAfterThree = document.querySelectorAll(".active_after_three");
  const sabmenuLinkThree = document.querySelectorAll(".sabmenu__link_three");
  const sabmenuLinkColor = document.querySelectorAll(".sabmenu__link-color");

  $(".nav__menu-btn").click(function () {
    $("body").addClass("disable-scroll");
  });

  $(".menu__hidden-btn").click(function () {
    $("body").removeClass("disable-scroll");
  });

  function toogleMenu() {
    menuHidden.classList.toggle("start_menu-active");
    navMenuBtnMobile.classList.toggle("start_menu-active");
    document.querySelector("body").classList.toggle("header-nav--fixed");
  }

  menuCloset.addEventListener("click", (e) => {
    subMenu.forEach((el, indOne) => {
      el.classList.remove("show");
      el.classList.remove("flex");
    });
  });

  navMenuBtn.addEventListener("click", toogleMenu);
  navMenuBtnMobile.addEventListener("click", toogleMenu);
  menuHiddenBtn.addEventListener("click", toogleMenu);

  const menu = () => {
    const menuPC = () => {
      if (document.documentElement.clientHeight <= 870) {
        subMenu.forEach((item) => {
          item.style.height = "90vh";
          item.style.overflow = "scroll";
        });
        menuHidden.style.paddingTop = "40px";
        // menuItem23Ul.style.marginTop = '-60px';
      }
      sabmenuLinkTwo.forEach((item) => {
        let div = document.createElement("span");
        div.className = "active_after";
        if (item.nextSibling) {
          item.after(div);
        }
        // наведения на 1 уровень и открытие 2 уровня
        submenuLink.forEach((elem, ind) => {
          elem.addEventListener("mouseover", (e) => {
            submenuLink.forEach((el) => {
              el.classList.remove("hover_color");
              el.style.color = "#000";
            });
            subMenu.forEach((el, indOne) => {
              el.classList.remove("show");
              el.classList.remove("flex");
            });

            sabmenuLinkTwo.forEach((el) => {
              el.style.color = "#000";
              item.classList.remove("oke");
            });
            sabmenuLinkThree.forEach((el) => {
              el.style.borderBottom = "0px solid #000";
              el.classList.remove("oke");
            });
            div.classList.remove("active");
            div.classList.remove("active_two");
            div.classList.remove("okei");
            div.classList.remove("oke");
            e.target.classList.add("hover_color");
            e.target.style.color = "#B796F5";
            e.target.nextSibling.nextSibling.classList.add("show");
            if (ind == 7) {
              e.target.nextSibling.nextSibling.classList.add("flex");
            }
          });
        });

        // наведения на 2 уровень
        item.addEventListener("mouseover", (e) => {
          if (!div.classList.contains("active")) {
            e.target.style.color = "#B796F5";
            div.classList.add("active_two");
          }
        });
        item.addEventListener("mouseout", (e) => {
          if (!div.classList.contains("active")) {
            e.target.style.color = "#000";
            div.classList.remove("active_two");
          }
        });

        //открытие 3 уровня
        item.addEventListener("click", (e) => {
          if (!e.target.classList.contains("oke")) {
            const activeAfter = document.querySelectorAll(".active_after ");

            activeAfter.forEach((item) => {
              item.classList.remove("active");
              item.classList.remove("active_two");
            });
            sabmenuLinkThree.forEach((el) => {
              el.style.borderBottom = "0px solid #000";
              el.classList.remove("oke");
            });
            podSubmenuList.forEach((elem) => {
              elem.classList.remove("show");
            });
            podSubmenuList2.forEach((elem) => {
              elem.classList.remove("show");
            });
            sabmenuLinkTwo.forEach((el) => {
              el.style.color = "#000";
              el.classList.remove("oke");
            });

            e.target.style.color = "#B796F5";
            e.target.classList.add("oke");
            div.classList.add("active");
            div.nextSibling.nextSibling.classList.add("show");
          } else {
            e.target.classList.remove("oke");
          }
          if (e.target.classList.contains("oke")) {
            e.preventDefault();
          }
        });

        //Закрытие 3 уровня
        div.addEventListener("click", (e) => {
          const activeAfter = document.querySelectorAll(".active_after ");
          activeAfter.forEach((item) => {
            item.classList.remove("active");
            item.classList.remove("active_two");
          });
          podSubmenuList.forEach((elem) => {
            elem.classList.remove("show");
          });
          sabmenuLinkThree.forEach((el) => {
            el.style.borderBottom = "0px solid #000";
            el.classList.remove("oke");
          });
          podSubmenuList2.forEach((elem) => {
            elem.classList.remove("show");
          });
          sabmenuLinkTwo.forEach((el) => {
            el.style.color = "#000";
            el.classList.remove("oke");
          });
        });
      });

      //открытие 4 уровня
      sabmenuLinkThree.forEach((itemOne) => {
        let divOne = document.createElement("span");
        divOne.className = "active_after_two";
        if (itemOne.nextSibling) {
          itemOne.after(divOne);
        }

        itemOne.addEventListener("click", (e) => {
          if (!e.target.classList.contains("oke")) {
            podSubmenuList2.forEach((elem) => {
              elem.classList.remove("show");
            });
            sabmenuLinkThree.forEach((el) => {
              el.classList.remove("oke");
              el.style.borderBottom = "0px solid #000";
            });
            e.target.style.borderBottom = "1px solid #000";
            e.target.classList.add("oke");
            divOne.classList.add("active");
            divOne.nextSibling.nextSibling.classList.add("show");
          } else {
            e.target.classList.remove("oke");
          }
          if (e.target.classList.contains("oke")) {
            e.preventDefault();
          }
        });

        //Закрытие 4 уровня
        divOne.addEventListener("click", (e) => {
          podSubmenuList2.forEach((elem) => {
            elem.classList.remove("show");
            divOne.classList.remove("active");
          });
          sabmenuLinkThree.forEach((el) => {
            el.style.borderBottom = "0px solid #000";
            el.classList.remove("oke");
          });
        });
      });
    };
    if (document.documentElement.clientWidth >= 931) {
      menuPC();
    }

    const menuMob = () => {
      menuCloset.addEventListener("click", (e) => {
        submenuList.forEach((item) => {
          item.style.display = "block";
        });
        submenuLinkLiA.forEach((item) => {
          item.classList.remove("active");
        });
        headerNavFixed.style.overflow = "initial";
      });

      submenuLinkLiA.forEach((itemOne, ind) => {
        if (ind === 7) return;

        let div = document.createElement("span");
        div.className = "active_after_three";
        itemOne.after(div);
        const activeAfterThree = document.querySelectorAll(".active_after_three");

        menuCloset.addEventListener("click", (e) => {
          div.classList.remove("active");
          div.classList.remove("okei");
          div.classList.remove("oke");
        });


        menuCloset.addEventListener("click", (e) => {
          allHidden.classList.remove("hidden");
        });

        div.addEventListener("click", (e) => {
          e.target.classList.add("oke");
          submenuList.forEach((item) => {
            // item.style.display = 'none';
          });
          if (e.target.classList.contains("okei")) {
            e.target.classList.remove("oke");
            e.target.classList.remove("active");
          }

          if (e.target.classList.contains("okei")) {
            e.target.nextSibling.nextSibling.classList.remove("show");
            e.target.classList.remove("okei");
            e.target.previousSibling.classList.remove("active");
            submenuList.forEach((item) => {
              item.style.display = "block";
            });
            podSubmenuList.forEach((item) => {
              item.classList.remove("show");
            });
            sabmenuLinkTwo.forEach((item) => {
              item.nextSibling.classList.remove("okei");
              item.nextSibling.classList.remove("oke");
              item.nextSibling.classList.remove("active");
            });
          }

          if (e.target.classList.contains("oke")) {
            e.target.nextSibling.nextSibling.classList.add("show");
            e.target.classList.add("okei");
            e.target.classList.add("active");
            e.target.style.display = "block";
            e.target.previousSibling.classList.add("active");
            e.target.parentNode.style.display = "block";
          }
        });
      });

      sabmenuLinkTwo.forEach((item) => {
        let div = document.createElement("span");
        div.className = "active_after_two";
        if (item.nextSibling) {
          item.after(div);
        }
        div.addEventListener("click", (e) => {
          e.target.classList.add("oke");

          if (e.target.classList.contains("okei")) {
            e.target.classList.remove("oke");
            e.target.classList.remove("active");
          }

          if (e.target.classList.contains("okei")) {
            e.target.nextSibling.nextSibling.classList.remove("show");
            e.target.classList.remove("okei");
            e.target.previousSibling.classList.remove("active");
            podSubmenuList2.forEach((item) => {
              item.classList.remove("show");
            });
            sabmenuLinkThree.forEach((item) => {
              item.nextSibling.classList.remove("okei");
              item.nextSibling.classList.remove("oke");
              item.nextSibling.classList.remove("active");
            });
          }

          if (e.target.classList.contains("oke")) {
            e.target.nextSibling.nextSibling.classList.add("show");
            e.target.classList.add("okei");
            e.target.classList.add("active");
            e.target.previousSibling.classList.add("active");
            e.target.parentNode.style.display = "block";
          }
        });
      });

      sabmenuLinkThree.forEach((item) => {
        let div = document.createElement("span");
        div.className = "active_after_four";
        if (item.nextSibling) {
          item.after(div);
        }
        div.addEventListener("click", (e) => {
          e.target.classList.add("oke");
          if (e.target.classList.contains("okei")) {
            e.target.classList.remove("oke");
            e.target.classList.remove("active");
          }

          if (e.target.classList.contains("okei")) {
            e.target.nextSibling.nextSibling.classList.remove("show");
            e.target.classList.remove("okei");
            e.target.previousSibling.classList.remove("active");
          }

          if (e.target.classList.contains("oke")) {
            e.target.nextSibling.nextSibling.classList.add("show");
            e.target.classList.add("okei");
            e.target.classList.add("active");
            e.target.previousSibling.classList.add("active");
            e.target.parentNode.style.display = "block";
          }
        });
      });
      // 930 закрытие пунктов

      //Препослд
      $(".active_after_three").click(function (e) {
        e.preventDefault();

        $(this)
          .siblings(".pod_submenu")
          .find(".sabmenu__link_three")
          .removeClass("active");
        $(this)
          .siblings(".pod_submenu")
          .find(".sabmenu__link_two")
          .removeClass("active");
        $(this)
          .siblings(".pod_submenu")
          .find(".active_after_two")
          .removeClass("oke");
        $(this)
          .siblings(".pod_submenu")
          .find(".active_after_two")
          .removeClass("okei");
        $(this)
          .siblings(".pod_submenu")
          .find(".active_after_two")
          .removeClass("active");
        $(this)
          .siblings(".pod_submenu")
          .find(".pod_submenu-list-2")
          .removeClass("show");
      });

      //посл
      $(".active_after_two").click(function (e) {
        e.preventDefault();

        $(this)
          .siblings(".pod_submenu-list")
          .find(".sabmenu__link_three")
          .removeClass("active");
        $(this)
          .siblings(".pod_submenu-list")
          .find(".active_after_four")
          .removeClass("oke");
        $(this)
          .siblings(".pod_submenu-list")
          .find(".active_after_four")
          .removeClass("okei");
        $(this)
          .siblings(".pod_submenu-list")
          .find(".active_after_four")
          .removeClass("active");
        $(this)
          .siblings(".pod_submenu-list")
          .find(".pod_submenu-list-2")
          .removeClass("show");
      });
    };
    if (document.documentElement.clientWidth <= 930) {
      menuMob();
    }
  };
  menu();

  $(".sabmenu__link").click(function () {
    $(this).addClass("oke");
  });
</script> -->

<?php wp_footer(); ?>

</body>

</html>