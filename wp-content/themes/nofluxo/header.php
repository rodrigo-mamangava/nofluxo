<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package noFluxo
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <div id="page" class="hfeed site">
            <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'nofluxo'); ?></a>

            <header id="masthead" class="site-header container-fluid" role="banner">
                <div class="row">
                    <div class="container">
                        <div class="row">
                            <div class="site-branding">
                                <?php if (is_front_page()) : ?>
                                    <a href="<?php echo esc_url(home_url('/')); ?>" 
                                       rel="home">
                                        <img
                                            class="img-responsive logo logo-home"
                                            src="<?php echo get_template_directory_uri() ?>/img/logo-noFluxo-home2x.png"
                                            >
                                    </a>
                                <?php else : ?>
                                    <a href="<?php echo esc_url(home_url('/')); ?>" 
                                       rel="home">
                                        <img 
                                            class="img-responsive logo logo-int"
                                            src="<?php echo get_template_directory_uri() ?>/img/logo-noFluxo-internas2x.png">
                                    </a>
                                <?php endif; ?>
                            </div><!-- .site-branding -->


                            <nav id="site-navigation" class="main-navigation col-sm-10 col-sm-offset-2" role="navigation">
                                <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e('Menu', 'nofluxo'); ?></button>
                                <?php wp_nav_menu(array('theme_location' => 'primary', 'menu_id' => 'primary-menu')); ?>
                            </nav><!-- #site-navigation -->


                        </div><!-- row -->


                    </div><!-- .container -->
                </div><!-- .row -->
            </header><!-- #masthead .container-fluid-->
<?php if (is_front_page()) : ?>
                <div class="banner">

                </div>

<?php endif; ?>


            <div id="content" class="site-conten container">
