<header class="container-fluid hidden-xs">
    <div class="row">
        <nav class="navbar">
            <div class="container">

                <div class="row">
                    <div class="col-xs-2">
                        <?php if (is_front_page()) : ?>
                            <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_template_directory_uri() ?>/img/logo/logo-noFluxo-home2x.png" ></a>
                        <?php else: ?>
                            <a class="navbar-brand logo-interno" href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_template_directory_uri() ?>/img/logo/logo-noFluxo-internas2x.png" ></a>                    
                        <?php endif; ?>

                    </div>
                    <div class="col-xs-10">
                        <div class="row">
                            <div class="col-xs-12 menu menu-principal">

                                <a href="<?php echo esc_url(home_url('/')); ?>" class="pull-left">Home </a>

                                <a id="menu-loja" href="#" class="pull-left" data-menu='loja' >Loja <i class="fa fa-caret-down"></i> </a>

                                <?php if(menuExiste('menuYou')) :?>
                                <a href="#" class=" pull-left" data-menu='youtubers'>Youtubers <i class="fa fa-caret-down"></i> </a>
                                <?php endif;?>

                                <a href="#" class="pull-left" data-menu='nofluxo' >No Fluxo <i class="fa fa-caret-down"></i> </a>
                                <a href="#" class="pull-left" data-menu='atendimento'>Atendimento ao cliente <i class="fa fa-caret-down"></i> </a>

                                <a href="#" 
                                   class="pull-right last-item" 
                                   data-menu='buscar'
                                   >  
                                    <img 
                                        class="icone-menu" 
                                        src="<?php echo get_template_directory_uri() ?>/img/icone/geral/ico-Search2x.png"
                                        data-imgin='<?php echo get_template_directory_uri() ?>/img/icone/geral/ico-Search2xhover.png'
                                        data-imgout='<?php echo get_template_directory_uri() ?>/img/icone/geral/ico-Search2x.png'
                                        >
                                </a>

                                <?php linkInOut(); ?>
                                <?php linkMyCart(); ?>
                                <a 
                                    href="<?php echo YITH_WCWL()->get_wishlist_url(); ?>" 
                                    class="pull-right "
                                    > 
                                    <img 
                                        class="icone-menu" 
                                        src="<?php echo get_template_directory_uri() ?>/img/icone/geral/ico-Favoritar2x.png"
                                        data-imgin='<?php echo get_template_directory_uri() ?>/img/icone/geral/ico-Favoritar2xhover.png'
                                        data-imgout='<?php echo get_template_directory_uri() ?>/img/icone/geral/ico-Favoritar2x.png'                                        
                                        >
                                        <?php echo yith_wcwl_count_products(); ?>
                                </a>
                            </div>

                        </div><!--menu-->
                    </div> 

                </div>

                <div  id="buscar" class="row sub-menu">
                    <div class="col-xs-10 col-xs-offset-2">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="linha-azul"></div>
                            </div>
                            <div class="col-sm-4 col-sm-offset-8 menu-pesquisar">
                                <?php echo get_product_search_form() ?>
                            </div>


                        </div>
                    </div>                         
                </div>

                <div  id="loja" class="row sub-menu">
                    <div class="col-xs-10 col-xs-offset-2">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="linha-azul"></div>
                            </div>
                            <?php
                                wp_nav_menu(array('menu' => 'Menu Loja'));                            
                            ?>

                            </div>
                        </div>                         
                    </div>
                
                

                    <div  id="youtubers" class="row sub-menu">
                        <div class="col-xs-10 col-xs-offset-2">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="linha-azul"></div>
                                </div>
                                <?php
                                wp_nav_menu(array('menu' => 'Menu Youtubers'));
                                 
                                ?>                            
                            </div>
                        </div>                         
                    </div>
                    <div  id="nofluxo" class="row sub-menu">
                        <div class="col-xs-10 col-xs-offset-2">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="linha-azul"></div>
                                </div>
    <?php
    wp_nav_menu(array('menu' => 'Menu No Fluxo'));
    ?>

                            </div>
                        </div>                         
                    </div>
                    <div  id="atendimento" class="row sub-menu">
                        <div class="col-xs-10 col-xs-offset-2">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="linha-azul"></div>
                                </div>
    <?php
    wp_nav_menu(array('menu' => 'Menu Atendimento'));
    ?>
                        </div>
                    </div>                         
                </div>



            </div><!-- /.container-fluid -->
        </nav>
    </div>




</header>
