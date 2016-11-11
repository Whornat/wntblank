<?php

function my_theme_add_editor_styles() {
    add_editor_style( 'editor-style.css' );
}
add_action( 'admin_init', 'my_theme_add_editor_styles' );

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */


// Callback function to insert 'styleselect' into the $buttons array
function my_mce_buttons_2( $buttons ) {
	array_unshift( $buttons, 'styleselect' );
	return $buttons;
}
// Register our callback to the appropriate filter
add_filter('mce_buttons_2', 'my_mce_buttons_2');



// Callback function to filter the MCE settings
function my_mce_before_init_insert_formats( $init_array ) {  
	// Define the style_formats array
	$style_formats = array(  
		// Each array child is a format with it's own settings
		array(  
			'title' => '.lead',  
			'block' => 'p',  
			'classes' => 'lead',
			'wrapper' => false,
			
		)
		,array(  
			'title' => 'liste "checked"',  
			'block' => 'ul',  
			'classes' => 'checked',
			'wrapper' => false,
		)
		,array(  
			'title' => 'liste "erreur"',  
			'block' => 'ul',  
			'classes' => 'error',
			'wrapper' => false,
		)
		,array(  
			'title' => 'legend',  
			'block' => 'p',  
			'classes' => 'legend',
			'wrapper' => false,
		)   
		
		  
	
	);  
	// Insert the array, JSON ENCODED, into 'style_formats'
	$init_array['style_formats'] = json_encode( $style_formats );  
	
	return $init_array;  
  
} 
// Attach callback to 'tiny_mce_before_init' 
add_filter( 'tiny_mce_before_init', 'my_mce_before_init_insert_formats' );  