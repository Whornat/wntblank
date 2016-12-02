<?php

//------------------------INSERTION DES SCRIPTS NECESSAIRES flexslider-------------------------

function wntblank_flexslider_scripts() {
wp_enqueue_style('wntblank_theme_boot4-flexslider', get_template_directory_uri() . '/CSS/flexslider.css');
wp_enqueue_script( 'wntblank_theme_boot4-flexslider_script', get_template_directory_uri() . '/JS/flexslider/jquery.flexslider-min.js','','',true );
}
add_action( 'wp_enqueue_scripts', 'wntblank_flexslider_scripts' );
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
if($images) : ?>
 
<div class="slider project-slider">
    <div id="slider" class="flexslider">
    <ul class="slides">
    	<?php
    	// We'll use the $count here to keep track of what image we're on.
    	$count = 1;
    	// Print each individual image.
        foreach($images as $image) { 
        	// Only show the image if it is within our limit.
        	if($count <= $limitImages) : ?>
	        <li<?php 
	        	// Each end image in a row gets the "lastimage" class added. 
	        	if($count % $perRow == 0) { echo ' class="lastimage"'; } ?>>
	            	<?php echo wp_get_attachment_image($image->ID, 'medium'); ?>
                 	<?php // ----------TESTTTT -------------------------------------- ?>
                    <?php //echo $image->ID ?>
                    <?php //print_r(wp_get_attachment_metadata( $image->ID, true)); ?>
                 	<?php // ----------TESTTTT -------------------------------------- ?>
                    <?php // AFFICHAGE DE LA LEGENDE MARCHE PAS !!!!!!!!!! ------------------------------------------------
                    $alt = get_post_meta($image->ID, '_wp_attachment_image_alt', true);
					//if(count($alt)) echo '<p class="caption">'.$alt.'</p>';
					if(($alt)!='') echo '<p class="flex-caption">'.$alt.'</p>';
					?>
                    <?php // AFFICHAGE DE LA LEGENDE MARCHE  ------------------------------------------------
		//echo "image id:";
		//echo $image->ID;
		//echo "image caption:";
		if(($image->post_excerpt)!='') echo '<p class="flex-caption">'.$image->post_excerpt.'</p>';
		//echo "image description:";
		//echo $image->post_content;
		?>
	        </li>
	         <?php  endif; $count++; }  ?>
	</ul>
    </div>
    
	<?php 
	// Did we have more images than our limit? Then create a "More" link.
	// This link goes directly to the first image.
	if( count($images) > $limitImages) : ?>
	<p class="photo-more">
		<a href="<?php echo get_permalink($images[0]->ID); ?>">View More Images &raquo;</a>
	</p>
	<?php endif; ?>
</div><!-- end #slider .flexslider -->

<script type="application/javascript">
// Le script d'initialisation
// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide"
  });
});
</script>

 
<?php endif;
// SI AUCUNE IMAGES
	if( count($images) == 0) : ?>
			 <?php echo get_the_post_thumbnail($parametre, 'medium', array('class' => '')); ?>
	<?php endif;
//---------------
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