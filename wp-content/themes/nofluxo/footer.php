</div><!--main container-->
<footer class="container-fluid">
    <div class="row">
        <div class="container footer-conteudo">
            <div class="row">
                <div class=" footer-conteudo-esq col-sm-10">

                    <div class="row">

                        <div class="col-md-4">
                            <h2 class="titulo">No Fluxo</h2>
                            <div class="row">
                                <div class="col-xs-12 sitemap">
                                <?php
                                    wp_nav_menu(array('menu' => 'Footer Mapa','menu_class' => 'double'));
                                ?>
                                </div>

                            </div>

                        </div>
                        <div class="col-md-4">
                            <h2 class="titulo">Socialize!</h2>  
                            <p class="outros">
                                Chega mais
                            </p>
                            <div class="row link-social">
                                <?php
                                    wp_nav_menu(array('menu' => 'Footer Social', 'menu_class' => 'linha'));
                                ?>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <h2 class="titulo">Newsletter</h2>
                            <?php formCadastroNews(); ?>
                        </div>



                    </div><!-- row -->

                </div><!--footer-conteudo-->
                <div class=" footer-conteudo-logo col-md-2">
                    <img src="<?php echo get_template_directory_uri() ?>/img/logo/logo-noFluxo-rodape2x.png" class="img-responsive logo-footer">

                </div><!--footer-conteudo-logo-->
            </div><!--row-->

        </div><!-- container footer-conteudo -->
    </div><!--row-->
    
   
    <?php get_template_part( 'template-parts/bandeiras' ); ?>

    <div class="row credito">
        <div class="col-xs-12 ">
            <p>
                All content designs 2010-<?php echo date('Y'); ?> 
                &#183; No Fluxo.com. 
                &#183; CNPJ29.358.108/0001-32 
                &#183; Razão e Emoção Roupas LTDA
                &#183; <a href="#">Politica de Privacidade</a>
                &#183; <a href="http://pinzon17.com.br/">Desenvolvimento Estúdio Pinzon17</a></p>
                
        </div>
    </div>

</footer>

<?php wp_footer(); ?>

</body>
</html>
