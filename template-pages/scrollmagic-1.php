<?php
/**
 Template Name: ScrollMagic exemple 1
 */
 get_header(); ?>

</div><!-- content -->
</div><!-- .container -->
<div id="primary" class="content-area">
		<main>
         </main><!-- #main -->
	</div><!-- #primary -->

<?php // NAVIGATION SCROLLING ------------------------------------------------------------------------------------------
//------------------------------------------------------------------------------------------------------------------ ?>
<?php //get_template_part( 'template-parts/menu','onepage'); ?>
<?php // NAVIGATION SCROLLING ------------------------------------------------------------------------------------------
//------------------------------------------------------------------------------------------------------------------ ?>
        
        


	<ul id="menu"></ul>
	<div id="content-wrapper">
		<div id="example-wrapper">
			<div class="scrollContent">
				<section id="titlechart">
					<div id="description">
						<h1 class="badge gsap">Parallax Sections</h1>
						<h2>The most common parallax application</h2>
						<p>
							To create a classic parallax page effect simply add elements that contain the parallax background.<br>
							Then use scenes to animate the child element's position.
						</p>
						<p>
							The DOM is very straight forward and consists of consecutive containers.
						</p>
						<a href="#" class="viewsource">view source</a>
					</div>
				</section>
				<section class="demo">
					<style type="text/css">
						.parallaxParent {
							height: 100vh;
							overflow: hidden;
						}
						.parallaxParent > * {
							height: 200%;
							position: relative;
							top: -100%;
						}
					</style>
					<div class="spacer s0"></div>
					<div id="parallax1" class="parallaxParent">
						<div style="background-image: url(<?php echo get_template_directory_uri(); ?>/scrollmagic/img/example_parallax_bg1.png);"></div>
					</div>
					<div class="spacer s1">
						<div class="box2 blue">
							<p>Content 1</p>
							<a href="#" class="viewsource">view source</a>
						</div>
					</div>
					<div class="spacer s0"></div>
					<div id="parallax2" class="parallaxParent">
						<div style="background-image: url(<?php echo get_template_directory_uri(); ?>/scrollmagic/img/example_parallax_bg2.png);"></div>
					</div>
					<div class="spacer s1">
						<div class="box2 blue">
							<p>Content 2</p>
							<a href="#" class="viewsource">view source</a>
						</div>
					</div>
					<div class="spacer s0"></div>
					<div id="parallax3" class="parallaxParent">
						<div style="background-image: url(<?php echo get_template_directory_uri(); ?>/scrollmagic/img/example_parallax_bg3.png);"></div>
					</div>
					<div class="spacer s2"></div>
					<script type="text/javascript">
						
(function ($) {
						
						// init controller
						var controller = new ScrollMagic.Controller({globalSceneOptions: {triggerHook: "onEnter", duration: "200%"}});

						// build scenes
						new ScrollMagic.Scene({triggerElement: "#parallax1"})
										.setTween("#parallax1 > div", {y: "80%", ease: Linear.easeNone})
										.addIndicators()
										.addTo(controller);

						new ScrollMagic.Scene({triggerElement: "#parallax2"})
										.setTween("#parallax2 > div", {y: "80%", ease: Linear.easeNone})
										.addIndicators()
										.addTo(controller);

						new ScrollMagic.Scene({triggerElement: "#parallax3"})
										.setTween("#parallax3 > div", {y: "80%", ease: Linear.easeNone})
										.addIndicators()
										.addTo(controller);
}(jQuery));	
	
					</script>
				</section>
				<div class="spacer s_viewport"></div>
			</div>
		</div>
	</div>

            

    
<?php
//get_sidebar();
get_footer();