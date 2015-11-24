<?php 

   $args = array(
        'post_type' => 'banner',
        'posts_per_page' => 9999,
        'orderby' => 'menu_order',
        'order' =>'ASC'
    );
    $loop = new WP_Query($args);
    

  

?>

<div class="container-fluid banner">
    <div class="row">
        <div class="col-xs-12 hidden-xs">
            <div class="row">


                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            
                            <?php $countA = 0;?>
                            <ol class="carousel-indicators">
                                <?php while($loop->have_posts()) : $loop->the_post() ; ?>
                                <li data-target="#carousel-example-generic" data-slide-to="<?php echo $countA?>" class="<?php echo ($countA == 0) ? 'active' : ''; ?>"></li>                          
                                <?php $countA++; ?>                                   
                                <?php endwhile; ?>
                            </ol>


                            <!-- Wrapper for slides -->
                            
                            <?php $countB = 0;?>
                            
                            <div class="carousel-inner" role="listbox">
                                <?php while($loop->have_posts()) : $loop->the_post() ; ?>                                
                                <div class="item <?php echo ($countB == 0)?'active' : null;  ?>">
                                    <?php
                                        $urlBanner = get_post_meta( get_the_ID(), 'url-banner' );
                                    ?>
                                    <a href="<?php echo ($urlBanner[0])? $urlBanner[0] : ''; ?>">
                                                                                
                                        <?php echo get_the_post_thumbnail(get_the_ID() ,'homepage-banner', array( 'class' => 'img-responsive img-banner' ) ); ?>
                                        <div class="carousel-caption">
                                        </div>
                                    </a>

                                </div>                                    
                                <?php $countB++; ?>
                            
                                <?php endwhile; ?>
                                
                            </div>
                        </div>
                    </div>
        </div>

    </div>

</div>

