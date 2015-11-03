<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<ul class="products">
<?php
$args = array(
    'post_type' => 'product',
    'posts_per_page' => 3
);
$loop = new WP_Query($args);

var_dump($loop);

?>

</ul><!--/.products-->