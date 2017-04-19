   <div class="navbar-customcolor fixed-top">
   <div class="container">
   <nav class="navbar-toggleable-sm navbar navbar-light navbar-main ">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
   	
   	<?php if (get_theme_mod('topmenu_logo') == 'true') {?>
   	
    	<a class="navbar-brand brand-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" id="site-logo" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
            <?php if ( get_theme_mod( 'wntblank_logotheme' ) ) { ?>
       		<img src="<?php echo get_theme_mod( 'wntblank_logotheme' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
			<?php } else { ?>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/IMG/logo.png" alt="<?php bloginfo( 'name' ); ?>" title="<?php bloginfo( 'description' ); ?>">
			<?php } ?> 
		</a>
         
   	<?php } ?>

         <?php
 // Use the new walker
 wp_nav_menu( array(
    'menu'            => 'primary',
    'theme_location'  => 'primary',
    'container'       => 'div',
    'container_id'    => 'navbarNavDropdown',
    'container_class' => 'collapse navbar-collapse '.get_theme_mod('topmenu_align').' ',
    'menu_id'         => false,
    'menu_class'      => 'nav navbar-nav',
    'depth'           => 2,
    'fallback_cb'     => 'bs4navwalker::fallback',
    'walker'          => new bs4navwalker())
);
?>

</nav><!-- .navbar -->
</div><!-- .container -->

</div><!-- .fixed-top -->