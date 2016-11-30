<?php
//------------------------INSERTION DES SCRIPTS NECESSAIRES IMAGINE-------------------------

function wntblank_imagine_scripts() {
wp_enqueue_style('wntblank_theme_boot4-imagine_style', get_template_directory_uri() . '/imagine/CSS/imagine.css');
wp_enqueue_script( 'wntblank_theme_boot4-imagine_tweenlite_script', get_template_directory_uri() . '/imagine/JS/tweenlite.js','','',true );
wp_enqueue_script( 'wntblank_theme_boot4-imagine_css_script', get_template_directory_uri() . '/imagine/JS/css.js','','',true );
wp_enqueue_script( 'wntblank_theme_boot4-imagine_animus_script', get_template_directory_uri() . '/imagine/JS/animus.js','','',true );
wp_enqueue_script( 'wntblank_theme_boot4-imagine_imagine_script', get_template_directory_uri() . '/imagine/JS/imagine.js','','',true );
}
add_action( 'wp_enqueue_scripts', 'wntblank_imagine_scripts' );
//------------------------flexslider-------------------------


//-------------- MON FILTRE POUR LES ATTRIBUT DU BODY-------------------------------
/* j'ajoute les attributs complémentaire à ma balise body ligne 226 de function.php*/

function imagine_add_body_attributs($attributs) {
	// On test si il s'agit de la page du template custom -----------------------
	if (is_page_template ('template-pages/imagine.php')) {
	// --------------------------------------------------------------------------
	$extra_attributs = array(
		'data-spy="scroll"',
		'data-target="#menu_imagine"',
		'data-offset="150"',
	);
	// combine the two arrays
	$attributs = array_merge($extra_attributs, $attributs);
	// On test si il s'agit de la page du template custom -----------------------
	}
	// --------------------------------------------------------------------------
	
	return $attributs;
}
add_filter('body_add_attributs', 'imagine_add_body_attributs');
//------------------------ MON FILTRE ----------------------------------------------
?>