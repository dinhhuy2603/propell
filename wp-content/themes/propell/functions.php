<?php
/**
 * propell functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package propell
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function propell_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on propell, use a find and replace
		* to change 'propell' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'propell', get_template_directory() . '/languages' );

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

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'propell' ),
		)
	);

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
			'propell_custom_background_args',
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
add_action( 'after_setup_theme', 'propell_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function propell_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'propell_content_width', 640 );
}
add_action( 'after_setup_theme', 'propell_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function propell_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'propell' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'propell' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'propell_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function propell_scripts() {
	wp_enqueue_style( 'propell-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'propell-style', 'rtl', 'replace' );

	wp_enqueue_script( 'propell-navigation', get_template_directory_uri() . '/js/navigation.js', array('jquery'), _S_VERSION, true );
    // Add js Propel
    wp_enqueue_script('propell-jquery', get_template_directory_uri() . '/libs/jquery-3.6.0.js', array('jquery'), _S_VERSION, true);
    wp_enqueue_script('propell-slick-js', get_template_directory_uri() . '/libs/slick.min.js', array('jquery'), _S_VERSION, true);
    wp_enqueue_script('propell-common-js', get_template_directory_uri() . '/js/common.js', array('jquery'), _S_VERSION, true);



	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
    if (is_front_page()) {
        // wp_enqueue_style( 'sennan_top_style', get_template_directory_uri() . '/assets/css/top.css');
        wp_enqueue_script('propell-top-js',  get_template_directory_uri() . '/assets/js/top.js', [], _S_VERSION, true);
    }
}
add_action( 'wp_enqueue_scripts', 'propell_scripts' );

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

function get_path_assets()
{
    return get_template_directory_uri() . '/assets';
}

//add_filter('the_content', 'wp_kses_post');

// Allow certain HTML tags in the WordPress editor
//function allow_html_in_editor( $tags ) {
//    $tags['dl'] = array();
//    $tags['dt'] = array();
//    $tags['dd'] = array();
//    return $tags;
//}
//add_filter( 'wp_kses_allowed_html', 'allow_html_in_editor', 10, 2 );
//
//remove_filter( 'the_content', 'wpautop' );