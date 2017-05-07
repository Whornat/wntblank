<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package blank_bootstrap
 */
?>
<div id="post-<?php the_ID(); ?>" class="rsContent">
<a href="<?php the_permalink(); ?>" rel="bookmark" style="display:block; width:100%; height:100%">
     <?php 
	 	// affichage de l'image FEATURED
		if ( '' != get_the_post_thumbnail() ) {
		// on affiche l'image
    	the_post_thumbnail('medium', array('class' => 'img-fluid rsImg'));
		} else {
    	// some code
		echo'<img src="'.get_stylesheet_directory_uri().'/IMG/510x370_medium-md6.png" alt="" title="" class="rsImg img-fluid">';
		}
	  ?>  
</a>  
<figure class="rsCaption"><?php the_title(); ?></figure>

</div> 