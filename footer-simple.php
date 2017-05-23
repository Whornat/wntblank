<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wntblank_theme_boot4
 */
?>
<div class="container text-center" id="simplefooter">
			<?php
			$infostheme = wp_get_theme();
			$nomdusite = get_bloginfo( 'name' );
			$descriptiondusite = get_bloginfo( 'description' );
			$site_url = network_site_url( '/' );
			?>

<p class="credits">Une Conception <a href="<?php echo $infostheme->get( 'AuthorURI' ); ?>" target="blank" class="author_site"><?php echo $infostheme->get( 'Author' ); ?></a> pour <a href="<?php echo $site_url; ?>" class="client_site" title="<?php echo $descriptiondusite; ?>"><?php echo $nomdusite; ?></a> <span class="pipe">|</span> <a href="<?php echo get_permalink( get_page_by_title( 'Mentions légales' ) ); ?>" class="mentionslegales">mentions légales</a> <span class="pipe">|</span> <a href="<?php echo get_permalink( get_page_by_title( 'Plan du site' ) ); ?>" class="plandusite" title="plan du site">Plan du site</a></p>
</div>

<?php wp_footer(); ?>
</body>
</html>
