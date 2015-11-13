<?php
/**
 * Login form
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.1.0
 */
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

if (is_user_logged_in()) {
    return;
}
?>
<form method="post" class="login form-horizontal" <?php if ($hidden) echo 'style="display:none;"'; ?>>

<?php do_action('woocommerce_login_form_start'); ?>

    <?php if ($message) echo wpautop(wptexturize($message)); ?>
    
    <div class="form-group">

        <label class="col-sm-2 control-label" for="username">E-mail <span class="required ">*</span></label>
        
        <div class="col-sm-10">
            <input type="text" class="form-control" name="username" id="username" />
        </div>
        
        <br />

        <label class="col-sm-2 control-label" for="password"><?php _e('Password', 'woocommerce'); ?> <span class="required">*</span></label>
        <div class="col-sm-10">
            <input class=" form-control" type="password" name="password" id="password" />
        </div>
    </div>
    
    

<?php do_action('woocommerce_login_form'); ?>

    <?php wp_nonce_field('woocommerce-login'); ?>

    
    
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <div class="checkbox pull-right">

            <label for="rememberme" class="inline ">
                <input name="rememberme" type="checkbox" id="rememberme" value="forever" /> <?php _e('Remember me', 'woocommerce'); ?>
            </label>
                
            </div>
            
        </div>
    </div>
    
    <div class="form-group">
        
        <div class="col-sm-offset-2 col-sm-10">
    
            <input type="submit" class="btn btn-entrar pull-right" name="login" value="<?php esc_attr_e('Login', 'woocommerce'); ?>" />
    
        </div>
    
    </div>

    <input type="hidden" name="redirect" value="<?php echo esc_url($redirect) ?>" />
    

    <p class="lost_password pull-right">
        <a href="<?php echo esc_url(wp_lostpassword_url()); ?>"><?php _e('Lost your password?', 'woocommerce'); ?></a>
    </p>


<?php do_action('woocommerce_login_form_end'); ?>

</form>
