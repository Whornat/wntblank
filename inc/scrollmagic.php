<?php
//------------------------INSERTION DES SCRIPTS NECESSAIRES scrollmagic-------------------------

function wntblank_scrollmagic_scripts() {
	
		if (is_page_template (array('template-pages/scrollmagic.php','template-pages/scrollmagic-custom.php'))) {
	

//wp_enqueue_script( 'wntblank_theme_boot4-scrollmagic_scrollmagic-tweenmax_script', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.2/TweenMax.min.js','','',false );
wp_enqueue_script( 'wntblank_theme_boot4-scrollmagic_scrollmagic-tweenmax_script', get_template_directory_uri() . '/scrollmagic/lib/greensock/TweenMax.min.js','','',true );			
			
//wp_enqueue_script( 'wntblank_theme_boot4-scrollmagic_scrollmagic_script', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js','','',false );
wp_enqueue_script( 'wntblank_theme_boot4-scrollmagic_scrollmagic_script', get_template_directory_uri() . '/scrollmagic/minified/ScrollMagic.min.js','','',true );
			
//wp_enqueue_script( 'wntblank_theme_boot4-scrollmagic_scrollmagic-gsap_script', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.js','','',false );
wp_enqueue_script( 'wntblank_theme_boot4-scrollmagic_scrollmagic-gsap_script', get_template_directory_uri() . '/scrollmagic/minified/plugins/animation.gsap.min.js','','',true );

//wp_enqueue_script( 'wntblank_theme_boot4-scrollmagic_scrollmagic-gsap_script', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.js','','',false );
wp_enqueue_script( 'wntblank_theme_boot4-scrollmagic_imagesloaded_script', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/3.2.0/imagesloaded.pkgd.min.js','','',true );
			
// POUR LE SCROLLING vers les ancres : supprimmé et remplacer par un script en pied de page 			
wp_enqueue_script( 'wntblank_theme_boot4-scrollmagic_scrollmagic-ScrollToPlugin_script', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.2/plugins/ScrollToPlugin.min.js','','',true );
			
//wp_enqueue_script( 'wntblank_theme_boot4-scrollmagic_scrollmagic-addIndicators_script', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js','','',false );
wp_enqueue_script( 'wntblank_theme_boot4-scrollmagic_scrollmagic-addIndicators_script', get_template_directory_uri() . '/scrollmagic/minified/plugins/debug.addIndicators.min.js','','',true );
			
		
			if (is_page_template ('template-pages/scrollmagic.php')) {
wp_enqueue_style('wntblank_theme_boot4-scrollmagic_scrollmagic-style', get_template_directory_uri() . '/CSS/scrollmagic.css');
wp_enqueue_script( 'wntblank_theme_boot4-scrollmagic_scrollmagic-initialisation_script', get_template_directory_uri() . '/JS/scrollmagic-init.js','','',true );
			}	
			
			if (is_page_template ('template-pages/scrollmagic-custom.php')) {
wp_enqueue_style('wntblank_theme_boot4-scrollmagic_scrollmagic-custom-style', get_stylesheet_directory_uri() . '/CSS/scrollmagic-custom.css');
wp_enqueue_script( 'wntblank_theme_boot4-scrollmagic_scrollmagic-demo6_script', get_stylesheet_directory_uri() . '/JS/scrollmagic-init-custom.js','','',true );
			}			
			
			
}

	}// fin si scroll magic


		add_action( 'wp_enqueue_scripts', 'wntblank_scrollmagic_scripts' );

//------------------------scrollmagic-------------------------
