<?php
/**
 Template Name: Page demo image
 */

get_header(); ?>
<style>

</style>

	<div id="primary" class="col-md-9 content-area <?php echo get_theme_mod('sidebar_position') ?>">
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
            
            
            <div class="gallery gallery-columns-3">
                    <figure class="gallery-item cap-bot">
                        <img src="<?php echo get_template_directory_uri(); ?>/IMG/medium-300x176.jpg" alt="" title="">
                        <figcaption>legende de la photo</figcaption>            
                    </figure>
                     <figure class="gallery-item cap-top">
                        <img src="<?php echo get_template_directory_uri(); ?>/IMG/medium-300x176.jpg" alt="" title="">
                        <figcaption>legende de la photo</figcaption>            
           
                    </figure>
                    <figure class="gallery-item cap-left">
                        <img src="<?php echo get_template_directory_uri(); ?>/IMG/medium-300x176.jpg" alt="" title="">
                        <figcaption>legende de la photo</figcaption>            
                    </figure>
              </div><!-- fin gallery -->
             <div class="gallery gallery-columns-2">
                    <figure class="gallery-item cap-bot">
                        <img src="<?php echo get_template_directory_uri(); ?>/IMG/big-500x700.jpg" alt="" title="">
                        <figcaption>legende de la photo</figcaption>            
                    </figure>
                     <figure class="gallery-item cap-full">
                        <img src="<?php echo get_template_directory_uri(); ?>/IMG/big-500x700.jpg" alt="" title="">
                        <figcaption>legende de la photo</figcaption>                                    
                    </figure>
                    <figure class="gallery-item cap-full">
                        <img src="<?php echo get_template_directory_uri(); ?>/IMG/big-500x700.jpg" alt="" title="">
                        <figcaption>
                        <h3>titre</h3>
                        <p>description courte</p>
                        <p><a href="#">En savoir plus</a></p>
                        </figcaption>    
                     </figure>
                    
              </div><!-- fin gallery -->           
            
            </div>
          	
       	  
            

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
