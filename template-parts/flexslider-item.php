<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package blank_bootstrap
 */
?>

<li id="post-<?php the_ID(); ?>" class="item_flexslider">
<p class="flex-caption"><?php the_title(); ?></p>
<a href="<?php the_permalink(); ?>" rel="bookmark">
     <?php 
	 	// affichage de l'image FEATURED
		if ( '' != get_the_post_thumbnail() ) {
		// on affiche l'image
    	the_post_thumbnail('medium', array('class' => 'img-fluid'));
		} else {
    	// some code
		echo'<img src="'.get_stylesheet_directory_uri().'/IMG/510x370_medium-md6.png" alt="" title="" class="img-fluid">';
		}
	  ?>  
</a>   					
</li> 