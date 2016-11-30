<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package wntblank_theme_boot4
 */

?>
<?php global $post_idx;?>	
<article id="post-<?php the_ID(); ?>" class="grid animated fadeInUp"  data-id="<?php echo $post_idx;?>">
	<header class="entry-header">
	<?php the_title( '<h2 class=""><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );	?>
	</header>
	<?php 
	 	// affichage de l'image FEATURED SI STICKY!!!!!
		if ( '' != get_the_post_thumbnail()) {
		// on affiche l'image
		?><a href="<?php the_permalink(); ?>" rel="bookmark" class="">
		<?php the_post_thumbnail('medium', array('class' => 'img-fluid img-rounded thumbnailcontainer'));?>
        </a>
	<?php }else{?>
    <a href="<?php the_permalink(); ?>" rel="bookmark" class="">
	<?php echo'<img src="'.get_stylesheet_directory_uri().'/IMG/510x370_medium-md6.png" alt="" title="" class="img-fluid img-rounded">';?>
    </a> 
    <?php }?>
</article><!-- #post-## -->
