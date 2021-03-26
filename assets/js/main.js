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
		
		$('section').each(function() {
			if ($(this).isInViewport()) {
				$(this).addClass('active');
				$(this).children().find('.animate').addClass('fadeInUp');
			} else {
				$(this).removeClass('active');
			}
			}, 2000);
		
		// set circle height
		$('.image-wrapper.circle').each(function(){
			var circleW = $(this).width();
			$(this).css('height', circleW );
		});
		

		//set height of partner map
		var mapHeight = $('.map_flex .text-wrapper').height();
		var lgMapHeight = mapHeight+300;
		$('.partner-map, .partner-map .acf-map').css({
			'height' : lgMapHeight,
			'min-height' : lgMapHeight
		}); 
		
		// hide image overflow for partner map
		$('.partner-map').parent('.container-fluid').css('overflow','hidden');
		
	});

	$(document).ready(function(){

		// set slideshow height to be consistent based on tallest slide
		var slideHeight = 0;
		$('#slideshow .carousel-item').each(function(){
			if($(this).height() > slideHeight){
				slideHeight = $(this).height();
			}
		});
		$('#slideshow .carousel-item').height(slideHeight);
		
		
		//set card heights
		var cardHeight = 0;
		$('.card-row .card').each(function(){
			if($(this).height() > cardHeight){
				cardHeight = $(this).height();
			}
		});
		$('.card-row .card').height(cardHeight);
		
		
		//set card heights - use this if there are more than one set of cards on a page
		var cardHeight2 = 0;
		$('.card-row-2 .card').each(function(){
			if($(this).height() > cardHeight2){
				cardHeight2 = $(this).height()+30;
			}
		});
		$('.card-row-2 .card').height(cardHeight2);

		
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
	
	
	if( $('.nav-tabs.flex-column').length ){
		//  slide indicator for vertical tabs
		var currentNav = $('.nav-tabs.flex-column li a.active').parent('li');
		var startNavPos = $(currentNav).position(); 
		var startNavSize = $(currentNav).height();
		$('.nav-tabs.flex-column .indicator').css({
			top: +startNavPos.top,
			height: startNavSize
		});
		$('.nav-tabs.flex-column li').hover(function () {
			var currentNavPos = $(this).position();
			var currentNavSize = $(this).height();
			$('.nav-tabs.flex-column .indicator').css({
				top: +currentNavPos.top, 
				height: currentNavSize
			});
		});
	}else if( $('.nav.horiz').length ){	
		//  slide indicator for horizontal tabs
		var HcurrentNav = $('.nav.horiz li a.active').parent('li');
		var HstartNavPos = $(HcurrentNav).position(); 
		var HstartNavSize = $(HcurrentNav).width();

		$('.nav.horiz .indicator').css({
			left: +HstartNavPos.left,
			width: HstartNavSize
		});
		$('.nav.horiz li').hover(function () {
			var HcurrentNavPos = $(this).position();
			var HcurrentNavSize = $(this).width();
			$('.nav.horiz .indicator').css({
				left: +HcurrentNavPos.left, 
				width: HcurrentNavSize
			});
		});	
	}
	
	// Progressive Disclosure
	$('.expand-header').on('click', function(){
		$(this).parent().children('.expand-content').slideToggle();
		$(this).parent().children('.indicator').toggleClass('open');
	});
	
	// Modal Close
	$('.close-modal').on('click', function(){
		$(this).closest('.modal.show').removeClass('show');
	});
	

});

