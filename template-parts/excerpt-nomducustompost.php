<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package wntblanktheme
 */

?>
<?php 
$colonnage = 'col-12';
$colonnage = get_theme_mod('archive_column');
?>

<article id="post-<?php the_ID(); ?>" <?php post_class($colonnage); ?>>
	<header class="entry-header">
		<?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );	?>
	</header><!-- .entry-header -->

	<div class="entry-excerpt">
	<?php 
	 	// affichage de l'image FEATURED SI STICKY!!!!!
		if ( '' != get_the_post_thumbnail()) {
		// on affiche l'image
		?><a href="<?php the_permalink(); ?>" rel="bookmark" class="pull-left thumbnailcontainer"><?php
    	the_post_thumbnail('thumbnail', array('class' => 'img-thumbnail'));
		?></a>
	<?php } ?>
    
		
    	<h5>Custom post : <?php echo get_post_type() ?></h5>
		<?php
			the_excerpt();
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wntblanktheme' ),
				'after'  => '</div>',
			) );
        //echo'<p class="text-right"><a href='.get_the_permalink().'" class="btn btn-secondary readmore">'.esc_html__( 'Readmore', 'wntblanktheme' ).'</a></p>';
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer text-right">
		<?php wntblanktheme_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
