  <nav class="navbar-toggleable-sm navbar navbar-light navbar-main navbar-customcolor stickyonscroll">
  <div class="container">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
    	<a class="navbar-brand brand-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" id="site-logo" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
            <?php if ( get_theme_mod( 'wntblank_logotheme' ) ) { ?>
       		<img src="<?php echo get_theme_mod( 'wntblank_logotheme' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
			<?php } else { ?>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/IMG/logo.png" alt="<?php bloginfo( 'name' ); ?>" title="<?php bloginfo( 'description' ); ?>">
			<?php } ?> 
		</a>

         <?php
 // Use the new walker
 wp_nav_menu( array(
    'menu'            => 'primary',
    'theme_location'  => 'primary',
    'container'       => 'div',
    'container_id'    => 'navbarNavDropdown',
    'container_class' => 'collapse navbar-collapse',
    'menu_id'         => false,
    'menu_class'      => 'nav navbar-nav',
    'depth'           => 2,
    'fallback_cb'     => 'bs4navwalker::fallback',
    'walker'          => new bs4navwalker())
);
?>
</div><!-- .container -->
</nav><!-- .navbar -->

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