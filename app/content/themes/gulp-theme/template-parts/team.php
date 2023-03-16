<?php
/**
*Template name: Сотрудники
*/
get_header();
?>

<?php if( have_rows('sotrudniki') ): ?>
<section class="team team-page">
    <div class="container">
        <h1 class="title"><?php the_title(); ?></h1>
        <div class="team__content">
        
        <?php while( have_rows('sotrudniki') ): the_row(); 
            // переменные
            $imageSotrudnika = get_sub_field('kartinka_sotrudnika');
            $fioSotrudnika = get_sub_field('fio_sotrudnika');
            $dolznostSotrudnika = get_sub_field('dolzhnost_sotrudnika');
        ?>

            <div class="team__item">
                <img src="<?php echo $imageSotrudnika['url']; ?>" alt="<?php echo $imageSotrudnika['alt'] ?>" />
                <p class="name"><?php echo $fioSotrudnika; ?></p>
                <p class="job"><?php echo $dolznostSotrudnika; ?></p>
            </div>

        <?php endwhile; ?>

        </div>
    </div>
</section>
<?php endif; ?>


<?php theme_sidebar( 'form' ); ?>

<?php get_footer(); ?>