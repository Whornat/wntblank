<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package wntblank_theme_boot4
 */

get_header(); ?>

	<?php if (get_theme_mod('content_size') == ''){ $content_size = "col-lg-9 col-md-7"; }else{ $content_size = get_theme_mod('content_size');} ?>
	<div id="primary" class="<?php echo $content_size ?> content-area <?php echo get_theme_mod('content_position') ?>">
        
		<main id="main" class="site-main" role="main">
		<?php
		while ( have_posts() ) : the_post();

			if ('post' === get_post_type()){
			get_template_part( 'template-parts/content', get_post_format() );
			}else{
			get_template_part( 'template-parts/content', get_post_type() );
			}
			the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			
			if ( comments_open() || get_comments_number()  ) :
				// si seulement c'est un article on affiche les commentaires
				if ('post' === get_post_type()){
				comments_template();
				}
				//----------------------------------------------------------
				
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
