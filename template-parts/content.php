<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package wntblanktheme
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php // Affichage de l'image featured ?>
	<?php if ( '' != get_the_post_thumbnail() && get_field('topbanner')) { ?>
		<header class="entry-header with_banner" style="background-image: url('<?php the_post_thumbnail_url( 'banner' );?>')">
	<?php }else{ ?>
		<header class="entry-header">
	<?php }?>
    <?php // Fin Affichage de l'image featured ?>
		<?php
			if ( is_single() ) {
				the_title( '<h1 class="entry-title">', '</h1>' );
			} else {
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			}

		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php wntblanktheme_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
    <?php // gestion de la gallery auto  ?>
    <?php //wnt_image_gallery($post->ID); ?>
	
    <?php // Affichage de l'image featured ?>
	<?php //if ( '' != get_the_post_thumbnail()) { ?>
		<?php //echo'<a href="'.get_the_permalink().'" rel="bookmark" class="pull-left thumbnailcontainer">'; ?>
		<?php //the_post_thumbnail('medium', array('class' => 'img-thumbnail')); ?></a>
	<?php //} ?>
    <?php // Fin Affichage de l'image featured ?>
    
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'wntblanktheme' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wntblanktheme' ),
				'after'  => '</div>',
			) );
			
			if ( '' !== get_the_author_meta( 'description' ) ) {
				get_template_part( 'template-parts/biography' );
			}
		?>
        
        
        
	</div><!-- .entry-content -->
    
    <?php
	// TESTER SI ACF est installé --------------------------------------------
	include_once( ABSPATH . 'wp-admin/includes/plugin.php' ); 
	
	if ( is_plugin_active( 'advanced-custom-fields-pro/acf.php' ) || is_plugin_active( 'advanced-custom-fields/acf.php' )) {
		$location = get_field('google_map');
		if (!empty($location) ){
    	//echo "ACF est activé";
		echo "<div class='acf-map' id='map_google'>";
			get_template_part( 'template-parts/map');
		echo "</div>";
		}
	}
	// TESTER SI ACF est installé --------------------------------------------
	?>

    
    

	<footer class="entry-footer text-right">
		<?php wntblanktheme_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
