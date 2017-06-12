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
function mytheme_customizer_live_preview(){
	wp_enqueue_script(
		  'wntblank_theme_boot4_customizer',			//Give the script an ID
		  get_template_directory_uri().'/js/customizer.js',//Point to file
		  array( 'jquery','customize-preview' ),	//Define dependencies
		  '',						//Define a version (optional)
		  true						//Put script in footer?
	);
}
add_action( 'customize_preview_init', 'mytheme_customizer_live_preview' );

// AJOUTS DE MES PARAMETRES PERSOS ---------------------------------------------------------------
//------------------------------------------------------------------------------------------------
// voir https://premium.wpmudev.org/blog/wordpress-theme-customization-api/

function wntblank_themeoptions( $wp_customize ) {
	// 1) JE CREE MA NOUVELLE SECTION ----------------------------------
	$wp_customize->add_section(
	'mytheme_structure_options',
	array(
		'title'       => __( 'Structure du theme', 'mytheme' ),
		'priority'    => 100,
		'capability'  => 'edit_theme_options',
		'description' => __('Changing default theme settings "wntblank": menu style, structures, etc.', 'wntblank_theme_boot4'),
	)
	);
	// 1) JE CREE MA 2nd SECTION ----------------------------------
	$wp_customize->add_section(
	'mytheme_fonctionnality_options',
	// 2eme section
	array(
		'title'       => __( 'Fonctionnalités du theme', 'mytheme' ),
		'priority'    => 100,
		'capability'  => 'edit_theme_options',
		'description' => __('Enabled advanced setting', 'wntblank_theme_boot4'),
	)
	);
	// 1) JE CREE MA 2nd SECTION ----------------------------------


	// 2) JE CREE MON PARAMETRE ----------------------------------
	$wp_customize->add_setting( 'content_position',	array('default' => 'flex-first', 'transport' => 'postMessage'));
	// 2nd parametre pour la taille du content
	$wp_customize->add_setting( 'content_size',	array('default' => 'col', 'transport' => 'postMessage'));
	// 2nd parametre pour la taille de la sidebarre
	$wp_customize->add_setting( 'sidebar_size',	array('default' => 'col-lg-3', 'transport' => 'postMessage'));
	// 3eme parametre pour le menu
	$wp_customize->add_setting( 'topmenu_type',	array('default' => '', 'transport' => 'postMessage'));
	// 3eme parametre pour le menu
	$wp_customize->add_setting( 'topmenu_align',	array('default' => '', 'transport' => 'postMessage'));
	// 3eme parametre pour le menu
	$wp_customize->add_setting( 'topmenu_logo',	array('default' => '', 'transport' => 'postMessage'));
		// 4eme parametre pour le "branding"
	$wp_customize->add_setting( 'branding_type',	array('default' => '', 'transport' => 'postMessage'));
	// ********************************************
	//****** pour la 2eme section *****************
	// ********************************************
	$wp_customize->add_setting( 'slider_script',	array('default' => 'none', 'transport' => 'postMessage'));
	$wp_customize->add_setting( 'parallax_script',	array('default' => 'none', 'transport' => 'postMessage'));
	$wp_customize->add_setting( 'googlemapkey',	array('default' => '', 'transport' => 'postMessage'));
	$wp_customize->add_setting( 'googleanalyticsID',	array('default' => '', 'transport' => 'postMessage'));

	// 3) JE CRE L'INTERFACE ----------------------------------
	$wp_customize->add_control('control_content_position',
	array(
		'label'    => __( 'Content position', 'wntblank_theme_boot4' ),
		'section'  => 'mytheme_structure_options',
		'settings' => 'content_position',
		'type'     => 'radio',
		'choices'  => array(
			'flex-first'  => 'Left',
			'flex-last' => 'Right',
		),
	)
	);
	// 2nd parametre pour la taille
	$wp_customize->add_control('control_content_size',
	array(
		'label'    => __( 'Content size', 'wntblank_theme_boot4' ),
		'section'  => 'mytheme_structure_options',
		'settings' => 'content_size',
		'type'     => 'radio',
		'choices'  => array(
			'col'  => 'Standard',
			'col-lg-8' => 'Smaller',
			'col-lg-12' => 'Full',
		),
	)
	);

	// 2nd parametre pour la taille
	$wp_customize->add_control('control_sidebar_size',
	array(
		'label'    => __( 'Sidebar size', 'wntblank_theme_boot4' ),
		'section'  => 'mytheme_structure_options',
		'settings' => 'sidebar_size',
		'type'     => 'radio',
		'choices'  => array(
			'col-lg-4'  => 'Large',
			'col-lg-3'  => 'Standard',
			'col-lg-2' => 'Smaller',
			'col-lg-12' => 'Full',
		),
	)
	);



	// 3nd parametre pour le menu
	$wp_customize->add_control('control_topmenu_type',
	array(
		'label'    => __( 'Menu type', 'wntblank_theme_boot4' ),
		'section'  => 'mytheme_structure_options',
		'settings' => 'topmenu_type',
		'type'     => 'radio',
		'choices'  => array(
			''=> 'Standard',
			'topfixed' => 'Fixed on the top',
			'bottomfixed' => 'Fixed on the bottom',
			'topfixedonscroll' => 'Scrolling Fixe nav on the top',
			'custom' => 'Custom (add menu-custom.php in folder "template-parts")',
			'none' => 'Hide menu',
		),
	)
	);

	// 3nd parametre pour le menu
	$wp_customize->add_control('control_topmenu_align',
	array(
		'label'    => __( 'Menu Align', 'wntblank_theme_boot4' ),
		'section'  => 'mytheme_structure_options',
		'settings' => 'topmenu_align',
		'type'     => 'radio',
		'choices'  => array(
			''=> 'Standard',
			'justify-content-center' => 'Centered',
			'justify-content-end' => 'Right',
		),
	)
	);
	// -----------------------------------------------------------

	// 3nd parametre pour le menu
	$wp_customize->add_control('control_topmenu_logo',
	array(
		'label'    => __( 'Logo in Navbar', 'wntblank_theme_boot4' ),
		'section'  => 'mytheme_structure_options',
		'settings' => 'topmenu_logo',
		'type'     => 'radio',
		'choices'  => array(
			''=> 'NO',
			'true' => 'YES',
		),
	)
	);
	// -----------------------------------------------------------




	// -----------------------------------------------------------
	// 4eme parametre pour le branding
	$wp_customize->add_control('control_branding_type',
	array(
		'label'    => __( 'Branding type', 'wntblank_theme_boot4' ),
		'section'  => 'mytheme_structure_options',
		'settings' => 'branding_type',
		'type'     => 'radio',
		'choices'  => array(
			''  => 'Standard',
			'nologo' => 'No logo',
			'fullbanner' => 'Full banner (You must add an header_image before)',
			'custom' => 'Custom (add branding-custom.php in folder "template-parts")',
			'none' => 'Hide branding',
		),
	)
	);
	// -----------------------------------------------------------

	// ********************************************
	//****** pour la 2eme section *****************
	// ********************************************

	// -----------------------------------------------------------
	// 1 parametre pour le controle des slider
	$wp_customize->add_control('control_sliderscript',
	array(
		'label'    => __( 'Script for slider', 'wntblank_theme_boot4' ),
		'section'  => 'mytheme_fonctionnality_options',
		'settings' => 'slider_script',
		'type'     => 'radio',
		'choices'  => array(
			'none'  => 'aucun',
			'royalslider' => 'RoyalSlider',
			'flexslider' => 'Flexslider',
		),
	)
	);
	// -----------------------------------------------------------
	// 1 parametre pour Parallax script
	$wp_customize->add_control('control_parallaxscript',
	array(
		'label'    => __( 'Script for parallax', 'wntblank_theme_boot4' ),
		'section'  => 'mytheme_fonctionnality_options',
		'settings' => 'parallax_script',
		'type'     => 'radio',
		'choices'  => array(
			'none'  => 'aucun',
			'paroller' => 'jquery.paroller.js',
		),
	)
	);
	// -----------------------------------------------------------


	// 2 parametre clefgoogleMAP
	$wp_customize->add_control('control_googlemapkey',
	array(
		'label'    => __( 'googlemapkey', 'wntblank_theme_boot4' ),
		'section'  => 'mytheme_fonctionnality_options',
		'settings' => 'googlemapkey',
		'type'     => 'text'
	)
	);
	// -----------------------------------------------------------
	// 3 parametre clefgoogleMAP
	$wp_customize->add_control('control_googleanalyticsID',
	array(
		'label'    => __( 'Google Analytics ID', 'wntblank_theme_boot4' ),
		'section'  => 'mytheme_fonctionnality_options',
		'settings' => 'googleanalyticsID',
		'type'     => 'text'
	)
	);




}
add_action( 'customize_register' , 'wntblank_themeoptions' );

// FIN AJOUTS DE MES PARAMETRES PERSOS -----------------------------------------------------------
//------------------------------------------------------------------------------------------------
