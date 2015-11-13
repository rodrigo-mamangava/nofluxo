/* 
 * Ajutes no layout e estrutura do widget (aside)
 */



jQuery(document).ready(function ($) {
        
    $('.entry-content')
            .children( 'ul')
            .children( 'li')
            .prepend('<buttun class="btn btn-mais"><i class="fa fa-plus"></i></buttun>');
    
    
    
    $('.entry-content')
            .children( 'ul')
            .children( 'li').click(function (){
                
                $(this).children( 'ul')
                .children( 'li').slideToggle();
        
                $(this).find('buttun')
                        .find('i')
                        .toggleClass('fa-plus')
                        .toggleClass('fa-minus');
                
                
            });
    
});

