<div class="menu_container menu_standard">
      	<div class="container">

<nav class="navbar navbar-main">
        <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar" aria-controls="exCollapsingNavbar">
          &#9776; Menu principal
        </button>

         <?php
 // Use the new walker
 wp_nav_menu( array(
    'menu'            => 'primary',
    'theme_location'  => 'primary',
    'container'       => 'div',
    'container_id'    => 'exCollapsingNavbar',
    'container_class' => 'collapse navbar-toggleable-xs',
    'menu_id'         => false,
    'menu_class'      => 'nav navbar-nav',
    'depth'           => 2,
    'fallback_cb'     => 'bs4navwalker::fallback',
    'walker'          => new bs4navwalker())
);
?>
</nav><!-- .navbar -->

    	</div><!-- .container -->
    </div><!-- .menu_container -->