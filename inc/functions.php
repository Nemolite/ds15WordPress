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
 * Подключение OptionTree плагина в режиме разработки
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
 * Подключение верхнеt оменю
 */
if ( ! function_exists( 'ds15_theme_menu' ) ) {
	function ds15_theme_menu( ){
		register_nav_menus(
			array(	
				'top_row_menu' => esc_html__( 'Верхний ряд меню', 'ds15' ),
				'middle_row_menu' => esc_html__( 'Средний ряд меню', 'ds15' ),
			)
		);
	}
}
add_action( 'after_setup_theme', 'ds15_theme_menu' );

/**
 * Register Custom Navigation Walker
 */
require_once get_template_directory() . '/wp-bootstrap-navwalker/class-wp-bootstrap-navwalker.php';
