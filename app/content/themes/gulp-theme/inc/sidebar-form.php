<section class="connect <?php if ( is_page( '60' ) ) {echo 'team-from';} ?> ">
  <div class="container">
    <div class="connect__content">
      <div class="connect__form">
        <p class="title">Связаться с нами</p>
        <!-- <form method="post" class="form">
          <input type="text" name="name" placeholder="Имя" required minlength="2" />
          <input type="tel" name="phone" placeholder="Телефон" required />
          <div class="form__button">
            <button class="button">Отправить</button>
            <p>Нажимая на кнопку "Отправить", вы соглашаетесь с <a href="#">условиями политики конфиденциальности</a>
            </p>
          </div>
        </form> -->
        <?php echo do_shortcode('[contact-form-7 id="18" title="Связаться с нами"]'); ?>
      </div>
      <div class="connect__icons">
        <img class="icon one" src="<?php echo get_template_directory_uri() ?>/assets/img/icons/ee.svg" alt="icon">
        <img class="icon two" src="<?php echo get_template_directory_uri() ?>/assets/img/icons/about2.svg" alt="icon">
        <img class="icon three" src="<?php echo get_template_directory_uri() ?>/assets/img/icons/about4.svg" alt="icon">
      </div>
    </div>
  </div>
</section>