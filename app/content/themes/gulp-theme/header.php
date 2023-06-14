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

	<!-- Link Swiper's CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />

	<!-- <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> -->
</head>

<body <?php body_class(); ?>>

	<div class="nav__menu-btn--mobile">
		<div class="wrapper-menu">
			<div class="line-menu half start"></div>
			<div class="line-menu line-menu"></div>
			<div class="line-menu half end"></div>
		</div>
	</div>

	<header class="header" id="header">
		<div class="container">
			<div class="header__menu">
				<a href="/" class="header__logo">
					<img src="<?php echo get_template_directory_uri() ?>/assets/img/logo.svg" alt="logo site" />
				</a>
				<a class="menu__but-open activeBut">
					<span></span>
				</a>
				<div class="menu__but-close"></div>
				<nav class="main-header-menu">
					<?php
						wp_nav_menu( [
						'menu'            => '', 
						'container'       => false, 
						'container_class' => '', 
						'container_id'    => '',
						'menu_class'      => 'main-header-menu', 
						'menu_id'         => '',
						'echo'            => true,
						'theme_location'  => 'button_menu',
						'fallback_cb'     => 'wp_page_menu',
						'before'          => '',
						'after'           => '',
						'link_before'     => '',
						'link_after'      => '',
						'items_wrap'      => '<ul id="%1$s" class="header-menu__ul">%3$s</ul>',
						'depth'           => 0,
						'walker'          => '',
						] );?>

					<span class="closeMenu"></span>
				</nav>
				<div class="header__phone">
					<a href="tel:<?php the_field('telefon', 'option') ?>"><?php the_field('telefon', 'option') ?></a>
				</div>
			</div>
		</div>
	</header>


	<div class="block-mobile-menu">
		<?php
			wp_nav_menu( [
				'menu'            => '', 
				'container'       => false, 
				'container_class' => '', 
				'container_id'    => '',
				'menu_class'      => 'block-mobile-menu', 
				'menu_id'         => '',
				'echo'            => true,
					'theme_location'  => 'button_menu',
				'fallback_cb'     => 'wp_page_menu',
				'before'          => '',
				'after'           => '',
				'link_before'     => '',
				'link_after'      => '',
				'items_wrap'      => '<ul id="%1$s" class="mobile-menu__ul">%3$s</ul>',
				'depth'           => 0,
				'walker'          => '',
			]);
		?>

		<ul class="mobile-menu__ul">
			<li><a href="https://web-f.ru/kejsy/">Портфолио</a></li>
			<li><a href="https://web-f.ru/ceny/">Цены</a></li>
			<li><a href="https://web-f.ru/kontakty/">Контакты</a></li>
			<li><a href="https://web-f.ru/blog/">Блог</a></li>
		</ul>
		<ul class="mobile-menu__ul">
			<li><a href="https://t.me/Web_Focus">
				<img src="https://web-f.ru/wp-content/uploads/2022/04/telegtam-header.svg"
						class="contact-link-icon" alt="icon: telegram">Telegram</a></li>
			<li><a href="https://wa.me/79851938242"> <img
						src="https://web-f.ru/wp-content/uploads/2022/04/whatsapp-header.svg" class="contact-link-icon"
						alt="icon: whatsapp">WhatsApp</a></li>
		</ul>
	</div>

	<main>


	<script>
		if (document.documentElement.clientWidth > 1e3) {
			function openSecondLevelMenu(e) {
				e.addEventListener("mouseover", l => {
					document.querySelector(".closeMenu").style.display = "block", document.querySelector(".header").classList
						.add("active_header"), closeMenu(e.closest("ul")), l.target.closest("li>a").classList.add("activeLi"), l
						.target.closest("li").querySelector("ul") && (l.target.closest("li").querySelector("ul").classList.add(
							"activeUl"), openThirdLevelMenu())
				})
			}

			function openThirdLevelMenu() {
				document.querySelectorAll(".activeUl>li>a").forEach(e => {
					e.addEventListener("mouseover", e => {
						closeMenu(document.querySelector(".activeUl")), e.target.classList.add("activeLi"), e.target.closest(
							"li").querySelector("ul") && (e.target.closest("li").querySelector("ul").classList.add(
							"activeUl"), hoverLastLinks(e.target.closest("li").querySelector("ul")))
					})
				})
			}

			function closeMenu(e) {
				e.querySelectorAll("li>a").forEach(e => {
					e.classList.contains("activeLi") && e.classList.remove("activeLi")
				}), e.querySelectorAll("li>ul").forEach(e => {
					e.classList.contains("activeUl") && e.classList.remove("activeUl")
				})
			}

			function hoverLastLinks(e) {
				e.querySelectorAll("li>a").forEach(l => {
					l.addEventListener("mouseover", l => {
						e.querySelectorAll("li>a").forEach(e => {
							e.classList.contains("activeLi") && e.classList.remove("activeLi")
						}), l.target.classList.add("activeLi")
					})
				})
			}
			document.querySelectorAll(".main-header-menu").forEach(e => {
					e.querySelector("ul") && e.querySelector("ul").classList.add("header-menu__ul")
				}), document.querySelector(".closeMenu").onclick = (() => {
					closeMenu(document.querySelector(".activeUl")), closeMenu(document.querySelector(".header-menu__ul")),
						document.querySelector(".closeMenu").style.display = "none", document.querySelector(".header").classList
						.remove("active_header")
				}), document.querySelector(".closeMenu").style.display = "none", document.querySelector(".header").classList
				.remove("active_header"), document.querySelectorAll(".header-menu__ul>li>a").forEach(e => {
					openSecondLevelMenu(e)
				})
		} else {
			function openMobileMenu() {
				let e;
				document.addEventListener("click", l => {
					if (l.target == e) return closeMobileMenu(l.target.closest("ul")), openMobileMenu();
					e = l.target, closeMobileMenu(l.target.closest("ul")), l.target.closest("li") && (l.target.closest("li")
						.classList.add("activeMobileLI"), l.target.closest("li").querySelector("a").classList.add(
							"activeMobileLI"), l.target.closest("li").querySelector("ul") && l.target.closest("li").querySelector(
							"ul").classList.add("activeMobileUl"))
				})
			}

			function closeMobileMenu(e) {
				e && (e.querySelectorAll("li>a").forEach(e => {
					e.classList.contains("activeMobileLI") && (e.closest("li").classList.remove("activeMobileLI"), e.classList
						.remove("activeMobileLI"))
				}), e.querySelectorAll("li>ul").forEach(e => {
					e.classList.contains("activeMobileUl") && e.classList.remove("activeMobileUl")
				}))
			}
			document.querySelectorAll(".block-mobile-menu").forEach(e => {
				e.querySelector("ul") && e.querySelector("ul").classList.add("mobile-menu__ul")
			}), document.querySelector(".menu__but-open").onclick = (() => {
				document.querySelector(".menu__but-open").classList.remove("activeBut"), document.querySelector(
						".menu__but-close").classList.add("activeBut"), document.querySelector(".block-mobile-menu").classList
					.add("activeMenu"), document.querySelector(".header").classList
						.add("active_header")
			}), document.querySelector(".menu__but-close").onclick = (() => {
				document.querySelector(".menu__but-close").classList.remove("activeBut"), document.querySelector(
						".menu__but-open").classList.add("activeBut"), document.querySelector(".block-mobile-menu").classList
					.remove("activeMenu"), document.querySelector(".header").classList
						.remove("active_header")
			}), document.querySelectorAll(".mobile-menu__ul li").forEach(e => {
				if (e.querySelector("ul")) {
					let l = document.createElement("span");
					l.classList.add("mobileArrow"), e.append(l)
				}
			}), openMobileMenu()
		}
	</script>