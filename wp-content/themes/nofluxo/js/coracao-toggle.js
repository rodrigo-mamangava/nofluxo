/* 
 * coracao-toggle
 */


jQuery(document).ready(function ($) {

    $('.item-produto').hover(
            function () {
                $(this).find('.item-produto-wish').show();
            }, function () {
                $(this).find(".item-produto-wish").hide();
            }
    );

});