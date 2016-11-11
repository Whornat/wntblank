<?php
/**
 Template Name: Page demo animate
 */

get_header(); ?>
<style>
#demo h2 { margin:3em 0;}
</style>

	<div id="primary" class="col-md-8 content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>
            
            
            <div class="container">
<div class='animatedParent' data-sequence='500'>
	<h2 class='animated bounceInDown' data-id='1'>It Works!</h2>
	<h2 class='animated bounceInDown' data-id='2'>This animation will start 500ms after</h2>
	<h2 class='animated bounceInDown' data-id='3'>This animation will start 500ms after</h2>
</div>

<div class='animatedParent'>
	<h2 class='animated bounceInDown delay-250'>Delay It Works!</h2>
</div>	

<div class='animatedParent' data-appear-top-offset='-300'>
	<h2 class='animated bounceInDown'>Offset It Works!</h2>
</div>

<div class='animatedParent' id="demo">
<h2 class='animated bounceIn'>It Works!</h2>
<h2 class='animated bounceInDown'>It Works!</h2>
<h2 class='animated bounceInRight'>It Works!</h2>
<h2 class='animated bounceInUp'>It Works!</h2>
<h2 class='animated bounceInLeft'>It Works!</h2>
<h2 class='animated fadeInDownShort'>It Works!</h2>
<h2 class='animated fadeInUpShort'>It Works!</h2>
<h2 class='animated fadeInLeftShort'>It Works!</h2>
<h2 class='animated fadeInRightShort'>It Works!</h2>
<h2 class='animated fadeInDown'>It Works!</h2>
<h2 class='animated fadeInUp'>It Works!</h2>
<h2 class='animated fadeInLeft'>It Works!</h2>
<h2 class='animated fadeInRight'>It Works!</h2>
<h2 class='animated fadeIn'>It Works!</h2>
<h2 class='animated growIn'>It Works!</h2>
<h2 class='animated shake'>It Works!</h2>
<h2 class='animated shakeUp'>It Works!</h2>
<h2 class='animated rotateIn'>It Works!</h2>
<h2 class='animated rotateInUpLeft'>It Works!</h2>
<h2 class='animated rotateInDownLeft'>It Works!</h2>
<h2 class='animated rotateInUpRight'>It Works!</h2>
<h2 class='animated rotateInDownRight'>It Works!</h2>
<h2 class='animated rollIn'>It Works!</h2>
<h2 class='animated wiggle'>It Works!</h2>
<h2 class='animated swing'>It Works!</h2>
<h2 class='animated tada'>It Works!</h2>
<h2 class='animated wobble'>It Works!</h2>
<h2 class='animated pulse'>It Works!</h2>
<h2 class='animated lightSpeedInRight'>It Works!</h2>
<h2 class='animated lightSpeedInLeft'>It Works!</h2>
<h2 class='animated flip'>It Works!</h2>
<h2 class='animated flipInX'>It Works!</h2>
<h2 class='animated flipInY'>It Works!</h2>
</div>	


       
            
            </div>
          	
       	  
            

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
