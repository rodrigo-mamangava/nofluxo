<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package noFluxo
 */
?>

</div><!-- #content .site-conten .container-->

<footer class="container-fluid">
    <div class="row">
        <div class="container footer-conteudo">
            <div class="row">
                <div class=" footer-conteudo-esq col-sm-10">

                    <div class="row">

                        <div class="col-sm-4">
                            <h2 class="titulo">No Fluxo</h2>
                            <div class="row">
                                <div class="col-sm-6 sitemap">
                                    <a><p><img src="<?php echo get_template_directory_uri() ?>/img/icone/ico-quem-somos2x.png" class="sitemap-icon">Quem somos</p></a>
                                    <a><p><img src="<?php echo get_template_directory_uri() ?>/img/icone/ico-oportunindades2x.png" class="sitemap-icon">Oportunidade</p></a>
                                    <a><p><img src="<?php echo get_template_directory_uri() ?>/img/icone/ico-faq2x.png" class="sitemap-icon">FAQ</p></a>
                                    <a><p><img src="<?php echo get_template_directory_uri() ?>/img/icone/ico-contato2x.png" class="sitemap-icon">Contato</p></a>
                                </div>
                                <div class="col-sm-6 sitemap">
                                    <a><p><img src="<?php echo get_template_directory_uri() ?>/img/icone/ico-quem-somos2x.png" class="sitemap-icon">Meu Cadastro</p></a>
                                    <a><p><img src="<?php echo get_template_directory_uri() ?>/img/icone/ico-meu-cadastro2x.png" class="sitemap-icon">Produtos</p></a>
                                    <a><p><img src="<?php echo get_template_directory_uri() ?>/img/icone/ico-seguranca2x.png" class="sitemap-icon">Segurança</p></a>
                                    <a><p><img src="<?php echo get_template_directory_uri() ?>/img/icone/ico-logistica2x.png" class="sitemap-icon">Logistica</p></a>
                                </div>
                            </div>

                        </div>
                        <div class="col-sm-4">
                            <h2 class="titulo">Socialize!</h2>  
                            <p class="outros">
                                Chega mais
                            </p>
                            <div class="row">
                                <a class="col-xs-3" href="#">
                                    <img src="<?php echo get_template_directory_uri() ?>/img/icone/ico-social-facebook2x.png" class="img-responsive ">
                                </a>
                                <a class="col-xs-3" href="#">
                                    <img src="<?php echo get_template_directory_uri() ?>/img/icone/ico-social-instagram2x.png" class="img-responsive ">
                                </a>
                                <a class="col-xs-3" href="#">
                                    <img src="<?php echo get_template_directory_uri() ?>/img/icone/ico-social-snap2x.png" class="img-responsive ">
                                </a>
                                <a class="col-xs-3" href="#">
                                    <img src="<?php echo get_template_directory_uri() ?>/img/icone/ico-social-youtube2x.png" class="img-responsive">
                                </a>

                            </div>
                        </div>
                        <div class="col-sm-4">
                            <h2 class="titulo">Newsletter</h2>
                            <p class="outros">Cadastre-se. Vamos te botar nas boas!</p>
                            <div class="input-group outros">
                                <input type="text" class="form-control" placeholder="Coloque seu email">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">OK</button>
                                </span>
                            </div><!-- /input-group -->

                        </div>



                    </div><!-- row -->

                </div><!--footer-conteudo-->
                <div class=" footer-conteudo-logo col-sm-2">
                    <img src="<?php echo get_template_directory_uri() ?>/img/logo/logo-noFluxo-rodape2x.png" class="img-responsive logo-footer">

                </div><!--footer-conteudo-logo-->
            </div><!--row-->

        </div><!-- container footer-conteudo -->
    </div><!--row-->

    <div class="row credito">
        <div class="col-xs-12 ">
            <p>All content designs 2010-<?php echo date('Y'); ?> No Fluxo. <a href="#">Politica de Privacidade</a></p>
        </div>
    </div>

</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
