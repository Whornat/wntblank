  <nav class="navbar-toggleable-sm navbar navbar-light navbar-main navbar-customcolor stickyonscroll-secondary">
  <div class="container">

  
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#exCollapsingNavbarsecondary" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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

<div id="exCollapsingNavbarsecondary" class="collapse navbar-collapse navscroll">
    <ul class="navbar-nav" id="scrollingnav">
  <li class="nav-item"><a class="nav-link" href="#step1">1</a></li>
  <li class="nav-item"><a class="nav-link" href="#step2">2</a></li>
  <li class="nav-item"><a class="nav-link" href="#step3">3</a></li>
  <li class="nav-item"><a class="nav-link" href="#step4">4</a></li>
  	</ul>
</div>  


</div><!-- .container -->
</nav><!-- .navbar -->

<script type="text/javascript">
// 1) EFFET STICKY SUR LE MENU DE LA PAGE D'ACCEUIL =========================================================
$(document).ready(function () {
var menu = $('.stickyonscroll-secondary');
var origOffsetY = menu.offset().top;
function scroll() {
    if ($(window).scrollTop() >= origOffsetY) {
				// rajout d'un controle pour ne pas fixer la nav sur les petit ecran mais ça crée une saccade
			    //if( $(window).width() > 575 ) {
        			        $('.stickyonscroll-secondary').addClass('fixed-top');
        					$('#content').addClass('paddingforfixednav');
 				//}
				// rajout d'un controle pour ne pas fixer la nav sur les petit ecran
    } else {
        $('.stickyonscroll-secondary').removeClass('fixed-top');
        $('#content').removeClass('paddingforfixednav');
    }
   }
  document.onscroll = scroll;
});



</script>