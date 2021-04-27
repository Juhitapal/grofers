/* global wp, jQuery */
/**
 * File customizer.js.
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

 ( function( $ ) {


 	$(".dropdown").hover(            
 		function() {
 			$('.dropdown-menu', this).stop( true, true ).slideDown("fast");
 			$(this).toggleClass('open');        
 		},
 		function() {
 			$('.dropdown-menu', this).stop( true, true ).slideUp("fast");
 			$(this).toggleClass('open');       
 		}
 		);
$().UItoTop({ easingType: 'easeOutQuart' });

$(document).on('submit','.add-to-cart-form',function(e){
	e.preventDefault();
	alert('dfgdfg');
    paypal.minicart.render({
        action: '#'
    });
});

 }( jQuery ) );

 jQuery(window).load(function(){
 	jQuery('.flexslider').flexslider({
 		animation: "slide",
 		start: function(slider){
 			jQuery('body').removeClass('loading');
 		}
 	});
 });
