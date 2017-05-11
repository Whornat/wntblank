<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package blank_bootstrap
 */
?>

<div id="post-<?php the_ID(); ?>" class="rsContent format-video" style="padding:0">
	<div class="col-md-12"><h3><?php the_title(); ?> <a class="btn btn-sm btn-primary" href="<?php the_permalink(); ?>">Lire la suite</a></h3>
</div>
		<?php
		$content = apply_filters( 'the_content', get_the_content() );
		$video = false;

		// Only get video from the content if a playlist isn't present.
		if ( false === strpos( $content, 'wp-playlist-script' ) ) {
			$video = get_media_embedded_in_content( $content, array( 'video', 'object', 'embed', 'iframe' ) );
		}
	
				// If not a single post, highlight the video file.
			if ( ! empty( $video ) ) :
				//foreach ( $video as $video_html ) {
					echo '<div class="entry-video">';
						// si boucle utiliser cette variable
						//echo $video_html;
						// j'affiche uniquement la 1er video
						echo $video[0];
					echo '</div>';
				//}
			endif;
	
	
	
	?>
	
	
	
	
</div>











