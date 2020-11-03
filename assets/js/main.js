jQuery(function($){
	
	$(window).on("load resize scroll", function() {
		// animations

	});

	$(document).ready(function(){
		$('#menu-toggle').on("click", function(){
			$(this).toggleClass('open');
			$('#header').toggleClass('open');
		});
		
		$('.carousel').carousel({
			interval: 2000
		})
		
		// height match
		var circleW = $('.image-wrapper.circle').width();
		$('.image-wrapper.circle').css('height', circleW );
		
		


	});
	
});

