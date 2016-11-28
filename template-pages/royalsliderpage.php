<?php
/**
 Template Name: RoyalSlider Page
 */

get_header(); ?>

	</div><!-- fin container -->
    <div id="slider">
	<?php //echo get_new_royalslider(1); ?>
    
       
    
    
    <div id="content-slider" class="royalSlider contentSlider rsDefault">
    <!-- simple image slide -->
    
      <div class="slide">
      	<div class="row animatedParent"  data-sequence="500">
        	<div class="col-sm-6 animated bounceInDown" data-id="1"><h1>Titre de Niveau 1</h1></div>
        	<div class="col-sm-6 animated bounceInDown" data-id="2"><p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget ipsum quam. Ut dignissim molestie ex, fringilla molestie lacus sodales et. Etiam quam sem, dapibus sit amet tincidunt quis, porta quis mauris. Pellentesque eleifend laoreet iaculis. Vivamus ut leo nisl. Maecenas sed nibh sit amet est fermentum sollicitudin sit amet non ante. Nam porta mauris at pulvinar semper. In hac habitasse platea dictumst. </p></div>
        </div><!--row -->
      </div><!--slide -->
      <div class="slide">
      	<div class="row animatedParent"  data-sequence="500">
        	<div class="col-sm-6 animated bounceInDown" data-id="1"><h1>Titre de Niveau 1</h1></div>
        	<div class="col-sm-6 animated bounceInDown" data-id="2"><img class="rsImg"  src="<?php echo get_stylesheet_directory_uri(); ?>/IMG/510x370_medium-md6.png" alt="" title="">
</div>
        </div><!--row -->
      </div>
      <div class="slide">
      	<div class="row">
        <div class="col-sm-6">
        <div class="rsABlock" data-move-effect="left" data-fade-effect="false" moveOffset="20" delay="200">
            <p>Dummy text of block with title and text.</p>
        </div>
        </div>
        <div class="col-sm-6">
        <div class="rsABlock" data-move-effect="bottom" data-fade-effect="false"  moveOffset="20" delay="1000">
            <p>Dummy text of block with title and text.</p>
        </div> 
        </div>
        </div>      
        
    </div>
      
      
      
      <div class="slide">
      	<img class="rsImg"  src="<?php echo get_stylesheet_directory_uri(); ?>/IMG/510x370_medium-md6.png" alt="" title="">
      </div><!--slide -->
      
      

    
</div>
   
<script>
    jQuery(document).ready(function($) {
        $("#content-slider").royalSlider({
			
			
			
            // options go here
            // as an example, enable keyboard arrows nav
            keyboardNavEnabled: true,
			//autoScaleSlider: true,
    		autoPlay: {
    		// autoplay options go gere
    		enabled: true,
    		pauseOnHover: true
    	}
			
			
        });  
    });
</script>
<style type="text/css">
.royalSlider {
  width: 100%;
  height: 300px;
}
.rsNav {
    position: absolute;
    bottom: auto;
    top: -20px;
}
</style>
    
    
    
    </div>
    
    <div class="container">
	<div id="primary" class="col-lg-9 col-md-7 content-area <?php echo get_theme_mod('content_position') ?>">
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
           
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
