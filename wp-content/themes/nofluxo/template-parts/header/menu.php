<header class="container-fluid">
    <div class="row">
        <nav class="navbar">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <?php if (is_front_page()) : ?>
                        <a class="navbar-brand" href="#"><img src="<?php echo get_template_directory_uri() ?>/img/logo/logo-noFluxo-home2x.png" class="img-responsive"></a>
                    <?php else: ?>
                        <a class="navbar-brand logo-interno" href="#"><img src="<?php echo get_template_directory_uri() ?>/img/logo/logo-noFluxo-internas2x.png" class="img-responsive"></a>                    
                    <?php endif; ?>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class=""><a href="index.php">Home </a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Loja <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="loja.php">Página loja</a></li>
                                <li><a href="produto-single.php">Produto Single</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">No Fluxo <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="sample-page.php">Página padrão - SAMPLE</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Atendimento ao cliente <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="contato.php">Contato</a></li>
                                <li><a href="faq.php">FAQ</a></li>
                            </ul>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"><i class="fa fa-heart-o"></i> 1</a></li>
                        <li><a href="#"><i class="fa fa-shopping-cart"></i> 3</a></li>
                        <li><a href="meu-cadastro.php"><i class="fa fa-user"></i></a></li>
                        <li><a href="#"><i class="fa fa-search"></i></a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->


            </div><!-- /.container-fluid -->
        </nav>
    </div>




</header>


