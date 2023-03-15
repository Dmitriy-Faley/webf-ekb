<?php
/**
*Template name: Контакты
*/
get_header();
?>

<section class="contacts contacts-page">
  <div class="container">
    <h1 class="title contacts__title">Контакты</h1>
    <div class="contacts__info">
      <div class="address">
        <?php the_field('adres', 'option') ?>
      </div>
      <div class="data">
        <a href="mailto:<?php the_field('pochta', 'option') ?>"><?php the_field('pochta', 'option') ?></a>
        <a href="tel:<?php the_field('telefon', 'option') ?>"><?php the_field('telefon', 'option') ?></a>
      </div>
    </div>
    <div class="contacts__map">
      <iframe
        src="<?php the_field('ssylka_na_yandeks_kartu', 'option') ?>"
        width="100%" height="485" frameborder="0"></iframe>
    </div>
  </div>
</section>

<section class="connect">
  <div class="container">
    <div class="connect__content">
      <div class="connect__form">
        <p class="title">Связаться с нами</p>
        <?php echo do_shortcode('[contact-form-7 id="18" title="Связаться с нами"]'); ?>
      </div>
      <div class="connect__icons">
        <img class="icon" src="<?php echo get_template_directory_uri() ?>/assets/img/icons/ee.svg" alt="icon">
        <img class="icon" src="<?php echo get_template_directory_uri() ?>/assets/img/icons/about2.svg" alt="icon">
        <img class="icon" src="<?php echo get_template_directory_uri() ?>/assets/img/icons/about4.svg" alt="icon">
      </div>
    </div>
  </div>
</section>


<?php get_footer(); ?>
