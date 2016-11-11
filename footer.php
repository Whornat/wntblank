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
	
	</div><!-- .container -->
	</div><!-- #content -->
    
<aside id="secondary-footer" class="widget-area" role="complementary">
	<div class="container">
	<?php dynamic_sidebar( 'sidebar-footer' ); ?>
    </div><!-- .container -->
</aside><!-- #secondary -->



 <?php 
wp_nav_menu( array(
 	'theme_location'  => 'footer',
	'menu'            => '',
 	'container' => false,  
	'container_class' => '',
	'container_id'    => '',
	'menu_class'      => 'menu menu_footer inlinemenu text-center',
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
?> 
	<footer id="colophon" class="site-footer" role="contentinfo">
<div class="site-info container text-center">
            <?php //printf( esc_html__( 'Proudly powered by %s', 'wntblank_theme_boot4' ), 'WordPress' ); ?>
			<?php //printf( esc_html__( 'Theme: %1$s by %2$s.', 'wntblank_theme_boot4' ), 'wntblank_theme_boot4', '<a href="http://pagedemarque.com/" rel="designer">Pagedemarque</a>' ); ?></p>
			<p>Une Conception <a href="http://pagedemarque.com/" target="blank">Page de Marque</a> - <a href="<?php echo get_permalink( get_page_by_title( 'Mentions légales' ) ); ?>">mentions légales</a></p>		
        </div><!-- .site-info -->
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>
    
<?php // SI PAGE d'ACCUEIL ----------------------
if ((is_home())|| is_singular(array('post','xxx','xxx')) || (is_page_template( 'template-pages/homepage.php' ))){ ?>
   <script type="text/javascript">
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
	slideshowSpeed: 5000, //Integer: Set the speed of the slideshow cycling, in milliseconds
	animationSpeed: 2000, //Integer: Set the speed of animations, in milliseconds
  });
});
  </script>
<?php } // FIN SI PAGE d'ACCUEIL ---------------------- ?>
</body>
</html>