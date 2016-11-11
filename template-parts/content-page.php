<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package wntblank_theme_boot4
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title">
    <?php 
	// SI L'ID du parent est égal à l'ID de la page, je n'affiche pas LE LIEN DU PARENT
	if (($post->post_parent) !== (0)){?>
    <a href="<?php $parentLink = get_permalink($post->post_parent); echo $parentLink; ?>" title="Retour à la page principale" class="ancestor_link">
    <?php echo get_the_title ($post->post_parent)?>
    :
    </a>
    <?php } // FIN DU IF ?>
	<?php the_title(); ?>
    </h1>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wntblank_theme_boot4' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
    
    <?php
	// TESTER SI ACF est installé --------------------------------------------
	include_once( ABSPATH . 'wp-admin/includes/plugin.php' ); 
	$location = get_field('google_map');

	if ( is_plugin_active( 'advanced-custom-fields-pro/acf.php' ) &&  ( !empty($location) )) {
    	//echo "ACF est activé";
		echo "<div class='acf-map' id='map_google'>";
			get_template_part( 'template-parts/map');
		echo "</div>";
	}
	// TESTER SI ACF est installé --------------------------------------------
	?>

	<footer class="entry-footer">
		<?php
			edit_post_link(
				sprintf(
					/* translators: %s: Name of current post */
					esc_html__( 'Edit %s', 'wntblank_theme_boot4' ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				),
				'<span class="edit-link">',
				'</span>'
			);
		?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
