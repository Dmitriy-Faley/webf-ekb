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
						'link_after'      => '<span></span>',
						'items_wrap'      => '<ul id="%1$s" class="header-menu__ul">%3$s</ul>',
						'depth'           => 0,
						'walker'          => '',
						] );?>

					<span class="closeMenu"></span>
				</nav>
				<nav class="block-mobile-menu">
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
							'link_after'      => '<span></span>',
							'items_wrap'      => '<ul id="%1$s" class="mobile-menu__ul">%3$s</ul>',
							'depth'           => 0,
							'walker'          => '',
						]);
					?>
				</nav>
				<div class="header__phone">
					<a href="tel:<?php the_field('telefon', 'option') ?>"><?php the_field('telefon', 'option') ?></a>
				</div>
			</div>
		</div>
	</header>

	<main>

	<script>
		<?php if(is_front_page()) { ?>

		const noClass = document.querySelectorAll(".header-menu__ul>li");

		noClass.forEach(el => {
			el.classList.remove('current-menu-ancestor');
			el.classList.remove('current-menu-parent');
		})
		<?php } ?>
	</script>



	<script>

		const nodeList = document.getElementsByTagName("a");
		const menuItemForStyles = [...nodeList];
		const body = document.body;

		//Laptop & PC
		const closeButton = document.querySelector(".closeMenu");
		const header = document.querySelector(".header");
		const headerMenu = document.querySelector(".header-menu__ul>li>ul");
		const headerMenuTwo = document.querySelectorAll(".header-menu__ul>li")[1];
		const menuTwo = headerMenuTwo.querySelector("ul");
		const arrows = [...document.querySelectorAll(".main-header-menu>ul>li>ul>li>a>span")];
		const subArrows = [...document.querySelectorAll(".main-header-menu>ul>li>ul>li>ul>li>a>span")];
		const subMenu = document.querySelector(".main-header-menu>ul>li>ul>li>ul");
		const subSubMenu = document.querySelector(".main-header-menu>ul>li>ul>li>ul>li>ul");
		const subSubElements = [...document.querySelectorAll(".main-header-menu>ul>li>ul>li>ul>li>ul>li")];

		//Tablet & Mobile
		const mobilHeaderMenu = document.querySelector(".mobile-menu__ul>li>ul");
		const openMobileMenu = document.querySelector(".menu__but-open");
		const closeMobileButton = document.querySelector(".menu__but-close");
		const secondLevel = document.querySelector(".block-mobile-menu>ul>li>ul");
		const thirdLevel = document.querySelector(".mobile-menu__ul>li>ul>li>ul");
		const fourthLevel = document.querySelector(".mobile-menu__ul>li>ul>li>ul>li>ul");
		const subSecondLevel = document.querySelectorAll(".mobile-menu__ul .sub-menu")[6];
		const firstLevelArrow = document.querySelectorAll(".mobile-menu__ul>li>a>span");
		const secondLevelArrow = document.querySelectorAll(".mobile-menu__ul>li>ul>li>a>span");
		const thirdLevelArrow = document.querySelectorAll(".mobile-menu__ul>li>ul>li>ul>li>a>span");
		const menuMobile = document.querySelector(".block-mobile-menu");

		const openSub = document.querySelector(".mobile-menu__ul");

		const firstArrows = [...firstLevelArrow];
		const secondArrows = [...secondLevelArrow];
		const thirdArrows = [...thirdLevelArrow];

		let count = 0;


		//open and close menu
		if(window.clientWidth >= 1369) {
			headerMenu.style.height = '712px';
		} else if (window.clientWidth <= 1368) {
			headerMenu.style.height = '512px';
		}
		
		if (document.documentElement.clientWidth > 1e3) {
			closeButton.style.display = 'none';

			function openSecondLevelMenu(e) {
				e.addEventListener("mouseover", l => {
					closeButton.style.display = "block", 
					header.classList.add("active_header"), 
					closeMenu(e.closest("ul")), 
					l.target.closest("li>a").classList.add("activeLi"), 
					l.target.closest("li").querySelector("ul") && (l.target.closest("li").querySelector("ul").classList.add("activeUl"), 
					openThirdLevelMenu());
					if(l.target.innerHTML === 'Портфолио<span></span>' || l.target.innerHTML === 'Контакты<span></span>' || l.target.innerHTML === 'Блог<span></span>') {
						l.target.classList.remove("activeLi");
					}
				})
			}

			function openThirdLevelMenu() {
				document.querySelectorAll(".activeUl>li>a").forEach(e => {
					e.parentNode.classList.add('activeLi')
					e.addEventListener("mouseover", e => {
						closeMenu(document.querySelector(".activeUl")), 
						e.target.classList.add("activeLi"), 
						e.target.closest("li").querySelector("ul") && (e.target.closest("li").querySelector("ul").classList.add("activeUl"), 
						hoverLastLinks(e.target.closest("li").querySelector("ul")));
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
						}), l.target.classList.add("activeLi");
							headerMenu.style.height = '1102px';
					})
					l.addEventListener("mouseleave", l => {
							headerMenu.style.height = '712px';
					})
				})
			}

			subSubMenu.addEventListener('mouseover', (e) => {
				subSubMenu.classList.add('activeUl');

				if(subSubMenu.classList.contains('activeUl')) {
					headerMenu.style.height = '1102px';
				} else {
					headerMenu.style.height = '712px';
				}
			});
			subSubMenu.addEventListener('mouseleave', (e) => {
				subSubMenu.classList.remove('activeUl');
			});

			subSubElements.forEach(el => {
				el.addEventListener('mouseover', (e) => {
					const parent = el.parentNode;
					parent.parentNode.classList.add('activeSub');
				});

				el.addEventListener('mouseleave', (e) => {
					const parent = el.parentNode;
					parent.parentNode.classList.remove('activeSub');
				});
			});

			document.querySelectorAll(".main-header-menu").forEach(e => {
					e.querySelector("ul") && e.querySelector("ul").classList.add("header-menu__ul")
				}), closeButton.onclick = (() => {
					closeMenu(document.querySelector(".activeUl")), closeMenu(document.querySelector(".header-menu__ul")),
						closeButton.style.display = "none", header.classList
						.remove("active_header")
				}), closeButton.style.display = "none", header.classList
				.remove("active_header"), document.querySelectorAll(".header-menu__ul>li>a").forEach(e => {
					openSecondLevelMenu(e)
				})

			window.addEventListener('mouseover', (e) => {
				if(e.target.innerHTML === "Портфолио<span></span>" || e.target.innerHTML === "Контакты<span></span>" || e.target.innerHTML === "Блог<span></span>") {
					closeButton.style.display = 'none';
					header.classList.remove('active_header');
				}
			})
			window.addEventListener('mouseleave', (e) => {
				if(e.target.innerHTML === "Портфолио<span></span>" || e.target.innerHTML === "Контакты<span></span>" || e.target.innerHTML === "Блог<span></span>") {
					closeButton.style.display = 'none';
					header.classList.remove('active_header');
				}
			})

			function activeSpan(arr) {
				arr.forEach(el => {
					el.addEventListener('mouseover', (e) => {
						el.classList.add('activeSpan');
						el.parentNode.classList.add('activeSpan');
						console.log('d')
					})
				})

				arr.forEach(el => {
					el.addEventListener('mouseleave', (e) => {
						el.classList.remove('activeSpan');
						el.classList.remove('activeLi');
						el.parentNode.classList.remove('activeLi');
						el.parentNode.classList.remove('activeSpan');
						console.log('s')
					})
				})
			}
			activeSpan(arrows);
			activeSpan(subArrows);

		} else if(window.innerWidth <= 768 && window.innerWidth >=320) {
			openMobileMenu.addEventListener('click', (e) => {
				menuMobile.classList.add('activeMenu');
				body.style.overflow = 'hidden';
				menuMobile.style.overflowY = 'auto';
				menuMobile.style.overflowX = 'hidden';
				

				if(menuMobile.classList.contains('activeMenu')) {
					openMobileMenu.style.display = 'none';
					closeMobileButton.style.display = 'block';
					menuMobile.style.transition = 'all 0.7s';
					document.querySelector(".header").style.backgroundColor = '#FFFFFF';
					document.querySelector(".header").style.transition = '';
				}
			})

			closeMobileButton.addEventListener('click', (e) => {
				menuMobile.classList.remove('activeMenu');
				body.style.overflow = '';
				menuMobile.style.overflowX = 'hidden';

				if(!menuMobile.classList.contains('activeMenu')) {
					openMobileMenu.style.display = 'block';
					closeMobileButton.style.display = 'none';
					document.querySelector(".header").style.backgroundColor = '';
					document.querySelector(".header").style.transition = '';
				}
			})

			firstArrows.forEach(el => {
				el.addEventListener('click', (e) => {
					e.preventDefault();
					if(el.parentNode.innerHTML === "О компании<span></span>") {
						secondLevel.classList.toggle('activeMobileUl');
						subSecondLevel.classList.toggle('activeMobileUl');
						el.parentNode.classList.toggle('activeMobilALarge');
						openSub.classList.toggle('sub-open');
					} else {
						secondLevel.classList.toggle('activeMobileUl');
						el.parentNode.classList.toggle('activeMobilA');
						openSub.classList.toggle('open');
					}

					if(e.target.elementName === "a") {
						return true;
					}
				})
			});

			secondArrows.forEach(el => {
				el.addEventListener('click', (e) => {
					e.preventDefault();
					thirdLevel.classList.toggle('activeMobileUl');
					el.parentNode.classList.toggle('activeMobilA');

					if(e.target.elementName === "a") {
						return true;
					}
				})
			});
 
			thirdArrows.forEach(el => {
				el.addEventListener('click', (e) => {
					e.preventDefault();
					fourthLevel.classList.toggle('activeMobileUl');
					el.parentNode.classList.toggle('activeMobilA');
					if(!fourthLevel.classList.contains('activeMobileUl')) {
						fourthLevel.style.display = 'none';
					} else {
						fourthLevel.style.display = 'block';
					}

					if(e.target.elementName === "a") {
						return true;
					}
				})
			})
		}
		
		window.addEventListener('click', (e) => {
			let target = e.target;
			if(headerMenu.classList.contains('activeUl') && target !== headerMenu) {
				closeButton.click();
			}
			if(menuTwo.classList.contains('activeUl') && target !== menuTwo) {
				closeButton.click();
			}
		})
	</script>
