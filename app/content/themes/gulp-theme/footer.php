</main>

<footer class="footer">
  <div class="container">
    <div class="footer__top">
      <div class="footer__contacts">
        <a href="/" class="footer__logo">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/logo.svg" alt="logo site" />
        </a>
        <a href="tel:<?php the_field('telefon', 'option') ?>"><?php the_field('telefon', 'option') ?></a>
        <a href="mailto:<?php the_field('pochta', 'option') ?>"><?php the_field('pochta', 'option') ?></a>
        <a href="https://yandex.by/maps/213/moscow/house/ulitsa_vertolyotchikov_7k1/Z04YfwNgS0cHQFtvfXtxcHpnbA==/?ll=37.940221%2C55.701648&z=17.15" target="_blank"><?php the_field('adres', 'option') ?></a>
      </div>
      <!-- <div class="footer__social">
        <div>
          <a href="#">
            <svg viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M11.4969 7.66503C9.38527 7.66503 7.66201 9.38832 7.66201 11.5C7.66201 13.6117 9.38527 15.335 11.4969 15.335C13.6085 15.335 15.3318 13.6117 15.3318 11.5C15.3318 9.38832 13.6085 7.66503 11.4969 7.66503ZM22.9987 11.5C22.9987 9.91193 23.0131 8.33824 22.9239 6.75304C22.8347 4.9118 22.4147 3.27769 21.0683 1.93128C19.7191 0.581998 18.0879 0.164841 16.2467 0.0756562C14.6586 -0.013529 13.085 0.00085573 11.4998 0.00085573C9.91174 0.00085573 8.33808 -0.013529 6.75292 0.0756562C4.91171 0.164841 3.27763 0.584875 1.93125 1.93128C0.581988 3.28057 0.164838 4.9118 0.0756548 6.75304C-0.0135288 8.34112 0.000855714 9.9148 0.000855714 11.5C0.000855714 13.0852 -0.0135288 14.6618 0.0756548 16.247C0.164838 18.0882 0.584864 19.7223 1.93125 21.0687C3.28051 22.418 4.91171 22.8352 6.75292 22.9243C8.34096 23.0135 9.91462 22.9991 11.4998 22.9991C13.0878 22.9991 14.6615 23.0135 16.2467 22.9243C18.0879 22.8352 19.7219 22.4151 21.0683 21.0687C22.4176 19.7194 22.8347 18.0882 22.9239 16.247C23.016 14.6618 22.9987 13.0881 22.9987 11.5V11.5ZM11.4969 17.4006C8.23164 17.4006 5.59641 14.7653 5.59641 11.5C5.59641 8.23467 8.23164 5.59939 11.4969 5.59939C14.7622 5.59939 17.3974 8.23467 17.3974 11.5C17.3974 14.7653 14.7622 17.4006 11.4969 17.4006ZM17.6391 6.73578C16.8767 6.73578 16.261 6.12012 16.261 5.35773C16.261 4.59533 16.8767 3.97967 17.6391 3.97967C18.4014 3.97967 19.0171 4.59533 19.0171 5.35773C19.0173 5.53876 18.9818 5.71806 18.9127 5.88535C18.8435 6.05265 18.742 6.20466 18.614 6.33266C18.486 6.46067 18.334 6.56217 18.1667 6.63135C17.9994 6.70052 17.8201 6.73601 17.6391 6.73578V6.73578Z"
                fill="#0E0F11" />
            </svg>
            Instagram
          </a>
          <a href="#">
            <svg viewBox="0 0 26 16" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd"
                d="M25.4036 1.08343C25.5835 0.459429 25.4036 0 24.5424 0H21.6987C20.9751 0 20.6414 0.396571 20.4605 0.834286C20.4605 0.834286 19.0143 4.48686 16.9657 6.85943C16.3027 7.54743 16.0016 7.76571 15.6398 7.76571C15.4588 7.76571 15.1869 7.54743 15.1869 6.92229V1.08343C15.1869 0.333714 14.9876 0 14.3853 0H9.91337C9.46163 0 9.18972 0.347429 9.18972 0.677714C9.18972 1.38743 10.2145 1.552 10.3196 3.54971V7.89029C10.3196 8.84229 10.1539 9.01486 9.79204 9.01486C8.8279 9.01486 6.48253 5.34514 5.09048 1.14629C4.82073 0.329143 4.54774 0 3.82084 0H0.97498C0.162497 0 0 0.396571 0 0.834286C0 1.61371 0.964146 5.48571 4.49032 10.6069C6.84111 14.104 10.1506 16 13.1655 16C14.9735 16 15.1967 15.5794 15.1967 14.8537V12.2103C15.1967 11.368 15.3678 11.2 15.9409 11.2C16.3634 11.2 17.086 11.4194 18.7738 13.1051C20.7021 15.104 21.0195 16 22.105 16H24.9486C25.7611 16 26.1685 15.5794 25.9345 14.7474C25.6766 13.92 24.7558 12.7189 23.5349 11.2937C22.8719 10.4823 21.8775 9.608 21.5752 9.17029C21.1538 8.60914 21.2741 8.35886 21.5752 7.85943C21.5752 7.85943 25.0418 2.80114 25.4025 1.08343H25.4036Z"
                fill="#0E0F11" />
            </svg>
            Вконтакте
          </a>
          <a href="#">
            <svg viewBox="0 0 11 23" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M2.80805 23V12.2077H0V8.322H2.80805V5.00307C2.80805 2.39504 4.46677 0 8.28882 0C9.83631 0 10.9806 0.150765 10.9806 0.150765L10.8904 3.77938C10.8904 3.77938 9.72344 3.76784 8.44996 3.76784C7.07167 3.76784 6.85085 4.41333 6.85085 5.48469V8.322H11L10.8195 12.2077H6.85085V23H2.80805Z"
                fill="#0E0F11" />
            </svg>
            Facebook
          </a>
          <a href="#">
            <svg viewBox="0 0 27 19" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M26.4346 2.83046C26.2818 2.28516 25.984 1.79148 25.573 1.4019C25.1504 1.00033 24.6324 0.713081 24.068 0.567261C21.9555 0.0104607 13.4921 0.0104608 13.4921 0.0104608C9.96385 -0.0296821 6.43644 0.146876 2.9298 0.539139C2.36534 0.695733 1.84833 0.989402 1.42475 1.39402C1.00856 1.79447 0.707099 2.28828 0.54962 2.82933C0.171326 4.86727 -0.0124755 6.93654 0.000694238 9.00925C-0.0128039 11.0801 0.170546 13.1487 0.54962 15.1892C0.703725 15.728 1.00406 16.2195 1.42138 16.6166C1.8387 17.0137 2.35838 17.3005 2.9298 17.4524C5.07039 18.008 13.4921 18.008 13.4921 18.008C17.0249 18.0482 20.5568 17.8717 24.068 17.4794C24.6324 17.3335 25.1504 17.0463 25.573 16.6447C25.9839 16.2552 26.2813 15.7615 26.4335 15.2162C26.8217 13.179 27.0104 11.1089 26.9971 9.03512C27.0263 6.95258 26.8378 4.87269 26.4346 2.82933V2.83046ZM10.8015 12.8607V5.15889L17.843 9.01038L10.8015 12.8607Z"
                fill="#0E0F11" />
            </svg>
            Youtube
          </a>
          <a href="#">
            <svg viewBox="0 0 24 19" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M22.38 0.124929L1.12065 7.8635C-0.330214 8.41358 -0.321821 9.17759 0.85446 9.51829L6.31259 11.1255L18.9411 3.60429C19.5383 3.26133 20.0838 3.44582 19.6354 3.8216L9.40378 12.5381H9.40138L9.40378 12.5392L9.02727 17.85C9.57884 17.85 9.82225 17.6111 10.1316 17.3293L12.7827 14.8958L18.2972 18.7407C19.314 19.2693 20.0443 18.9977 20.2973 17.8522L23.9172 1.74803C24.2877 0.345643 23.3501 -0.289334 22.38 0.124929Z"
                fill="#0E0F11" />
            </svg>
            Telegram
          </a>
          <a href="#">
            <svg viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M21.2799 5.31861C17.8394 -0.00017582 10.815 -1.58144 5.36752 1.72484C0.0633816 5.03111 -1.65688 12.2187 1.78364 17.5375L2.07035 17.9687L0.923512 22.2812L5.22416 21.1312L5.65423 21.4187C7.51784 22.425 9.52481 23 11.5318 23C13.6821 23 15.8324 22.425 17.696 21.275C23.0002 17.825 24.5771 10.7812 21.2799 5.31861ZM18.2695 16.3874C17.696 17.25 16.9793 17.825 15.9758 17.9687C15.4024 17.9687 14.6856 18.2562 11.8185 17.1062C9.38145 15.9562 7.37449 14.0874 5.94094 11.9312C5.08081 10.9249 4.65074 9.63115 4.50739 8.33739C4.50739 7.18738 4.93745 6.18112 5.65423 5.46237C5.94094 5.17486 6.22765 5.03111 6.51436 5.03111H7.23113C7.51784 5.03111 7.80455 5.03111 7.94791 5.60612C8.23462 6.32487 8.95139 8.04989 8.95139 8.19364C9.09474 8.33739 9.09474 8.62489 8.95139 8.76864C9.09474 9.05614 8.95139 9.34365 8.80803 9.4874C8.66468 9.63115 8.52133 9.91865 8.37797 10.0624C8.09126 10.2062 7.94791 10.4937 8.09126 10.7812C8.66468 11.6437 9.38145 12.5062 10.0982 13.2249C10.9584 13.9437 11.8185 14.5187 12.822 14.9499C13.1087 15.0937 13.3954 15.0937 13.5387 14.8062C13.6821 14.5187 14.3989 13.7999 14.6856 13.5124C14.9723 13.2249 15.1157 13.2249 15.4024 13.3687L17.696 14.5187C17.9828 14.6624 18.2695 14.8062 18.4128 14.9499C18.5562 15.3812 18.5562 15.9562 18.2695 16.3874Z"
                fill="#0E0F11" />
            </svg>
            WhatsApp
          </a>
          <a href="#">
            <svg viewBox="0 0 14 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M9.5539 17.4423C10.8425 17.1503 12.0723 16.646 13.1921 15.9505C13.5868 15.6868 13.8624 15.2814 13.9606 14.8202C14.0588 14.3589 13.9718 13.878 13.7181 13.4791C13.4644 13.0801 13.0639 12.7946 12.6012 12.6827C12.1386 12.5709 11.6502 12.6416 11.2392 12.8798C9.97493 13.661 8.51444 14.0752 7.02401 14.0752C5.53357 14.0752 4.07308 13.661 2.80879 12.8798C2.39835 12.6237 1.90208 12.539 1.42868 12.6443C0.955282 12.7496 0.543337 13.0363 0.283067 13.4416V13.4453C0.15448 13.6466 0.0672866 13.871 0.0264854 14.1057C-0.0143158 14.3404 -0.00792291 14.5807 0.0452976 14.813C0.0985182 15.0452 0.19752 15.2648 0.336629 15.4591C0.475738 15.6534 0.65222 15.8186 0.855958 15.9452L0.858989 15.949C1.97583 16.6447 3.20364 17.1481 4.49033 17.4378L0.98933 20.9023C0.646535 21.2353 0.451159 21.6893 0.446045 22.1647C0.440931 22.6401 0.626497 23.0981 0.96205 23.4382L0.993119 23.469C1.34095 23.8237 1.81078 24 2.28061 24C2.75044 24 3.21951 23.8237 3.56658 23.469L7.02439 20.066L10.4617 23.4735C11.1922 24.1643 12.3524 24.1485 13.0557 23.4262C13.3857 23.0881 13.5701 22.6363 13.5701 22.1661C13.5701 21.696 13.3857 21.2442 13.0557 20.9061L9.5539 17.4423ZM7.02363 12.3878C8.68288 12.3868 10.2739 11.7341 11.4475 10.5732C12.621 9.41216 13.2812 7.83768 13.283 6.19539C13.283 2.78117 10.4731 0 7.02363 0C3.57416 0 0.764265 2.78117 0.764265 6.19539C0.76607 7.83803 1.42609 9.41289 2.59954 10.5745C3.77298 11.7361 5.36403 12.3895 7.02363 12.3915V12.3878ZM7.02363 3.63323C7.71005 3.63362 8.36824 3.90369 8.85361 4.38411C9.33899 4.86452 9.61185 5.51598 9.61225 6.19539C9.61205 6.87534 9.33943 7.52746 8.85416 8.00875C8.3689 8.49004 7.7106 8.76121 7.02363 8.7628C6.33637 8.76101 5.6778 8.4899 5.19198 8.00876C4.70615 7.52762 4.43262 6.87562 4.43122 6.19539C4.43362 5.5156 4.70752 4.86432 5.19317 4.38364C5.67882 3.90295 6.33682 3.63185 7.02363 3.62948V3.63323Z"
                fill="#0E0F11" />
            </svg>
            Одноклассники
          </a>
        </div>
      </div> -->
    </div>
    <div class="footer__bottom">
      <div>
        <p class="copy">© <?php the_field('copyright', 'option') ?></p>
      </div>
      <div class="footer__bottom__menu">
        <a href="/privacy-policy/">Политика конфиденциальности</a>
        <a href="/usloviya-ispolzovaniya/">Условия использования</a>
        <a href="/karta-sajta/">Карта сайта</a>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>

<!-- jQuery Modal -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />

<script async>
    function initializeYM() {
        console.log('initialize');
        var myMap,
            myPlacemark;

        myMap = new ymaps.Map("map", {
            center: [55.701648, 37.940220],
            zoom: 16
        });
        myMap.controls.remove('mapTools');
        myPlacemark = new ymaps.Placemark([55.701648, 37.940220], {
            iconLayout: 'default#image',
            iconImageSize: [25, 25],
            iconImageOffset: [-12, -40]
        });
        myMap.geoObjects.add(myPlacemark);
    }

    $(document).ready(function () {
        $('.map_inner').click(function () {
          console.log('click');
            if (!$('.map').hasClass('active')) {
                $('.map').addClass('active');
                $.getScript('https://api-maps.yandex.ru/2.1/?lang=ru_RU', function () {
                    ymaps.ready(function () {
                        initializeYM();
                    });
                });
            }
        });
    });
</script>

<script>
  const scroll = document.querySelector('.swiper-wrapper.container');
  var swiper = new Swiper(".slider-wrapper", {
    slidesPerView: 5,
    spaceBetween: 20,
    freeMode: {
      enabled: true,
      sticky: false,
      minimumVelocity: 5.50
    },
    // mousewheel: true,

    breakpoints: {
      // when window width is >= 320px
      320: {
        slidesPerView: 1,
        spaceBetween: 10
      },
      // when window width is >= 480px
      480: {
        slidesPerView: 2,
        spaceBetween: 5
      },
      // when window width is >= 640px
      769: {
        slidesPerView: 5,
        spaceBetween: 40
      },

      1023: {
        slidesPerView: 4,
        spaceBetween: 10
      },

      1439: {
        slidesPerView: 4,
        spaceBetween: 40
      },

      1800: {
        slidesPerView: 5,
        spaceBetween: 40
      }
    }
  });

  var event_status = false; // Статус события (ещё не произошло)

window.addEventListener("load", function () {

  // Страница загрузилась полностью

  ["mouseover", "click", "scroll"].forEach(function (event) {

    window.addEventListener(event, function () {
      console.log('произошло событие');

      // Произошло нужное событие (mouseover, click или scroll) с объектом window

      if (!event_status) {

        setTimeout(njumutfyjmutf, 1000);


        event_status = true; // Статус события (произошло)

      }

    }, {
      once: true
    });

  });

});

function njumutfyjmutf(){
  let GTMObject = document.createElement("script"); 
  GTMObject.src = 'https://www.googletagmanager.com/gtag/js?id=G-KXZNPMTTQW&l=dataLayer&cx=c'; 
  GTMObject.async = true; 
  document.body.appendChild(GTMObject); 
  let GTMObject2 = document.createElement("script"); 
  GTMObject2.innerHTML = "window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'UA-101836187-59');";

  document.body.appendChild(GTMObject2); 
  let GTMObject3 = document.createElement("script"); GTMObject3.innerHTML = "(function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)}; m[i].l=1*new Date(); for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }} k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)}) (window, document, 'script', 'https://mc.yandex.ru/metrika/tag.js', 'ym'); ym(93459805, 'init', { clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true});"; 
  document.body.appendChild(GTMObject3); 
  let GTMObject4 = document.createElement("noscript"); 
  GTMObject4.innerHTML = '<div><img src="https://mc.yandex.ru/watch/93459805" style="position:absolute; left:-9999px;" alt="" /></div>'; 
  document.body.appendChild(GTMObject4); 
  console.log('Добавили код'); 
} 
</script>


<?php wp_footer(); ?>

</body>

</html>