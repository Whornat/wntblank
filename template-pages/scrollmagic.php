<?php
/**
 Template Name: Scrollmagic
 */
 get_header(nobrand); ?>

<style type="text/css">
	
#content { display: none;}	
#main { padding:0;}	
	
.content_slide {
  overflow: hidden;
  position: relative;
  padding: 0;
  background: #eeeeee;
  clear: both;
}
	
	
.bg_parallax {
  background: no-repeat center center;
  background-size: cover;
  position: absolute;
  width: 100%;
  height: 100%;
  z-index: 1;
  opacity: 0.5; }

  .break { background: #000000; height: 100px;}	
	
  #step01 .bg_parallax {
    background: url(<?php echo get_template_directory_uri(); ?>/IMG/demo/img_mountains01.jpg) no-repeat center center;
    background-size: cover; }
	
  #step02 .bg_parallax {
    background: url(<?php echo get_template_directory_uri(); ?>/IMG/demo/img_mountains02.jpg) no-repeat center center;
    background-size: cover; }
	
	
  #step04 .bg_parallax {
    background: url(<?php echo get_template_directory_uri(); ?>/IMG/demo/img_mountains03.jpg) no-repeat center center;
    background-size: cover; }

</style>


<div id="primary" class="content-area">

<?php // NAVIGATION SCROLLING ------------------------------------------------------------------------------------------
//------------------------------------------------------------------------------------------------------------------ ?>
<?php get_template_part( 'template-parts/menu','onepage_bullet'); ?>
<?php // NAVIGATION SCROLLING ------------------------------------------------------------------------------------------
//------------------------------------------------------------------------------------------------------------------ ?>
        
        
		<main id="main" class="site-main noppadingtop" role="main">
			<?php
			//while ( have_posts() ) : the_post();
				//get_template_part( 'template-parts/content', 'page' );
			//endwhile; // End of the loop.
			?>  
<section id="step01" class="content content_slide slide_fullheight">
	<div class="bg_parallax"></div>
        		      		
				<header class="container"><h1>Section 01</h1></header>      		
         		<div class="container">
                <div class="row">
                --
                </div><!-- .row -->
                </div><!--.container-->
</section>
			<div class="spacer"></div>
<section id="break01" class="content content_slide break">
         		<div class="container">
                <div class="row">
                --
                </div><!-- .row -->
                </div><!--.container-->
</section>

<section id="step02" class="content content_slide slide_fullheight">
	<div class="bg_parallax"></div>
        		
				<header class="container"><h1>Section 02</h1></header>      		
         		<div class="container">
                <div class="row">
                --
                </div><!-- .row -->
                </div><!--.container-->
</section>


<section id="step03" class="content content_slide slide_fullheight">
        		
				<header class="container"><h1>Section 03</h1></header>      		
         		<div class="container">
                <div class="row">
                --
                </div><!-- .row -->
                </div><!--.container-->
</section>

<section id="break02" class="content content_slide break">
         		<div class="container">
                <div class="row">
                --
                </div><!-- .row -->
                </div><!--.container-->
</section>

<section id="step04" class="content content_slide slide_fullheight">
	<div class="bg_parallax"></div>

			
				<header class="container"><h1>Section 04</h1></header>      		
         		<div class="container">
                <div class="row">
                --
                </div><!-- .row -->
                </div><!--.container-->
</section>
            
         </main><!-- #main -->
	</div><!-- #primary -->
   					<script type="text/javascript">
						
	(function ($) {
						
	// init controller
	//var controller = new ScrollMagic.Controller();
	var controller = new ScrollMagic.Controller({globalSceneOptions: {triggerHook: 0.7, duration: "90%"}});
		
	// get all slides
	var slides = ["#step01", "#step02", "#step03", "#step04"];
	// get all headers in slides that trigger animation
	var headers = ["#slide01 header", "#slide02 header", "#slide03 header", "#slide04 header"];	

	// Enable ScrollMagic only for desktop, disable on touch and mobile devices
	if (!Modernizr.touch) {

						// build scenes
						new ScrollMagic.Scene({triggerElement: "#step01"})
										.setTween("#step01 .bg_parallax", {y: "20%", ease: Linear.easeNone})
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
	
	
	
	
	}(jQuery));						
						
					</script>

   
    
<?php
//get_sidebar();
get_footer();