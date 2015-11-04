<?php
/**
 * The template for displaying product content within loops.
 *
 * Override this template by copying it to yourtheme/woocommerce/content-product.php
 *
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.4.0
 */
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

global $product, $woocommerce_loop;

// Store loop count we're currently on
if (empty($woocommerce_loop['loop'])) {
    $woocommerce_loop['loop'] = 0;
}

// Store column count for displaying the grid
if (empty($woocommerce_loop['columns'])) {

    if (is_front_page()) {
        echo '<div class="loja-4-col">';
        $woocommerce_loop['columns'] = apply_filters('loop_shop_columns', 4);
        echo '<div class="loja">';

        $classes[] = 'col-sm-3';
    } else {

        $classes[] = 'col-sm-3';

        echo '<div class="loja-3-col">';
        $woocommerce_loop['columns'] = apply_filters('loop_shop_columns', 3);
        echo '<div class="loja">';
    }
}

// Ensure visibility
if (!$product || !$product->is_visible()) {
    return;
}

// Increase loop count
$woocommerce_loop['loop'] ++;

// Extra post classes
$classes = array();

if (is_front_page()) {
    $classes[] = 'col-sm-3';
} else {
    $classes[] = 'col-sm-4';
}
?>

<div <?php post_class($classes); ?>>

<?php do_action('woocommerce_before_shop_loop_item'); ?>

    <a href="<?php the_permalink(); ?>">

<?php
/**
 * woocommerce_before_shop_loop_item_title hook
 *
 * @hooked woocommerce_show_product_loop_sale_flash - 10
 * @hooked woocommerce_template_loop_product_thumbnail - 10
 */
do_action('woocommerce_before_shop_loop_item_title');

/**
 * woocommerce_shop_loop_item_title hook
 *
 * @hooked woocommerce_template_loop_product_title - 10
 */
do_action('woocommerce_shop_loop_item_title');

/**
 * woocommerce_after_shop_loop_item_title hook
 *
 * @hooked woocommerce_template_loop_rating - 5
 * @hooked woocommerce_template_loop_price - 10
 */
do_action('woocommerce_after_shop_loop_item_title');
?>

    </a>

<?php
/**
 * woocommerce_after_shop_loop_item hook
 *
 * @hooked woocommerce_template_loop_add_to_cart - 10
 */
do_action('woocommerce_after_shop_loop_item');
?>

</div>
