<div class="navbar-customcolor menu_standard">
      	<div class="container">
  <nav class="navbar-toggleable-sm navbar navbar-light navbar-main">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand hidden-md-up" href="#">Menu principal</a>
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
</nav><!-- .navbar -->

    	</div><!-- .container -->
    </div><!-- .menu_container -->