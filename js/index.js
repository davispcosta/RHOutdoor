jQuery(function($){
   
    /* ----------------------------------------------------------- */
	/*  PRELOADER 
	/* ----------------------------------------------------------- */ 
	
	jQuery(window).load(function() { // makes sure the whole site is loaded
      $('#status').fadeOut(); // will first fade out the loading animation
      $('#preloader').delay(100).fadeOut('slow'); // will fade out the white DIV that covers the website.
      $('body').delay(100).css({'overflow':'visible'});
    })
    
    
    /* ----------------------------------------------------------- */
	/*   MAIN SLIDER (SLICK SLIDER)
	/* ----------------------------------------------------------- */

	jQuery('.main-slider').slick({
		dots: true,
		infinite: true,
		speed: 500,
		autoplay: true,
		accessibility: false,
		fade: true,
		cssEase: 'linear'
	}); 
    
    /* ----------------------------------------------------------- */
	/*  MIXIT SLIDER
	/* ----------------------------------------------------------- */  	

	jQuery(function(){
        $('#mixit-container').mixItUp();
	});
		
	/* ----------------------------------------------------------- */
	/*  FANCYBOX 
	/* ----------------------------------------------------------- */

	jQuery(document).ready(function() {
	    $('.work-box').fancybox();
	});	
    
    
    
    /* ----------------------------------------------------------- */
	/*  FEATURED SLIDER
	/* ----------------------------------------------------------- */
	

    $('.featured_slider').slick({
      dots: true,
      infinite: true,      
      speed: 800,
      arrows:false,      
      slidesToShow: 1,
      slide: 'div',
      autoplay: true,
      fade: true,
      autoplaySpeed: 5000,
      cssEase: 'linear'
    });
    
    /* ----------------------------------------------------------- */
	/*  WOW ANIMATION
	/* ----------------------------------------------------------- */ 

	wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100,
        live:         true,
        callback:     function(box) {
          console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
        }
      }
    );
    wow.init(); 
     
    
    

   
});