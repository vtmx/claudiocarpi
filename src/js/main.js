//$(document).ready(function() {
$(window).on('load', function() {

	// Toggle nav
	// -----------------------------------------------------------------------------
	$('.nav .toggle').on('click', function(e) {
		// Remove mouse event
		e.preventDefault();

		// Toggle class
		$(this).toggleClass('toggle-active');
		$('.menu').toggleClass('menu-active');
	});

	// Matchmedia
	// -----------------------------------------------------------------------------
	// if (window.matchMedia('(min-width: 480px)').matches) {
	//
	// 	// Masonry single
	// 	var $masonry = $('.masonry');
	//
	// 	// Loaded images single
	// 	$masonry.imagesLoaded(function() {
	//
	// 		$masonry.masonry({
	// 			itemSelector: '.work', // selector
	// 			columnWidth: 370,      // size
	// 			fitWidth: true,        // center
	// 			gutter: 20,            // margin
	// 			isFitWidth: true,
	// 			transitionDuration: 0  // no transition
	// 		});
	//
	// 		$masonry.css('visibility', 'visible');
	//
	// 	}); // imagesLoaded
	//
	// } // matchMedia

	var grid = new Muuri('.works', {

		// Item elements
	    items: '.work',

	    // Layout
	    layout: {
	      fillGaps: true,
	      horizontal: false,
	      alignRight: false,
	      alignBottom: false
	    }
	});


	// Single Works Icons
	// -----------------------------------------------------------------------------

	// Icon scroll top click
	$('.single-works .icon-close').on('click', function(e) {
	 	window.history.back(-1);
	});

	 $('.single-works .icon-scrolltop').on('click', function(e) {
		e.preventDefault();
		$('html, body').animate({ scrollTop: $('body').offset().top }, 800, 'swing');
	});

});
