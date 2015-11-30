<header class="container-fluid visible-xs">
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
                            <div class="col-xs-12 menu">

                                <?php linkMyCart(); ?>

                                <a 
                                    id="menu-mobile"
                                    href="#"
                                    class="pull-right menu-hamb"                                    
                                    ><i class="fa fa-bars"></i></a>
                            </div>
                        </div><!--menu-->
                    </div> 

                </div>

                <div  id="loja" class="row sub-menu-mobile">
                    <div class="col-xs-12">

                        <div class="linha-azul"></div>

                        <ul class="sub-menu-1">
                            <li><a href="<?php echo esc_url(home_url('/')); ?>" >Home </a></li>

                            <li><a id="menu-loja" href="#"  data-menu='loja' >Loja <i class="fa fa-caret-right"></i> </a>
                            
                                <?php
                                wp_nav_menu(array('menu' => 'Menu Loja'));
                                ?>
                                
                            </li>
                            <?php if(menuExiste('menuYou')) :?>
                            <li><a id="menu-loja" href="#"  data-menu='loja' >Youtubers <i class="fa fa-caret-right"></i> </a>
                            
                                <?php
                                wp_nav_menu(array('menu' => 'Menu Youtubers'));
                                ?>
                                
                            </li>
                            <?php endif;?>
                          
                            <li><a href="#"  data-menu='nofluxo' >No Fluxo <i class="fa fa-caret-right"></i> </a>
                                <?php
                                wp_nav_menu(array('menu' => 'Menu No Fluxo'));
                                ?>
                            </li>

                            <li><a href="#"  data-menu='atendimento'>Atendimento ao cliente <i class="fa fa-caret-right"></i> </a>
                                <?php
                                wp_nav_menu(array('menu' => 'Menu Atendimento'));
                                ?>
                            </li>


                        </ul>












                    </div>                         
                </div>




            </div><!-- /.container-fluid -->
        </nav>
    </div>




</header>