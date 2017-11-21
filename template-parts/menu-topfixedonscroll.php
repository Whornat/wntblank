   <div class="<?php if( get_theme_mod('topmenu_style') == '' ){echo' navbar-light ';}else{echo ''.get_theme_mod( "topmenu_style").' ' ;};if( get_theme_mod('topmenu_bg') == '' ){echo' bg-light';}else{echo ''.get_theme_mod( "topmenu_bg" ).' ' ;};?> stickyonscroll">

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
    'fallback_cb'     => 'bs4navwalker::fallback',
    'walker'          => new bs4navwalker())
);
?>
</nav><!-- .navbar -->
</div><!-- .container -->

</div><!-- .stickyonscroll -->

<script type="text/javascript">
// 1) EFFET STICKY SUR LE MENU DE LA PAGE D'ACCEUIL =========================================================
$(document).ready(function () {
var menu = $('.stickyonscroll');
var origOffsetY = menu.offset().top;
function scroll() {
    if ($(window).scrollTop() >= origOffsetY) {
				// rajout d'un controle pour ne pas fixer la nav sur les petit ecran mais ça crée une saccade
			    //if( $(window).width() > 575 ) {
        			        $('.stickyonscroll').addClass('fixed-top');
        					$('#content').addClass('paddingforfixednav');
 				//}
				// rajout d'un controle pour ne pas fixer la nav sur les petit ecran
    } else {
        $('.stickyonscroll').removeClass('fixed-top');
        $('#content').removeClass('paddingforfixednav');
    }
   }
  document.onscroll = scroll;
});
</script>
