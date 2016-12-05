<?php
//------------------------INSERTION DES SCRIPTS NECESSAIRES scrollmagic-------------------------

function wntblank_scrollmagic_scripts() {
	
		if (is_page_template ('template-pages/scollmagic-4.php')) {
	
wp_enqueue_style('wntblank_theme_boot4-scrollmagic_style', get_template_directory_uri() . '/scrollmagic/demo3/css/styles.css');
// pour demo 3
//wp_enqueue_script( 'wntblank_theme_boot4-scrollmagic_scrollmagic-modernizr_script', get_template_directory_uri() . '/scrollmagic/demo3/vendor/modernizr-2.8.3-respond-1.4.2.min.js','','',false );
// version ci-dessous + light!!!
wp_enqueue_script( 'wntblank_theme_boot4-scrollmagic_scrollmagic-modernizr_script', get_template_directory_uri() . '/scrollmagic/demo3/modernizr.custom.min.js','','',false );

wp_enqueue_script( 'wntblank_theme_boot4-scrollmagic_scrollmagic-tweenmax_script', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.2/TweenMax.min.js','','',true );
wp_enqueue_script( 'wntblank_theme_boot4-scrollmagic_scrollmagic_script', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js','','',true );
wp_enqueue_script( 'wntblank_theme_boot4-scrollmagic_scrollmagic-gsap_script', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.js','','',true );
wp_enqueue_script( 'wntblank_theme_boot4-scrollmagic_scrollmagic-ScrollToPlugin_script', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.2/plugins/ScrollToPlugin.min.js','','',true );
wp_enqueue_script( 'wntblank_theme_boot4-scrollmagic_scrollmagic-addIndicators_script', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js','','',true );

// pour demo 3
wp_enqueue_script( 'wntblank_theme_boot4-scrollmagic_scrollmagic-demo3_script', get_template_directory_uri() . '/scrollmagic/demo3/main.js','','',true );
}

	}// fin si scroll magic


		add_action( 'wp_enqueue_scripts', 'wntblank_scrollmagic_scripts' );

//------------------------scrollmagic-------------------------
