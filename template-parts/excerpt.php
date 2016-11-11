<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package wntblank_theme_boot4
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php wntblank_theme_boot4_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
	<?php 
	 	// affichage de l'image FEATURED SI STICKY!!!!!
		if ( '' != get_the_post_thumbnail()) {
		// on affiche l'image
		?><a href="<?php the_permalink(); ?>" rel="bookmark" class="pull-left thumbnailcontainer"><?php
    	the_post_thumbnail('medium', array('class' => 'img-thumbnail'));
		?></a>
	<?php } ?>
		
		
		<?php
			the_excerpt();
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wntblank_theme_boot4' ),
				'after'  => '</div>',
			) );
		?>
        <p class="text-right"><a href="<?php the_permalink(); ?>" class="btn btn-primary"><?php _e( 'Readmore', 'wntblank_theme_boot4' ); ?></a></p>
	</div><!-- .entry-content -->

	<footer class="entry-footer text-right">
		<?php wntblank_theme_boot4_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
