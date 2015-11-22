/* 
 * menu-toggle
 */


jQuery(document).ready(function ($) {
    $('.menu > a').click(function () {
        
        var menuAberto = $('.menu').children('a').hasClass('menu-ativo');
        
              
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
    
    $('.sub-menu').find( "li.menu-item-has-children" ).wrap( "<div class='col-xs-2'></div>" );
    
    
    $('#menu-mobile').click(function (){
        $('.sub-menu-mobile').slideToggle();
    });
    
    $('.sub-menu-mobile').find('a').click(function (){
        
        $(this).find('.fa').toggleClass('fa-caret-right').toggleClass('fa-caret-down');
        
        $(this).next('div').slideToggle();
        

        
        console.log('ok');
        
        
    });
    
    
});