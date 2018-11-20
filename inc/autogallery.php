<? 
/**
 * ====================================================
 * GALERY AVEC IMAGE ATTACHEE
 * ==================================================== 
 * 
 */

function wnt_autogallery($post_parent, $col) { 
	$limitImages = 8; // How many images in total to show after the post?
	$perRow = 4; // How many images should be in each row?
	$featuredID = get_post_thumbnail_id($post_parent);
 
	// Build our query to return the images attached to this post.
	// We query one image more than we intend to show to see if there extra images that won't fit into the gallery here.
    $args = array(
        'post_type' => 'attachment',
        'post_mime_type' => 'image',
        'numberposts' => $limitImages + 1,
        'orderby' => 'menu_order',
        'order' => 'ASC',
        'post_parent' => $post_parent
		//ligne ci-dessous permet d'exclure le visuel de miniature
        //'exclude' => $featuredID
    );
 
    $images = get_posts($args);
// Assuming we found some images, display them.
if($images) : ?>
 
<div class="auto_gallery">
    <div class="row">
    	<?php
    	// We'll use the $count here to keep track of what image we're on.
    	$count = 1;
    	// Print each individual image.
        foreach($images as $image) { 
        	// Only show the image if it is within our limit.
        	if($count <= $limitImages) : ?>
	        <div class="<?php echo $col;?> <?php 
	        	// Each end image in a row gets the "lastimage" class added. 
	        	if($count % $perRow == 0) { echo 'lastimage'; } ?>">
<figure>
<?php 
	  //print_r($image);	
	  $alt = get_post_meta($image->ID, '_wp_attachment_image_alt', true);
	  $url = wp_get_attachment_url( $image->ID );?>	
<a href="<?php echo $url ?>" class="fancybox" data-fancybox="group" data-caption="<?php echo $image->post_title;?>">
<?php echo wp_get_attachment_image($image->ID, 'thumbnail', "", array( "class" => "img-fluid", "alt" => $alt ) ); ?>
</a>		
<?php //if(($alt)!='') echo '<figcaption>'.$alt.'</figcaption>';?>
</figure>

        <?php // AFFICHAGE DE LA LEGENDE MARCHE  ------------------------------------------------
		//echo "image id:";
		//echo $image->ID;
		//echo "image caption:";
		if(($image->post_excerpt)!='') echo '<p class="flex-caption">'.$image->post_excerpt.'</p>';
		//echo "image description:";
		//echo $image->post_content;
		?>
	        </div><!-- .col -->
	         <?php  endif; $count++; }  ?>
    </div><!-- .row -->
    
	<?php 
	// Did we have more images than our limit? Then create a "More" link.
	// This link goes directly to the first image.
	if( count($images) > $limitImages) : ?>
	<p class="photo-more">
		<a href="<?php echo get_permalink($images[0]->ID); ?>">View More Images &raquo;</a>
	</p>
	<?php endif; ?>
</div><!-- .row -->


 
<?php endif;
// SI AUCUNE IMAGES
	if( count($images) == 0) : ?>
			 <?php echo get_the_post_thumbnail($post_parent, 'medium', array('class' => 'img-fluid')); ?>
	<?php endif;
//---------------
}
?>