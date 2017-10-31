<?php
/**
 * Template part for displaying results in search pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package wntblank_theme_boot4
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php wntblank_theme_boot4_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-summary">
		<?php the_excerpt(); ?>
        <p class="text-right"><a href="<?php the_permalink(); ?>" class="btn btn-primary"><?php _e( 'Readmore', 'wntblank_theme_boot4' ); ?></a></p>
	</div><!-- .entry-summary -->

	<footer class="entry-footer text-right">
		<?php wntblank_theme_boot4_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
