<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package wntblanktheme
 */

$colonnage = '';
//$colonnage = get_theme_mod('archive_column');
$colonnage .= ' card';
?>

<article id="post-<?php the_ID(); ?>" <?php post_class($colonnage); ?>>

	<?php // Affichage de l'image featured ?>
	<?php if ( '' != get_the_post_thumbnail()) { ?>
		<?php echo'<a href="'.get_the_permalink().'" rel="bookmark" class="card-img-link">'; ?>
		<?php the_post_thumbnail('medium', array('class' => 'card-img-top')); ?></a>
	<?php } ?>
    <?php // Fin Affichage de l'image featured ?>
	
    <div class="card-body">
	  <header class="entry-header">
		<?php the_title( '<h3 class="card-title entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );?>
	  </header><!-- .entry-header -->  
      <div class="card-text"><?php the_excerpt();?></div>
	  <?php if ( 'post' === get_post_type() ) : ?>
			<div class="card-text entry-meta"><?php wntblanktheme_posted_on(); ?></div><!-- .entry-meta -->
	  <?php endif; ?>
	  <footer class="card-text entry-footer text-right"><?php wntblanktheme_entry_footer(); ?></footer><!-- .entry-footer -->		
		
    </div><!-- .card-body"-->
</article><!-- #post-## -->