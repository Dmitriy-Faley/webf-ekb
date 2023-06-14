<?php
/**
*Template name: Контакты
*/
get_header();
?>

<section class="contacts contacts-page">
  <div class="container">
    <h1 class="title contacts__title"><?php the_title(); ?></h1>
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


<?php theme_sidebar( 'form' ); ?>


<?php get_footer(); ?>
