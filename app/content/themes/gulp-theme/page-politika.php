<?php
/**
*Template name: Политика
*/
get_header();
?>

<div class="container">
<div class="content-page">
	<div class="wrapper">
		<div class="breadcrumbs"><?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?></div>
		<div class="politik_title">
			<h1 class="title"><?php the_title(); ?></h1>
		</div>
		<div class="content-politika">
		<?php the_content(); ?>
		</div>
	</div>
</div>
</div>

<div class="politika_form">
	<?php theme_sidebar( 'form' ); ?>
</div>

  
<?php get_footer(); ?>