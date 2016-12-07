<?php
//------------------------INSERTION DES SCRIPTS NECESSAIRES scrollmagic-------------------------

function wntblank_scrollmagic_scripts() {
	
			if (is_page_template ('template-pages/scrollmagic-4.php')) {
	wp_enqueue_style('wntblank_theme_boot4-scrollmagic_style', get_template_directory_uri() . '/scrollmagic/demo3/css/styles.css');
				// Initialisation de la demo 03
				wp_enqueue_script( 'wntblank_theme_boot4-scrollmagic_scrollmagic-demo3_script', get_template_directory_uri() . '/scrollmagic/demo3/main.js','','',false );
				
				
			}
	
	
		if (is_page_template (array('template-pages/scrollmagic.php','template-pages/scrollmagic-4.php', 'template-pages/scrollmagic-3.php', 'template-pages/scrollmagic-2.php', 'template-pages/scrollmagic-1.php'))) {
	

//wp_enqueue_script( 'wntblank_theme_boot4-scrollmagic_scrollmagic-tweenmax_script', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.2/TweenMax.min.js','','',false );
wp_enqueue_script( 'wntblank_theme_boot4-scrollmagic_scrollmagic-tweenmax_script', get_template_directory_uri() . '/scrollmagic/lib/greensock/TweenMax.min.js','','',false );			
			
//wp_enqueue_script( 'wntblank_theme_boot4-scrollmagic_scrollmagic_script', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js','','',false );
wp_enqueue_script( 'wntblank_theme_boot4-scrollmagic_scrollmagic_script', get_template_directory_uri() . '/scrollmagic/minified/ScrollMagic.min.js','','',false );
			
//wp_enqueue_script( 'wntblank_theme_boot4-scrollmagic_scrollmagic-gsap_script', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.js','','',false );
wp_enqueue_script( 'wntblank_theme_boot4-scrollmagic_scrollmagic-gsap_script', get_template_directory_uri() . '/scrollmagic/minified/plugins/animation.gsap.min.js','','',false );

//wp_enqueue_script( 'wntblank_theme_boot4-scrollmagic_scrollmagic-gsap_script', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.js','','',false );
wp_enqueue_script( 'wntblank_theme_boot4-scrollmagic_imagesloaded_script', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/3.2.0/imagesloaded.pkgd.min.js','','',false );
						
			
			

// POUR LE SCROLLING vers les ancres : supprimmé et remplacer par un script en pied de page 			
//wp_enqueue_script( 'wntblank_theme_boot4-scrollmagic_scrollmagic-ScrollToPlugin_script', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.2/plugins/ScrollToPlugin.min.js','','',false );
			
//wp_enqueue_script( 'wntblank_theme_boot4-scrollmagic_scrollmagic-addIndicators_script', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js','','',false );
wp_enqueue_script( 'wntblank_theme_boot4-scrollmagic_scrollmagic-addIndicators_script', get_template_directory_uri() . '/scrollmagic/minified/plugins/debug.addIndicators.min.js','','',false );
			
//wp_enqueue_script( 'wntblank_theme_boot4-scrollmagic_scrollmagic-initialisation_script', get_template_directory_uri() . '/JS/scrollmagic-init.js','','',true );
wp_enqueue_script( 'wntblank_theme_boot4-scrollmagic_scrollmagic-initialisation_script', get_template_directory_uri() . '/JS/scrollmagic-init-v2.js','','',true );
	
			
}

	}// fin si scroll magic


		add_action( 'wp_enqueue_scripts', 'wntblank_scrollmagic_scripts' );

//------------------------scrollmagic-------------------------


function scrollmagic_add_body_attributs($attributs) {
	// On test si il s'agit de la page du template custom -----------------------
		if (is_page_template (array('template-pages/scrollmagic.php','template-pages/scrollmagic-4.php', 'template-pages/scrollmagic-3.php', 'template-pages/scrollmagic-2.php', 'template-pages/scrollmagic-1.php'))) {
	// --------------------------------------------------------------------------
	$extra_attributs = array(
		'data-spy="scroll"',
		'data-target="#menu_scrollmagig"',
		'data-offset="150"',
	);
	// combine the two arrays
	$attributs = array_merge($extra_attributs, $attributs);
	// On test si il s'agit de la page du template custom -----------------------
	}
	// --------------------------------------------------------------------------
	
	return $attributs;
}
add_filter('body_add_attributs', 'scrollmagic_add_body_attributs');
//------------------------ MON FILTRE ----------------------------------------------
