/**
 * @file
 * A JavaScript file for the theme.
 *
 * In order for this JavaScript to be loaded on pages, see the instructions in
 * the README.txt next to this file.
 */

// JavaScript should be made compatible with libraries other than jQuery by
// wrapping it with an "anonymous closure". See:
// - https://drupal.org/node/1446420
// - http://www.adequatelygood.com/2010/3/JavaScript-Module-Pattern-In-Depth
(function ($, Drupal, window, document, undefined) {


// To understand behaviors, see https://drupal.org/node/756722#behaviors
Drupal.behaviors.my_custom_behavior = {
  attach: function(context, settings) {

    // Place your code here.
    $( document ).ready(function() {

        var isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);

        if ($(window).width() < 480 || isMobile) {
         // handle less than 480
            $("#navigation .links a.firm, navigation .links a.investment-cap").attr("onclick","return true");

            $('#navigation .links a.firm, navigation .links a.investment-cap').click(function(e) {
                e.preventDefault();
            });
         }

    
        

        $('.flexslider .slides img').each(function (index, value){
        var src = $(this).attr('src');
        console.log(src);
        $(this).parent('li').css('background-image','url(' + src + ')');
        $(this).remove();
        });

    	$("#utility .menu li.search a").click(function() {
    		if($("#block-search-form").is(':visible')) {
	    		$("#block-search-form").slideUp();
	    		return false;
    		} else {
	    		$("#block-search-form").slideDown();
	    		return false;
    		}
    	});
    	$("a.menu-toggle").click(function(){
    		$("#header").toggleClass("open-nav");
    	});
    });

    $(document).mouseup(function (e) {
	    var container = $("#block-search-form");

	    if (!container.is(e.target) // if the target of the click isn't the container...
	        && container.has(e.target).length === 0) // ... nor a descendant of the container
	    {
	        container.slideUp();
	    }
	});

  }
};


})(jQuery, Drupal, this, this.document);
