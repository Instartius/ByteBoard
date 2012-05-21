/**
 * @author Instartius Corporation
 */

jQuery(document).ready(function($) {
  
    $('#images-slider').bxSlider({
        mode: 'fade',
        speed: 6000,
        auto: true,
        autoControls: false,
        controls: false  
    });
    
    $('#images-carrousel').bxSlider({
    	auto: true,
    	displaySlideQty: 3,
    	moveSlideQty: 1
  	});
  	
  	$('#images-featured').bxSlider({
    	auto: false,
    	displaySlideQty: 1,
    	moveSlideQty: 1,
    	autoControls: false,
        controls: false
  	});
    
    
    $('.totop').bind('click', function(event) {
		$('html,body').animate({
			scrollTop : 0 //Scroll hasta el comienzo
		}, 1000, 'easeInOutExpo'); //Duracion de 1 segundo y efecto easeInOutExpo
	});
	
	/*
	$('#menu-doracol-blogs').bxSlider({
        auto: true,
    	displaySlideQty: 3,
    	moveSlideQty: 1,
        autoControls: false,
        controls: false  
    });
	*/

});

