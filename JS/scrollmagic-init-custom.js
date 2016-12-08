$(function() {						

	// init controller
	//Initialisation du controller
	var controller = new ScrollMagic.Controller();		
							
// Enable ScrollMagic only for desktop, disable on touch and mobile devices
	if (!Modernizr.touch) {
// Enable ScrollMagic only for desktop, disable on touch and mobile devices

		
		
		
		
		var introTimeline = new TimelineMax();

	    introTimeline
	    	.to($('#intro header, .scrolling_icone'), 0.2, {autoAlpha: 0, ease:Power1.easeNone})
	    	.to($('#intro .lead'), 1.4, {y: '20%', ease:Power1.easeOut}, '-=0.2')
	    	.to($('#intro'), 0.7, {autoAlpha: 0.5, ease:Power1.easeNone}, '-=1.4');

		var introScene = new ScrollMagic.Scene({
	        triggerElement: '#intro', 
	        triggerHook: 0,
	        duration: "100%"
	    })
	    .setTween(introTimeline)
	    .addTo(controller);
		
		
		
// SCENE 01 SSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSS
							
							// DEFINITION DU MOUVEMENT : LA TIME LINE TTTTTTTTTTTTTTT
							var animationstep01 = new TimelineMax();
							animationstep01
								.fromTo(".animation01", 1, {x: "-200%"}, {x: "0%", ease: Linear.easeNone})  // in from left
								.fromTo(".animation02", 1, {x:  "200%"}, {x: "0%", ease: Linear.easeNone})  // in from right
								// pour lancer des animation en même temps j'utilise un label
								// https://greensock.com/position-parameter
								.addLabel('targetPoint')
								.fromTo(".animation04", 1, {x: "-200%"}, {x: "0%", ease: Linear.easeNone}, 'targetPoint')  // in from left
								.fromTo(".animation05", 1, {x:  "200%"}, {x: "0%", ease: Linear.easeNone}, 'targetPoint')  // in from right	
								// += supprime toutes les classes
							    .set($('.row'), {className: '+=is-ended'});			
							// FIN DEFINITION DU MOUVEMENT : LA TIME LINE TTTTTTTTTTTTTTT
		
		
							// DEFINITION DE LA SCENE : MAGICSCROLL TTTTTTTTTTTTTTT
							   new ScrollMagic.Scene({
									triggerElement: "#step01",
									triggerHook: "onLeave",
									//triggerHook: "0.5",
									duration: "100%"
								})
								// soit directement dans les () : ".setTween("#step01 .bg_parallax", {y: "-50%", ease: Linear.easeNone})" ou via variable :
							   	.setClassToggle("#step01", "is-active") // set class to active slide
							   // je fixe le slide au passage
							   .setPin("#step01")							   
								.addIndicators({name: ": ---step01---"}) // add indicators (requires plugin)
								.addTo(controller);
							// DEFINITION DE LA SCENE : MAGICSCROLL TTTTTTTTTTTTTTT
		
		
		
// SCENE 01 SSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSS
// SCENE 01 Bis SSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSS
							   new ScrollMagic.Scene({
									triggerElement: "#step01",
									triggerHook: "0.5",
									//triggerHook: "onLeave",
									duration: "50%"
								})
								// soit directement dans les () : ".setTween("#step01 .bg_parallax", {y: "-50%", ease: Linear.easeNone})" ou via variable :
								.setTween(animationstep01)
								.addIndicators({name: ": ---step01 b---"}) // add indicators (requires plugin)
								.addTo(controller);
// SCENE 01 Bis SSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSS		
// SCENE 02 SSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSS

		
							// DEFINITION DU MOUVEMENT : LA TIME LINE TTTTTTTTTTTTTTT
							var animationstep02 = new TimelineMax();
							animationstep02
							//.to( target, duration, vars, position )
								//.fromTo("#step01 .bg_parallax", 1, {y: "0"}, {y: "100%", ease: Linear.easeNone})
								.to("#step01 .bg_parallax", 2, {y:"50%"})
								// insert 1 second before end of timeline avec "-="
  								.to("#step02 .title_slide", 2, {x:750}, "-=1");		
							// FIN DEFINITION DU MOUVEMENT : LA TIME LINE TTTTTTTTTTTTTTT
		
							// DEFINITION DE LA SCENE : MAGICSCROLL TTTTTTTTTTTTTTT
							new ScrollMagic.Scene({
									triggerElement: "#step02",
									triggerHook: "100%",
									//triggerHook: "onLeave",
									duration: "50%"
								})
								//.setPin("#pinContainer")
								.setTween(animationstep02)
							   	//.setTween("#step01 .bg_parallax", {y: "100%", ease: Linear.easeNone})
								.addIndicators({name: ": ---step02---"}) // add indicators (requires plugin)
								.addTo(controller);
							// DEFINITION DE LA SCENE : MAGICSCROLL TTTTTTTTTTTTTTT
		
		
// SCENE 02 SSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSS	
// SCENE 03 SSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSS	
		
							// DEFINITION DU MOUVEMENT : LA TIME LINE TTTTTTTTTTTTTTT
							var animationstep03 = new TimelineMax();
							animationstep03
							//.to(".animation07", 0.5, {backgroundColor: "green", scale: 2, transformOrigin:'0% 0%'})
							.to(".animation07", 0.5, {backgroundColor: "green", width:"200%", padding:"2rem"})
							.to(".animation07 h3", 0.5, {color: "#FFFFFF"});
							// FIN DEFINITION DU MOUVEMENT : LA TIME LINE TTTTTTTTTTTTTTT
		
							// DEFINITION DE LA SCENE : MAGICSCROLL TTTTTTTTTTTTTTT
							new ScrollMagic.Scene({
										triggerElement: "#step03",
										// pour lancer automatiquement une animation, il faut supprimmer le parametre "duration"
										//duration: "50%"
								})
								.setTween(animationstep03) // trigger a TweenMax.to tween
								.addIndicators({name: "1 (duration: 0)"}) // add indicators (requires plugin)
								.setClassToggle(".animation08", "launch")
								.addTo(controller);
							// DEFINITION DE LA SCENE : MAGICSCROLL TTTTTTTTTTTTTTT
		
// SCENE 03 SSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSS	
		
		
						// GESTION DU SCROLLING PAR ANCRE -------------------------------- //
						// ScrollToPlugin nécessaire ------------------------------------- //
		
						// change behaviour of controller to animate scroll instead of jump
						controller.scrollTo(function (newpos) {
							TweenMax.to(window, 1.5, {scrollTo: {y: newpos}});
						});

						//  bind scroll to anchor links
						$(document).on("click", "a[href^='#']", function (e) {
							var id = $(this).attr("href");
							if ($(id).length > 0) {
								e.preventDefault();
								// trigger scroll
								controller.scrollTo(id);
								// if supported by the browser we can even update the URL.
								if (window.history && window.history.pushState) {
									history.pushState("", document.title, id);
								}
							}
						});
						// GESTION DU SCROLLING PAR ANCRE -------------------------------- //
						// ScrollToPlugin nécessaire ------------------------------------- //		
		
	
// End > ScrollMagic only for desktop, disable on touch and mobile devices
	}
// End > ScrollMagic only for desktop, disable on touch and mobile devices
});