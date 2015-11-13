<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package noFluxo
 */
if (!is_active_sidebar('sidebar-1')) {
    return;
}
?>

<div class="widget sidebar-esquerda">

    <div class="filtro">
        <h2 class="destaque">Filtre sua busca</h2>
    </div>
    
    <?php echo current_filter(); ?>

    <?php dynamic_sidebar('sidebar-1'); ?>

</div>


