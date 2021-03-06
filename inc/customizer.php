<?php
/**
 * wntblank_theme_boot4 Theme Customizer.
 *
 * @package wntblanktheme
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
		'title'       => __( 'Theme\'s structure', 'wntblanktheme' ),
		'priority'    => 100,
		'capability'  => 'edit_theme_options',
		'description' => __('Changing default theme settings "wntblank": menu style, structures, etc.', 'wntblanktheme'),
	)
	);
	// 1) JE CREE MA 2nd SECTION ----------------------------------
	$wp_customize->add_section(
	'mytheme_fonctionnality_options',
	// 2eme section
	array(
		'title'       => __( 'Theme\'s features', 'wntblanktheme' ),
		'priority'    => 100,
		'capability'  => 'edit_theme_options',
		'description' => __('Enabled advanced setting', 'wntblanktheme'),
	)
	);
	// 1) JE CREE MA 2nd SECTION ----------------------------------


    $wp_customize->add_setting( 'wntblank_logotheme' ); // Add setting for logo uploader
	// 2) JE CREE MON PARAMETRE ----------------------------------
	$wp_customize->add_setting( 'content_position',	array('default' => '', 'transport' => 'postMessage'));
	// 2nd parametre pour la taille du content
	$wp_customize->add_setting( 'content_size',	array('default' => 'col-lg-9', 'transport' => 'postMessage'));
	// 2nd parametre pour la taille du content
	$wp_customize->add_setting( 'archive_column',	array('default' => 'col-12', 'transport' => 'postMessage'));
	// 2nd parametre pour la taille du content
	$wp_customize->add_setting( 'grid_layout',	array('default' => 'default', 'transport' => 'postMessage'));
	// 2nd parametre pour la taille de la sidebarre
	$wp_customize->add_setting( 'sidebar_size',	array('default' => 'col-lg-3', 'transport' => 'postMessage'));
	// 3eme parametre pour le menu
	$wp_customize->add_setting( 'topmenu_type',	array('default' => '', 'transport' => 'postMessage'));
	// 3eme parametre pour le menu
	$wp_customize->add_setting( 'topmenu_align',	array('default' => 'mr-auto', 'transport' => 'postMessage'));
	// 3eme parametre pour le menu
	$wp_customize->add_setting( 'topmenu_style',	array('default' => 'navbar-light', 'transport' => 'postMessage'));
	// 3eme parametre pour le menu
	$wp_customize->add_setting( 'topmenu_bg',	array('default' => 'bg-light', 'transport' => 'postMessage'));
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
	$wp_customize->add_setting( 'facebooksdk',	array('default' => '', 'transport' => 'postMessage'));


	
	
    // Add control for logo uploader (actual uploader)
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'wntblank_logotheme', array(
        'label'    => __( 'Upload your logo', 'wntblank_theme_boot4' ),
        'section'  => 'title_tagline',
        'settings' => 'wntblank_logotheme',
    ) ) );	
	
	
	
	// 3) JE CRE L'INTERFACE ----------------------------------
	$wp_customize->add_control('control_content_position',
	array(
		'label'    => __( 'Content position', 'wntblanktheme' ),
		'section'  => 'mytheme_structure_options',
		'settings' => 'content_position',
		'type'     => 'radio',
		'choices'  => array(
			''  => 'Left',
			'order-2' => 'Right',
		),
	)
	);
	
	// 3) JE CRE L'INTERFACE ----------------------------------
	$wp_customize->add_control('control_archive_column',
	array(
		'label'    => __( 'Archive column', 'wntblanktheme' ),
		'section'  => 'mytheme_structure_options',
		'settings' => 'archive_column',
		'type'     => 'radio',
		'choices'  => array(
			'col-12'  => 'none',
			'col-md-6' => '2',
			'col-md-6 col-lg-4' => '4'
		),
	)
	);
	
	// 3) JE CRE L'INTERFACE ----------------------------------
	$wp_customize->add_control('control_grid_layout',
	array(
		'label'    => __( 'Grid layout', 'wntblanktheme' ),
		'section'  => 'mytheme_structure_options',
		'settings' => 'grid_layout',
		'type'     => 'radio',
		'choices'  => array(
			'default'  => 'standard',
			'masonry' => 'Masonry',
			'card-columns' => 'Card columns'
		),
	)
	);
	
	
	
	
	
	// 2nd parametre pour la taille
	$wp_customize->add_control('control_content_size',
	array(
		'label'    => __( 'Content size', 'wntblanktheme' ),
		'section'  => 'mytheme_structure_options',
		'settings' => 'content_size',
		'type'     => 'radio',
		'choices'  => array(
			'col-lg-9'  => 'Standard',
			'col-lg-8' => 'Smaller',
			'col-lg-12' => 'Full',
		),
	)
	);

	// 2nd parametre pour la taille
	$wp_customize->add_control('control_sidebar_size',
	array(
		'label'    => __( 'Sidebar size', 'wntblanktheme' ),
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
		'label'    => __( 'Menu type', 'wntblanktheme' ),
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
	$wp_customize->add_control('control_topmenu_style',
	array(
		'label'    => __( 'Menu style', 'wntblanktheme' ),
		'section'  => 'mytheme_structure_options',
		'settings' => 'topmenu_style',
		'type'     => 'radio',
		'choices'  => array(
			'navbar-light'=> 'Navbar Light',
			'navbar-dark' => 'Navbar Dark',
			'navbar-custom' => 'Navbar Custom',
		),
	)
	);
	
	// 3nd parametre pour le menu
	$wp_customize->add_control('control_topmenu_bg',
	array(
		'label'    => __( 'Menu Background', 'wntblanktheme' ),
		'section'  => 'mytheme_structure_options',
		'settings' => 'topmenu_bg',
		'type'     => 'radio',
		'choices'  => array(
			'bg-light'=> 'Background Light',
			'bg-dark' => 'Background Dark',
			'bg-primary' => 'Background Primary',
			'bg-custom' => 'Background Custom',
		),
	)
	);
	
	
	

	// 3nd parametre pour le menu
	$wp_customize->add_control('control_topmenu_align',
	array(
		'label'    => __( 'Menu Align', 'wntblanktheme' ),
		'section'  => 'mytheme_structure_options',
		'settings' => 'topmenu_align',
		'type'     => 'radio',
		'choices'  => array(
			'mr-auto'=> 'Standard',
			'justify-content-center' => 'Centered',
			'justify-content-end' => 'Right',
		),
	)
	);
	// -----------------------------------------------------------

	// 3nd parametre pour le menu
	$wp_customize->add_control('control_topmenu_logo',
	array(
		'label'    => __( 'Logo in Navbar', 'wntblanktheme' ),
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
		'label'    => __( 'Branding type', 'wntblanktheme' ),
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
		'label'    => __( 'Script for slider', 'wntblanktheme' ),
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
		'label'    => __( 'Script for parallax', 'wntblanktheme' ),
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
		'label'    => __( 'Googlemapkey', 'wntblanktheme' ),
		'section'  => 'mytheme_fonctionnality_options',
		'settings' => 'googlemapkey',
		'type'     => 'text'
	)
	);
	// -----------------------------------------------------------
	// 3 parametre clefgoogleMAP
	$wp_customize->add_control('control_googleanalyticsID',
	array(
		'label'    => __( 'Google Analytics ID', 'wntblanktheme' ),
		'section'  => 'mytheme_fonctionnality_options',
		'settings' => 'googleanalyticsID',
		'type'     => 'text'
	)
	);
	
	// -----------------------------------------------------------
	// 3 parametre clefgoogleMAP
	$wp_customize->add_control('control_facebooksdk',
	array(
		'label'    => __( 'facebooksdk', 'wntblanktheme' ),
		'section'  => 'mytheme_fonctionnality_options',
		'settings' => 'facebooksdk',
		'type'     => 'radio',
		'choices'  => array(
			''=> 'NO',
			'true' => 'YES',
		),
	)
	);	




}
add_action( 'customize_register' , 'wntblank_themeoptions' );

// FIN AJOUTS DE MES PARAMETRES PERSOS -----------------------------------------------------------
//------------------------------------------------------------------------------------------------
