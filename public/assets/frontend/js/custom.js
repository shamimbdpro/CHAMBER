
   //  9. Gallery Slider
    $('.gellary-slider').owlCarousel({
        responsiveClass:true,
        margin:30,
        dots: true,
        autoWidth:false,
        autoplay:true,
        autoplayTimeout: 3000,
        autoplayStopOnLast: false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            800:{
                items:2
            },
            1200:{
                items:3
            }
        }
    }); 

	//  9. Gallery Slider
    $('.event-slider').owlCarousel({
        responsiveClass:true,
        margin:30,
        dots: true,
        autoWidth:false,
        autoplay:true,
        autoplayTimeout: 3000,
        autoplayStopOnLast: false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            800:{
                items:2
            },
            1200:{
                items:3
            }
        }
    });
   
   
   //  9. client slider
    $('.client-slider').owlCarousel({
        responsiveClass:true,
        margin:30,
        dots: false,
        autoWidth:false,
        autoplay:true,
        autoplayTimeout: 3000,
        autoplayStopOnLast: false,
        responsive:{
            0:{
                items:2
            },
            600:{
                items:3
            },
            800:{
                items:4
            },
            1200:{
                items:5
            }
        }
    });
