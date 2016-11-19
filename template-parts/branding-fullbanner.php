<div class="site-branding <?php if (get_custom_header()) {echo 'withfullbanner';}?>" style="background:url('<?php header_image(); ?>')  no-repeat top center; min-height:<?php echo esc_attr( get_custom_header()->height );?>px; background-size:cover;">
<?php // esc_attr( get_custom_header()->width ); esc_attr( get_custom_header()->height ); ?>

<?php
// Pour éviter un doublon du logo, je fais un controle sur le type de menu selectionné : si il est fixed, je n'affiche pas le logo ;)
if (get_theme_mod('topmenu_type') !== 'topfixed') {?>
<div class="container">
        	<div class="col-md-3">
			<h1 class="site-title">
            <?php if ( get_theme_mod( 'wntblank_logotheme' ) ) { ?>
    		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" id="site-logo" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
       		<img src="<?php echo get_theme_mod( 'wntblank_logotheme' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
			</a>
			<?php } else { ?>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" id="site-logo" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/IMG/logo.png" alt="<?php bloginfo( 'name' ); ?>" title="<?php bloginfo( 'description' ); ?>">
			</a>
			<?php } ?>
            </h1>
</div>
<?php } ?>
</div><!-- .site-branding -->