<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package wntblanktheme
 */

get_header(); ?>

	<?php if (get_theme_mod('content_size') == ''){ $content_size = "col"; }else{ $content_size = get_theme_mod('content_size');} ?>
	<div id="primary" class="<?php echo $content_size ?> content-area <?php echo get_theme_mod('content_position') ?>">

		<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'wntblanktheme' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header><!-- .page-header -->

			<div class="the_main_loop row <?php //if (get_theme_mod('archive_column') !== ''){echo'row';};?>">
			<?php if (get_theme_mod('grid_layout') == 'card-columns'){echo'<div class="card-columns">';};?>
				
				
			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();
			
			// SI PAS DE COLONNAGE DE SELECTIONNEE ------------

				if ('post' === get_post_type()){
					//grid_layout
					if (get_theme_mod('grid_layout') == 'card-columns'){ get_template_part( 'template-parts/card', get_post_format() );
						}else{
						get_template_part( 'template-parts/searchitem', get_post_format() );
					}
					//grid_layout
				}else{
					//grid_layout
					if (get_theme_mod('grid_layout') == 'card-columns'){ get_template_part( 'template-parts/card', get_post_type() );
						}else{
						get_template_part( 'template-parts/searchitem', get_post_type() );
					}
					//grid_layout					
				}

			endwhile;
			if (get_theme_mod('grid_layout') == 'card-columns'){echo'</div><!--.card-columns-->';};
			echo '</div><!-- .the_main_loop -->';
				
			//wp_bootstrap_pagination();
			//the_posts_navigation();
			else :
			get_template_part( 'template-parts/content', 'none' );
			
			
			
		endif; ?>
							
			<?php  wp_bootstrap_pagination();?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
