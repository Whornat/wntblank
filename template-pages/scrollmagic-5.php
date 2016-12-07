<?php
/**
 Template Name: Scrollmagic 5
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
  opacity: 1; }
  .inner {z-index:2; position: relative; height: 100%}	

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

	/* animation gérées via propriété css3 */
	.objet_anime {}
	.objet_a_animer {}	
	
  .custom_animation2 {  
	  /* animationname | durée | delay */
	  animation: customanimation2 1s linear ;
	}
  @keyframes customanimation2{
     from { left:0; }
     35%  { left:30%; }
     to   { left:100%; }
}
	
	
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
<section id="intro" class="content content_slide slide_fullheight">
	<div class="inner">
			     			
				<header class="container"><h1>Demo de Scroll magic</h1></header>      		
         		<div class="container">
                <div class="row">
               --
                </div><!-- .row -->
                </div><!--.container -->
                
                
      </div><!--.inner-->
</section>			
			  
			    
			        
<section id="step01" class="content content_slide slide_fullheight">
	<div class="bg_parallax"></div>
	<div class="inner">
			     			
				<header class="container"><h1>Section 01</h1></header>      		
         		<div class="container">
                <div class="row">
					--
	
               
               
                </div><!-- .row -->
                </div><!--.container -->
                
                
                </div><!--.inner-->
</section>
			<div class="spacer"></div>
<section id="break01" class="content content_slide break">
         		<div class="container">
                <div class="row">
    <div class="animatedParent container" data-sequence="500">
	<h2 class="animated bounceInDown" data-id="1">It Works!</h2>
	<h2 class="animated bounceInDown" data-id="2">This animation will start 500ms after</h2>
	<h2 class="animated bounceInDown" data-id="3">This animation will start 500ms after</h2>
	</div>
                </div><!-- .row -->
                </div><!--.container-->
</section>

<section id="step02" class="content content_slide slide_fullheight">
	<div class="bg_parallax"></div>
        		<div class="inner">
				<header class="container"><h1>Section 02</h1></header>      		
         		<div class="container">
                <div class="row">
                
				<div class="col-sm-4 objet_anime" id="objet_a_animer_01">
						lancement d'une animation css3
					</div>
					
					<div class="col-sm-4 objet_anime" id="objet_a_animer_02">
						lancement d'une animation css3
					</div>                

                                
                </div><!-- .row -->
                </div><!--.container-->
                </div><!--.inner-->
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
	
	}(jQuery));						
					</script>

   
    
<?php
//get_sidebar();
get_footer();