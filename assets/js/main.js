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
		
		// set circle height
		$('.image-wrapper.circle').each(function(){
			var circleW = $(this).width();
			$(this).css('height', circleW );
		});
		
		//set card heights
		var cardHeight = 0;
		$('.card-list .card').each(function(){
			if($(this).height() > cardHeight){
				cardHeight = $(this).height();
			}
		});
		$('.card-list .card').height(cardHeight);
		$('.card-list .card a.button').css({
			'position':'absolute',
			'bottom':'10px',
		});
		
		//reset form styles to use cool labels
		$('.gform_body li').each(function(){
			$(this).children('label').appendTo( $(this).children('.ginput_container') );
		});


	});
	
});

