<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package wntblank_theme_boot4
 */

get_header(); ?>

	<?php if (get_theme_mod('content_size') == ''){ $content_size = "col"; }else{ $content_size = get_theme_mod('content_size');} ?>
	<div id="primary" class="<?php echo $content_size ?> content-area <?php echo get_theme_mod('content_position') ?>">
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
					 
					//$cpt_customizer = get_field( "cpt_customizer" ); 
					if (!is_post_type_archive() ){ 
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
					}elseif (class_exists('acf')){
						
							// SI IL Y A DES OPTIONS----------------
							if (have_rows('cpt_customizer', 'option')){
								
							while( have_rows('cpt_customizer', 'option') ): the_row();
							// si il s'agit bien du CPT, tu affiches la description ;)
							if (get_sub_field('cpt_customizer_slug') == $term_name){
								//the_sub_field('cpt_customizer_slug');
								echo'<div class="cpt-description">';
								the_sub_field('cpt_customizer_description');
								echo'</div>';
							}
							// fin du si----
							endwhile;
							}
							// FIN SI IL Y A DES OPTIONS----------------
						
					}
					 
				?>
			</header><!-- .page-header -->

			<div class="the_main_loop <?php if (get_theme_mod('archive_column') !== ''){echo'row';};?>">
			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();
			
			// SI PAS DE COLONNAGE DE SELECTIONNEE ------------
			if (get_theme_mod('archive_column') == ''){

				if ('post' === get_post_type()){
				get_template_part( 'template-parts/excerpt', get_post_format() );
				}else{
				get_template_part( 'template-parts/excerpt', get_post_type() );
				}
				
			// SI UN COLONNAGE DE SELECTIONNEE ------------
			}else{
				echo'<div class="'.get_theme_mod('archive_column').'">';	
				if ('post' === get_post_type()){
				get_template_part( 'template-parts/excerpt', get_post_format() );
				}else{
				get_template_part( 'template-parts/excerpt', get_post_type() );
				}
				echo'</div><!-- .'.get_theme_mod('archive_column').'--> ';	
			}
			// FIN SI "control_archive_column" ------------

			endwhile;
			wp_bootstrap_pagination();
			//the_posts_navigation();
			else :
			get_template_part( 'template-parts/content', 'none' );
			
			
			
		endif; ?>
			</div><!-- .the_main_loop -->
			
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
