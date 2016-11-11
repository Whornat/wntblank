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
	            	<?php echo wp_get_attachment_image($image->ID, 'thumb_large'); ?>
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
 
<?php endif;
// SI AUCUNE IMAGES
	if( count($images) == 0) : ?>
			 <?php echo get_the_post_thumbnail($parametre, 'thumb_large', array('class' => '')); ?>
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
	
/**
 * ====================================================
 * ajouter term to body class
 * ==================================================== 
 * 
 */	
	
function wpprogrammer_custom_taxonomy_in_body_class( $classes ){
  if( is_singular() )
  {
    $custom_terms = get_the_terms(0, 'tag-projet');
    if ($custom_terms) {
      foreach ($custom_terms as $custom_term) {
        //$classes[] = 'custom_tax_' . $custom_term->slug;
        $classes[] = $custom_term->slug;
      }
    }
  }
  return $classes;
}

// désactivé !!!!!
//add_filter( 'body_class', 'wpprogrammer_custom_taxonomy_in_body_class' );


/**
 * ====================================================
 * Affichage commentaires modifié pour "AVIS CLIENTS"
 * ==================================================== 
 * 
 */	

function avisclient($comment, $args, $depth) {
   $GLOBALS['comment'] = $comment; ?>
   <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
     <div id="comment-<?php comment_ID(); ?>">
     
           <?php comment_text() ?>

     
     
      <div class="comment-author vcard">
         <?php //printf(__('<span class="says">Par:</span> <cite class="fn">%s</cite>'), get_comment_author_link()) ?>
         <?php echo '<span class="par">Par </span> <cite class="fn">'.get_comment_author_link().'</cite>,' ?>
         <?php echo '<span class="le">rédigé le :</span> '.get_comment_date().'' ?>
         <?php //printf(__('%1$s'), get_comment_date()) ?>
         <?php echo get_avatar($comment,$size='48',$default='<path_to_url>' ); ?>
         
      </div>
      <?php if ($comment->comment_approved == '0') : ?>
         <em><?php _e('Your comment is awaiting moderation.') ?></em>
         <br />
      <?php endif; ?>

      <div class="comment-meta commentmetadata"><?php edit_comment_link(__('(Edit)'),'  ','') ?></div>


      <div class="reply">
         <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
      </div>
     </div>
<?php
}

/**
 * ====================================================
 * sticky-posts-custom-post-types
 http://www.geekpress.fr/wordpress/astuce/sticky-posts-custom-post-types-1967/
 * ==================================================== 
 * 
 */	

    add_action( 'admin_footer-post.php', 'gkp_add_sticky_post_support' );
    add_action( 'admin_footer-post-new.php', 'gkp_add_sticky_post_support' );
    function gkp_add_sticky_post_support() 
    { global $post, $typenow; ?>
    	
    	<?php if ( $typenow == ('portfolio' || 'art') && current_user_can( 'edit_others_posts' ) ) : ?>
    	<script>
    	jQuery(function($) {
    		var sticky = "<br/><span id='sticky-span'><input id='sticky' name='sticky' type='checkbox' value='sticky' <?php checked( is_sticky( $post->ID ) ); ?> /> <label for='sticky' class='selectit'><?php _e( "Stick this post to the front page" ); ?></label><br /></span>";	
    		$('[for=visibility-radio-public]').append(sticky);	
    	});
    	</script>
    	<?php endif; ?>
    	
    <?php
    }