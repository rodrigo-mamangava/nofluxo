<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>



<?php

if (get_query_var('page') =="" || get_query_var('page') == 1) {
    get_template_part('template-parts/woo/shop', 'home-maisvendidas');
}
?>

<?php get_template_part('template-parts/woo/shop', 'home-produtos'); ?>

