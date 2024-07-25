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

    }
    if (is_page_template('page-about.php')) {
        wp_enqueue_style('detail-style', get_template_directory_uri() . '/assets/css/common/detail.css', [], 'all');
        wp_enqueue_style('propell-about-style', get_template_directory_uri() . '/assets/css/about.css', [], 'all');
        wp_enqueue_script('propell-about-js', get_template_directory_uri() . '/assets/js/about.js', [], _S_VERSION, true);
    }
    if (is_page_template('page-award.php')) {
        wp_enqueue_style('detail-style', get_template_directory_uri() . '/assets/css/common/detail.css', [], 'all');
        wp_enqueue_style('viewbox-style', get_template_directory_uri() . '/assets/libs/viewbox.css', [], 'all');
        wp_enqueue_style('propell-about-style', get_template_directory_uri() . '/assets/css/about.css', [], 'all');
        wp_enqueue_script('propell-viewbox-js', get_template_directory_uri() . '/assets/libs/jquery.viewbox.min.js', [], _S_VERSION, true);
    }
    if (is_page_template('page-propellian.php')) {
        wp_enqueue_style('detail-style', get_template_directory_uri() . '/assets/css/common/detail.css', [], 'all');
        wp_enqueue_style('propell-propellian-style', get_template_directory_uri() . '/assets/css/propellian.css', [], 'all');
        wp_enqueue_script('propell-detail-js', get_template_directory_uri() . '/assets/js/detail.js', [], _S_VERSION, true);
        wp_enqueue_script('propell-propellian-js', get_template_directory_uri() . '/assets/js/propellian.js', [], _S_VERSION, true);
    }
    if (is_page_template('page-event.php')) {
        wp_enqueue_style('detail-style', get_template_directory_uri() . '/assets/css/common/detail.css', [], 'all');
        wp_enqueue_style('propell-propellian-style', get_template_directory_uri() . '/assets/css/propellian.css', [], 'all');
        wp_enqueue_script('propell-propellian-js', get_template_directory_uri() . '/assets/js/propellian.js', [], _S_VERSION, true);
        wp_enqueue_script('propell-loadmore-js', get_template_directory_uri() . '/js/load-more.js', [], _S_VERSION, true);

    }
    if (is_page_template('page-policy.php')) {
        wp_enqueue_style('detail-style', get_template_directory_uri() . '/assets/css/common/detail.css', [], 'all');
        wp_enqueue_style('policy-style', get_template_directory_uri() . '/assets/css/policy.css', [], 'all');
    }
    if (is_page_template('page-term.php')) {
        wp_enqueue_style('detail-style', get_template_directory_uri() . '/assets/css/common/detail.css', [], 'all');
        wp_enqueue_style('terms-style', get_template_directory_uri() . '/assets/css/terms.css', [], 'all');
    }
    if (is_page_template('page-contact.php')) {
        $ajax_url = admin_url( 'admin-ajax.php' );
        wp_enqueue_style('common-detail-style', get_template_directory_uri() . '/assets/css/common/detail.css', [], 'all');
        wp_enqueue_style('propell-contact-style', get_template_directory_uri() . '/assets/css/contact.css', [], 'all');
        wp_enqueue_script('propell-recaptcha-js', 'https://www.google.com/recaptcha/api.js', [], _S_VERSION, true);
        wp_enqueue_script('propell-cloudflare-js', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/jquery.validate.min.js', [], _S_VERSION, true);
        wp_enqueue_script('propell-contact-js', get_template_directory_uri() . '/assets/js/contact.js', [], _S_VERSION, true);
        wp_enqueue_script('propell-be-contact-js', get_template_directory_uri() . '/assets/backend/js/contact.js', [], _S_VERSION, true);
        wp_localize_script('propell-be-contact-js', 'ajax_url', [$ajax_url]);
    }
    if (is_page_template('page-careers.php')) {
        $ajax_url = admin_url( 'admin-ajax.php' );
        wp_enqueue_style('common-detail-style', get_template_directory_uri() . '/assets/css/common/detail.css', [], 'all');
        wp_enqueue_style('propell-careers-style', get_template_directory_uri() . '/assets/css/careers.css', [], 'all');

        wp_enqueue_script('propell-cloudflare-js', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/jquery.validate.min.js', [], _S_VERSION, true);
        wp_enqueue_script('propell-careers-js', get_template_directory_uri() . '/assets/js/careers.js', [], _S_VERSION, true);
        wp_enqueue_script('propell-be-careers-js', get_template_directory_uri() . '/assets/backend/js/careers.js', [], _S_VERSION, true);
        wp_localize_script('propell-be-careers-js', 'ajax_url', [$ajax_url]);
    }
    if (is_post_type_archive('service') || is_singular('service')) {
        wp_enqueue_style('propell-service-style', get_template_directory_uri() . '/assets/css/what-we-do.css', [], 'all');
        wp_enqueue_style('propell-detail-style', get_template_directory_uri() . '/assets/css/common/detail.css', [], 'all');
        wp_enqueue_script('propell-detail-js', get_template_directory_uri() . '/assets/js/detail.js', [], _S_VERSION, true);
        wp_enqueue_script('propell-service-js', get_template_directory_uri() . '/assets/js/what-we-do.js', [], _S_VERSION, true);
        wp_enqueue_script('propell-loadmore-js', get_template_directory_uri() . '/js/load-more.js', [], _S_VERSION, true);
    }
    // Enqueue project archive specific styles and scripts
    if (is_post_type_archive('project') || is_post_type_archive('project-category')
        || is_singular('project-category') || is_singular('project')) {
        wp_enqueue_style('propell-project-detail-style', get_template_directory_uri() . '/assets/css/common/detail.css', [], 'all');
        wp_enqueue_style('propell-project-style', get_template_directory_uri() . '/assets/css/project.css', [], 'all');
        wp_enqueue_script('propell-project-js', get_template_directory_uri() . '/assets/js/project.js', [], _S_VERSION, true);

    }
    if (is_post_type_archive('project-category')) {
        wp_enqueue_script('propell-detail-js', get_template_directory_uri() . '/assets/js/detail.js', [], _S_VERSION, true);
    }
    if (is_singular('project-category')) {
        wp_enqueue_script('propell-loadmore-js', get_template_directory_uri() . '/js/load-more.js', [], _S_VERSION, true);
    }
    if(is_404()) {
        wp_enqueue_style('propell-404-style', get_template_directory_uri() . '/assets/css/404.css', [], 'all');

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

/**
 * Load library custom
 */
require_once 'function/contact.php';

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
    if (is_page_template('page-contact.php')) {
        $class = 'page page-detail page-contact';
    }
    if (is_page_template('page-about.php')) {
        $class = 'page page-detail page-about';
    }
    if (is_page_template('page-careers.php')) {
        $class = 'page page-detail page-careers';
    }
    if (is_page_template('page-award.php')) {
        $class = 'page page-detail page-awards';
    }
    if (is_page_template('page-propellian.php')) {
        $class = 'page page-detail page-propellian';
    }
    if (is_page_template('page-event.php')) {
        $class = 'page page-detail page-propellian-events';
    }
    if (is_page_template('page-policy.php')) {
        $class = 'page page-detail page-policy';
    }
    if (is_page_template('page-term.php')) {
        $class = 'page page-detail page-terms';
    }
    if (is_post_type_archive('service')) {
        $class = 'page page-detail page-what-we-do';
    }
    if (is_singular('service')) {
        $class = 'page page-detail page-what-we-do page-service-details';
    }
    if (is_post_type_archive('project')) {
        $class = 'page page-detail page-project';
    }
    if (is_singular('project')) {
        $class = 'page page-detail page-project page-project-detail';
    }
    if (is_singular('project-category')) {
        $class = 'page page-detail page-project page-project-list';
    }
    if (is_post_type_archive('project-category')) {
        $class = 'page page-detail page-project';
    }
    if (is_404()) {
        $class = 'page page-detail page-404';
    }

    return $class;
}

add_action('wp_ajax_load_more_projects', 'load_more_projects');
add_action('wp_ajax_nopriv_load_more_projects', 'load_more_projects');

function load_more_projects() {
    $page = intval($_POST['page']);
    $serviceId = intval($_POST['service_id']);
    $categoryId = intval($_POST['category_id']);
    $metaQuery = array();
    if ($serviceId > 0) {
        $metaQuery[] = array(
            'key' => 'related_services',
            'value' =>  $serviceId ,
            'compare' => 'LIKE'
        );
    }
    if ($categoryId > 0) {
        $metaQuery[] = array(
            'key' => 'category',
            'value' => $categoryId,
            'compare' => 'LIKE'
        );
    }
    $args = array(
        'post_type' => 'project',
        'posts_per_page' => 6,
        'paged' => $page,
        "meta_query" => $metaQuery
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
                <a href="<?php echo get_the_permalink(get_the_ID()) ?>"><h3 class="c-title c-title--md"><?php echo the_title() ?></h3></a>
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

add_action('wp_ajax_load_more_events', 'load_more_events');
add_action('wp_ajax_nopriv_load_more_events', 'load_more_events');
function load_more_events() {
    $current_language = pll_current_language('slug');
    $page = intval($_POST['page']);
    $args = array(
        'post_type' => 'event',
        'post_status' => 'publish',
        'posts_per_page' => 9,
        'paged' => $page,
        'orderby' => 'publish_date',
        'order' => 'DESC',
        'tax_query'      => array(
            array(
                'taxonomy' => 'language',
                'field'    => 'slug',
                'terms'    => $current_language,
            ),
        ),
    );
    $event_query = new WP_Query($args);
    ob_start();
    if ($event_query->have_posts()):
        while ($event_query->have_posts()): $event_query->the_post();
            ?>
            <div class="events-highlight__item">
                <?php
                    $thumbnail = get_the_post_thumbnail_url(get_the_ID(), 'full');
                ?>
                <div class="events-highlight__item--photo">
                    <img src="<?php echo $thumbnail ?>" alt="">
                </div>
                <h3 class="events-highlight__item--ttl"><?php echo the_title(); ?></h3>
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
function filter_featured_projects($args, $field, $post_id) {
    // Check if we are editing a 'project_category' post type
    if (get_post_type($post_id) !== 'project-category') {
        return $args;
    }

    // Adjust the query to fetch projects related to the current project_category
    $args['meta_query'] = array(
        array(
            'key' => 'category', // Adjust this key if necessary
            'value' => $post_id,
            'compare' => 'LIKE'
        )
    );

    return $args;
}

// Hook into ACF to modify the relationship field query
add_filter('acf/fields/relationship/query/name=featured_projects', 'filter_featured_projects', 10, 3);


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

//function custom_project_permalink($post_link, $post) {
//    if ($post->post_type == 'project') {
//        $terms = wp_get_post_terms($post->ID, 'project-category');
//        if ($terms && !is_wp_error($terms)) {
//            $category_slug = $terms[0]->slug;
//        } else {
//            $category_slug = 'uncategorized';
//        }
//
//        $departments = wp_get_post_terms($post->ID, 'department');
//        if ($departments && !is_wp_error($departments)) {
//            $department_slug = $departments[0]->slug;
//        } else {
//            $department_slug = 'general';
//        }
//
//        // Assuming you are using Polylang or WPML for language handling
//        if (function_exists('pll_current_language')) {
//            $lang = pll_current_language();
//        } else {
//            $lang = 'en'; // Default language if no multilingual plugin is used
//        }
//
//        $post_link = home_url('/' . $lang . '/' . $department_slug . '/' . $category_slug . '/' . $post->post_name . '/');
//    }
//    return $post_link;
//}
//add_filter('post_type_link', 'custom_project_permalink', 10, 2);


//function custom_project_rewrite_rules() {
//    add_rewrite_rule(
//        '^([^/]+)/([^/]+)/([^/]+)/([^/]+)/?$',
//        'index.php?post_type=project&name=$4',
//        'top'
//    );
//}
//add_action('init', 'custom_project_rewrite_rules');
//function custom_project_permalink($post_link, $post) {
//    if ($post->post_type == 'project') {
//        // Get the project category (custom post type)
//        $project_category = get_field('category', $post->ID);
//        if ($project_category) {
//            $project_category = get_post($project_category->ID);
//            $category_slug = $project_category->post_name;
//
//            // Get the department (taxonomy of project_category)
//            $departments = wp_get_post_terms($project_category->ID, 'department');
//            if ($departments && !is_wp_error($departments)) {
//                $department_slug = $departments[0]->slug;
//            } else {
//                $department_slug = 'general';
//            }
//
//            // Assuming you are using Polylang or WPML for language handling
//            if (function_exists('pll_current_language')) {
//                $lang = pll_current_language();
//            } else {
//                $lang = ''; // Default language if no multilingual plugin is used
//            }
//
//            $post_link = home_url('/' . $lang . '/' . $department_slug . '/' . $category_slug . '/' . $post->post_name . '/');
//        }
//    }
//    return $post_link;
//}
//add_filter('post_type_link', 'custom_project_permalink', 10, 2);
//
//function flush_rewrite_rules_on_activation() {
//    custom_project_rewrite_rules();
//    flush_rewrite_rules();
//}
//register_activation_hook(__FILE__, 'flush_rewrite_rules_on_activation');

// Add custom rewrite rules
// Add custom rewrite rules
function custom_project_rewrite_rules() {
    add_rewrite_rule(
        '^([a-z]{2})/([^/]+)/([^/]+)/([^/]+)/?$',
        'index.php?lang=$matches[1]&department=$matches[2]&category=$matches[3]&project=$matches[4]',
        'top'
    );
}
add_action('init', 'custom_project_rewrite_rules');

// Add custom query vars
function add_custom_query_vars($vars) {
    $vars[] = 'lang';
    $vars[] = 'department';
    $vars[] = 'category';
    $vars[] = 'project';
    return $vars;
}
add_filter('query_vars', 'add_custom_query_vars');

// Parse custom request
function custom_parse_request($query) {
    if (!empty($query->query_vars['project']) && !empty($query->query_vars['category']) && !empty($query->query_vars['department'])) {
        $query->set('post_type', 'project');
    }
}
add_action('pre_get_posts', 'custom_parse_request');

// Flush rewrite rules on activation
function flush_rewrite_rules_on_activation() {
    custom_project_rewrite_rules();
    flush_rewrite_rules();
}
register_activation_hook(__FILE__, 'flush_rewrite_rules_on_activation');

// Modify the project permalink structure
function custom_project_permalink($post_link, $post) {
    if ($post->post_type == 'project') {
        // Get the project category (custom post type)
        $project_category = get_field('category', $post->ID);
        if ($project_category) {
            $project_category = get_post($project_category->ID);
            $category_slug = $project_category->post_name;

            // Get the department (taxonomy of project_category)
            $departments = wp_get_post_terms($project_category->ID, 'department');
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
    }
    return $post_link;
}
add_filter('post_type_link', 'custom_project_permalink', 10, 2);


function remove_br_tags($content) {
    // Remove <br> and </br> tags from the content
    $content = str_replace(array('<br>', '</br>', '<br />'), '', $content);
    return $content;
}

function custom_shorten_content($content, $word_limit = 20) {
    $words = explode(' ', $content);

    if (count($words) > $word_limit) {
        $shortened_content = implode(' ', array_slice($words, 0, $word_limit));
        $shortened_content .= ' ...';

    } else {
        $shortened_content = $content;
    }

    return $shortened_content;
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
    $contactVi = get_page_by_path('contact-vi');
    $contactJa = get_page_by_path('contact-ja');
    $contactZh = get_page_by_path('contact-zh');
//    $careersEn = get_page_by_path('careers');
//    $careersVi = get_page_by_path('careers-vi');
//    $careersJa = get_page_by_path('careers-ja');
//    $careersZh = get_page_by_path('careers-zh');

    if(
        ($contactEn && $contactEn->ID == $currentPageID)
        || ($contactVi && $contactVi->ID == $currentPageID)
        || ($contactJa && $contactJa->ID == $currentPageID)
        || ($contactZh && $contactZh->ID == $currentPageID)
//        || ($careersEn && $careersEn->ID == $currentPageID)
//        || ($careersVi && $careersVi->ID == $currentPageID)
//        || ($careersJa && $careersJa->ID == $currentPageID)
//        || ($careersZh && $careersZh->ID == $currentPageID)
    )
    {
        remove_post_type_support('page', 'editor');
    }
}

function register_custom_strings() {
    if (function_exists('pll_register_string')) {
        pll_register_string('About Page', 'about', 'URLs');
        pll_register_string('About Page VI', 'about-vi', 'URLs');
    }
}
add_action('init', 'register_custom_strings');

function get_page_url($name) {
    $current_language = pll_current_language();

    if ($current_language == 'en') {
        $page_slug = pll_translate_string($name, $current_language);
    } elseif ($current_language == 'vi') {
        $page_slug = pll_translate_string($name.'-vi', $current_language);
    }
    elseif ($current_language == 'ja') {
        $page_slug = pll_translate_string($name.'-ja', $current_language);
    }
    elseif ($current_language == 'zh') {
        $page_slug = pll_translate_string($name.'-zh', $current_language);
    }

    $link  = home_url('/' . $current_language . '/' . $page_slug);
    return $link;
}

// Handle the AJAX request for live search
function live_search_ajax_handler() {
    $search_term = isset($_GET['s']) ? sanitize_text_field($_GET['s']) : '';

    if (!empty($search_term)) {
        $args = array(
            'post_type' => array('page', 'project-category','service', 'project'), // Search both posts and pages
            'post_status' => 'publish',
            's' => $search_term,
            'posts_per_page' => 5, // Limit the number of results
            'fields' => 'ids', // Return only post IDs
        );

        $search_query = new WP_Query($args);

        ob_start();
        if ($search_query->have_posts()):
            while ($search_query->have_posts()): $search_query->the_post();
                ?>
                    <?php
                        $thumbnail = get_the_post_thumbnail_url(get_the_ID(), 'full');
                        if ($thumbnail == "") {
                            $thumbnail = get_path_assets().'/img/logo.png"';
                        }
                    ?>
                <div class="item">
                    <div class="photo"><img src="<?php echo $thumbnail ?>" alt="<?php echo the_title() ?>"></div>
                    <div class="group">
                        <h3 class="c-title"><?php echo the_title() ?></h3>
<!--                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>-->
                    </div>
                </div>
            <?php
            endwhile;
            wp_reset_postdata();
        else:
            echo '';
        endif;
        $content = ob_get_clean();
        echo $content;
        wp_reset_postdata();
    }
    die();
}
add_action('wp_ajax_live_search', 'live_search_ajax_handler');
add_action('wp_ajax_nopriv_live_search', 'live_search_ajax_handler');
function customize_department_metabox() {
    // Remove the default metabox
    remove_meta_box('departmentdiv', 'project-category', 'side');

    // Add custom metabox with radio buttons
    add_meta_box('departmentdiv', __('Department'), 'custom_department_metabox', 'project-category', 'side', 'default');
}
add_action('admin_menu', 'customize_department_metabox');

function custom_department_metabox($post) {
    // Get the taxonomy and terms
    $taxonomy = 'department';
    $terms = get_terms(array(
        'taxonomy' => $taxonomy,
        'hide_empty' => false,
    ));

    // Get the current post terms
    $current_terms = wp_get_object_terms($post->ID, $taxonomy, array('fields' => 'ids'));
    ?>
    <div id="taxonomy-<?php echo $taxonomy; ?>" class="categorydiv">
        <div id="<?php echo $taxonomy; ?>-all">
            <ul id="<?php echo $taxonomy; ?>checklist" class="list:<?php echo $taxonomy; ?> categorychecklist form-no-clear">
                <?php foreach ($terms as $term) : ?>
                    <li id="<?php echo $taxonomy; ?>-<?php echo $term->term_id; ?>">
                        <label class="selectit">
                            <input type="radio" name="tax_input[<?php echo $taxonomy; ?>][]" id="in-<?php echo $taxonomy . '-' . $term->term_id; ?>" value="<?php echo $term->term_id; ?>" <?php checked(in_array($term->term_id, $current_terms)); ?> /> <?php echo $term->name; ?>
                        </label>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
    <?php
}

