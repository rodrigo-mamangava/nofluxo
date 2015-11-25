/* 
 * change icon on menu hover
 */

jQuery(document).ready(function ($) {

    $('.menu-principal').find('a')
            .hover(function () {
                var imgin = $(this).find('img').data('imgin');
                $(this).find('img').attr("src", imgin);

            }, function () {
                var imgout = $(this).find('img').data('imgout');
                $(this).find('img').attr("src", imgout);
            });

});
