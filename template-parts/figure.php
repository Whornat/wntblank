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
<figure id="post-<?php the_ID(); ?>" class="animated fadeInUp"  data-id="<?php echo $post_idx;?>">
	<figcaption><?php the_title( '<h2 class="text-center"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );	?></figcaption>
	<?php 
	 	// affichage de l'image FEATURED SI STICKY!!!!!
		if ( '' != get_the_post_thumbnail()) {
		// on affiche l'image
		?><a href="<?php the_permalink(); ?>" rel="bookmark" class="">
		<?php the_post_thumbnail('medium', array('class' => 'img-rounded thumbnailcontainer'));?>
        </a>
	<?php }else{?>
    <a href="<?php the_permalink(); ?>" rel="bookmark" class="">
	<?php echo'<img src="'.get_stylesheet_directory_uri().'/IMG/510x370_medium-md6.png" alt="" title="" class="img-rounded">';?>
    </a> 
    <?php }?>
</figure><!-- #post-## -->
