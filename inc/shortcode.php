<?php
function shortcode_bootstrapcol( $atts, $content = null ) {
    extract(shortcode_atts(array(
	'class'	=> '',
	'color'	=> '',
	'size'	=> '',
    ), $atts));

	$color = ($color) ? ' '.$color : '';
	$class = ($class) ? ' '.$class : '';
	$size = ($size) ? ' '.$size : '';
	

	if (strpos($size, "last") === false) {
	// if last is not found
	return '';
	}
	else {
	// if last is found
	return '<div class="' .$class.$color. ' shortcode">' .do_shortcode($content). '</div>';
	}
}
add_shortcode('col', 'shortcode_bootstrapcol');


function shortcode_bootstraprow( $atts, $content = null ) {
    extract(shortcode_atts(array(
	'class'	=> '',
	'color'	=> '',
    ), $atts));

	$color = ($color) ? ' '.$color : '';
	$class = ($class) ? ' '.$class : '';
	// if last is found
	return '<div class="row ' .$class.$color. ' shortcode">' .do_shortcode($content). '</div>';
}
add_shortcode('row', 'shortcode_bootstraprow');
// clean up formatting in shortcodes (AJOUT)
?>