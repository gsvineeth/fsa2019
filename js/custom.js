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
    // $('.classmenu-trigger > a').click( function(event){
    //     event.preventDefault();     
    // })

    $('.classmenu-trigger').hover( function(){
        //event.preventDefault();
        $('.menu-classroom-container').toggleClass("active")
    })
    $('.top-course-trigger').click( function(e){
        e.preventDefault();
        $('.menu-classroom-container').toggleClass("active")
    })

} )( jQuery );