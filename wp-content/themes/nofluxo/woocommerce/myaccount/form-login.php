<?php
/**
 * Login Form
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.2.6
 */
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
?>

<?php wc_print_notices(); ?>

<?php do_action('woocommerce_before_customer_login_form'); ?>

<?php if (get_option('woocommerce_enable_myaccount_registration') === 'yes') : ?>

    <div class="col2-set" id="customer_login">

        <div class="col-1">
            
            <div row>
                <div class="col-sm-6">

<?php endif; ?>

        <h2><?php _e('Login', 'woocommerce'); ?></h2>

        <form method="post" class="login" <?php if ($hidden) echo 'style="display:none;"'; ?>>

<?php do_action('woocommerce_login_form_start'); ?>

            <?php if ($message) echo wpautop(wptexturize($message)); ?>

            <div class="form-group">

                <label class="" for="username">E-mail <span class="required ">*</span></label>

                <div class="">
                    <input type="text" class="form-control" name="username" id="username" />
                </div>


                <label class="" for="password"><?php _e('Password', 'woocommerce'); ?> <span class="required">*</span></label>
                <div class="">
                    <input class=" form-control" type="password" name="password" id="password" />
                </div>
            </div>



<?php do_action('woocommerce_login_form'); ?>

            <?php wp_nonce_field('woocommerce-login'); ?>



            <div class="form-group">
                <div class="col-xs-offset-2 col-xs-10">
                    <div class="checkbox">

                        <label for="rememberme" class="inline">
                            <input name="rememberme" type="checkbox" id="rememberme" value="forever" /> <?php _e('Remember me', 'woocommerce'); ?>
                        </label>

                    </div>

                </div>
            </div>

            <div class="form-group">

                <div class="col-xs-offset-2 col-xs-10">

                    <input type="submit" class="btn btn-entrar pull-right" name="login" value="<?php esc_attr_e('Login', 'woocommerce'); ?>" />

                </div>

            </div>

            <input type="hidden" name="redirect" value="<?php echo esc_url($redirect) ?>" />


            <div class="form-group">

                <div class="col-xs-offset-2 col-xs-10">
            <p class="lost_password pull-right">
                <a href="<?php echo esc_url(wp_lostpassword_url()); ?>"><?php _e('Lost your password?', 'woocommerce'); ?></a>
            </p>
                </div>
            </div>
              


<?php do_action('woocommerce_login_form_end'); ?>

        </form>

<?php if (get_option('woocommerce_enable_myaccount_registration') === 'yes') : ?>

        
                </div>
            </div>
        </div><!--col-1-->

        <div class="col-2">
            
            <div row>
                <div class="col-sm-6">
            
                <h2><?php _e( 'Register', 'woocommerce' ); ?></h2>

                <form method="post" class="register">
                    
                    <div class="form-group">

                    <?php do_action('woocommerce_register_form_start'); ?>

                    <?php if ('no' === get_option('woocommerce_registration_generate_username')) : ?>

                        <label class="" >
                        <?php _e('Username', 'woocommerce'); ?> 
                            <span class="required">*</span>
                        </label>
                        <div class="">
                            <input type="text" class="form-control" name="username" id="reg_username" value="<?php if (!empty($_POST['username'])) echo esc_attr($_POST['username']); ?>" />
                        </div>

                    <?php endif; ?>

                    <label class="">
                    <?php _e('Email address', 'woocommerce'); ?> 
                        <span class="required">*</span>
                    </label>
                    <div class="">
                        <input type="email" class="form-control" name="email" id="reg_email" value="<?php if (!empty($_POST['email'])) echo esc_attr($_POST['email']); ?>" />
                    </div>
                        
    <?php if ('no' === get_option('woocommerce_registration_generate_password')) : ?>

                        <label class="">
        <?php _e('Password', 'woocommerce'); ?> 
                            <span class="required">*</span>
                        </label>
                        <div class="">
                            <input type="password" class="form-control" name="password" id="reg_password" />
                        </div>

    <?php endif; ?>
                        </div>

                    <!-- Spam Trap -->
                    <div style="<?php echo ( ( is_rtl() ) ? 'right' : 'left' ); ?>: -999em; position: absolute;"><label for="trap"><?php _e('Anti-spam', 'woocommerce'); ?></label><input type="text" name="email_2" id="trap" tabindex="-1" /></div>

    <?php do_action('woocommerce_register_form'); ?>
                    <?php do_action('register_form'); ?>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <?php wp_nonce_field('woocommerce-register'); ?>
                        <input type="submit" class="btn btn-entrar pull-right" name="register" value="<?php esc_attr_e('Register', 'woocommerce'); ?>" />
                </div>
            </div>

    <?php do_action('woocommerce_register_form_end'); ?>

            
                
                </form>

            
                </div>
            </div>
            
               

        </div><!--col-2-->

    </div>
<?php endif; ?>

<?php do_action('woocommerce_after_customer_login_form'); ?>
