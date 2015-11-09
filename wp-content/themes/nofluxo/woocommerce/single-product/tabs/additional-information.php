<?php
/**
 * Additional Information tab
 *
 * @author        WooThemes
 * @package       WooCommerce/Templates
 * @version       2.0.0
 */
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

global $product;

if(!$product->get_attributes()){
    return;
}

$heading = apply_filters('woocommerce_product_additional_information_heading', __('Additional Information', 'woocommerce'));
?>

<?php if ($heading): ?>
    <h2 class="produto-single-info-adicional-titulo"><?php echo $heading; ?></h2>
<?php endif; ?>

<div class="produto-single-info-adicional-texto">
<?php $product->list_attributes(); ?>
</div>
