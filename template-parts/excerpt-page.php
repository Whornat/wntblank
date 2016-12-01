<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package wntblank_theme_boot4
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
    
        
    <?php // Affichage de l'image featured ?>
	<?php if ( '' != get_the_post_thumbnail()) { ?>
		<?php echo'<a href="'.get_the_permalink().'" rel="bookmark" class="pull-left thumbnailcontainer">'; ?>
		<?php the_post_thumbnail('thumbnail', array('class' => 'img-thumbnail')); ?></a>
	<?php } ?>
    <?php // Fin Affichage de l'image featured ?>
    

		<?php
			the_excerpt();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wntblank_theme_boot4' ),
				'after'  => '</div>',
			) );
        //echo'<p class="text-right"><a href='.get_the_permalink().'" class="btn btn-secondary readmore">'.esc_html__( 'Readmore', 'wntblank_theme_boot4' ).'</a></p>';
        ?>
	</div><!-- .entry-content -->

	<footer class="entry-footer text-right">
		<?php
			edit_post_link(
				sprintf(
					/* translators: %s: Name of current post */
					esc_html__( 'Edit %s', 'wntblank_theme_boot4' ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				),
				'<span class="edit-link">',
				'</span>'
			);
		?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
