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
	if (window.matchMedia('(min-width: 480px)').matches) {

		// Masonry works
		var $masonry = $('.masonry');

		// Loaded images works
		$masonry.imagesLoaded(function() {

			$masonry.masonry({
				itemSelector: '.work', // selector
				columnWidth: 370,      // size
				fitWidth: true,        // center
				gutter: 20,            // margin
				transitionDuration: 0  // no transition
			});

			$masonry.css('visibility', 'visible');

		}); // imagesLoaded

		// Masonry single
		var $masonrySingle = $('.masonry-single');

		// Loaded images single
		$masonrySingle.imagesLoaded(function() {

			$masonry.masonry({
				itemSelector: '.work', // selector
				columnWidth: 560,      // size
				fitWidth: true,        // center
				gutter: 10,            // margin
				transitionDuration: 0  // no transition
			});

			$masonrySingle.css('visibility', 'visible');

		}); // imagesLoaded

	} // matchMedia


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

	// Social Links
	// -----------------------------------------------------------------------------
	// var $socialLinks = $('.social-links');

	// $socialLinks.find('.link').on('click', function(e) {
	// 	e.preventDefault();

	// 	var url = this.href, w = 575, h = 525, y = ($(window).width() - w) / 2, x = ($(window).height() - h) / 2 - 200;

	// 	window.open(url, '_blank', 'toolbar=0, scrollbars=1, resize=1, status=0, width=' + w + ', height=' + h + ', top=' + x + ',left=' + y);
	// });

});
