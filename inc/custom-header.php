<?php
/**
 * Sample implementation of the Custom Header feature.
 *
 * You can add an optional custom header image to header.php like so ...
 *
	<?php if ( get_header_image() ) : ?>
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
		<img src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="">
	</a>
	<?php endif; // End header image check. ?>
 *
 * @link https://developer.wordpress.org/themes/functionality/custom-headers/
 *
 * @package wntblank_theme_boot4
 */

/**
 * Set up the WordPress core custom header feature.
 *
 * @uses wntblank_theme_boot4_header_style()
 */
function wntblank_theme_boot4_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'wntblank_theme_boot4_custom_header_args', array(
		'default-image'          => '',
		'default-text-color'     => '000000',
		'width'                  => 1200,
		'height'                 => 250,
		'flex-height'            => true,
		'wp-head-callback'       => 'wntblank_theme_boot4_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'wntblank_theme_boot4_custom_header_setup' );

/**
 * AJOUT POUR GERER LE LOGO DU SITE
 */

function wntblank_theme_boot4_custom_logo_setup( $wp_customize ) {
    $wp_customize->add_setting( 'wntblank_logotheme' ); // Add setting for logo uploader
         
    // Add control for logo uploader (actual uploader)
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'wntblank_logotheme', array(
        'label'    => __( 'Upload your logo', 'wntblank_theme_boot4' ),
        'section'  => 'title_tagline',
        'settings' => 'wntblank_logotheme',
    ) ) );
}
add_action( 'customize_register', 'wntblank_theme_boot4_custom_logo_setup' );




if ( ! function_exists( 'wntblank_theme_boot4_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog.
 *
 * @see wntblank_theme_boot4_custom_header_setup().
 */
function wntblank_theme_boot4_header_style() {
	$header_text_color = get_header_textcolor();

	/*
	 * If no custom options for text are set, let's bail.
	 * get_header_textcolor() options: Any hex value, 'blank' to hide text. Default: HEADER_TEXTCOLOR.
	 */
	if ( HEADER_TEXTCOLOR === $header_text_color ) {
		return;
	}

	// If we get this far, we have custom styles. Let's do this.
	?>
	<style type="text/css">
	<?php
		// Has the text been hidden?
		if ( ! display_header_text() ) :
	?>
		.site-title,
		.site-description {
			position: absolute;
			clip: rect(1px, 1px, 1px, 1px);
		}
	<?php
		// If the user has set a custom color for the text use that.
		else :
	?>
		.site-title a,
		.site-description {
			color: #<?php echo esc_attr( $header_text_color ); ?>;
		}
	<?php endif; ?>
	</style>
	<?php
}
endif;
