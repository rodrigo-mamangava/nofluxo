<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<div class="colecao-completa-3-colunas">'


    <?php if (apply_filters('woocommerce_show_page_title', true)) : ?>

        <h1 class="page-title"><?php woocommerce_page_title(); ?></h1>

    <?php endif; ?>


    <?php get_template_part('template-parts/woo/shop'); ?>

</div>
