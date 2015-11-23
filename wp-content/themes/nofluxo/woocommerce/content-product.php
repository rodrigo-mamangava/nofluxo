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
        $woocommerce_loop['columns'] = apply_filters('loop_shop_columns', 4);
    } else {
        $woocommerce_loop['columns'] = apply_filters('loop_shop_columns', 3);
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

    <div class="item-produto">

        <div class="item-produto-wish">                           
            <?php echo do_shortcode('[yith_wcwl_add_to_wishlist icon="fa-heart-o" label=""  already_in_wishslist_text=""   ]'); ?>                            
        </div>

        <a href="<?php the_permalink(); ?>">



            <?php
            /**
             * woocommerce_before_shop_loop_item_title hook
             *
             * @hooked woocommerce_show_product_loop_sale_flash - 10
             * @hooked woocommerce_template_loop_product_thumbnail - 10
             */
            //do_action('woocommerce_before_shop_loop_item_title');
            woocommerce_show_product_loop_sale_flash();
           

            $attachment_ids = $product->get_gallery_attachment_ids();
            
            //debug(sizeof($attachment_ids));
            
            if (sizeof($attachment_ids) == 1) {
                
                $urlPri = "";
                $urlSec = "";
                
                for ($i = 0; $i <= 1; $i++) {
                    
                    //debug(wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'shop_catalog' ));
                    
                    if($i == 0){
                        $urlPri =  wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'shop_catalog' );
                    }else if($i == 1){
                        $urlSec = wp_get_attachment_image_src( $attachment_ids[0], 'shop_catalog' );
                    }
                    
                }
                
                ?>
                    <img 
                        src="<?php echo$urlPri[0];?>" class="attachment-shop_catalog wp-post-image" 
                        onmouseover="this.src='<?php echo$urlSec[0];?>'" 
                        onmouseout="this.src='<?php echo$urlPri[0];?>'" 
                        >
            
                <?php
                

            }else{
                 woocommerce_template_loop_product_thumbnail();
            }
            ?>

            <div class="item-produto-label">
                <div class="row area">

            <?php
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
            //show_add_to_wishlist();


            do_action('woocommerce_after_shop_loop_item_title');
            ?>


                </div><!--row area-->
            </div><!--item-produto-label-->

        </a>
    </div><!--item-produto-->

<?php
/**
 * woocommerce_after_shop_loop_item hook
 *
 * @hooked woocommerce_template_loop_add_to_cart - 10
 */
//do_action('woocommerce_after_shop_loop_item');
?>

</div>

