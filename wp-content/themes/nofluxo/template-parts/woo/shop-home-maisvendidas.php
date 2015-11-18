<?php
$args = array(
    'post_type' => 'product',
    'product_cat' => 'mais-vendidas',
    'posts_per_page' => 24
);
$loop = new WP_Query($args);

$total = $loop->found_posts;

$listaPrimeiros = array(1,5,9,13,17,21);
$listaUltimos = array(4,8,12,16,20,24);


?>

<div class="mais-vendidas">

    <div class="row">



        <div class="col-xs-11 mais-vendidas-titulo">
            <h2 class="h2-com-linha"><span> <img class="icone-titulo" src="<?php echo get_template_directory_uri() ?>/img/icone/geral/ico-Camisa2x.png">  As mais vendidas</span></h2>
        </div>

        <div  class="col-xs-1 mais-vendidas-passador" >
            <a class="" href="#carousel-mais-vendidas" role="button" data-slide="prev"><img src="<?php echo get_template_directory_uri() ?>/img/passador/seta-esq.png" ></a>
            <a class="" href="#carousel-mais-vendidas" role="button" data-slide="next"><img src="<?php echo get_template_directory_uri() ?>/img/passador/seta-dir.png" ></a>
        </div>



        <div id="carousel-mais-vendidas" class="col-xs-12 carousel slide" data-ride="carousel" data-interval="false">
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">

                

                    <?php
                    $classes = array();

                    $classes[] = 'col-sm-3';

                    if ($loop->have_posts()) {

                        $count = 1;

                        while ($loop->have_posts()) : $loop->the_post();
                            
                            ?>
                    
                            <?php if($count == 1) :?>
                                <div class="item row active">
                            <?php elseif(array_search($count, $listaPrimeiros) != FALSE ) :?>
                                    </div> <!-- ITEM ROW-->
                                    <div class="item row ">                    
                            <?php endif; ?>



                            <div <?php post_class($classes); ?>>

                                <?php do_action('woocommerce_before_shop_loop_item'); ?>

                                <div class="item-produto">
                                    
                                    <div class="item-produto-wish">                           
                                        <?php echo do_shortcode('[yith_wcwl_add_to_wishlist icon="fa-heart-o" label=""  already_in_wishslist_text=""   ]'); ?>                            
                                    </div>
                                    
                                    <a href="<?php the_permalink(); ?>">
                                        <?php
                                        do_action('woocommerce_before_shop_loop_item_title');
                                        ?>
                                        <div class="item-produto-label">
                                            <div class="row area">
                                                <?php
                                                do_action('woocommerce_shop_loop_item_title');
                                                do_action('woocommerce_after_shop_loop_item_title');
                                                ?>
                                            </div><!--row area-->
                                        </div><!--item-produto-label-->
                                    </a>
                                </div><!--item-produto-->

                            </div>
                                        
             
                            <?php if($count == $total):?>
                                </div> <!-- ITEM ultimo-->
                            <?php endif;?>
                                
                                        

                            <?php
                            $count++;                            
                        endwhile;
                    } else {
                        echo __('No products found');
                    }
                    ?>

            </div><!--carousel-inner-->               
        </div><!-- col-xs-12 carrosel-mais-vendidas -->



    </div><!--row-->

</div><!-- mais-vendidas -->




<?php 
wp_reset_query();
wp_reset_postdata(); 
