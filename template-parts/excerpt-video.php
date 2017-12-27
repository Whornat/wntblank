<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package wntblanktheme
 */

?>
<?php 
$colonnage = 'col-12';
$colonnage = get_theme_mod('archive_column');
?>

<article id="post-<?php the_ID(); ?>" <?php post_class($colonnage); ?>>
	<header class="entry-header">
		<?php
		the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php wntblanktheme_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-excerpt">

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
	</div><!-- .entry-content -->

	<footer class="entry-footer text-right">
		<?php wntblanktheme_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
