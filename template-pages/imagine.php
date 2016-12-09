<?php
/**
 Template Name: Imagine
 */
get_header('simple'); ?>
 
<style type="text/css">
	#main { overflow-x: hidden;}
</style>
        
<?php // NAVIGATION SCROLLING ------------------------------------------------------------------------------------------
//------------------------------------------------------------------------------------------------------------------ ?>
<?php //get_template_part( 'template-parts/menu','imagine'); ?>
<?php echo menu_onepagescrolling(array("step1", "step2", "step3","step4" ),''); ?>
<?php // NAVIGATION SCROLLING ------------------------------------------------------------------------------------------
//------------------------------------------------------------------------------------------------------------------ ?>       
        
        
        
<main id="main" class="site-main noppadingtop" role="main">
			<?php
			//while ( have_posts() ) : the_post();
				//get_template_part( 'template-parts/content', 'page' );
			//endwhile; // End of the loop.
			?>
			  
<section id="step1" class="content content_slide nopadding">
<!-- Imagine -->
<div class="imagine">
  <!-- Content -->
  <div class="imagine-content imagine-content-center">
    <div class="container">
      <!-- Your HTML goes here -->
      <h2 class="text-white text-center">Imagine what you can do!</h2>
    </div>
  </div>

  <!-- Background -->
  <!-- To change the background, modify the src=".." attribute -->
<img class="imagine-background" src="<?php echo get_stylesheet_directory_uri(); ?>/IMG/bannerheader_demo.jpg">

</div>
<!-- Imagine -->
</section>
<section id="step2" class="content content_slide">
         		<div class="container">
<div class="imagine" data-imagine="x 200..200">
  <h1>Section 01</h1>
</div>                
                
                
                <div class="row">
                --
                </div><!-- .row -->
                </div><!--.container-->
</section>
<section id="step3" class="content content_slide" >
         		<div class="container">
<div class="imagine" data-imagine="y -300..0 to-middle">
  <h1>Section 02</h1>
</div>                   
                <div class="row">
                --
                </div><!-- .row -->
                </div><!--.container-->
</section>
<section id="step4" class="content content_slide">
         		<div class="container">
                <h1>Titre etape 03</h1>
                <div class="row">
                --
                </div><!-- .row -->
                </div><!--.container-->
</section>

<section id="step5" class="content content_slide nopadding">
<div class="imagine" id="landscape-canvas">
      <div class="imagine-content imagine-content-center">
        <div class="imagine-content-container">
          <section>
            <div class="container">
              <div class="row">
                <div class="col-xs-12">
                  <div class="text-center" id="landscape-text">
                    <div class="section-title">
                      Rediscover Parallax Scrolling
                    </div>
                    <div class="section-description">
                      Simple. Beautiful. Anywhere.
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
      <!--
      <img class="imagine-layer" id="landscape-layer-9" src="assets/img/templates/misty-woods/layer-9.png">
      <img class="imagine-layer" id="landscape-layer-8" src="assets/img/templates/misty-woods/layer-8.png">
      <img class="imagine-layer" id="landscape-layer-7" src="assets/img/templates/misty-woods/layer-7.png">
      <img class="imagine-layer" id="landscape-layer-6" src="assets/img/templates/misty-woods/layer-6.png">
      <img class="imagine-layer" id="landscape-layer-5" src="assets/img/templates/misty-woods/layer-5.png">
      <img class="imagine-layer" id="landscape-layer-4" src="assets/img/templates/misty-woods/layer-4.png">
      <img class="imagine-layer" id="landscape-layer-3" src="assets/img/templates/misty-woods/layer-3.png">
      <img class="imagine-layer" id="landscape-layer-2" src="assets/img/templates/misty-woods/layer-2.png">
      <img class="imagine-layer" id="landscape-layer-1" src="assets/img/templates/misty-woods/layer-1.png">
      -->
      <img class="imagine-background" id="landscape-background" src="<?php echo get_stylesheet_directory_uri(); ?>/IMG/bannerheader_demo.jpg">
    </div>
</section>

            
         </main><!-- #main -->
    
    <script type="text/javascript">
//jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
    $('.navscroll a').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});
</script>
    
    
    <script>
	  (function() {
  $(document).ready((function(_this) {
    return function() {
      $('#landscape-canvas').on('imagine.load', function(e) {
        $('#landscape-text').imagine({
          animation: 'opacity 1, scale 0.5'
        });
      });
	  
	   $('.imagine').imagine();
	  
      $('#landscape-canvas').imagine({
        animation: {
          layer: {
            '#landscape-layer-1': "y 0.6",
            '#landscape-layer-2': "y 0.55",
            '#landscape-layer-3': "y 0.5",
            '#landscape-layer-4': "y 0.45",
            '#landscape-layer-5': "y 0.4",
            '#landscape-layer-6': "y 0.25",
            '#landscape-layer-7': "y 0.2",
            '#landscape-layer-8': "y 0.15"
          }
        },
        size: 'fullscreen'
      });
    };
  })(this));

}).call(this);
    </script>
    
<?php
//get_sidebar();
get_footer('simple');