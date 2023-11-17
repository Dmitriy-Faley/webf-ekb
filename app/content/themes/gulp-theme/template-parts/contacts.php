<?php
/**
*Template name: Контакты
*/
get_header();
?>

<section class="contacts contacts-page">
  <div class="container">
    <div class="breadcrumbs"><?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?></div>
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
      <div id="map1" class="map"></div>
    </div>
  </div>
</section>


<?php theme_sidebar( 'form' ); ?>


<?php get_footer(); ?>
