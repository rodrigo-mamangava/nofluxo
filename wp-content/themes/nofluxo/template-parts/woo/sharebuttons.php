<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div class="col-xs-12">
    <div class="linha-btns-sociais">
        <a 
            class="btn btn-social-produto" 
            href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>" 
            title="Share on Facebook.">
            <i class="fa fa-facebook"></i>
        </a>
        <a href="http://twitter.com/home/?status=<?php the_title(); ?> - <?php the_permalink(); ?>" 
           title="Tweet this!" 
           class="btn btn-social-produto">
            <i class="fa fa-twitter"></i>
        </a>
        <a href="mailto:?subject=No Fluxo / <?php the_title(); ?>&body=<?php the_title()?>  -  <?php the_permalink() ?>" class="btn btn-social-produto">
            <i class="fa fa-envelope-o"></i>
        </a>
        <a href="http://pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>&media=<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); echo $url; ?>" class="btn btn-social-produto">
            <i class="fa fa-pinterest"></i>
        </a>
        <a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" class="btn btn-social-produto">
            <i class="fa fa-google-plus"></i>
        </a>                                    
    </div>
</div><!--col-xs-12-->


