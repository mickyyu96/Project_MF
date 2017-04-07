
google.maps.event.addDomListener(window, 'load', initialize);
var loc = new google.maps.LatLng(-6.880869, 107.604926);

function initialize() {
	var mapProp = {
		center: loc,
		zoom: 15,
		scrollwheel: false,
		draggable: false,
		disableDefaultUI: true
	};

	var map = new google.maps.Map(document.getElementById("maps"), mapProp);
	var marker = new google.maps.Marker({position: loc});
	marker.setMap(map);
}

(function($) {
	"use strict"; // Start of use strict

	// Activate scrollspy to add active class to navbar items on scroll
	$('body').scrollspy({
		target: '#mainNav',
		offset: 48
	});

	// Closes responsive menu when a link is clicked
	$('.navbar-collapse>ul>li>a').click(function() {
		$('.navbar-collapse').collapse('hide');
	});

	// Collapse the navbar when page is scrolled
	$(window).scroll(function() {
		if ($("#mainNav").offset().top > 100) {
			$("#mainNav").addClass("navbar-shrink");
		} else {
			$("#mainNav").removeClass("navbar-shrink");
		}
	});

	// Scroll reveal calls
	window.sr = ScrollReveal();
	sr.reveal('.sr-icons', {
		duration: 600,
		scale: 0.3,
		distance: '0px'
	}, 200);
	sr.reveal('.sr-counter', {
		duration: 600,
		scale: 0.3,
		distance: '0px'
	}, 300);
	sr.reveal('.sr-button', {
		duration: 1000,
		delay: 200
	});
	sr.reveal('.sr-contact', {
		duration: 600,
		scale: 0.3,
		distance: '0px'
	}, 300);

	// Magnific popup calls
	$('.popup-gallery').magnificPopup({
		delegate: 'a',
		type: 'image',
		tLoading: 'Loading image #%curr%...',
		mainClass: 'mfp-img-mobile',
		gallery: {
			enabled: true,
			navigateByImgClick: true,
			preload: [0, 1]
		},
		image: {
			tError: '<a href="%url%">The image #%curr%</a> could not be loaded.'
		}
	});

})(jQuery); // End of use strict
