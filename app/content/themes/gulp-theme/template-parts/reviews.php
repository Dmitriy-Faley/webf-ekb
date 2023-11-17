<?php
/**
*Template name: Отзывы
*/
get_header();
?>

<?php if( have_rows('otzyvy') ): ?>
<section class="reviews-page">
    <div class="container">
        <div class="breadcrumbs"><?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?></div>
        <h1 class="title">Отзывы</h1>
        <div class="reviews__content">

            <?php while( have_rows('otzyvy') ): the_row(); 
                // переменные
                $imageRev = get_sub_field('kartinka_otzyva');
                $fioRev = get_sub_field('fio_otzyva');
                $dolzhostRev = get_sub_field('dolzhnost_otzyva');
                $textRev = get_sub_field('tekst_otzyva');
            ?>

            <div class="reviews__item">
                <div class="item__info">
                   	<?php if ( $imageRev ) { ?>
                        <img src="<?php echo $imageRev['url']; ?>" alt="<?php echo $imageRev['alt'] ?>" />
                    <?php } 
                    else { ?>
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/review-no.png" alt="review">
                    <?php } ?>
                    <div>
                        <p class="name"><?php echo $fioRev; ?></p>
                        <p class="job"><?php echo $dolzhostRev; ?></p>
                    </div>
                </div>
                <div class="item__text">
                    <?php echo $textRev; ?>
                </div>
            </div>

            <?php endwhile; ?>

        </div>
    </div>
</section>
<?php endif; ?>




<?php theme_sidebar( 'form' ); ?>

<?php get_footer(); ?>