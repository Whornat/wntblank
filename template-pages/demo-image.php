<?php
/**
 Template Name: Page demo image
 */

get_header(); ?>
<?php if (get_theme_mod('content_size') == ''){ $content_size = "col"; }else{ $content_size = get_theme_mod('content_size');} ?>
	<div id="primary" class="<?php echo $content_size ?> content-area <?php echo get_theme_mod('content_position') ?>">
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


			            <div class="">

<div id="gallery-1" class="gallery gallery-columns-3 gallery-size-medium">
										<figure class="gallery-item">
													<div class="gallery-icon landscape">
														<a href="#" class="fancybox" rel="group1">
													    <img src="<?php echo get_template_directory_uri(); ?>/IMG/510x370_medium-md6.png" alt="" class="attachment-medium size-medium">
										                </a>
													</div>
														<figcaption class="wp-caption-text gallery-caption" id="gallery-1-1208">
														une legende
														</figcaption>
										</figure>
										<figure class="gallery-item cap-right">
													<div class="gallery-icon landscape">
														<a href="#" class="fancybox" rel="group1">
													    <img src="<?php echo get_template_directory_uri(); ?>/IMG/510x370_medium-md6.png" alt="" class="attachment-medium size-medium">
										                </a>
													</div>
														<figcaption class="wp-caption-text gallery-caption" id="gallery-1-1208">
														une legende
														</figcaption>
										</figure>
										<figure class="gallery-item cap-full">
													<div class="gallery-icon landscape">
														<a href="#" class="fancybox" rel="group1">
													    <img src="<?php echo get_template_directory_uri(); ?>/IMG/510x370_medium-md6.png" alt="" class="attachment-medium size-medium">
										                </a>
													</div>
														<figcaption class="wp-caption-text gallery-caption" id="gallery-1-1208">
														une legende
														</figcaption>
										</figure>

			            </div>
								</div>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
