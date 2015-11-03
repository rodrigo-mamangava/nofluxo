<header id="masthead" class="site-header container-fluid" role="banner">
    <div class="row">
        <div class="container">
            <div class="row">
                <div class="site-branding">

                    <a href="<?php echo esc_url(home_url('/')); ?>" 
                       rel="home">
                        <img 
                            class="img-responsive logo logo-int"
                            src="<?php echo get_template_directory_uri() ?>/img/logo-noFluxo-internas2x.png">
                    </a>
                </div><!-- .site-branding -->


                <nav id="site-navigation" class="main-navigation col-sm-10 col-sm-offset-2" role="navigation">
                    <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e('Menu', 'nofluxo'); ?></button>
                    <?php wp_nav_menu(array('theme_location' => 'primary', 'menu_id' => 'primary-menu')); ?>
                </nav><!-- #site-navigation -->


            </div><!-- row -->


        </div><!-- .container -->
    </div><!-- .row -->
</header><!-- #masthead .container-fluid-->
