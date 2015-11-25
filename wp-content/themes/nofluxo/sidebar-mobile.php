<?php

/* 
 * Mobile widgets
 */

if(!is_active_sidebar('sidebar-3')){
    return;
}
?>
<div class="widget sidebar-mobile">

    <?php dynamic_sidebar('sidebar-3'); ?>

</div>

