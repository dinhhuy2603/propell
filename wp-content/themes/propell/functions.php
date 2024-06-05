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
//function propell_scripts() {
//	wp_enqueue_style( 'propell-style', get_stylesheet_uri(), array(), VERSION_STATIC );
//	wp_style_add_data( 'propell-style', 'rtl', 'replace' );
//
//
//	wp_enqueue_script( 'propell-navigation', get_template_directory_uri() . '/js/c
//	ustomizer.js', array('jquery'), VERSION_STATIC, true );
//	wp_enqueue_script( 'propell-navigation', get_template_directory_uri() . '/js/navigation.js', array('jquery'), VERSION_STATIC, true );
//    // Add js Propel
//    wp_enqueue_script('propell-jquery', get_template_directory_uri() . '/assets/libs/modernizr.min.js', [], _S_VERSION, true);
//    wp_enqueue_script('propell-jquery', get_template_directory_uri() . '/assets/libs/jquery-3.6.0.js', [], _S_VERSION, true);
//    wp_enqueue_script('propell-slick-js', get_template_directory_uri() . '/assets/libs/slick.min.js', [], _S_VERSION, true);
//    wp_enqueue_script('propell-common-js', get_template_directory_uri() . '/assets/js/common.js', [], _S_VERSION, true);
//
//    wp_enqueue_style( 'propell-style', get_template_directory_uri(). '/assets/css/common/common.css');
//    wp_enqueue_style( 'propell-slick-style', get_template_directory_uri(). '/assets/libs/slick.min.css');
//
////	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
////		wp_enqueue_script( 'comment-reply' );
////	}
//    if (is_front_page()) {
//        wp_enqueue_style( 'propell_top_style', get_template_directory_uri() . '/assets/css/top.css', false, 'all');
//        wp_enqueue_script('propell-top-js',  get_template_directory_uri() . '/assets/js/top.js', [], _S_VERSION, true);
//    }
//    if (is_post_type_archive('project')) {
//        wp_enqueue_style( 'propell_project_style', get_template_directory_uri() . '/assets/css/common/detail.css.', false, 'all');
//        wp_enqueue_style( 'propell_project_style', get_template_directory_uri() . '/assets/css/project.css', false, 'all');
//        wp_enqueue_script('propell-project-js',  get_template_directory_uri() . '/assets/js/project.js', [], _S_VERSION, true);
//    }
//}
//add_action( 'wp_enqueue_scripts', 'propell_scripts' );


function propell_scripts() {
    // Enqueue scripts
//    wp_enqueue_script('propell-customizer', get_template_directory_uri() . '/js/customizer.js', array('jquery'), VERSION_STATIC, true);
//    wp_enqueue_script('propell-navigation', get_template_directory_uri() . '/js/navigation.js', array('jquery'), VERSION_STATIC, true);
    wp_enqueue_script('propell-jquery', get_template_directory_uri() . '/assets/libs/jquery-3.6.0.js', [], _S_VERSION, true);
    wp_enqueue_script('propell-modernizr', get_template_directory_uri() . '/assets/libs/modernizr.min.js', [], _S_VERSION, true);
    wp_enqueue_script('propell-slick-js', get_template_directory_uri() . '/assets/libs/slick.min.js', [], _S_VERSION, true);
    wp_enqueue_script('propell-common-js', get_template_directory_uri() . '/assets/js/common.js', [], _S_VERSION, true);

    wp_enqueue_style('propell-slick-style', get_template_directory_uri() . '/assets/libs/slick.min.css');

    // Enqueue styles
    wp_enqueue_style('propell-style', get_template_directory_uri() . '/assets/css/common/common.css');

    // Enqueue front page specific styles and scripts
    if (is_front_page()) {
        wp_enqueue_style('propell-top-style', get_template_directory_uri() . '/assets/css/top.css', [], 'all');
        wp_enqueue_script('propell-top-js', get_template_directory_uri() . '/assets/js/top.js', [], _S_VERSION, true);
        wp_enqueue_style('detail-style', get_template_directory_uri() . '/assets/css/common/detail.css', [], 'all');

    }
    if (is_page('about')) {
        wp_enqueue_style('detail-style', get_template_directory_uri() . '/assets/css/common/detail.css', [], 'all');
        wp_enqueue_style('propell-about-style', get_template_directory_uri() . '/assets/css/about.css', [], 'all');
        wp_enqueue_script('propell-about-js', get_template_directory_uri() . '/assets/js/about.js', [], _S_VERSION, true);
    }
    if (is_page('contact')) {
        wp_enqueue_style('propell-contact-style', get_template_directory_uri() . '/assets/css/contact.css', [], 'all');

        wp_enqueue_script('propell-recaptcha-js', 'https://www.google.com/recaptcha/api.js', [], _S_VERSION, true);
        wp_enqueue_script('propell-cloudflare-js', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/jquery.validate.min.js', [], _S_VERSION, true);
        wp_enqueue_script('propell-contact-js', get_template_directory_uri() . '/assets/js/contact.js', [], _S_VERSION, true);



    }
    if (is_post_type_archive('service') || is_singular('service')) {
        wp_enqueue_style('propell-service-style', get_template_directory_uri() . '/assets/css/what-we-do.css', [], 'all');
        wp_enqueue_style('propell-detail-style', get_template_directory_uri() . '/assets/css/common/detail.css', [], 'all');
        wp_enqueue_script('propell-detail-js', get_template_directory_uri() . '/assets/js/detail.js', [], _S_VERSION, true);
        wp_enqueue_script('propell-service-js', get_template_directory_uri() . '/assets/js/what-we-do.js', [], _S_VERSION, true);
        }
    // Enqueue project archive specific styles and scripts
    if (is_post_type_archive('project') || is_post_type_archive('project-category')
        || is_singular('project-category') || is_singular('project')) {
        wp_enqueue_style('propell-project-detail-style', get_template_directory_uri() . '/assets/css/common/detail.css', [], 'all');
        wp_enqueue_style('propell-project-style', get_template_directory_uri() . '/assets/css/project.css', [], 'all');
        wp_enqueue_script('propell-project-js', get_template_directory_uri() . '/assets/js/project.js', [], _S_VERSION, true);
    }
}
add_action('wp_enqueue_scripts', 'propell_scripts');

function add_theme_scripts() {
//    wp_enqueue_style( 'propell_top_style', get_template_directory_uri() . '/assets/css/top.css', false, 'all');
//
//    wp_enqueue_style( 'slider', get_template_directory_uri() . '/css/slider.css', array(), '1.1', 'all' );

//    wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array( 'jquery' ), 1.1, true );
//    $ajax_url = admin_url( 'admin-ajax.php' );
//    wp_localize_script('propell-common-js', 'ajax_url', [$ajax_url]);

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

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

function get_page_class(){
    global $post;
    if(isset($post->ID)){
        $parent = get_post_parent($post->ID);
    }

    $class = '';
    if (is_front_page()) {
        $class = 'page page-top';
    }
    if (is_page('contact')) {
        $class = 'page page-detail page-contact';
    }
    if (is_page('about')) {
        $class = 'page page-detail page-about';
    }
    if (is_post_type_archive('service')) {
        $class = 'page page-detail page-what-we-do';
    }
    if (is_singular('service')) {
        $class = 'page page-detail page-what-we-do page-service-details';
    }
    if (is_post_type_archive('project')
        || is_singular('project')
        || is_post_type_archive('project-category')
        || is_singular('project-category')) {
        $class = 'page page-detail page-project';
    }
    return $class;
}

add_action('wp_ajax_load_more_projects', 'load_more_projects');
add_action('wp_ajax_nopriv_load_more_projects', 'load_more_projects');

function load_more_projects() {
    $page = intval($_POST['page']);
    $service_id = intval($_POST['service_id']);
    $args = array(
        'post_type' => 'project',
        'posts_per_page' => 6,
        'paged' => $page,
        'meta_query' => array(
            array(
                'key' => 'related_services',
                'value' => '"' . $service_id . '"',
                'compare' => 'LIKE'
            )
        )
    );
    $projects_query = new WP_Query($args);
    ob_start();
    if ($projects_query->have_posts()):
        while ($projects_query->have_posts()): $projects_query->the_post();
            ?>
            <div class="item">
                <?php
                $imagePC = get_field('image_pc');
                ?>
                <div class="photo"><img class="img-fit" src="<?php echo $imagePC ?>" alt="<?php echo the_title() ?>"></div>
                <h3 class="c-title c-title--md"><?php echo the_title() ?></h3>
                <p class="txt"><?php echo get_field('short_description'); ?></p>
            </div>
        <?php
        endwhile;
        wp_reset_postdata();
    else:
        echo 'no-more-posts';
    endif;
    $content = ob_get_clean();
    echo $content;
    exit;
}

//function update_related_projects_field($value, $post_id, $field) {
//    // Verify the post type is 'project_category'
//    if (get_post_type($post_id) !== 'project_category') {
//        return $value;
//    }
//
//    // Get the related projects based on the category
//    $related_projects = get_posts(array(
//        'post_type' => 'project',
//        'posts_per_page' => -1,
//        'meta_query' => array(
//            array(
//                'key' => 'category',
//                'value' => '"' . $post_id . '"',
//                'compare' => 'LIKE'
//            )
//        )
//    ));
//
//    // Collect the IDs of the related projects
//    $related_project_ids = array();
//    foreach ($related_projects as $project) {
//        $related_project_ids[] = $project->ID;
//    }
//
//    return $related_project_ids;
//}
//
//// Hook into ACF to populate the field dynamically
//add_filter('acf/load_value/name=featured_projects', 'update_related_projects_field', 10, 3);

//function dynamically_load_related_projects($value, $post_id, $field) {
//    // Ensure this is a Project Category post type
//    if (get_post_type($post_id) !== 'project_category') {
//        error_log('Not a project_category post type');
//        return $value;
//    }
//    error_log('dynamically_load_related_projects function triggered');
//    // Get all projects with the current category
//    $related_projects = get_posts(array(
//        'post_type' => 'project',
//        'posts_per_page' => -1,
//        'meta_query' => array(
//            array(
//                'key' => 'category', // Field name in the Project post type
//                'value' => $post_id,
//                'compare' => '='
//            )
//        )
//    ));
//
//    // Collect the IDs of the related projects
//    $related_project_ids = array();
//    foreach ($related_projects as $project) {
//        $related_project_ids[] = $project->ID;
//    }
//    error_log('Related project IDs: ' . print_r($related_project_ids, true));
//
//    return $related_project_ids;
//}
//
//// Hook into ACF to dynamically load the related projects
//add_filter('acf/load_value/name=featured_projects', 'dynamically_load_related_projects', 10, 3);
//function enqueue_loadmore_script() {
//    wp_enqueue_script('loadmore', get_stylesheet_directory_uri() . '/js/loadmore.js', array('jquery'), null, true);
//    wp_localize_script('loadmore', 'ajaxurl', admin_url('admin-ajax.php'));
//}
//add_action('wp_enqueue_scripts', 'enqueue_loadmore_script');

function custom_project_permalink($post_link, $post) {
    if ($post->post_type == 'project') {
        $terms = wp_get_post_terms($post->ID, 'project-category');
        if ($terms && !is_wp_error($terms)) {
            $category_slug = $terms[0]->slug;
        } else {
            $category_slug = 'uncategorized';
        }

        $departments = wp_get_post_terms($post->ID, 'department');
        if ($departments && !is_wp_error($departments)) {
            $department_slug = $departments[0]->slug;
        } else {
            $department_slug = 'general';
        }

        // Assuming you are using Polylang or WPML for language handling
        if (function_exists('pll_current_language')) {
            $lang = pll_current_language();
        } else {
            $lang = 'en'; // Default language if no multilingual plugin is used
        }

        $post_link = home_url('/' . $lang . '/' . $department_slug . '/' . $category_slug . '/' . $post->post_name . '/');
    }
    return $post_link;
}
add_filter('post_type_link', 'custom_project_permalink', 10, 2);



/**
 * Add iFrame to allowed wp_kses_post tags
 *
 * @param string $tags Allowed tags, attributes, and/or entities.
 * @param string $context Context to judge allowed tags by. Allowed values are 'post',
 *
 * @return mixed
 */
function custom_wpkses_post_tags( $tags, $context ) {
    if ( 'post' === $context ) {
        $tags['iframe'] = array(
            'src'             => true,
            'height'          => true,
            'width'           => true,
            'frameborder'     => true,
            'allowfullscreen' => true,
            'style' => true,
            'marginwidth' => true,
            'marginheight' => true,
            'vspace' => true,
            'hspace' => true,
            'allowtransparency' => true,
            'scrolling' => true,
        );
    }
    return $tags;
}
add_filter( 'wp_kses_allowed_html', 'custom_wpkses_post_tags', 10, 2 );



add_action('admin_head', 'remove_content_editor');
/**
 * Remove the content editor from pages as all content is handled through Panels
 */
function remove_content_editor()
{
    $currentPageID = get_the_ID();
    $contactEn = get_page_by_path('contact');

    if(
        $contactEn->ID == $currentPageID
    )
    {
        remove_post_type_support('page', 'editor');
    }
}