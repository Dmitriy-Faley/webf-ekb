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


# Буквы в верхнем регистре 
# If there are caps, set HASCAPS to true and skip next rule
RewriteRule [A-Z] - [E=HASCAPS:TRUE,S=1]

# Skip this entire section if no uppercase letters in requested URL
RewriteRule ![A-Z] - [S=28]

# Replace single occurance of CAP with cap, then process next Rule.
RewriteRule ^([^A]*)A(.*)$ $1a$2
RewriteRule ^([^B]*)B(.*)$ $1b$2
RewriteRule ^([^C]*)C(.*)$ $1c$2
RewriteRule ^([^D]*)D(.*)$ $1d$2
RewriteRule ^([^E]*)E(.*)$ $1e$2
RewriteRule ^([^F]*)F(.*)$ $1f$2
RewriteRule ^([^G]*)G(.*)$ $1g$2
RewriteRule ^([^H]*)H(.*)$ $1h$2
RewriteRule ^([^I]*)I(.*)$ $1i$2
RewriteRule ^([^J]*)J(.*)$ $1j$2
RewriteRule ^([^K]*)K(.*)$ $1k$2
RewriteRule ^([^L]*)L(.*)$ $1l$2
RewriteRule ^([^M]*)M(.*)$ $1m$2
RewriteRule ^([^N]*)N(.*)$ $1n$2
RewriteRule ^([^O]*)O(.*)$ $1o$2
RewriteRule ^([^P]*)P(.*)$ $1p$2
RewriteRule ^([^Q]*)Q(.*)$ $1q$2
RewriteRule ^([^R]*)R(.*)$ $1r$2
RewriteRule ^([^S]*)S(.*)$ $1s$2
RewriteRule ^([^T]*)T(.*)$ $1t$2
RewriteRule ^([^U]*)U(.*)$ $1u$2
RewriteRule ^([^V]*)V(.*)$ $1v$2
RewriteRule ^([^W]*)W(.*)$ $1w$2
RewriteRule ^([^X]*)X(.*)$ $1x$2
RewriteRule ^([^Y]*)Y(.*)$ $1y$2
RewriteRule ^([^Z]*)Z(.*)$ $1z$2
# If there are any uppercase letters, restart at very first RewriteRule in file.
RewriteRule [A-Z] - [N]

RewriteCond %{ENV:HASCAPS} TRUE
RewriteRule ^/?(.*) /$1 [R=301,L]

#index.php
RewriteCond %{THE_REQUEST} ^[A-Z]{3,9}\ /index\.php\ HTTP/
RewriteRule ^index\.php$ https://%{HTTP_HOST}/$1 [R=301,L]

#index.html
Redirect 301 /index.html /

#Перенос сайта на версию с HTTPS (для всех страниц)
RewriteCond %{HTTPS} =off 
RewriteRule (.*) https://%{HTTP_HOST}%{REQUEST_URI} [QSA,L]
