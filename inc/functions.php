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
