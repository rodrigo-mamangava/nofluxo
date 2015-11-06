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
            'menuLoja' => esc_html__('Menu Loja', 'nofluxo'),
            'menuYou' => esc_html__('Menu Youtubers', 'nofluxo'),
            'menuNoFluxo' => esc_html__('Menu No Fluxo', 'nofluxo'),
            'menuNoAtendimento' => esc_html__('Menu Atendimento', 'nofluxo'),
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


    wp_enqueue_script('nofluxo-menu-toggle', get_template_directory_uri() . '/js/menu-toggle.js', array('jquery'), '20151105', true);

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

add_filter('woocommerce_enqueue_styles', '__return_empty_array');



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

            echo '<div class="row page-loja pagina">';

            echo '<div class="col-sm-3">';
            get_sidebar();
            echo '</div> <!-- col-sm-3 -->';

            echo '<div class="col-sm-9">';
            get_template_part('template-parts/woo/shop', 'sidebar');
            echo '</div><!-- col-sm-9 -->';

            echo '</div> <!-- row page-loja pagina -->';
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

function debug($var) {
    echo "<pre>";
    var_dump($var);
    echo "</pre>";
}

//require_once 'hook_functions.php';


function linkMyCart() {
    global $woocommerce;

    $qty = $woocommerce->cart->get_cart_contents_count();
    $total = $woocommerce->cart->get_cart_total();
    $cart_url = $woocommerce->cart->get_cart_url();

    $cart = '<a href=' . $cart_url . ' class="pull-right">';
    $cart .= '<img class="icone-menu" src="' . get_template_directory_uri() . '/img/icone/geral/ico-carrinho2x.png"> ';
    $cart .= $qty;
    $cart .= '</a>';

    echo $cart;
}

function linkInOut() {
    if (is_user_logged_in()) {
        ?>


        <a 
            class="pull-right"
            href="<?php echo get_permalink(get_option('woocommerce_myaccount_page_id')); ?>" 
            title="<?php _e('My Account', 'woothemes'); ?>">
            <img class="icone-menu" src="<?php echo get_template_directory_uri() ?>/img/icone/geral/ico-Login2x.png">
        </a>
    <?php } else {
        ?>
        <a 
            class="pull-right"
            href="<?php echo get_permalink(get_option('woocommerce_myaccount_page_id')); ?>" 
            title="<?php _e('Login / Register', 'woothemes'); ?>">
            <img class="icone-menu" src="<?php echo get_template_directory_uri() ?>/img/icone/geral/ico-Login2x.png">
        </a>
    <?php
    }
}

/**
 * Numeric Bootstrap3 Pagination
 * This is some shameless copy paste edited to use bootstrap3 classes
 * http://www.wpbeginner.com/wp-themes/how-to-add-numeric-pagination-in-your-wordpress-theme/
 * http://getbootstrap.com/components/#pagination
 */
function numeric_bootstrap_posts_nav() {
    if (is_singular()) {
        return;
    }
    global $wp_query;
    /** Stop execution if there's only 1 page */
    if ($wp_query->max_num_pages <= 1) {
        return;
    }
    $paged = get_query_var('paged') ? absint(get_query_var('paged')) : 1;
    $max = intval($wp_query->max_num_pages);
    /** Add current page to the array */
    if ($paged >= 1) {
        $links[] = $paged;
    }
    /** Add the pages around the current page to the array */
    if ($paged >= 3) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }
    if (($paged + 2) <= $max) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }
    ?>
    <div class="col-xs-12 paginacao">
        <div class="row">

    <?php
    echo '<nav class=""><ul class="pagination">' . "\n";
    /** Previous Post Link */
    if (get_previous_posts_link()) {
        printf('<li>%s</li>' . "\n", get_previous_posts_link("<<"));
    }
    /** Link to first page, plus ellipses if necessary */
    if (!in_array(1, $links)) {
        $class = 1 == $paged ? ' class="first active"' : ' class="first"';
        printf('<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link(1)), '1');
        if (!in_array(2, $links)) {
            echo '<li>…</li>';
        }
    }
    /** Link to current page, plus 2 pages in either direction if necessary */
    sort($links);
    foreach ((array) $links as $link) {
        $class = $paged == $link ? ' class="last active"' : ' class="last"';
        printf('<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link($link)), $link);
    }
    /** Link to last page, plus ellipses if necessary */
    if (!in_array($max, $links)) {
        if (!in_array($max - 1, $links)) {
            echo '<li><span class="btn disabled">…</span></li>' . "\n";
        }
        $class = $paged == $max ? ' class="active"' : '';
        printf('<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link($max)), $max);
    }
    /** Next Post Link */
    if (get_next_posts_link()) {
        printf('<li>%s</li>' . "\n", get_next_posts_link(">>"));
    }
    echo '</ul></nav>' . "\n";
    ?>

        </div>
    </div>
    <?php
}


function get_product_search_form(){
    ?>
    <div class="pesquisar"> 
        <form role="search" method="get" class="woocommerce-product-search" action="<?php echo esc_url( home_url( '/'  ) ); ?>">
                <input 
                    type="search" 
                    class="search-field" 
                    placeholder="Pesquisar" 
                    value="<?php echo get_search_query(); ?>" 
                    name="s" 
                    title="<?php echo esc_attr_x( 'Search for:', 'label', 'woocommerce' ); ?>" 
                    />
                <input 
                    type="submit" 
                    value="Pesquisar" 
                    />
                <input 
                    type="hidden" 
                    name="post_type" 
                    value="product" 
                    />
        </form>
    </div>
    <?php
    
}

