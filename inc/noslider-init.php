<?php

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
	//print_r ($images);
	
	
	
// Assuming we found some images, display them.
if($images) { 
		foreach($images as $image) {
			$array_id_image[] = $image->ID;
		}
// si il n'y a pas d'image alors on affcihe le featured
}else {
	//the_post_thumbnail($parametre, 'medium', array('class' => 'img-fluid'));
}
// et voila c'est fini ;)

//print_r ($array_id_image);
$array_id_chaine =  implode(",",$array_id_image);
$shortcodegallery = '[gallery columns="4" link="file" size="large" ids="'.$array_id_chaine.'"]';	
	
echo do_shortcode($shortcodegallery); 	

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