<div class="menu_container_secondary stickyonscroll-secondary">
      	<div class="container">

<nav class="nav navbar-nav navscroll navbar-centered">
    	<button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbarsecondary" aria-controls="exCollapsingNavbarsecondary" style="width:auto">
          &#9776; Etapes du slide
        </button>
        
    <div id="exCollapsingNavbarsecondary" class="navbar-toggleable-xs collapse" aria-expanded="false" style="">
    <ul id="menu_imagine" class="nav navbar-nav">
  <li class="nav-item"><a class="nav-link" href="#step01">1</a></li>
  <li class="nav-item"><a class="nav-link" href="#step02">2</a></li>
  <li class="nav-item"><a class="nav-link" href="#step03">3</a></li>
  <li class="nav-item"><a class="nav-link" href="#step04">4</a></li>
  	</ul>
</div>    
         
</nav><!-- .navbar -->
<script type="text/javascript">
// 1) EFFET STICKY SUR LE MENU DE LA PAGE D'ACCEUIL =========================================================
$(document).ready(function () {
var menusecondary = $('.stickyonscroll-secondary');
var origOffsetY = menusecondary.offset().top;
function scroll() {
    if ($(window).scrollTop() >= origOffsetY) {
        			        $('.stickyonscroll-secondary').addClass('navbar-fixed-top');
        					//$('#content').addClass('paddingforfixednav');
    } else {
        $('.stickyonscroll-secondary').removeClass('navbar-fixed-top');
        //$('#content').removeClass('paddingforfixednav');
    }
   }
  document.onscroll = scroll;
});
</script>
    	</div><!-- .container -->
    </div><!-- .menu_container -->