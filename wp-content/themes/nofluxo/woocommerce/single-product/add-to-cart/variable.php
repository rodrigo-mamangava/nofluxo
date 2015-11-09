<?php
/**
 * Variable product add to cart
 *
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.4.0
 */
if (!defined('ABSPATH')) {
    exit;
}

global $product;

$attribute_keys = array_keys($attributes);

do_action('woocommerce_before_add_to_cart_form');
?>

<form class="variations_form cart" method="post" enctype='multipart/form-data' data-product_id="<?php echo absint($product->id); ?>" data-product_variations="<?php echo esc_attr(json_encode($available_variations)) ?>">
<?php do_action('woocommerce_before_variations_form'); ?>

    <div class="col-sm-4 col-sm-offset-1 selecao-produto">

        <?php if (empty($available_variations) && false !== $available_variations) : ?>
            <p class="stock out-of-stock"><?php _e('This product is currently out of stock and unavailable.', 'woocommerce'); ?></p>
<?php else : ?>
            <table class="variations" cellspacing="0">
                <tbody>
    <?php foreach ($attributes as $attribute_name => $options) : ?>
                        <tr>
                            <td class="value">
                                <?php
                                $selected = isset($_REQUEST['attribute_' . sanitize_title($attribute_name)]) ? wc_clean($_REQUEST['attribute_' . sanitize_title($attribute_name)]) : $product->get_variation_default_attribute($attribute_name);



                                wc_dropdown_variation_attribute_options(array(
                                    'class' => 'form-control',
                                    'options' => $options,
                                    'attribute' => $attribute_name,
                                    'product' => $product,
                                    'selected' => $selected
                                ));
                                ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <?php //do_action('woocommerce_before_add_to_cart_button'); ?>

        </div>

        <!--<div class="single_variation_wrap" style="display:none;">-->

        <div class="single_variation_wrap col-sm-4 col-sm-offset-1 comprar-produto">
            
            <div class="comprar-produto-conteudo">
                <?php            
                woocommerce_template_single_price();            
                woocommerce_single_variation();            
                woocommerce_single_variation_add_to_cart_button();
                ?>
            </div>
            
        </div>

        <?php //do_action('woocommerce_after_add_to_cart_button'); ?>
    <?php endif; ?>

    <?php do_action('woocommerce_after_variations_form'); ?>
</form>

<?php do_action('woocommerce_after_add_to_cart_form'); ?>
