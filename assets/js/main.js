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


	});
	
});

