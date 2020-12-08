jQuery(function($){
	
	$(window).on("load resize scroll", function() {
		/* if($('section').visible(true)){
			$(this).find('.animate').addClass('fadeInUp');
		}
		/* animations
		
		var timeOut = 500;
		
		$('section').each(function(){
			if($('section').visible(true)) {
				setTimeout(function() { 
					$('.animate').addClass('fadeInUp');
				}, timeOut);
				
				timeOut +=500;
				
				
			}
		});
		*/
		
		
		
		
		
		// set circle height
		$('.image-wrapper.circle').each(function(){
			var circleW = $(this).width();
			$(this).css('height', circleW );
		});
		
	});

	$(document).ready(function(){
		$('.carousel').carousel({
			interval: 2000
		})
		
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
		
		// reset form styles to use cool labels
		$('.gform_body li').each(function(){
			$(this).children('label').appendTo( $(this).children('.ginput_container') );
		});
		
	});

	/*  Adds class for icon in each li that contacts sub navigations
	$(document).ready(function(){
		$('.menu-item-has-children a').addClass('sub-menu-icon');
		$('.sub-menu a').removeClass('sub-menu-icon');
	});
	*/
	
});

