( function( $ ) {

    $('.testi-slide').owlCarousel({
        loop:true,
        nav:true,
        dots:true,
        items:1
    });
        
    $('.steps-carousel').owlCarousel({
        nav:true,
        items:1,
        margin:20
    });
    
    $('.menu-trigger').click( function(){
        $('.mobile-menu').css('display','block')
    })
    
    $('.close-button').click( function(){
        $('.mobile-menu').css('display','none')
    })

} )( jQuery );