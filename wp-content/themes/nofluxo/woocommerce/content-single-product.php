<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * Override this template by copying it to yourtheme/woocommerce/content-single-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
?>

<?php
/**
 * woocommerce_before_single_product hook
 *
 * @hooked wc_print_notices - 10
 */
//do_action('woocommerce_before_single_product');

if (post_password_required()) {
    echo get_the_password_form();
    return;
}
?>

<div class="row produto-single pagina">
    
    <div class="col-xs-10 col-xs-offset-2 breadcrumb-geral">
    <?php if ( function_exists('yoast_breadcrumb') ) 
    {
        yoast_breadcrumb('<p id="breadcrumbs">','</p>');
        
    } ?>
    </div>

    <div itemscope itemtype="<?php echo woocommerce_get_product_schema(); ?>" id="product-<?php the_ID(); ?>" <?php post_class(); ?>>
        
        <?php

         //debug(get_the_ID());
        
        ?>

        <div class="col-sm-4">
            <?php
            /**
             * woocommerce_before_single_product_summary hook
             *
             * @hooked woocommerce_show_product_sale_flash - 10
             * @hooked woocommerce_show_product_images - 20
             */
            //do_action('woocommerce_before_single_product_summary');
            //woocommerce_show_product_sale_flash();
            woocommerce_show_product_images();
            ?>
        </div><!-- col-sm-4 -->
        <div class="col-sm-8">
            <div class="produto-single-info">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="produto-single-info-titulo">
                            <?php woocommerce_template_single_title(); ?>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="dados-extra-titulo dados-extra-titulo-wish">                           
                            <?php echo do_shortcode('[yith_wcwl_add_to_wishlist icon="fa-heart-o" label="Wishlist"  already_in_wishslist_text=""   ]'); ?>                            
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="dados-extra-titulo dados-extra-titulo-pass">                            
                            <div class="passador-item">
                                <?php previous_post_link('%link', '<img src="'.get_template_directory_uri().'/img/passador/seta-esq.png" >'); ?>
                                <?php next_post_link('%link', '<img src="'.get_template_directory_uri().'/img/passador/seta-dir.png" >'); ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12">
                        <div class="produto-categoria">
                            <?php
                            woocommerce_template_single_meta();
                            ?>
                        </div>
                    </div><!-- produto-categoria -->

                    <div class="col-xs-12">

                        <div class="produto-single-info-descricao">

                            <div class="descricao">
                                <?php
                                if ($post->post_excerpt != '') {
                                    woocommerce_template_single_excerpt();
                                } else {
                                    woocommerce_product_description_tab();
                                }
                                ?>
                            </div>

                            <div class="disponiveis-compra">

                                <div class="row">  

                                    <div class="col-xs-12">
                                        <?php wc_print_notices_single(); ?>
                                    </div>

                                    <?php
                                    woocommerce_template_single_add_to_cart();
                                    ?>

                                </div>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="produto-single-info-adicional">

                                        <?php
                                        woocommerce_product_additional_information_tab();
                                        ?>

                                        </div>

                                    </div>
                                </div>
                            </div><!--disponiveis-compra -->

                        </div>
                    </div>

<?php get_template_part('template-parts/woo/sharebuttons'); ?>

                </div>

<?php
/**
 * woocommerce_single_product_summary hook
 *
 * @hooked woocommerce_template_single_title - 5
 * @hooked woocommerce_template_single_rating - 10
 * @hooked woocommerce_template_single_price - 10
 * @hooked woocommerce_template_single_excerpt - 20
 * @hooked woocommerce_template_single_add_to_cart - 30
 * @hooked woocommerce_template_single_meta - 40
 * @hooked woocommerce_template_single_sharing - 50
 */
//do_action('woocommerce_single_product_summary');
?>

                <meta itemprop="url" content="<?php the_permalink(); ?>" />

            </div><!-- produto-single-info -->
        </div><!--col-sm-8 -->

    </div><!-- #product-<?php the_ID(); ?> -->


</div>

<?php do_action('woocommerce_after_single_product'); ?>
