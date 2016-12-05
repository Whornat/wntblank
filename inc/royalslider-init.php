<?php

//------------------------INSERTION DES SCRIPTS NECESSAIRES flexslider-------------------------

function wntblank_royalslider_scripts() {
wp_enqueue_style('new-royalslider-core-css', get_template_directory_uri() . '/royalslider/royalslider.css');
wp_enqueue_style('rsDefaultInv-css', get_template_directory_uri() . '/royalslider/skins/default-inverted/rs-default-inverted.css');
wp_enqueue_script( 'wntblank_theme_boot4-royalslider_script', get_template_directory_uri() . '/royalslider/jquery.royalslider.min.js','','',true );
}
add_action( 'wp_enqueue_scripts', 'wntblank_royalslider_scripts' );
//------------------------flexslider-------------------------



/**
 * ====================================================
 * GALERY AVEC IMAGE ATTACHEE
 * ==================================================== 
 * 
 */

function wnt_image_gallery($parametre) { 
	$limitImages = 8; // How many images in total to show after the post?
	$perRow = 4; // How many images should be in each row?
 
	$featuredID = get_post_thumbnail_id($parametre);
 
	// Build our query to return the images attached to this post.
	// We query one image more than we intend to show to see if there extra images that won't fit into the gallery here.
    $args = array(
        'post_type' => 'attachment',
        'post_mime_type' => 'image',
        'numberposts' => $limitImages + 1,
        'orderby' => 'menu_order',
        'order' => 'ASC',
        'post_parent' => $parametre
		//ligne ci-dessous permet d'exclure le visuel de miniature
        //'exclude' => $featuredID
    );
 
    $images = get_posts($args);
// Assuming we found some images, display them.
if($images) { ?>
 
<div id="slider_single">
<div class="slidersingle royalSlider rsDefaultInv" style="width:100%;">
    	<?php
    	// We'll use the $count here to keep track of what image we're on.
    	$count = 1;
    	// Print each individual image.
        foreach($images as $image) { 
        	// Only show the image if it is within our limit.
        	if($count <= $limitImages) : ?>
            
   
            
            
            
	        <div class="rsContent <?php if($count % $perRow == 0) { echo 'lastimage'; }?>">
            
	            	<?php $arrayimage =wp_get_attachment_image_src($image->ID, 'large'); ?>
                    <?php $alt = get_post_meta($image->ID, '_wp_attachment_image_alt', true);?>
                    
	            	<?php //print_r($arrayimage); ?>
					<?php echo'<img src="'.$arrayimage[0].'" alt="'.$alt.'" title="" class="rsImg">';?>
					<?php if($alt!=='') {
						echo'<div class="rsCaption">'.$alt.'</div>';
					}?>
                    <?php // AFFICHAGE DE LA LEGENDE MARCHE  ------------------------------------------------?>
	        </div><!-- .rsContent -->
	         <?php  endif; $count++; }  ?>
    </div><!-- sliderprojet -->
    
	<?php 
	// Did we have more images than our limit? Then create a "More" link.
	// This link goes directly to the first image.
	if( count($images) > $limitImages) : ?>
	<p class="photo-more">
		<a href="<?php echo get_permalink($images[0]->ID); ?>">View More Images &raquo;</a>
	</p>
	<?php endif; ?>
</div><!-- #slider_single -->


<script id="" type="text/javascript">
jQuery(document).ready(function($) {
	$('.slidersingle').royalSlider({
		autoPlay:{enabled:!0}
		});
});
</script> 
 
<?php 
// si il n'y a pas d'image alors on affcihe le featured
}else {
the_post_thumbnail($parametre, 'medium', array('class' => 'img-fluid'));

}
// et voila c'est fini ;)




}



/**
 * ====================================================
 * GALERY add rel 
 * ==================================================== 
 * 
 */

// XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX GALERY add rel XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
add_filter('wp_get_attachment_link', 'rc_add_rel_attribute');
function rc_add_rel_attribute($link) {
global $post;
$thePostID = $post->ID;
return str_replace('<a href', '<a data-fancybox-group="groupe_'.$thePostID.'" href', $link);
}
// XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX enleve le style en ligne pourris XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
add_filter( 'use_default_gallery_style', '__return_false' );