/* 
 * menu-toggle
 */


jQuery(document).ready(function ($) {
    $('.menu > a').click(function () {

        if ($(this).hasClass('menu-ativo')) {
            $(this).toggleClass('menu-ativo');
            var subMenu = $(this).data('menu');
            $('#' + subMenu).slideUp();
        } else {
            $('.menu > a').removeClass('menu-ativo');
            $(this).toggleClass('menu-ativo');
            $(".sub-menu").hide();
            var subMenu = $(this).data('menu');
            $('#' + subMenu).slideToggle();

        }

    });
});