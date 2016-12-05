<?php
//------------------------INSERTION DES SCRIPTS NECESSAIRES scrollmagic-------------------------

function wntblank_scrollmagic_scripts() {
//wp_enqueue_style('wntblank_theme_boot4-scrollmagic_style', get_template_directory_uri() . '/scrollmagic/examples.css');

// pour demo 3
wp_enqueue_script( 'wntblank_theme_boot4-scrollmagic_scrollmagic-modernizr_script', get_template_directory_uri() . '/scrollmagic/demo3/vendor/modernizr-2.8.3-respond-1.4.2.min.js','','',true );

wp_enqueue_script( 'wntblank_theme_boot4-scrollmagic_scrollmagic-tweenmax_script', get_template_directory_uri() . '/scrollmagic/lib/greensock/TweenMax.min.js','','',false );
wp_enqueue_script( 'wntblank_theme_boot4-scrollmagic_scrollmagic_script', get_template_directory_uri() . '/scrollmagic/minified/ScrollMagic.min.js','','',false );
wp_enqueue_script( 'wntblank_theme_boot4-scrollmagic_scrollmagic-gsap_script', get_template_directory_uri() . '/scrollmagic/minified/plugins/animation.gsap.min.js','','',false );
wp_enqueue_script( 'wntblank_theme_boot4-scrollmagic_scrollmagic-ScrollMagic_script', get_template_directory_uri() . '/scrollmagic/minified/plugins/jquery.ScrollMagic.min.js','','',false );
//wp_enqueue_script( 'wntblank_theme_boot4-scrollmagic_scrollmagic-velocity_script', get_template_directory_uri() . '/scrollmagic/minified/plugins/animation.velocity.min.js','','',false );
wp_enqueue_script( 'wntblank_theme_boot4-scrollmagic_scrollmagic-pluginsdebug_script', get_template_directory_uri() . '/scrollmagic/minified/plugins/debug.addIndicators.min.js','','',false );

// pour demo 3
wp_enqueue_script( 'wntblank_theme_boot4-scrollmagic_scrollmagic-demo3_script', get_template_directory_uri() . '/scrollmagic/demo3/main.js','','',false );




}

add_action( 'wp_enqueue_scripts', 'wntblank_scrollmagic_scripts' );

//------------------------scrollmagic-------------------------

//-------------- MON FILTRE POUR LES ATTRIBUT DU BODY-------------------------------
/* j'ajoute les attributs complémentaire à ma balise body ligne 226 de function.php*/

	// On test si il s'agit de la page du template custom -----------------------
	if (is_page_template ('template-pages/scrollmagic.php')) {
	}
	// --------------------------------------------------------------------------