// Version: 1.0.0
jQuery(document).ready(function($){


	// hide preloader
	  $(".loader").fadeOut(600);
	  
	  
	 //setTimeout(function(){
     //  $(".loader").fadeOut(600);
    //}, 500);


	// WOW init
	wow = new WOW(
    {
      boxClass:     'wow',      // default
      animateClass: 'animated', // default
      offset:       135,          // default
      mobile:       true,       // default
      live:         true        // default
    }
  )
  wow.init();
  
  //nice scroll
  var nice = $("html").niceScroll({
        //cursorcolor: "#202020",
        scrollspeed: 60,
        mousescrollstep: 50,
        boxzoom: false,
        autohidemode: false,
        cursorborder: "0 solid #202020",
        cursorborderradius: "0",
        cursorwidth: 10,
        background: "#666",
        horizrailenabled: false
    });
    
     var overlay = $(".overlayer").niceScroll({
        //cursorcolor: "#202020",
        scrollspeed: 60,
        mousescrollstep: 50,
        boxzoom: false,
        autohidemode: false,
        cursorborder: "0 solid #202020",
        cursorborderradius: "0",
        cursorwidth: 5,
        background: "#666",
        horizrailenabled: false
    });

	// menu
	$(".show-menu").click(function(){

		$(".overlayer").fadeIn(600);
		
	});

	$(".close-overlayer").click(function(){

		$(".overlayer").fadeOut(600);

	});


});