<div class="site-branding container">
        <div class="row justify-content-center">
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
        	<div class="col-md-9">
            <?php $description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<h2 class="site-sloggan"><?php echo $description; /* WPCS: xss ok. */ ?></h2>
			<?php
			endif; ?>
			</div>            
	</div><!-- .row -->
</div><!-- .site-branding -->