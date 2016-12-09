<?php
/**
 Template Name: Onepage-scrolling
 */
 get_header(); ?>

</div><!-- content -->
</div><!-- .container -->
<div id="primary" class="content-area">

<?php // NAVIGATION SCROLLING ------------------------------------------------------------------------------------------
//------------------------------------------------------------------------------------------------------------------ ?>
<?php get_template_part( 'template-parts/menu','onepage'); ?>
<?php //echo menu_onepagescrolling(array("step1", "step2", "step3","step4" ),''); ?>

<?php // NAVIGATION SCROLLING ------------------------------------------------------------------------------------------
//------------------------------------------------------------------------------------------------------------------ ?>
        
        
		<main id="main" class="site-main noppadingtop" role="main">
			<?php
			//while ( have_posts() ) : the_post();
				//get_template_part( 'template-parts/content', 'page' );
			//endwhile; // End of the loop.
			?>  
<section id="step1" class="content content_slide slide_fullheight" style="background:#CCCCCC">
         		<div class="container">
  				<h1>Section 01</h1>
                <div class="row">
                --
                </div><!-- .row -->
                </div><!--.container-->
</section>

<section id="step2" class="content content_slide">
         		<div class="container">
  				<h1>Section 02</h1>
                <div class="row">
                --
                </div><!-- .row -->
                </div><!--.container-->
</section>

<section id="step3" class="content content_slide">
         		<div class="container">
  				<h1>Section 02</h1>
                <div class="row">
                --
                </div><!-- .row -->
                </div><!--.container-->
</section>

<section id="step4" class="content content_slide">
         		<div class="container">
  				<h1>Section 02</h1>
                <div class="row">
                --
                </div><!-- .row -->
                </div><!--.container-->
</section>

           
            
         </main><!-- #main -->
	</div><!-- #primary -->
    
<?php
//get_sidebar();
get_footer();