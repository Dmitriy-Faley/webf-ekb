<?php get_header('shop'); ?>

<div class="content-page">
	<div class="wrapper">
		<div class="breadcrumbs"><?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?></div>
		<div class="container-title">
			<h2 class="title">Политика конфиденциальности</h2>
		</div>
		<p class="description_title">Обязательна к прочтению</p>
		<div class="content-politika">
		<?php the_content(); ?>
		</div>
	</div>
</div>
  
<?php get_footer(); ?>