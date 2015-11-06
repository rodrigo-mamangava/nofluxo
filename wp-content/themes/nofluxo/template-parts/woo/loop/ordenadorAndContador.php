<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

global $wp_query;
?>

<div class="row pre-loop contadorAndOrdenado">

    <div class="col-sm-4 col-sm-offset-4">

        <?php
        woocommerce_result_count();
        ?>
    </div>

    <div class="col-sm-4">
        <?php
        if (!defined('ABSPATH')) {
            exit; // Exit if accessed directly
        }

        global $wp_query;
        ?>

        <?php
        woocommerce_catalog_ordering();
        woocommerce_reset_loop();
        ?>



    </div>

</div>

