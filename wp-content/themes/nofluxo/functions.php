<?php

/**
 * noFluxo functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package noFluxo
 */
if (!function_exists('nofluxo_setup')) :

    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function nofluxo_setup() {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on noFluxo, use a find and replace
         * to change 'nofluxo' to the name of your theme in all the template files.
         */
        load_theme_textdomain('nofluxo', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support('post-thumbnails');

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(array(
            'primary' => esc_html__('Primary Menu', 'nofluxo'),
        ));

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));

        /*
         * Enable support for Post Formats.
         * See https://developer.wordpress.org/themes/functionality/post-formats/
         */
        add_theme_support('post-formats', array(
                //'aside',
                //'image',
                //'video',
                //'quote',
                //'link',
        ));

        // Set up the WordPress core custom background feature.
        add_theme_support('custom-background', apply_filters('nofluxo_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        )));
    }

endif; // nofluxo_setup


add_action('after_setup_theme', 'nofluxo_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function nofluxo_content_width() {
    $GLOBALS['content_width'] = apply_filters('nofluxo_content_width', 640);
}

add_action('after_setup_theme', 'nofluxo_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function nofluxo_widgets_init() {
    register_sidebar(array(
        'name' => esc_html__('Sidebar', 'nofluxo'),
        'id' => 'sidebar-1',
        'description' => '',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
}

add_action('widgets_init', 'nofluxo_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function nofluxo_scripts() {
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css');

    wp_enqueue_style('nofluxo-style', get_stylesheet_uri());

    wp_enqueue_script('jquery'); // Enqueue it!

    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js');

    wp_enqueue_script('nofluxo-navigation', get_template_directory_uri() . '/js/navigation.js', array('jquery'), '20151510', true);


    wp_enqueue_script('nofluxo-superfish', get_template_directory_uri() . '/js/superfish.min.js', array(), '20151510', true);
    wp_enqueue_script('nofluxo-superfish-config', get_template_directory_uri() . '/js/superfish-config.js', array('nofluxo-superfish'), '20151510', true);



    wp_enqueue_script('nofluxo-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

add_action('wp_enqueue_scripts', 'nofluxo_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';



/**
 * unhook the WooCommerce wrappers
 */
remove_action('woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action('woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

/**
 * hook in your own functions to display the wrappers your theme requires
 */
add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);

function my_theme_wrapper_start() {
    echo '<section id="main">';
}

function my_theme_wrapper_end() {
    echo '</section>';
}

/**
 * Declare WooCommerce support
 */
add_action('after_setup_theme', 'woocommerce_support');

function woocommerce_support() {
    add_theme_support('woocommerce');
}

/**
 * desativar css do woocommerce
 */
//define('WOOCOMMERCE_USE_CSS', false);

add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );



/** Template pages ******************************************************* */
if (!function_exists('woocommerce_content')) {

    /**
     * Output WooCommerce content.
     *
     * This function is only used in the optional 'woocommerce.php' template
     * which people can add to their themes to add basic woocommerce support
     * without hooks or modifying core templates.
     *
     */
    function woocommerce_content() {

        if (is_singular('product')) {

            while (have_posts()) : the_post();

                wc_get_template_part('content', 'single-product');

            endwhile;
        } elseif (is_front_page()) {

            get_template_part('template-parts/woo/shop', 'home');
            
            
        } else {

            echo '<div class="row">';
            echo '<div class="col-sm-3 sidebar-esq">';
            get_sidebar();
            echo '</div>';

            echo '<div class="col-sm-9 vitrine-3-col">';
            get_template_part('template-parts/woo/shop', 'sidebar');
            echo '</div>';
            echo '</div>';
        }
    }

}

// Change number or products per row to 3
add_filter('loop_shop_columns', 'loop_columns');
if (!function_exists('loop_columns')) {
	function loop_columns() {
		return 9999; // 3 products per row
	}
}




//require_once 'hook_functions.php';

