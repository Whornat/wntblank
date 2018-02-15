<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package wntblanktheme
 */

get_header(); 

		//print_r(get_queried_object());
		// get the current taxonomy term
		$term = get_queried_object();
		$term_id = get_queried_object()->term_id;
		$term_name = get_queried_object()->name;
		$image_id = get_term_meta( $term_id, 'image', true );
		$image_term = get_field('image_term', $term);
		// thumbnail
		$image_term_size = 'thumbnail';
		$image_term_thumbnail = $image_term['sizes'][ $image_term_size ];
		$image_term_alt = $image_term['alt'];
		// color			 
		$color = get_field('color', $term);	
?>
<?php if ($color !== ''){?>
<style type="text/css">
	.page-header .page-title { color: <?php echo $color;?>}
	.the_main_loop .btn-secondary { background-color: <?php echo $color;?>}
</style>
<?php }?>


	<?php if (get_theme_mod('content_size') == ''){ $content_size = "col"; }else{ $content_size = get_theme_mod('content_size');} ?>
	<div id="primary" class="<?php echo $content_size ?> content-area <?php echo get_theme_mod('content_position') ?>">
		<main id="main" class="site-main" role="main">
		<?php
		if ( have_posts() ) : ?>
			
		<header class="page-header">
           		 <h1 class="page-title" ><?php the_archive_title();?></h1>
		<?php
					if (!is_post_type_archive() ){ 
						echo'<div class="taxonomy-description clearfix">';
						//IMAGE --------------------------------
						if ( '' != $image_term_thumbnail ) { 
							 echo'<img src="'.$image_term_thumbnail.'" alt="'.$image_term_alt.'" class="image_term alignleft" />';
						};	
						//IMAGE --------------------------------
						the_archive_description();
						echo'</div><!--taxonomy-description-->';				
					}					 
				?>
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
						get_template_part( 'template-parts/excerpt', get_post_format() );
					}
					//grid_layout
				}else{
					//grid_layout
					if (get_theme_mod('grid_layout') == 'card-columns'){ get_template_part( 'template-parts/card', get_post_type() );
						}else{
						get_template_part( 'template-parts/excerpt', get_post_type() );
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
