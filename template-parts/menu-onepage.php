<div class="menu_container stickyonscroll">
      	<div class="container">

<nav class="navbar navbar-main navscroll navbar-centered">

    	<a class="navbar-brand page-scroll" href="#page" id="site-logo" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
            <?php if ( get_theme_mod( 'wntblank_logotheme' ) ) { ?>
       		<img src="<?php echo get_theme_mod( 'wntblank_logotheme' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
			<?php } else { ?>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/IMG/logo.png" alt="<?php bloginfo( 'name' ); ?>" title="<?php bloginfo( 'description' ); ?>">
			<?php } ?> 
		</a>

        <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar" aria-controls="exCollapsingNavbar">
          &#9776; Menu principal
        </button>

<div id="exCollapsingNavbar" class="collapse navbar-toggleable-xs">
<ul id="menu-home" class="nav navbar-nav">
	<li class="nav-item"><a href="#step01" class="nav-link">01</a></li>
	<li class="nav-item"><a href="#step02" class="nav-link">02</a></li>
	<li class="nav-item"><a href="#step03" class="nav-link">03</a></li>
	<li class="nav-item"><a href="#step04" class="nav-link">04</a></li>
</ul>
</div>

         
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
        			        $('.stickyonscroll').addClass('navbar-fixed-top');
        					$('#content').addClass('paddingforfixednav');
 				//}
				// rajout d'un controle pour ne pas fixer la nav sur les petit ecran
    } else {
        $('.stickyonscroll').removeClass('navbar-fixed-top');
        $('#content').removeClass('paddingforfixednav');
    }
   }
  document.onscroll = scroll;
});
</script>
<script type="text/javascript">
//jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
    $('.navscroll a').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});
</script>


    	</div><!-- .container -->
    </div><!-- .menu_container -->