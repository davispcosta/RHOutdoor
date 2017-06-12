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
	/*  WOW ANIMATION
	/* ----------------------------------------------------------- */ 

    $(window).on('load', function() {
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
	 
});