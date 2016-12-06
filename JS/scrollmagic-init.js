(function ($) {

	// init controller
	var controller = new ScrollMagic.Controller();
	// get all slides
	var slides = ["#step01", "#step02", "#step03", "#step04"];
	// get all headers in slides that trigger animation
	var headers = ["#slide01 header", "#slide02 header", "#slide03 header", "#slide04 header"];	

	// Enable ScrollMagic only for desktop, disable on touch and mobile devices
	if (!Modernizr.touch) {

						// build scenes
						new ScrollMagic.Scene({triggerElement: "#parallax1"})
										.setTween("#step01 .bg_parallax", {y: "80%", ease: Linear.easeNone})
										.addIndicators() // add indicators (requires plugin), use for debugging
										.addTo(controller);
	}// FIN TEST MODERNIZR
	

}(jQuery));