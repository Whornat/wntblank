   <div class="<?php if( get_theme_mod('topmenu_style') == '' ){echo' navbar-light ';}else{echo ''.get_theme_mod( "topmenu_style").' ' ;};if( get_theme_mod('topmenu_bg') == '' ){echo' bg-light';}else{echo ''.get_theme_mod( "topmenu_bg" ).' ' ;};?> fixed-bottom">
   <div class="container">
    <nav class="navbar navbar-expand-sm <?php if( get_theme_mod('topmenu_style') == '' ){echo' navbar-light ';}else{echo ''.get_theme_mod( "topmenu_style").' ' ;};if( get_theme_mod('topmenu_bg') == '' ){echo' bg-light';}else{echo ''.get_theme_mod( "topmenu_bg" ).' ' ;};?> navbar-main">  

   	<?php if (get_theme_mod('topmenu_logo') == 'true') {?>

    	<a class="navbar-brand brand-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" id="site-logo-navbar" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
            <?php if ( get_theme_mod( 'wntblank_logotheme' ) ) { ?>
       		<img src="<?php echo get_theme_mod( 'wntblank_logotheme' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
			<?php } else { ?>
				<?php bloginfo( 'name' ); ?>
			<?php } ?>
		</a>

   	<?php } ?>
	  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span> <?php _e( 'Display menu', 'wntblanktheme' ); ?>
  </button>		  
	  
	  

         <?php
 // Use the new walker
 wp_nav_menu( array(
    'menu'            => 'primary',
    'theme_location'  => 'primary',
    'container'       => 'div',
    'container_id'    => 'navbarNavDropdown',
    'container_class' => 'collapse navbar-collapse '.get_theme_mod('topmenu_align').' ',
    'menu_id'         => false,
    'menu_class'      => 'navbar-nav',
    'depth'           => 2,
    'fallback_cb'		=> 'WP_Bootstrap_Navwalker::fallback',
    'walker'			=> new WP_Bootstrap_Navwalker())
);
?>

</nav><!-- .navbar -->
</div><!-- .container -->

</div><!-- .fixed-top -->
