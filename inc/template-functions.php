<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package ds15
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function ds15_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'ds15_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function ds15_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'ds15_pingback_header' );

/**
 *  Получение всех новосетй
 */
function ds15_display_all_news(){
	
$paged = get_query_var('paged') ? get_query_var('paged') : 1;
    $result_array = array();
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 10, 
		'paged' => $paged,                               
               
    );
    $query = new WP_Query($args);
    if( $query->have_posts() ){
        while( $query->have_posts() ){            
			$query->the_post();
			get_template_part('inc/content','news');								
        }
				     
    }	
    wp_reset_postdata();

	do_action('pagination_all_news',$query->max_num_pages);
		
	return $result_array;
}
add_action( 'display_all_news', 'ds15_display_all_news' );

/**
 *  Пагинация для страницы шаблона новостей
 */

 function ds15_pagination_news($pages = '', $range = 4)
 {  
	$showitems = ($range * 2)+1;  

	global $paged;
	if(empty($paged)) $paged = 1;

	if($pages == '')
	{
		global $wp_query;
		$pages = $wp_query->max_num_pages;
		if(!$pages)
		{
			$pages = 1;
		}
	}   

	if(1 != $pages)
	{
		echo "<div class=\"pagination\"><span>Страниц ".$paged." из ".$pages."</span>";
		if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo; First</a>";
		if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo; Previous</a>";

		for ($i=1; $i <= $pages; $i++)
		{
			if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
			{
				echo ($paged == $i)? "<span class=\"current\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a>";
			}
		}

		if ($paged < $pages && $showitems < $pages) echo "<a href=\"".get_pagenum_link($paged + 1)."\">Next &rsaquo;</a>";  
		if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>Last &raquo;</a>";
		echo "</div>\n";
	}
}
 add_action( 'pagination_all_news', 'ds15_pagination_news',10,2 );


 
