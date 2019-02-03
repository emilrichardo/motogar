
  (function($, window, document) {

    // The $ is now locally scoped 

   $(document).ready(function() {
    
    $('.slider-home').slick({
     centerMode: true,
     lazyLoad: 'progressive',

     
     slidesToShow: 3,
     slidesToScroll: 1,
     dots: false,
     
     autoplay: true,
     prevArrow:false,
    nextArrow:false,
     focusOnSelect: true,
     variableWidth: true,
     adaptiveHeight: false,

     responsive: [
     {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        
        slidesToShow: 2
      }
    },
    {
      breakpoint: 600,
      settings: {
        arrows: false,
        centerMode: true,
        
        slidesToShow: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }
    ]
  });

  });


   $('.feature-slider').slick({
    infinite: false,
    slidesToShow: 4,
    slidesToScroll: 4,
    speed: 500,
    adaptiveHeight: false,

    prevArrow:'#features .prev',
    nextArrow:'#features .next',
    focusOnSelect: true,
    autoplay: true,
    dots: false,
    rows:1,

    responsive: [
    {
      breakpoint: 992,
      settings: {
        arrows: false,        
         slidesToShow:3,        
    slidesToScroll:3 ,
    rows:1
      }
    },
    {
      breakpoint: 768,
      settings: {
        arrows: false,        
         slidesToShow: 3,        
    slidesToScroll:3 ,
    rows:1
      }
    },
    {
      breakpoint: 760,
      settings: {
        arrows: true,        
         slidesToShow:2,        
    slidesToScroll:1,
    dots: false,
    rows:1
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: true,
             
        slidesToShow: 1,        
    slidesToScroll:1 ,
    rows:1
      }
    },
    ]

  });

   $('.slider-type').slick({  
     slidesToShow: 1,
     autoplay: true,
  slidesToScroll: 1,
  arrows: false,
  fade: true,
  speed:400,
  asNavFor: '.type-main',
  responsive:null,         
   }
    );
   $('.type-main').slick({  
     slidesToShow: 7,
  slidesToScroll: 1,
  asNavFor: '.slider-type',
  responsive:null,  
  focusOnSelect: true,
  autoplay: true,  
         
   }
    );

   $('.chat').slick({  
     slidesToShow: 1,
     autoplay: true,
  slidesToScroll: 1,
  arrows: false,  
  speed:800,
  fade:true, 
  infinite:true, 
        
   }
    );

    $('.slider-pro').slick({  
     slidesToShow: 1,
     autoplay: false,
  slidesToScroll: 1,
  arrows: false,
  prevArrow:'#top-producto .prev',
    nextArrow:'#top-producto .next',
  
  speed:300,
  fade:false,
 
  infinite:false,
  asNavFor: '.slider-featurepro',
  lazyLoad: 'progressive',


  responsive: [
    {     
    
      breakpoint: 480,
      settings: {
        arrows: true,
             
        slidesToShow: 1,        
    slidesToScroll:1 ,
    rows:1,
    
      }
    },
    ]

       
   }
    );


     $('.slider-featurepro').slick({  
     slidesToShow: 5,
     asNavFor: '.slider-pro',
     autoplay: false,
  slidesToScroll: 1,
  arrows: true,
  focusOnSelect: true,
  lazyLoad: 'progressive',
  
  
  speed:300,
  fade:false,
 
  infinite:false,
  variableWidth: false,
     adaptiveHeight: true,


   prevArrow: '<div class="arrow-prev"><span class="fa fa-angle-left"></span><span class="sr-only">Prev</span></div>',

nextArrow: '<div class="arrow-next"><span class="fa fa-angle-right"></span><span class="sr-only">Next</span></div>'

   }
    );

  

   


  
  

   // The rest of the code goes here!

  })(jQuery, window, document);
  // The global jQuery object is passed as a parameter