jQuery(function($){
	
	$(window).on("load resize scroll", function() {
		// animations
		$.fn.isInViewport = function() {
		var elementTop = $(this).offset().top;
		var elementBottom = elementTop + $(this).outerHeight();
		var viewportTop = $(window).scrollTop();
		var viewportBottom = viewportTop + $(window).height();
		return elementBottom > viewportTop && elementTop < viewportBottom;
		};
		
		var timeOut = 500;

		$('section').each(function() {
		if ($(this).isInViewport()) {
			$(this).addClass('active');
			$(this).children().find('.animate').addClass('fadeInUp');
		} else {
			$(this).removeClass('active');
		}
		}, timeOut);
		timeOut += 500;
		
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

	// Adds class for icon in each li that contacts sub navigations
	$(document).ready(function(){
		$('.menu-item-has-children a').addClass('sub-menu-icon');
		$('.sub-menu a').removeClass('sub-menu-icon');
	});
	
	
	// slide indicator for service tabs
	var currentNav = $('.nav-tabs li a.active').parent('li');
	var startNavPos = $(currentNav).position(); 
	var startNavH = $(currentNav).height();
	$('.nav-tabs .indicator').css({
		top: +startNavPos.top,
		height: startNavH
	});
	$('.nav-tabs li').hover(function () {
		var currentNavPos = $(this).position();
		var currentNavH = $(this).height();
		$('.nav-tabs .indicator').css({
			top: +currentNavPos.top, 
			height: currentNavH
		});
	});
 

});

