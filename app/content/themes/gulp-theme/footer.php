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
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/ok.svg" alt="social" />
            Одноклассники
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
      <form method="post" class="form">
        <p class="title">Связаться с нами</p>
        <input type="text" name="name" placeholder="Имя" required minlength="2">
        <input type="tel" name="phone" placeholder="Телефон" required>
        <div>
          <button class="button">Отправить</button>
          <p>Нажимая на кнопку "Отправить", вы соглашаетесь с <a href="#">условиями политики конфиденциальности</a>
          </p>
        </div>
      </form>
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
      slidesPerView: 2,
      spaceBetween: 20
    },
    // when window width is >= 480px
    480: {
      slidesPerView: 3,
      spaceBetween: 30
    },
    // when window width is >= 640px
    768: {
      slidesPerView: 2,
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

<?php wp_footer(); ?>

</body>

</html>