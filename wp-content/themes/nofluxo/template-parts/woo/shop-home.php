<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>


<ul class="products">
    <?php
    $args = array(
        'post_type' => 'product',
        'posts_per_page' => 12
    );
    $loop = new WP_Query($args);
    ?>
    
    <?php get_template_part('template-parts/maisvendidas'); ?>

    <div class = "colecao-completa-4-colunas">

        <div class = "row">
            <div class = "col-xs-12">
                <h2 class = "h2-com-linha"><span><img class = "icone-titulo" src = "img/icone/geral/ico-Camisa2x.png"> Coleção completa</span></h2>
            </div>
        </div>

        <div class = "row grade-prod">

            <?php
            if ($loop->have_posts()) {
                while ($loop->have_posts()) : $loop->the_post();
                    wc_get_template_part('content', 'product');
                endwhile;
            } else {
                echo __('No products found');
            }
            ?>

        </div><!-- row grade-prod -->

    </div><!-- colecao-completa-4-colunas -->
    <?php
    wp_reset_postdata();
    ?>

</ul>
