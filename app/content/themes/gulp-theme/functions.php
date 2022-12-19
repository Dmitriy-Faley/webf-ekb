<?php

add_filter('show_admin_bar', '__return_false'); // отключить верхнюю панель администратора

// Register Style And Scripts
function gulp_scripts() {
  wp_enqueue_style( 'gulp-style', get_stylesheet_uri(), '1.1', true );
  wp_enqueue_style( 'gulp-main', get_template_directory_uri() . '/assets/main.min.css', '1.1', true );  
  
  wp_deregister_script( 'jquery' );
  wp_register_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', false, null, true );
  wp_enqueue_script( 'jquery' );
  
  // при подключении slick.min.js будут проблемы с работой слайдеров
  wp_enqueue_script( 'slick-script', get_template_directory_uri() . '/assets/js/slick.js', array(), '1.1', true ); 
  wp_enqueue_script( 'gulp-script', get_template_directory_uri() . '/assets/main.min.js', array(), '1.1', true );
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

add_filter('wpcf7_autop_or_not', '__return_false');


//отключаем обновление некоторых плагинов
//add_filter( 'site_transient_update_plugins', 'filter_plugin_updates' );
function filter_plugin_updates( $value ) {
	unset( $value->response['advanced-custom-fields-pro-master/acf.php'] );
	unset( $value->response['advanced-custom-fields/acf.php'] );
	return $value;
}
//отключаем обновление некоторых плагинов