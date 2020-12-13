<?php
/**
 *  Подключение плагина OptionTree
 *  Required: set 'ot_theme_mode' filter to true. * 
 */

add_filter( 'ot_theme_mode', '__return_true' );
add_filter( 'ot_show_new_layout', '__return_false' );//Для консоли админки 
add_filter( 'ot_show_pages', '__return_true' );

/**
 * Required: include OptionTree.
 * Подключение OptionTree плагина в режиме разрабоки
 */
require( trailingslashit( get_template_directory() ) . '/option-tree/ot-loader.php' );
require( trailingslashit( get_template_directory() ) . '/template-parts/meta-boxes.php' );
require( trailingslashit( get_template_directory() ) . '/template-parts/theme-options.php' );

function theme_options_parent($parent ) {
	$parent = '';
	return $parent;
}
add_filter( 'ot_theme_options_parent_slug', 'theme_options_parent',20 );

/**
 * Подключение средних банеров
 *  
 * @return void
 */
function ds15_widgets_middle_baners_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Средние банеры', 'ds15' ),
			'id'            => 'sidebar-middle-baners',
			'description'   => esc_html__( 'Добавьте бенеры сюда', 'ds15' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}

add_action( 'widgets_init', 'ds15_widgets_middle_baners_init' );