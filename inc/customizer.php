<?php
/**
 * wntblank_theme_boot4 Theme Customizer.
 *
 * @package wntblank_theme_boot4
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function wntblank_theme_boot4_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
}
add_action( 'customize_register', 'wntblank_theme_boot4_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function wntblank_theme_boot4_customize_preview_js() {
	wp_enqueue_script( 'wntblank_theme_boot4_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'wntblank_theme_boot4_customize_preview_js' );


// AJOUTS DE MES PARAMETRES PERSOS ---------------------------------------------------------------
//------------------------------------------------------------------------------------------------
// voir https://premium.wpmudev.org/blog/wordpress-theme-customization-api/

function wntblank_themeoptions( $wp_customize ) {
	// 1) JE CREE MA NOUVELLE SECTION
	$wp_customize->add_section( 
	'mytheme_structure_options', 
	array(
		'title'       => __( 'Structure du theme', 'mytheme' ),
		'priority'    => 100,
		'capability'  => 'edit_theme_options',
		'description' => __('Changing theme structure', 'wntblank_theme_boot4'), 
	) 
	);
	// 2) JE CREE MON PARAMETRE
	$wp_customize->add_setting( 'sidebar_position',	array('default' => 'pull-left', 'transport' => 'postMessage'));
	// 3) JE CRE L'INTERFACE
	$wp_customize->add_control('your_control_id', 
	array(
		'label'    => __( 'Sidebar position', 'wntblank_theme_boot4' ),
		'section'  => 'mytheme_structure_options',
		'settings' => 'sidebar_position',
		'type'     => 'radio',
		'choices'  => array(
			'pull-left'  => 'pull-left',
			'pull-right' => 'pull-right',
		),
	)
);
	// 4) --
	
	
	
}
add_action( 'customize_register' , 'wntblank_themeoptions' );

// FIN AJOUTS DE MES PARAMETRES PERSOS -----------------------------------------------------------
//------------------------------------------------------------------------------------------------
