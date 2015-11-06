

<div <?php post_class($classes); ?>>

    <?php do_action('woocommerce_before_shop_loop_item'); ?>

    <div class="item-produto">

        <a href="<?php the_permalink(); ?>">



            <?php
            /**
             * woocommerce_before_shop_loop_item_title hook
             *
             * @hooked woocommerce_show_product_loop_sale_flash - 10
             * @hooked woocommerce_template_loop_product_thumbnail - 10
             */
            do_action('woocommerce_before_shop_loop_item_title');
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

