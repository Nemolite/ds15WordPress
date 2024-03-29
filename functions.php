<?php
/**
 * ds15 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ds15
 */
if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'ds15_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function ds15_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on ds15, use a find and replace
		 * to change 'ds15' to the name of your theme in all the template files.
		 */
		 
		load_theme_textdomain( 'ds15', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		/**
		 * Корректировка вывода миниатюр
 		*/
		set_post_thumbnail_size( 193, 200, true );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'ds15_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);

	}
endif;
add_action( 'after_setup_theme', 'ds15_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function ds15_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'ds15_content_width', 640 );
}
add_action( 'after_setup_theme', 'ds15_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ds15_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'ds15' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'ds15' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title fix-widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'ds15_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function ds15_scripts() {
	wp_enqueue_style( 'ds15-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'ds15bootstrap', get_template_directory_uri() . '/vendor/css/bootstrap.css', array(), _S_VERSION );
	wp_enqueue_style( 'ds15bootstraptheme', get_template_directory_uri() . '/vendor/css/bootstrap-theme.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'ds15owlcarouselmin', get_template_directory_uri() . '/vendor/css/owl.carousel.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'ds15owlthemedefaultmin', get_template_directory_uri() . '/vendor/css/owl.theme.default.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'ds15slick', get_template_directory_uri() . '/vendor/slick/slick.css', array(), _S_VERSION );
	wp_enqueue_style( 'ds15slicktheme', get_template_directory_uri() . '/vendor/slick/slick-theme.css', array(), _S_VERSION );
	wp_enqueue_style( 'ds15stylename', get_template_directory_uri() . '/vendor/css/stylename.css', array(), _S_VERSION );
	wp_enqueue_style( 'ds15style', get_template_directory_uri() . '/vendor/css/style.css', array(), _S_VERSION );
	wp_enqueue_style( 'ds15fancybox', get_template_directory_uri() . '/vendor/css/jquery.fancybox.min.css', array(), _S_VERSION );	
	
	wp_style_add_data( 'ds15-style', 'rtl', 'replace' );

	wp_enqueue_script( 'ds15-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'jquery2', get_template_directory_uri() . '/vendor/js/jquery-3.4.1.min.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'bootstrapjs', get_template_directory_uri() . '/vendor/js/bootstrap.min.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'owljs', get_template_directory_uri() . '/vendor/js/owl.carousel.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'slickjs', get_template_directory_uri() . '/vendor/slick/slick.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'fancyboxjs', get_template_directory_uri() . '/vendor/js/jquery.fancybox.min.js', array('jquery2'), _S_VERSION, true );
	wp_enqueue_script( 'mainjs', get_template_directory_uri() . '/vendor/js/main.js', array(), _S_VERSION, true );
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'ds15_scripts' );

/**
 * Custom Functions theme
 */
require_once get_template_directory() . '/inc/functions.php';

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
* Возврат раздела виджетов в классический вид
*/
add_filter( 'gutenberg_use_widgets_block_editor', '__return_false' );
add_filter( 'use_widgets_block_editor', '__return_false' );






