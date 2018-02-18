
/* client slider
===============================*/
$(document).ready(function () {
    
    "use strict";
    $("#client-slider").owlCarousel({
        loop: true,
        nav: false,
        items : 7,
        itemsDesktop : [1000, 6],
        itemsDesktopSmall : [900, 4],
        itemsTablet: [600, 3],
        itemsMobile : [480, 2],
        navigation : false,
        pagination : false
    });
});

/*Header
============================*/

$(document).ready(function () {
    
    "use strict";
    
    /*Heade Circle Hover*/
    var hoverBgHalfWidth = $("#hover-bg").width() / 2,
        
        hoverActivePosition = $(".navbar-nav li.active").outerWidth() / 2 - hoverBgHalfWidth,
        
        b = 20;
        
    $("#hover-bg").css({
        
        left: $(".navbar-nav li.active").position().left + hoverActivePosition
        
    });
    
    $(".navbar-nav li").hover(function () {
        
        var thisHoverItem = $(this).outerWidth() / 2 - hoverBgHalfWidth;
        
        $("#hover-bg").css({
            
            left: $(this).position().left + thisHoverItem
            
        });
    }, function () {
        
        $("#hover-bg").css({
            
            left: $(".navbar-nav li.active").position().left + hoverActivePosition
            
        });
        
    });
    
    
    /*Header Scroll*/
    
    function getCurrentScroll() {
        
        return window.pageYOffset || document.documentElement.scrollTop;
        
    }
});
/* Nice Scroll
===============================*/
$(document).ready(function () {
    
    "use strict";
    
	$("html").niceScroll({
        scrollspeed: 40,
        mousescrollstep: 20,
        cursorwidth: 5,
        cursorfixedheight: 200,
        cursorcolor:  '#e66900',
        cursorborder: 'none',
        background: 'rgba(255,255,255,.5)',
        cursorborderradius: 0,
        autohidemode: false,
        cursoropacitymin: 0.1,
        cursoropacitymax: 1,
        zindex: "1",
        horizrailenabled: false
	});
});

/*WOW-Master
===============================*/
$(document).ready(function () {
    "use strict";
    new WOW().init();
});
/* Magnific PopUp
======================*/
$(document).ready(function () {
    "use strict";
    $('.gallery').magnificPopup({
        delegate: 'a', // child items selector, by clicking on it popup will open
        type: 'image',
        type: 'image',
          gallery:{
            enabled:true
          }
    });
});
    