<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package wntblank_theme_boot4
 */

get_header(); ?>

	<div id="primary" class="col-md-8 content-area">
		<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) : ?>

		<header class="page-header">
           		 <h1 class="page-title">
				<?php
			 //print_r(get_queried_object());
		$term_id = get_queried_object()->term_id;
		$term_name = get_queried_object()->name;			
		$image_id = get_term_meta( $term_id, 'image', true );
		if ( ! empty( $image_id ) ) {
			$image_atts = wp_get_attachment_image_src( $image_id, 'thumbnail' );
			$image_url = $image_atts[0];
    		echo '<img src="' . esc_url( $image_atts[0] ) . '" alt="'.$term_name.'" class="image_term"/>';
			}
				
					the_archive_title();
    		echo '</h1>';
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/excerpt', get_post_format() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
