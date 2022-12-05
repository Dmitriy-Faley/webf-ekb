<!doctype html>
<html lang="ru-RU">

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo wp_get_document_title(); ?></title>
	<?php wp_head(); ?>

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800&display=swap"
		rel="stylesheet">

	<!-- <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> -->
</head>

<body <?php body_class(); ?>>

	<header class="header" id="header">
		<div class="container">
			<div class="header__menu">
				<a href="/" class="header__logo">
					<img src="<?php echo get_template_directory_uri() ?>/assets/img/logo.svg" alt="logo site" />
				</a>
				<div class="header__list">
					<nav class="one">
						<a href="#" class="menu-btn menu-hide">
							<span></span>
							<span></span>
							<span></span>
						</a>
						<ul class="topmenu">
							<li>
								<a href="#">Услуги<img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/arrow-menu.svg"
										class="arrow" alt="icon:arrow-menu" /></a>
								<ul class="submenu">
									<li><a href="television.html">Телевизоры</a></li>
									<li><a href="washer.html">Стиральные машины</a></li>
									<li><a href="coffee-machine.html">Кофемашины</a></li>
								</ul>
							</li>
							<li>
								<a href="#">О компании<img
										src="<?php echo get_template_directory_uri() ?>/assets/img/icons/arrow-menu.svg" class="arrow"
										alt="icon:arrow-menu" /></a>
								<ul class="submenu">
									<li><a href="television.html">Телевизоры</a></li>
									<li><a href="washer.html">Стиральные машины</a></li>
									<li><a href="coffee-machine.html">Кофемашины</a></li>
								</ul>
							</li>
							<li>
								<a href="#">Портфолио</a>
							</li>
							<li><a href="#">Контакты</a></li>
							<li><a href="#">Блог</a></li>
						</ul>
					</nav>
				</div>
				<div class="header__phone">
					<a href="tel:+7 (985) 193-82-42">+7 (985) 193-82-42</a>
				</div>
			</div>
		</div>
	</header>