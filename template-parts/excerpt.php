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
	<header class="entry-header">
		<?php
		the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php wntblanktheme_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">

    <?php // Affichage de l'image featured ?>
	<?php if ( '' != get_the_post_thumbnail()) { ?>
		<?php echo'<a href="'.get_the_permalink().'" rel="bookmark" class="thumbnailcontainer">'; ?>
		<?php the_post_thumbnail('thumbnail', array('class' => 'img-thumbnail')); ?></a>
	<?php } ?>
    <?php // Fin Affichage de l'image featured ?>


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
