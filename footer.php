<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wntblanktheme
 */

?>
	</div><!-- .row-site-content -->
	</div><!-- .container -->
	</div><!-- #content -->
    
<aside id="secondary-footer" class="widget-area" role="complementary">
	<div class="container">
		<div class="row">
	<?php dynamic_sidebar( 'sidebar-footer' ); ?>
   		</div><!-- row -->
    </div><!-- .container -->
</aside><!-- #secondary -->


	<footer id="colophon" class="site-footer" role="contentinfo">
	
	 <?php 
		
if ( has_nav_menu( 'footer' ) ) {				
wp_nav_menu( array(
 	'theme_location'  => 'footer',
	'menu'            => '',
 	'container' => false,  
	'container_class' => '',
	'container_id'    => '',
	'menu_class'      => 'container menu menu_footer inlinemenu text-center',
	'menu_id'         => '',
	'echo'            => true,
	'fallback_cb'     => 'wp_page_menu',
	'before'          => '',
	'after'           => '',
	'link_before'     => '',
	'link_after'      => '',
	'depth'           => 1,
	'walker'          => ''
));
}
?> 
	
	
	
<div class="container site-info text-center">
            <?php //printf( esc_html__( 'Proudly powered by %s', 'wntblanktheme' ), 'WordPress' ); ?>
			<?php //printf( esc_html__( 'Theme: %1$s by %2$s.', 'wntblanktheme' ), 'wntblanktheme', '<a href="http://pagedemarque.com/" rel="designer">Pagedemarque</a>' ); ?>
			<?php 
			$infostheme = wp_get_theme();
			$nomdusite = get_bloginfo( 'name' );
			$descriptiondusite = get_bloginfo( 'description' );
			$site_url = network_site_url( '/' );
			?>
            
            <p class="credits"><span class="author_credit"><?php _e( 'Design by', 'wntblanktheme' ); ?> <a href="<?php echo $infostheme->get( 'AuthorURI' ); ?>" target="blank" class="author_site"><?php echo $infostheme->get( 'Author' ); ?></a></span> <span class="for_credit"><?php _e( 'for', 'wntblanktheme'); ?></span> <a href="<?php echo $site_url; ?>" class="client_site" title="<?php echo $descriptiondusite; ?>"><?php echo $nomdusite; ?></a> <span class="pipe">|</span> <a href="<?php echo get_permalink( get_page_by_title( 'Politique de confidentialité' ) ); ?>" class="privacypolicy"><?php _e( 'Privacy Policy', 'wntblanktheme' ); ?></a> <span class="pipe">|</span> <a href="<?php echo get_permalink( get_page_by_title( 'Mentions légales' ) ); ?>" class="mentionslegales"><?php _e( 'Legal Notice', 'wntblanktheme' ); ?></a> <span class="pipe">|</span> <a href="<?php echo get_permalink( get_page_by_title( 'Plan du site' ) ); ?>" class="plandusite" title="plan du site"><?php _e( 'Sitemap', 'wntblanktheme' ); ?></a></p>		
        </div><!-- .site-info -->
	</footer><!-- #colophon -->

</div><!-- #page -->
<script type="text/javascript">
//jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
    $('.navscroll a, a.scrollinglink').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});
</script>
<?php wp_footer(); ?>
</body>
</html>