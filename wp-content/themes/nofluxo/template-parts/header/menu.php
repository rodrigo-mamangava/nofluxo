<header class="container-fluid">
    <div class="row">
        <nav class="navbar">
            <div class="container">

                <div class="row">
                    <div class="col-xs-2">
                        <?php if (is_front_page()) : ?>
                            <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri() ?>/img/logo/logo-noFluxo-home2x.png" class="img-responsive"></a>
                        <?php else: ?>
                            <a class="navbar-brand logo-interno" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri() ?>/img/logo/logo-noFluxo-internas2x.png" class="img-responsive"></a>                    
                        <?php endif; ?>

                    </div>
                    <div class="col-xs-10">
                        <div class="row">
                            <div class="col-xs-12 menu">

                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="pull-left">Home </a>

                                <a id="menu-loja" href="#" class="pull-left" data-menu='loja' >Loja <i class="fa fa-caret-down"></i> </a>

                                <a href="#" class=" pull-left" data-menu='youtubers'>Youtubers <i class="fa fa-caret-down"></i> </a>

                                <a href="#" class="pull-left" data-menu='nofluxo' >No Fluxo <i class="fa fa-caret-down"></i> </a>
                                <a href="#" class="pull-left" data-menu='atendimento'>Atendimento ao cliente <i class="fa fa-caret-down"></i> </a>

                                <a href="#" class="pull-right last-item" data-menu='buscar'>  <img class="icone-menu" src="<?php echo get_template_directory_uri() ?>/img/icone/geral/ico-Search2x.png"></a>
                              
                                <?php linkInOut(); ?>
                                <?php linkMyCart(); ?>
                                <a href="#" class="pull-right " > <img class="icone-menu" src="<?php echo get_template_directory_uri() ?>/img/icone/geral/ico-Favoritar2x.png"> 4</a>
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
                            <div class="col-xs-12 menu-pesquisar">
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
                            <div class="col-xs-2">
                                <h2>Youtubers</h2>
                                <a href="#"> <p>Game Play RJ</p></a>
                                <a href="#"> <p>Bruno JVP</p></a>
                                <a href="#"> <p>Cross</p></a>
                                <a href="#"> <p>Plano B</p></a>
                            </div>
                            <div class="col-xs-2">
                                <br/>
                                <a href="#"> <p>Game Play RJ</p></a>
                                <a href="#"> <p>Bruno JVP</p></a>
                                <a href="#"> <p>Cross</p></a>
                                <a href="#"> <p>Plano B</p></a>
                            </div>

                        </div>
                    </div>                         
                </div>
                <div  id="nofluxo" class="row sub-menu">
                    <div class="col-xs-10 col-xs-offset-2">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="linha-azul"></div>
                            </div>
                            <div class="col-xs-2">
                                <h2>Sobre</h2>
                                <a href="sample-page.php"> <p>Quem somos</p></a>
                                <a href="sample-page.php"> <p>Equipe</p></a>
                                <a href="faq.php"> <p>FAQ</p></a>
                                <a href="contato.php"> <p>Contato</p></a>
                                <a href="sample-page.php"> <p>Oportunidade</p></a>
                            </div>
                            <div class="col-xs-2">
                                <h2>Socialize</h2>
                                <a href="#"> <p>Facebook</p></a>
                                <a href="#"> <p>Instagram</p></a>
                                <a href="#"> <p>Snapchat</p></a>
                                <a href="#"> <p>Youtube</p></a>
                            </div>

                        </div>
                    </div>                         
                </div>
                <div  id="atendimento" class="row sub-menu">
                    <div class="col-xs-10 col-xs-offset-2">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="linha-azul"></div>
                            </div>
                            <div class="col-xs-2">
                                <h2>Meu cadastro</h2>
                                <a href="meu-cadastro.php"> <p>Mina conta</p></a>
                                <a href=""> <p>Meu carrinho</p></a>
                                <a href="#"> <p>Minha wishlist</p></a>
                            </div>
                            <div class="col-xs-2">
                                <h2>Produtos</h2>
                                <a href="sample-page.php"> <p>Qualidade</p></a>
                                <a href="sample-page.php"> <p>Medidas</p></a>
                            </div>
                            <div class="col-xs-2">
                                <h2>Segurança</h2>
                                <a href="sample-page.php"> <p>Politica de privacidade</p></a>
                                <a href="sample-page.php"> <p>Termos de uso</p></a>
                            </div>
                            <div class="col-xs-2">
                                <h2>Logística</h2>
                                <a href="sample-page.php"> <p>Entrega</p></a>
                                <a href="sample-page.php"> <p>Devolução</p></a>
                                <a href="faq.php"> <p>FAQ</p></a>
                            </div>
                            <div class="col-xs-2">
                                <h2>Contato</h2>
                                <a href="#"> <p>Entre em contato</p></a>
                            </div>

                        </div>
                    </div>                         
                </div>



            </div><!-- /.container-fluid -->
        </nav>
    </div>




</header>




