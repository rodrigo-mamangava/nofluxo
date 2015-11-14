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
        'name' => esc_html__('Sidebar Esquerda', 'nofluxo'),
        'id' => 'sidebar-1',
        'description' => 'Sidebar posicionado a esquerda',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
    register_sidebar(array(
        'name' => esc_html__('Sidebar Direita', 'nofluxo'),
        'id' => 'sidebar-2',
        'description' => 'Sidebar posicionado a direita',
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
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css');
    //wp_enqueue_style('jquery-ui', '//ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css');

    wp_enqueue_style('nofluxo-style', get_stylesheet_uri());

    wp_enqueue_script('jquery'); // Enqueue it!
    
    //wp_enqueue_script('jquery-ui-dialog'); // Enqueue it!

    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js');

    wp_enqueue_script('nofluxo-navigation', get_template_directory_uri() . '/js/navigation.js', array('jquery'), '20151510', true);


    wp_enqueue_script('nofluxo-superfish', get_template_directory_uri() . '/js/superfish.min.js', array(), '20151510', true);
    wp_enqueue_script('nofluxo-superfish-config', get_template_directory_uri() . '/js/superfish-config.js', array('nofluxo-superfish'), '20151510', true);

    wp_enqueue_script('nofluxo-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true);


    wp_enqueue_script('nofluxo-menu-toggle', get_template_directory_uri() . '/js/menu-toggle.js', array('jquery'), '20151105', true);
    wp_enqueue_script('nofluxo-widget-ajuste', get_template_directory_uri() . '/js/widget-ajuste.js', array('jquery'), '20151109', true);
    wp_enqueue_script('nofluxo-variations-ajuste', get_template_directory_uri() . '/js/variations-ajuste.js', array('jquery'), '20151109', true);
    
    wp_enqueue_script('nofluxo-entry-content-li-ajustes', get_template_directory_uri() . '/js/entry-content-li-ajustes.js', array('jquery'), '20151112', true);

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
            
             if ( function_exists('yoast_breadcrumb') ){
                 echo '<div class="col-xs-10 col-xs-offset-2 breadcrumb-geral">';
                 yoast_breadcrumb('<p id="breadcrumbs">','</p>');
                 echo '</div>';
                 
             }

            echo '<div class="col-sm-3">';
            get_sidebar('esquerda');
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




/** Forms ****************************************************************/

if ( ! function_exists( 'woocommerce_form_field' ) ) {

	/**
	 * Outputs a checkout/address form field.
	 *
	 * @subpackage	Forms
	 * @param string $key
	 * @param mixed $args
	 * @param string $value (default: null)
	 * @todo This function needs to be broken up in smaller pieces
	 */
	function woocommerce_form_field( $key, $args, $value = null ) {
		$defaults = array(
			'type'              => 'text',
			'label'             => '',
			'description'       => '',
			'placeholder'       => '',
			'maxlength'         => false,
			'required'          => false,
			'id'                => $key,
			'class'             => array(),
			'label_class'       => array(),
			'input_class'       => array(),
			'return'            => false,
			'options'           => array(),
			'custom_attributes' => array(),
			'validate'          => array(),
			'default'           => '',
		);

		$args = wp_parse_args( $args, $defaults );
		$args = apply_filters( 'woocommerce_form_field_args', $args, $key, $value );

		if ( $args['required'] ) {
			$args['class'][] = 'validate-required';
			$required = ' <abbr class="required" title="' . esc_attr__( 'required', 'woocommerce'  ) . '">*</abbr>';
		} else {
			$required = '';
		}

		$args['maxlength'] = ( $args['maxlength'] ) ? 'maxlength="' . absint( $args['maxlength'] ) . '"' : '';

		if ( is_string( $args['label_class'] ) ) {
			$args['label_class'] = array( $args['label_class'] );
		}

		if ( is_null( $value ) ) {
			$value = $args['default'];
		}

		// Custom attribute handling
		$custom_attributes = array();

		if ( ! empty( $args['custom_attributes'] ) && is_array( $args['custom_attributes'] ) ) {
			foreach ( $args['custom_attributes'] as $attribute => $attribute_value ) {
				$custom_attributes[] = esc_attr( $attribute ) . '="' . esc_attr( $attribute_value ) . '"';
			}
		}

		if ( ! empty( $args['validate'] ) ) {
			foreach( $args['validate'] as $validate ) {
				$args['class'][] = 'validate-' . $validate;
			}
		}

		$field = '';
		$label_id = $args['id'];
		$field_container = '<div class="form-row form-group %1$s" id="%2$s">%3$s</div>';

		switch ( $args['type'] ) {
			case 'country' :

				$countries = $key == 'shipping_country' ? WC()->countries->get_shipping_countries() : WC()->countries->get_allowed_countries();

				if ( sizeof( $countries ) == 1 ) {

					$field .= '<strong>' . current( array_values( $countries ) ) . '</strong>';

					$field .= '<input type="hidden" name="' . esc_attr( $key ) . '" id="' . esc_attr( $args['id'] ) . '" value="' . current( array_keys($countries ) ) . '" ' . implode( ' ', $custom_attributes ) . ' class="country_to_state" />';

				} else {

					$field = '<select name="' . esc_attr( $key ) . '" id="' . esc_attr( $args['id'] ) . '" class="country_to_state country_select ' . esc_attr( implode( ' ', $args['input_class'] ) ) .'" ' . implode( ' ', $custom_attributes ) . '>'
							. '<option value="">'.__( 'Select a country&hellip;', 'woocommerce' ) .'</option>';

					foreach ( $countries as $ckey => $cvalue ) {
						$field .= '<option value="' . esc_attr( $ckey ) . '" '.selected( $value, $ckey, false ) .'>'.__( $cvalue, 'woocommerce' ) .'</option>';
					}

					$field .= '</select>';

					$field .= '<noscript><input type="submit" name="woocommerce_checkout_update_totals" value="' . esc_attr__( 'Update country', 'woocommerce' ) . '" /></noscript>';

				}

				break;
			case 'state' :

				/* Get Country */
				$country_key = $key == 'billing_state'? 'billing_country' : 'shipping_country';
				$current_cc  = WC()->checkout->get_value( $country_key );
				$states      = WC()->countries->get_states( $current_cc );

				if ( is_array( $states ) && empty( $states ) ) {

					$field_container = '<p class="form-row %1$s" id="%2$s" style="display: none">%3$s</p>';

					$field .= '<input type="hidden" class="hidden" name="' . esc_attr( $key )  . '" id="' . esc_attr( $args['id'] ) . '" value="" ' . implode( ' ', $custom_attributes ) . ' placeholder="' . esc_attr( $args['placeholder'] ) . '" />';

				} elseif ( is_array( $states ) ) {

					$field .= '<select name="' . esc_attr( $key ) . '" id="' . esc_attr( $args['id'] ) . '" class="state_select ' . esc_attr( implode( ' ', $args['input_class'] ) ) .'" ' . implode( ' ', $custom_attributes ) . ' placeholder="' . esc_attr( $args['placeholder'] ) . '">
						<option value="">'.__( 'Select a state&hellip;', 'woocommerce' ) .'</option>';

					foreach ( $states as $ckey => $cvalue ) {
						$field .= '<option value="' . esc_attr( $ckey ) . '" '.selected( $value, $ckey, false ) .'>'.__( $cvalue, 'woocommerce' ) .'</option>';
					}

					$field .= '</select>';

				} else {

					$field .= '<input type="text" class="input-text ' . esc_attr( implode( ' ', $args['input_class'] ) ) .'" value="' . esc_attr( $value ) . '"  placeholder="' . esc_attr( $args['placeholder'] ) . '" name="' . esc_attr( $key ) . '" id="' . esc_attr( $args['id'] ) . '" ' . implode( ' ', $custom_attributes ) . ' />';

				}

				break;
			case 'textarea' :

				$field .= '<textarea name="' . esc_attr( $key ) . '" class="input-text ' . esc_attr( implode( ' ', $args['input_class'] ) ) .'" id="' . esc_attr( $args['id'] ) . '" placeholder="' . esc_attr( $args['placeholder'] ) . '" ' . $args['maxlength'] . ' ' . ( empty( $args['custom_attributes']['rows'] ) ? ' rows="2"' : '' ) . ( empty( $args['custom_attributes']['cols'] ) ? ' cols="5"' : '' ) . implode( ' ', $custom_attributes ) . '>'. esc_textarea( $value  ) .'</textarea>';

				break;
			case 'checkbox' :

				$field = '<label class="checkbox ' . implode( ' ', $args['label_class'] ) .'" ' . implode( ' ', $custom_attributes ) . '>
						<input type="' . esc_attr( $args['type'] ) . '" class="input-checkbox ' . esc_attr( implode( ' ', $args['input_class'] ) ) .'" name="' . esc_attr( $key ) . '" id="' . esc_attr( $args['id'] ) . '" value="1" '.checked( $value, 1, false ) .' /> '
						 . $args['label'] . $required . '</label>';

				break;
			case 'password' :

				$field .= '<input type="password" class="input-text ' . esc_attr( implode( ' ', $args['input_class'] ) ) .'" name="' . esc_attr( $key ) . '" id="' . esc_attr( $args['id'] ) . '" placeholder="' . esc_attr( $args['placeholder'] ) . '" value="' . esc_attr( $value ) . '" ' . implode( ' ', $custom_attributes ) . ' />';

				break;
			case 'text' :

				$field .= '<input type="text" class="input-text ' . esc_attr( implode( ' ', $args['input_class'] ) ) .'" name="' . esc_attr( $key ) . '" id="' . esc_attr( $args['id'] ) . '" placeholder="' . esc_attr( $args['placeholder'] ) . '" '.$args['maxlength'].' value="' . esc_attr( $value ) . '" ' . implode( ' ', $custom_attributes ) . ' />';

				break;
			case 'email' :

				$field .= '<input type="email" class="input-text ' . esc_attr( implode( ' ', $args['input_class'] ) ) .'" name="' . esc_attr( $key ) . '" id="' . esc_attr( $args['id'] ) . '" placeholder="' . esc_attr( $args['placeholder'] ) . '" '.$args['maxlength'].' value="' . esc_attr( $value ) . '" ' . implode( ' ', $custom_attributes ) . ' />';

				break;
			case 'tel' :

				$field .= '<input type="tel" class="input-text ' . esc_attr( implode( ' ', $args['input_class'] ) ) .'" name="' . esc_attr( $key ) . '" id="' . esc_attr( $args['id'] ) . '" placeholder="' . esc_attr( $args['placeholder'] ) . '" '.$args['maxlength'].' value="' . esc_attr( $value ) . '" ' . implode( ' ', $custom_attributes ) . ' />';

				break;
			case 'select' :

				$options = $field = '';

				if ( ! empty( $args['options'] ) ) {
					foreach ( $args['options'] as $option_key => $option_text ) {
						if ( "" === $option_key ) {
							// If we have a blank option, select2 needs a placeholder
							if ( empty( $args['placeholder'] ) ) {
								$args['placeholder'] = $option_text ? $option_text : __( 'Choose an option', 'woocommerce' );
							}
							$custom_attributes[] = 'data-allow_clear="true"';
						}
						$options .= '<option value="' . esc_attr( $option_key ) . '" '. selected( $value, $option_key, false ) . '>' . esc_attr( $option_text ) .'</option>';
					}

					$field .= '<select name="' . esc_attr( $key ) . '" id="' . esc_attr( $args['id'] ) . '" class="select '.esc_attr( implode( ' ', $args['input_class'] ) ) .'" ' . implode( ' ', $custom_attributes ) . ' placeholder="' . esc_attr( $args['placeholder'] ) . '">
							' . $options . '
						</select>';
				}

				break;
			case 'radio' :

				$label_id = current( array_keys( $args['options'] ) );

				if ( ! empty( $args['options'] ) ) {
					foreach ( $args['options'] as $option_key => $option_text ) {
						$field .= '<input type="radio" class="input-radio ' . esc_attr( implode( ' ', $args['input_class'] ) ) .'" value="' . esc_attr( $option_key ) . '" name="' . esc_attr( $key ) . '" id="' . esc_attr( $args['id'] ) . '_' . esc_attr( $option_key ) . '"' . checked( $value, $option_key, false ) . ' />';
						$field .= '<label for="' . esc_attr( $args['id'] ) . '_' . esc_attr( $option_key ) . '" class="radio ' . implode( ' ', $args['label_class'] ) .'">' . $option_text . '</label>';
					}
				}

				break;
		}

		if ( ! empty( $field ) ) {
			$field_html = '';

			if ( $args['label'] && 'checkbox' != $args['type'] ) {
				$field_html .= '<label for="' . esc_attr( $label_id ) . '" class="' . esc_attr( implode( ' ', $args['label_class'] ) ) .'">' . $args['label'] . $required . '</label>';
			}

			$field_html .= $field;

			if ( $args['description'] ) {
				$field_html .= '<span class="description">' . esc_html( $args['description'] ) . '</span>';
			}

			$container_class = 'form-row ' . esc_attr( implode( ' ', $args['class'] ) );
			$container_id = esc_attr( $args['id'] ) . '_field';

			$after = ! empty( $args['clear'] ) ? '<div class="clear"></div>' : '';

			$field = sprintf( $field_container, $container_class, $container_id, $field_html ) . $after;
		}

		$field = apply_filters( 'woocommerce_form_field_' . $args['type'], $field, $key, $args, $value );

		if ( $args['return'] ) {
			return $field;
		} else {
			echo $field;
		}
	}
}





function get_product_search_form() {
    ?>
    <div class="pesquisar"> 
        <form role="search" method="get" class="woocommerce-product-search" action="<?php echo esc_url(home_url('/')); ?>">
            <input 
                type="search" 
                class="search-field" 
                placeholder="Pesquisar" 
                value="<?php echo get_search_query(); ?>" 
                name="s" 
                title="<?php echo esc_attr_x('Search for:', 'label', 'woocommerce'); ?>" 
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

/**
 * Output a list of variation attributes for use in the cart forms.
 *
 * @param array $args
 * @since 2.4.0
 */
function wc_dropdown_variation_attribute_options($args = array()) {
    $args = wp_parse_args(apply_filters('woocommerce_dropdown_variation_attribute_options_args', $args), array(
        'options' => false,
        'attribute' => false,
        'product' => false,
        'selected' => false,
        'name' => '',
        'id' => '',
        'class' => '',
        'show_option_none' => __('Choose an option', 'woocommerce')
    ));

    $options = $args['options'];
    $product = $args['product'];
    $attribute = $args['attribute'];
    $name = $args['name'] ? $args['name'] : 'attribute_' . sanitize_title($attribute);
    $id = $args['id'] ? $args['id'] : sanitize_title($attribute);
    $class = $args['class'];

    if (empty($options) && !empty($product) && !empty($attribute)) {
        $attributes = $product->get_variation_attributes();
        $options = $attributes[$attribute];
    }

    
    echo '<div  class="selecao-produto-grupo select select-xs">';

    echo '<select id="' . esc_attr($id) . '" class="' . esc_attr($class) . '" name="' . esc_attr($name) . '" data-attribute_name="attribute_' . esc_attr(sanitize_title($attribute)) . '">';

    if ($args['show_option_none']) {
        echo '<option  class="" value="">' . wc_attribute_label( $attribute ) . '</option>';
    }

    if (!empty($options)) {
        if ($product && taxonomy_exists($attribute)) {
            // Get terms if this is a taxonomy - ordered. We need the names too.
            $terms = wc_get_product_terms($product->id, $attribute, array('fields' => 'all'));

            foreach ($terms as $term) {
                if (in_array($term->slug, $options)) {
                    echo '<option value="' . esc_attr($term->slug) . '" ' . selected(sanitize_title($args['selected']), $term->slug, false) . '>' . apply_filters('woocommerce_variation_option_name', $term->name) . '</option>';
                }
            }
        } else {
            foreach ($options as $option) {
                // This handles < 2.4.0 bw compatibility where text attributes were not sanitized.
                $selected = sanitize_title($args['selected']) === $args['selected'] ? selected($args['selected'], sanitize_title($option), false) : selected($args['selected'], $option, false);
                echo '<option value="' . esc_attr($option) . '" ' . $selected . '>' . esc_html(apply_filters('woocommerce_variation_option_name', $option)) . '</option>';
            }
        }
    }

    echo '</select>';


    woocommerce_quantity_input(array('input_value' => isset($_POST['quantity']) ? wc_stock_amount($_POST['quantity']) : 1));

    echo '</div>';
}

/**
 * Output the add to cart button for variations.
 */
function woocommerce_single_variation_add_to_cart_button() {
    global $product;
    ?>
    <div class="variations_button">

        <button type="submit" class="single_add_to_cart_button button alt"><?php echo esc_html($product->single_add_to_cart_text()); ?></button>
        <input type="hidden" name="add-to-cart" value="<?php echo absint($product->id); ?>" />
        <input type="hidden" name="product_id" value="<?php echo absint($product->id); ?>" />
        <input type="hidden" name="variation_id" class="variation_id" value="" />
    </div>
    <?php
}

/**
 * Output the quantity input for add to cart forms.
 *
 * @param  array $args Args for the input
 * @param  WC_Product|null $product
 * @param  boolean $echo Whether to return or echo|string
 */
function woocommerce_quantity_input($args = array(), $product = null, $echo = true) {
    
    global $product;
    
    if (is_null($product))
        $product = $GLOBALS['product'];

    $defaults = array(
        'input_name' => 'quantity',
        'input_value' => '1',
        'max_value' => apply_filters('woocommerce_quantity_input_max', '', $product),
        'min_value' => apply_filters('woocommerce_quantity_input_min', '', $product),
        'step' => apply_filters('woocommerce_quantity_input_step', '1', $product)
    );

    $args = apply_filters('woocommerce_quantity_input_args', wp_parse_args($args, $defaults), $product);

    ob_start();

    wc_get_template('global/quantity-input.php', $args);

    if ($echo) {
        echo ob_get_clean();
    } else {
        return ob_get_clean();
    }
}


function show_add_to_wishlist()
{
  echo do_shortcode('[yith_wcwl_add_to_wishlist]');
}



// Display 24 products per page. Goes in functions.php
add_filter( 'loop_shop_per_page', create_function( '$cols', 'return 12;' ), 20 );


/**
 * Prints messages and errors which are stored in the session, then clears them.
 *
 * @since 2.1
 */
function wc_print_notices_single() {
	if ( ! did_action( 'woocommerce_init' ) ) {
		_doing_it_wrong( __FUNCTION__, __( 'This function should not be called before woocommerce_init.', 'woocommerce' ), '2.3' );
		return;
	}

	$all_notices  = WC()->session->get( 'wc_notices', array() );
	$notice_types = apply_filters( 'woocommerce_notice_types', array( 'error', 'success', 'notice' ) );

	foreach ( $notice_types as $notice_type ) {
		if ( wc_notice_count( $notice_type ) > 0 ) {
			wc_get_template( "notices-single/{$notice_type}.php", array(
				'messages' => $all_notices[$notice_type]
			) );
		}
	}

	wc_clear_notices();
}



//add_filter ('add_to_cart_redirect', 'redirect_to_checkout');
//
//function redirect_to_checkout() {
//    global $woocommerce;
//    $checkout_url = $woocommerce->cart->get_checkout_url();
//    return $checkout_url;
//}