$(function() {						
	// init controller
	//var controller = new ScrollMagic.Controller();
	var controller = new ScrollMagic.Controller({globalSceneOptions: {triggerHook: 0.1, duration: "90%"}});
		
	// get all slides
	var slides = ["#step01", "#step02", "#step03", "#step04"];
	// get all headers in slides that trigger animation
	var headers = ["#slide01 header", "#slide02 header", "#slide03 header", "#slide04 header"];	
		
	var	masuperanimation01 = TweenLite.to("#objet_a_animer_01", 0.5, {css : {scaleX: 2, scaleY: 2, backgroundColor:"#2856ff", transformOrigin:"left top"}, ease : Linear.easeNone});
	var	masuperanimation02 = TweenLite.to("#objet_a_animer_02", 0.5, {css : {className:"+=go"}, ease : Linear.easeNone});
		
		

	// Enable ScrollMagic only for desktop, disable on touch and mobile devices
	if (!Modernizr.touch) {

						// build scenes
						new ScrollMagic.Scene({triggerElement: "#step01"})
										.setTween("#step01 .bg_parallax", {y: "40%", ease: Linear.easeNone})
										.addIndicators() // add indicators (requires plugin), use for debugging
										.addTo(controller);
		
						new ScrollMagic.Scene({triggerElement: "#break01", duration: "20%"})
										.setTween(masuperanimation01)
										.addIndicators() // add indicators (requires plugin), use for debugging
										.addTo(controller);
		
						new ScrollMagic.Scene({triggerElement: "#step02"})
										.setTween("#step02 .bg_parallax", {y: "50%", ease: Linear.easeNone})
										.addIndicators() // add indicators (requires plugin), use for debugging
										.addTo(controller);
		
						new ScrollMagic.Scene({triggerElement: "#step03"})
										.setTween("#step03 header", {x: "60%", ease: Linear.easeNone})
										.addIndicators() // add indicators (requires plugin), use for debugging
										.addTo(controller);		
		
		
		
	}// FIN TEST MODERNIZR
	

});