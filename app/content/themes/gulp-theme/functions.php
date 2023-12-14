<?php

add_filter('show_admin_bar', '__return_false'); // отключить верхнюю панель администратора

// Register Style And Scripts
function gulp_scripts() {
  wp_enqueue_style( 'gulp-style', get_stylesheet_uri(), '1.1', true );
  wp_enqueue_style( 'gulp-main', get_template_directory_uri() . '/assets/main.min.css', '1.1', true );  
  
  wp_enqueue_script( 'gulp-script', get_template_directory_uri() . '/assets/main.min.js', array(), '1.1', true );
  wp_enqueue_script('apimaps', 'https://api-maps.yandex.ru/2.1/?lang=ru_RU', array('jquery'), true, true);
}
// Добавить скрипты и стили на сайт
add_action( 'wp_enqueue_scripts', 'gulp_scripts' );

function remove_styles () {
	//wp_deregister_style ('contact-form-7');
	wp_deregister_style ('wc-block-vendors-style');
	wp_deregister_style ('wc-block-style');
	wp_deregister_style ('wp-block-library');
}
add_action ('wp_print_styles','remove_styles',100);


add_filter( 'category_link', function($a){
	return str_replace( 'category/', '', $a );
}, 99 );
add_filter( 'post_link', function($a){
	return str_replace( 'category/', '', $a );
}, 99 );


/*
* Удаляем лишнее из шапки
*/
// Удаляет ссылки RSS-лент записи и комментариев
remove_action('wp_head', 'feed_links', 2);
// Удаляет ссылки RSS-лент категорий и архивов
remove_action('wp_head', 'feed_links_extra', 3);
// Удаляет RSD ссылку для удаленной публикации
remove_action('wp_head', 'rsd_link');
// Удаляет ссылку Windows для Live Writer
remove_action('wp_head', 'wlwmanifest_link');
// Удаляет короткую ссылку
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);
// Удаляет информацию о версии WordPress
remove_action('wp_head', 'wp_generator');
// Удаляет ссылки на предыдущую и следующую статьи
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);


//Удалить jquery_migrate
function wpschool_remove_jquery_migrate($scripts)
{
  if (!is_admin() && isset($scripts->registered['jquery'])) {
    $script = $scripts->registered['jquery'];
    if ($script->deps) {
      $script->deps = array_diff($script->deps, array('jquery-migrate'));
    }
  }
}
add_action('wp_default_scripts', 'wpschool_remove_jquery_migrate');

//Предзагрузите изображение для элемента "Отрисовка самого крупного контента"
function insert_counters_footer()
{
?>
  <link rel="preload" as="image" href="<?php echo get_template_directory_uri() ?>/assets/img/icons/lightning.svg" />
  <link rel="preload" as="image" href="<?php echo get_template_directory_uri() ?>/assets/img/icons/fire.svg" />
<?php
}
add_action('wp_footer', 'insert_counters_footer', 99);

function insert_counters_header()
{
?>
  <link rel="preload" as="image" href="<?php echo get_template_directory_uri() ?>/assets/img/icons/lightning.svg" />
  <link rel="preload" as="image" href="<?php echo get_template_directory_uri() ?>/assets/img/icons/fire.svg" />
<?php
}
add_action('wp_head', 'insert_counters_header', 99);




/* Удаление type="text/javascript" */
add_action( 'template_redirect', function(){
	ob_start( function( $buffer ){
		 $buffer = str_replace( array( 'type="text/javascript"', "type='text/javascript'" ), '', $buffer ); 
		 $buffer = str_replace( array( 'type="text/css"', "type='text/css'" ), '', $buffer );
		 return $buffer;
	});
});
// Start Remove Meta Generators
remove_action('wp_head', 'wp_generator');
// End Remove Meta Generators
// Start delete emoji
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );
// End delete emoji



if( function_exists('acf_set_options_page_title') ) {
	acf_set_options_page_title( __('Главные настройки') );
}


// Инициализация нескольких меню
add_action('after_setup_theme', function () {
	register_nav_menus([
		'button_menu' => 'button_menu',
	]);
});


// Добавление классов li 
function add_menu_link_class($atts, $item, $args)
{
	if (property_exists($args, 'link_class')) {
		$atts['class'] = $args->link_class;
	}
	return $atts;
}
add_filter('nav_menu_link_attributes', 'add_menu_link_class', 1, 3);


// Добавление классов li a
function add_menu_list_item_class($classes, $item, $args)
{
	if (property_exists($args, 'list_item_class')) {
		$classes[] = $args->list_item_class;
	}
	return $classes;
}
add_filter('nav_menu_css_class', 'add_menu_list_item_class', 1, 3);


//Добавление класса для форм
add_filter( 'wpcf7_form_class_attr', 'custom_custom_form_class_attr' );
function custom_custom_form_class_attr( $class ) {
  $class .= ' form';
  return $class;
}


add_filter( 'upload_mimes', 'svg_upload_allow' );
# Добавляет SVG в список разрешенных для загрузки файлов.
function svg_upload_allow( $mimes ) {
	$mimes['svg']  = 'image/svg+xml';
	return $mimes;
}


add_filter( 'wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 5 );
# Исправление MIME типа для SVG файлов.
function fix_svg_mime_type( $data, $file, $filename, $mimes, $real_mime = '' ){

	// WP 5.1 +
	if( version_compare( $GLOBALS['wp_version'], '5.1.0', '>=' ) )
		$dosvg = in_array( $real_mime, [ 'image/svg', 'image/svg+xml' ] );
	else
		$dosvg = ( '.svg' === strtolower( substr($filename, -4) ) );

	// mime тип был обнулен, поправим его
	// а также проверим право пользователя
	if( $dosvg ){

		// разрешим
		if( current_user_can('manage_options') ){

			$data['ext']  = 'svg';
			$data['type'] = 'image/svg+xml';
		}
		// запретим
		else {
			$data['ext'] = $type_and_ext['type'] = false;
		}

	}

	return $data;
}

add_filter( 'wp_prepare_attachment_for_js', 'show_svg_in_media_library' );
# Формирует данные для отображения SVG как изображения в медиабиблиотеке.
function show_svg_in_media_library( $response ) {

	if ( $response['mime'] === 'image/svg+xml' ) {

		// С выводом названия файла
		$response['image'] = [
			'src' => $response['url'],
		];
	}

	return $response;
}


//убрать тег <p> и <br> из формы Contact Form 7
add_filter('wpcf7_autop_or_not', '__return_false');


//отключаем обновление некоторых плагинов
//add_filter( 'site_transient_update_plugins', 'filter_plugin_updates' );
function filter_plugin_updates( $value ) {
	unset( $value->response['advanced-custom-fields-pro-master/acf.php'] );
	//unset( $value->response['advanced-custom-fields/acf.php'] );
	//unset( $value->response['contact-form-7/wp-contact-form-7.php'] );
	return $value;
}
//отключаем обновление некоторых плагинов


/*
 * "Хлебные крошки" для WordPress
 * автор: Starmedia
 * версия: 2019.03.03
 * лицензия: MIT
*/
function dimox_breadcrumbs() {

	/* === ОПЦИИ === */
	$text['home']     = 'Главная'; // текст ссылки "Главная"
	$text['category'] = '%s'; // текст для страницы рубрики
	$text['search']   = 'Результаты поиска по запросу "%s"'; // текст для страницы с результатами поиска
	$text['tag']      = 'Записи с тегом "%s"'; // текст для страницы тега
	$text['author']   = 'Статьи автора %s'; // текст для страницы автора
	$text['404']      = 'Ошибка 404'; // текст для страницы 404
	$text['page']     = 'Страница %s'; // текст 'Страница N'
	$text['cpage']    = 'Страница комментариев %s'; // текст 'Страница комментариев N'

	$wrap_before    = '<div class="container" itemscope itemtype="http://schema.org/BreadcrumbList">'; // открывающий тег обертки
	$wrap_after     = '</div><!-- .breadcrumbs -->'; // закрывающий тег обертки
	$sep            = '<span class="separator">/</span>'; // разделитель между "крошками"
	$before         = '<span class="breadcrumbs__current">'; // тег перед текущей "крошкой"
	$after          = '</span>'; // тег после текущей "крошки"

	$show_on_home   = 0; // 1 - показывать "хлебные крошки" на главной странице, 0 - не показывать
	$show_home_link = 1; // 1 - показывать ссылку "Главная", 0 - не показывать
	$show_current   = 1; // 1 - показывать название текущей страницы, 0 - не показывать
	$show_last_sep  = 1; // 1 - показывать последний разделитель, когда название текущей страницы не отображается, 0 - не показывать
	/* === КОНЕЦ ОПЦИЙ === */

	global $post;
	$home_url       = home_url('/');
	$link           = '<span class="link" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">';
	$link          .= '<a class="breadcrumbs__link" href="%1$s" itemprop="item"><span itemprop="name">%2$s</span></a>';
	$link          .= '<meta itemprop="position" content="%3$s" />';
	$link          .= '</span>';
	$parent_id      = ( $post ) ? $post->post_parent : '';
	$home_link      = sprintf( $link, $home_url, $text['home'], 1 );

	if ( is_home() || is_front_page() ) {

		if ( $show_on_home ) echo $wrap_before . $home_link . $wrap_after;

	} else {

		$position = 0;

		echo $wrap_before;

		if ( $show_home_link ) {
			$position += 1;
			echo $home_link;
		}

		if ( is_category() ) {
			$parents = get_ancestors( get_query_var('cat'), 'category' );
			foreach ( array_reverse( $parents ) as $cat ) {
				$position += 1;
				if ( $position > 1 ) echo $sep;
				echo sprintf( $link, get_category_link( $cat ), get_cat_name( $cat ), $position );
			}
			if ( get_query_var( 'paged' ) ) {
				$position += 1;
				$cat = get_query_var('cat');
				echo $sep . sprintf( $link, get_category_link( $cat ), get_cat_name( $cat ), $position );
				echo $sep . $before . sprintf( $text['page'], get_query_var( 'paged' ) ) . $after;
			} else {
				if ( $show_current ) {
					if ( $position >= 1 ) echo $sep;
					echo $before . sprintf( $text['category'], single_cat_title( '', false ) ) . $after;
				} elseif ( $show_last_sep ) echo $sep;
			}

		} elseif ( is_search() ) {
			if ( get_query_var( 'paged' ) ) {
				$position += 1;
				if ( $show_home_link ) echo $sep;
				echo sprintf( $link, $home_url . '?s=' . get_search_query(), sprintf( $text['search'], get_search_query() ), $position );
				echo $sep . $before . sprintf( $text['page'], get_query_var( 'paged' ) ) . $after;
			} else {
				if ( $show_current ) {
					if ( $position >= 1 ) echo $sep;
					echo $before . sprintf( $text['search'], get_search_query() ) . $after;
				} elseif ( $show_last_sep ) echo $sep;
			}

		} elseif ( is_year() ) {
			if ( $show_home_link && $show_current ) echo $sep;
			if ( $show_current ) echo $before . get_the_time('Y') . $after;
			elseif ( $show_home_link && $show_last_sep ) echo $sep;

		} elseif ( is_month() ) {
			if ( $show_home_link ) echo $sep;
			$position += 1;
			echo sprintf( $link, get_year_link( get_the_time('Y') ), get_the_time('Y'), $position );
			if ( $show_current ) echo $sep . $before . get_the_time('F') . $after;
			elseif ( $show_last_sep ) echo $sep;

		} elseif ( is_day() ) {
			if ( $show_home_link ) echo $sep;
			$position += 1;
			echo sprintf( $link, get_year_link( get_the_time('Y') ), get_the_time('Y'), $position ) . $sep;
			$position += 1;
			echo sprintf( $link, get_month_link( get_the_time('Y'), get_the_time('m') ), get_the_time('F'), $position );
			if ( $show_current ) echo $sep . $before . get_the_time('d') . $after;
			elseif ( $show_last_sep ) echo $sep;

		} elseif ( is_single() && ! is_attachment() ) {
			if ( get_post_type() != 'post' ) {
				$position += 1;
				$post_type = get_post_type_object( get_post_type() );
				if ( $position > 1 ) echo $sep;
				echo sprintf( $link, get_post_type_archive_link( $post_type->name ), $post_type->labels->name, $position );
				if ( $show_current ) echo $sep . $before . get_the_title() . $after;
				elseif ( $show_last_sep ) echo $sep;
			} else {
				$cat = get_the_category(); $catID = $cat[0]->cat_ID;
				$parents = get_ancestors( $catID, 'category' );
				$parents = array_reverse( $parents );
				$parents[] = $catID;
				foreach ( $parents as $cat ) {
					$position += 1;
					if ( $position > 1 ) echo $sep;
					echo sprintf( $link, get_category_link( $cat ), get_cat_name( $cat ), $position );
				}
				if ( get_query_var( 'cpage' ) ) {
					$position += 1;
					echo $sep . sprintf( $link, get_permalink(), get_the_title(), $position );
					echo $sep . $before . sprintf( $text['cpage'], get_query_var( 'cpage' ) ) . $after;
				} else {
					if ( $show_current ) echo $sep . $before . get_the_title() . $after;
					elseif ( $show_last_sep ) echo $sep;
				}
			}

		} elseif ( is_post_type_archive() ) {
			$post_type = get_post_type_object( get_post_type() );
			if ( get_query_var( 'paged' ) ) {
				$position += 1;
				if ( $position > 1 ) echo $sep;
				echo sprintf( $link, get_post_type_archive_link( $post_type->name ), $post_type->label, $position );
				echo $sep . $before . sprintf( $text['page'], get_query_var( 'paged' ) ) . $after;
			} else {
				if ( $show_home_link && $show_current ) echo $sep;
				if ( $show_current ) echo $before . $post_type->label . $after;
				elseif ( $show_home_link && $show_last_sep ) echo $sep;
			}

		} elseif ( is_attachment() ) {
			$parent = get_post( $parent_id );
			$cat = get_the_category( $parent->ID ); $catID = $cat[0]->cat_ID;
			$parents = get_ancestors( $catID, 'category' );
			$parents = array_reverse( $parents );
			$parents[] = $catID;
			foreach ( $parents as $cat ) {
				$position += 1;
				if ( $position > 1 ) echo $sep;
				echo sprintf( $link, get_category_link( $cat ), get_cat_name( $cat ), $position );
			}
			$position += 1;
			echo $sep . sprintf( $link, get_permalink( $parent ), $parent->post_title, $position );
			if ( $show_current ) echo $sep . $before . get_the_title() . $after;
			elseif ( $show_last_sep ) echo $sep;

		} elseif ( is_page() && ! $parent_id ) {
			if ( $show_home_link && $show_current ) echo $sep;
			if ( $show_current ) echo $before . get_the_title() . $after;
			elseif ( $show_home_link && $show_last_sep ) echo $sep;

		} elseif ( is_page() && $parent_id ) {
			$parents = get_post_ancestors( get_the_ID() );
			foreach ( array_reverse( $parents ) as $pageID ) {
				$position += 1;
				if ( $position > 1 ) echo $sep;
				echo sprintf( $link, get_page_link( $pageID ), get_the_title( $pageID ), $position );
			}
			if ( $show_current ) echo $sep . $before . get_the_title() . $after;
			elseif ( $show_last_sep ) echo $sep;

		} elseif ( is_tag() ) {
			if ( get_query_var( 'paged' ) ) {
				$position += 1;
				$tagID = get_query_var( 'tag_id' );
				echo $sep . sprintf( $link, get_tag_link( $tagID ), single_tag_title( '', false ), $position );
				echo $sep . $before . sprintf( $text['page'], get_query_var( 'paged' ) ) . $after;
			} else {
				if ( $show_home_link && $show_current ) echo $sep;
				if ( $show_current ) echo $before . sprintf( $text['tag'], single_tag_title( '', false ) ) . $after;
				elseif ( $show_home_link && $show_last_sep ) echo $sep;
			}

		} elseif ( is_author() ) {
			$author = get_userdata( get_query_var( 'author' ) );
			if ( get_query_var( 'paged' ) ) {
				$position += 1;
				echo $sep . sprintf( $link, get_author_posts_url( $author->ID ), sprintf( $text['author'], $author->display_name ), $position );
				echo $sep . $before . sprintf( $text['page'], get_query_var( 'paged' ) ) . $after;
			} else {
				if ( $show_home_link && $show_current ) echo $sep;
				if ( $show_current ) echo $before . sprintf( $text['author'], $author->display_name ) . $after;
				elseif ( $show_home_link && $show_last_sep ) echo $sep;
			}

		} elseif ( is_404() ) {
			if ( $show_home_link && $show_current ) echo $sep;
			if ( $show_current ) echo $before . $text['404'] . $after;
			elseif ( $show_last_sep ) echo $sep;

		} elseif ( has_post_format() && ! is_singular() ) {
			if ( $show_home_link && $show_current ) echo $sep;
			echo get_post_format_string( get_post_format() );
		}

		echo $wrap_after;

	}
} // end of dimox_breadcrumbs()



// Подключит файл 'inc/sidebar.php' из папки текущей темы.
function theme_sidebar( $name = '' ){
	do_action( 'get_sidebar', $name );

	if( $name )
		$name = "-$name";

	locate_template( "inc/sidebar$name.php", true );
}



//классов от cf7
/*
add_filter('wpcf7_form_elements', function ($content) {
	$content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);
	return $content;
  });
*/



add_filter( 'wp_nav_menu_objects', 'submenu_limit', 10, 2 );
function submenu_limit( $items, $args ) {
    if ( empty( $args->submenu ) ) {
        return $items;
    }
    $ids = wp_filter_object_list( $items, array( 'title' => $args->submenu ), 'and', 'ID' );
    $parent_id = array_pop( $ids );
    $children  = submenu_get_children_ids( $parent_id, $items );
 
    foreach ( $items as $key => $item ) {
        if ( ! in_array( $item->ID, $children ) ) {
            unset( $items[$key] );
        }
    }
    return $items;
}
 
function submenu_get_children_ids( $id, $items ) {
    $ids = wp_filter_object_list( $items, array( 'menu_item_parent' => $id ), 'and', 'ID' );
    foreach ( $ids as $id ) {
        $ids = array_merge( $ids, submenu_get_children_ids( $id, $items ) );
    }
    return $ids;
}

// расчет времени чтения статьи
if ( ! function_exists( 'gp_read_time' ) ) {
		function gp_read_time() {
			$text = get_the_content( '' );
			$words = str_word_count( strip_tags( $text ), 0, 'абвгдеёжзийклмнопрстуфхцчшщъыьэюяАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯ' );
			if ( !empty( $words ) ) {
				$time_in_minutes = ceil( $words / 200 );
				return $time_in_minutes;
			}
			return false;
		}
	}

if ( function_exists( 'add_theme_support' ) ) add_theme_support( 'post-thumbnails' );

/**
 * Filters the sorted list of menu item objects before generating the menu's HTML.
 *
 * @param array $sorted_menu_items The menu items, sorted by each menu item's menu order.
 * @param stdClass $args An object containing wp_nav_menu() arguments.
 *
 * @return array
 */

// фильтр который оставит только подпункты определенного меню с ID=37
function wp_nav_menu_objects_filter($sorted_menu_items, $args)
{
    if ('button_menu' !== $args->menu) {
        return $sorted_menu_items;
    }

    $items        = array();
    $parents       = array();
    $parents[]     = 9; //ID пункта нашего меню чьё подменю надо вывести.

    foreach ($sorted_menu_items as $item) {
        if (in_array(intval($item->menu_item_parent), $parents, true)) {
            $items[] = $item;
            $parents[] = $item->ID;
            continue;
        }
    }

    return $items;
}


//регистрация портфолио 

add_action( 'init', 'register_keys_post_type' );

// Отфильтруем ЧПУ произвольного типа
add_filter( 'post_type_link', 'keys_permalink', 1, 2 );

function register_keys_post_type() {

	// Раздел вопроса - keyscat
	register_taxonomy( 'keyscat', [ 'keys' ], [
		'label'                 => 'Раздел портфолио', // определяется параметром $labels->name
		'labels'                => array(
			'name'              => 'Разделы портфолио',
			'singular_name'     => 'Раздел портфолио',
			'search_items'      => 'Искать Раздел портфолио',
			'all_items'         => 'Все Разделы портфолио',
			'parent_item'       => 'Родит. раздел портфолио',
			'parent_item_colon' => 'Родит. раздел портфолио:',
			'edit_item'         => 'Ред. Раздел портфолио',
			'update_item'       => 'Обновить Раздел портфолио',
			'add_new_item'      => 'Добавить Раздел портфолио',
			'new_item_name'     => 'Новый Раздел портфолио',
			'menu_name'         => 'Раздел портфолио',
		),
		'description'           => 'Рубрики для раздела портфолио', // описание таксономии
		'public'                => true,
		'show_in_nav_menus'     => false, // равен аргументу public
		'show_ui'               => true, // равен аргументу public
		'show_tagcloud'         => false, // равен аргументу show_ui
		'hierarchical'          => true,
		'rewrite'               => array('slug'=>'keys', 'hierarchical'=>false, 'with_front'=>false, 'feed'=>false ),
		'show_admin_column'     => true, // Позволить или нет авто-создание колонки таксономии в таблице ассоциированного типа записи. (с версии 3.5)
	] );

	// тип записи - вопросы - keys
	register_post_type( 'keys', [
		'labels'             => array(
			'name'               => 'Портфолио', // Основное название типа записи
			'singular_name'      => 'Кейс', // отдельное название записи типа Book
			'add_new'            => 'Добавить новый',
			'add_new_item'       => 'Добавить новый кейс',
			'edit_item'          => 'Редактировать кейс',
			'new_item'           => 'Новый кейс',
			'view_item'          => 'Посмотреть кейс',
			'search_items'       => 'Найти кейс',
			'not_found'          => 'Кейсы не найдены',
			'not_found_in_trash' => 'В корзине кейсов не найдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'Портфолио',
			'attributes'     	 => 'page-attributes',
		),
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true,
		'show_ui'             => true,
		'show_in_rest'        => false,
		'rest_base'           => '',
		'show_in_menu'        => true,
		'exclude_from_search' => false,
		'capability_type'     => 'post',
		'map_meta_cap'        => true,
		'hierarchical'        => true,
		'rewrite'             => array( 'slug'=>'keys/%keyscat%', 'with_front'=>false, 'pages'=>false, 'feeds'=>false, 'feed'=>false ),
		'has_archive'         => 'keys',
		'query_var'           => true,
		'supports'            => array( 'title', 'editor', 'page-attributes' , 'thumbnail'),
		'taxonomies'          => array( 'keyscat' ),
	] );

}

function keys_permalink( $permalink, $post ){

	// выходим если это не наш тип записи: без холдера %keyscat%
	if( strpos( $permalink, '%keyscat%' ) === false ){
		return $permalink;
	}

	// Получаем элементы таксы
	$terms = get_the_terms( $post, 'keyscat' );
	// если есть элемент заменим холдер
	if( ! is_wp_error( $terms ) && !empty( $terms ) && is_object( $terms[0] ) ){
		$term_slug = array_pop( $terms )->slug;
	}
	// элемента нет, а должен быть...
	else {
		$term_slug = 'no-keyscat';
	}

	return str_replace( '%keyscat%', $term_slug, $permalink );
}



//AJAX-подгрузка постов

add_action("wp_ajax_load_more", "load_posts");
add_action("wp_ajax_nopriv_load_more", "load_posts");
function load_posts()
{
    $args = json_decode(stripslashes($_POST["query"]), true);
    $args["paged"] = $_POST["page"] + 1;
	$args["posts_per_page"] = 9;
	$args["post_type"] = 'post';

    $wpb_all_query = new WP_Query($args);
    $html = '';

    if ($wpb_all_query->have_posts()) : while ($wpb_all_query->have_posts()) : $wpb_all_query->the_post();

			?>
			<div class="projects__content__item <?php $post_categories = get_the_category($wpb_all_query->the_post->ID);
                                   foreach ($post_categories as $post_category) {
                                      echo ' '. $post_category->slug.' ';
                                    }; ?>">
                        <div>
                            <a href="<?php the_permalink(); ?>" class="item__img">
                                <?php the_post_thumbnail(); ?>
                            </a>
                        </div>
                        <div class="item__data">
                            <div class="data__teg">
                                   <?php $post_categories = get_the_category($wpb_all_query->the_post->ID);
                                   foreach ($post_categories as $post_category) {
                                       echo '<span  href="#" data-id="' . intval($post_category->term_id) . '"  data-link="' . get_category_link($post_category->term_id) . '">' . $post_category->name . '</span>';
                                    }; ?>
                            </div>
                            <div class="data__info">
                                <a href="<?php the_permalink(); ?>" class="title"><?php the_title(); ?></a>
                                <p class="desk"><?php echo get_the_date()?></p>
                            </div>
                        </div>
                    </div>
		<?php 

        endwhile;
    endif;

    wp_reset_postdata();
    die($html);
}

//AJAX-подгрузка портфолио

add_action("wp_ajax_load_more__portf", "load_portf");
add_action("wp_ajax_nopriv_load_more__portf", "load_portf");
function load_portf()
{
    $args = json_decode(stripslashes($_POST["query"]), true);
    $args["paged"] = $_POST["page"] + 1;
	$args["posts_per_page"] = 3;
	$args["post_type"] = 'keys';
	$args["tax_query"] = array(
		array(
			'taxonomy' => 'keyscat',
			'field'    => 'id',
			'terms'    => '27'
		)
	);


    $wpb_all_query = new WP_Query($args);
    $html = '';

    if ($wpb_all_query->have_posts()) : while ($wpb_all_query->have_posts()) : $wpb_all_query->the_post();

			?>
			<div class="projects__content__item <?php $post_categories = get_the_category($wpb_all_query->the_post->ID);
                                   foreach ($post_categories as $post_category) {
                                      echo ' '. $post_category->slug.' ';
                                    }; ?>">
                        <div>
                            <a href="<?php the_permalink(); ?>" class="item__img">
                                <?php the_post_thumbnail(); ?>
                            </a>
                        </div>
                        <div class="item__data">
                            <div class="data__teg">
                                   <?php $post_categories = get_the_category($wpb_all_query->the_post->ID);
                                   foreach ($post_categories as $post_category) {
                                       echo '<span  href="#" data-id="' . intval($post_category->term_id) . '"  data-link="' . get_category_link($post_category->term_id) . '">' . $post_category->name . '</span>';
                                    }; ?>
                            </div>
                            <div class="data__info">
                                <a href="<?php the_permalink(); ?>" class="title"><?php the_title(); ?></a>
                                <p class="desk"><?php echo get_the_date()?></p>
                            </div>
                        </div>
                    </div>
		<?php 

        endwhile;
    endif;

    wp_reset_postdata();
    die($html);
}

//удаляет url для сертификатов
add_action('template_redirect', 'remove_wp_cases_tag_archives');

function remove_wp_cases_tag_archives()
{

  if (is_category()) {

    global $wp_query;
    $wp_query->set_404();
    status_header(404);
    nocache_headers();
    get_template_part('404');
    die();
  }
}

//map
