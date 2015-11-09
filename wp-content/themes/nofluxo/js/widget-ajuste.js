/* 
 * Ajutes no layout e estrutura do widget (aside)
 */



jQuery(document).ready(function ($) {
    $('.widget_layered_nav_filters')
            .find('.chosen')
            .find('a')
            .append(' <i class="fa fa-times-circle"></i>');
});