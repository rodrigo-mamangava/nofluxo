<?php
/**
 * Show messages
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

if ( ! $messages ){
	return;
}

?>

<div class="col-xs-6 col-xs-offset-2 aviso">
    <?php foreach ( $messages as $message ) : ?>
            <p><?php echo wp_kses_post( $message ); ?></p>
    <?php endforeach; ?>
</div>
