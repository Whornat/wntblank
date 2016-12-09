<?php
//------------------------INSERTION DES SCRIPTS NECESSAIRES IMAGINE-------------------------

//------------------------flexslider-------------------------

//-------------- MON FILTRE POUR LES ATTRIBUT DU BODY-------------------------------
/* j'ajoute les attributs complémentaire à ma balise body ligne 226 de function.php*/

function onepage_add_body_attributs($attributs) {
	// On test si il s'agit de la page du template custom -----------------------
	if (is_page_template ('template-pages/onepage-scrolling.php')) {
	// --------------------------------------------------------------------------
	$extra_attributs = array(
		'data-spy="scroll"',
		'data-target="#scrollingnav"',
		'data-offset="150"',
	);
	// combine the two arrays
	$attributs = array_merge($extra_attributs, $attributs);
	// On test si il s'agit de la page du template custom -----------------------
	}
	// --------------------------------------------------------------------------
	
	return $attributs;
}
add_filter('body_add_attributs', 'onepage_add_body_attributs');
//------------------------ MON FILTRE ----------------------------------------------
?>