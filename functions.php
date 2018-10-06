<?php
/**
 * wntblanktheme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package wntblanktheme
 */

if ( ! function_exists( 'wntblanktheme_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function wntblanktheme_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on wntblanktheme, use a find and replace
	 * to change 'wntblanktheme' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'wntblanktheme', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'wntblanktheme' ),
		'footer' => __( 'footer Menu', 'wntblanktheme' )
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

}
endif;
add_action( 'after_setup_theme', 'wntblanktheme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function wntblanktheme_content_width() {
	//$GLOBALS['content_width'] = apply_filters( 'wntblanktheme_content_width', 640 );
	$GLOBALS['content_width'] = apply_filters( 'wntblanktheme_content_width', 960 );
}
add_action( 'after_setup_theme', 'wntblanktheme_content_width', 0 );

/**
 * Enqueue scripts and styles.
 */

function wntblanktheme_scripts() {

	// Integration BOOTSTRAP 4-alpha6 --------------------
	wp_enqueue_style('wntblanktheme-bootstrapstyle', get_template_directory_uri() . '/bootstrap-4.1.3-dist/css/bootstrap.min.css');
	// ma version custom en dessous
	//wp_enqueue_style('wntblanktheme-bootstrapstyle', get_template_directory_uri() . '/bootstrap-4.0.0-beta.2/bootstrap.css');

	//VERSION CDN------------------
	//wp_enqueue_style('wntblanktheme-bootstrapstyle', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css');



	wp_enqueue_style( 'wntblanktheme-style', get_stylesheet_uri() );

	// MAP GOOGLE --------------------
	if( get_theme_mod('googlemapkey') ){
	wp_enqueue_script( 'wntblanktheme-googlemap', 'https://maps.googleapis.com/maps/api/js?key='.get_theme_mod('googlemapkey').'', true, '' );
	wp_enqueue_script( 'wntblanktheme-googlemapACF', get_stylesheet_directory_uri() . '/JS/googlemapACF-init.js', array(), null, true );
	}

	// Integration Font AWESOME --------------------
	//wp_enqueue_style('wntblanktheme-font_awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
	//WITH JS
	//wp_enqueue_script( 'wntblanktheme-font_awesome', get_template_directory_uri() . '/fontawesome-pro-5.0.1/JS-mode/js/fontawesome-all.js', array(), null, true );
	//WITH CSS
	wp_enqueue_style( 'wntblanktheme-font_awesome', get_template_directory_uri() . '/fontawesome-pro-5.3.1/CSS-mode/css/all.css' );
	

	// Integration modernizr en version light : nécessaire pour scrollmagic --------------------
	wp_enqueue_script( 'wntblanktheme-scrollmagic_scrollmagic-modernizr_script', get_template_directory_uri() . '/JS/modernizr.custom.min.js','','',false );

	// GOOGLE FONT --------------------
	wp_enqueue_style('googlefont-style', 'https://fonts.googleapis.com/css?family=Amaranth:400,400i,700|Roboto:300,400,400i,700');

	//------------------------fancybox-------------------------
	wp_enqueue_style('wntblanktheme-fancybox', get_template_directory_uri() . '/CSS/fancybox-3/jquery.fancybox.min.css');
	wp_enqueue_script( 'wntblanktheme-fancybox_script', get_template_directory_uri() . '/JS/fancybox-3/jquery.fancybox.min.js','','',true );
	wp_enqueue_script('wntblanktheme-fancybox-init', get_stylesheet_directory_uri() . '/JS/fancybox-init.js','','',true );
	
	//------------------------ANIMATION-------------------------
	wp_enqueue_style('wntblanktheme-animation', get_template_directory_uri() . '/CSS/animations.css');
	wp_enqueue_script( 'wntblanktheme-animation_script', get_template_directory_uri() . '/JS/css3-animate-it.js','','',true );
	
	wp_enqueue_script( 'wntblanktheme-jqueryeasing_script', get_template_directory_uri() . '/JS/jquery.easing.js','','',true );

	wp_enqueue_script('wntblanktheme-dropdownsonhover', get_template_directory_uri() . '/JS/bootstrap-dropdownsonhover-v01.js','','',true );
	
	//pour alpha beta :
	//wp_enqueue_script('wntblanktheme-popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js','','',true );
	//wp_enqueue_script('wntblanktheme-popper', get_template_directory_uri() . '/bootstrap-4.0.0-beta.2/js/popper.min.js','','',true );
	wp_enqueue_script('wntblanktheme-popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js','','',true );
	

	wp_enqueue_script('wntblanktheme-bootstrapmin', get_template_directory_uri() . '/bootstrap-4.1.3-dist/js/bootstrap.min.js','','',true );
	//VERSION CDN------------------
	//wp_enqueue_script('wntblanktheme-bootstrapmin', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js','','',true );
	
	
	// XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX REMPLACER LA VERSION DE JQUERY - mettre la derniere XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
	// nécessaire pour utiliser "dropdownsonhover-v01" et fancy box-----------------------------------------------------------------------
	wp_deregister_script('jquery');
	//wp_register_script('jquery','https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js', false, '');
	// pour alpha 6 ci-dessous :
	// >>> https://code.jquery.com/jquery-3.2.1.slim.min.js ne fonctionne pas avec FANCYBOX
	wp_register_script('jquery','https://code.jquery.com/jquery-3.3.1.min.js', false, '');
	wp_enqueue_script('jquery');
	// XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX REMPLACER LA VERSION DE JQUERY - mettre la derniere XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'wntblanktheme_scripts' );

// integration API GOOGLE MAP pour ACF ------------------------------------------------------------
// https://support.advancedcustomfields.com/forums/topic/google-maps-field-needs-setting-to-add-api-key/

// On récupère la valeur de la clef (AIzaSyDIku7UjD-904hsX55tTfzxMZrUMmlEinU)
if( get_theme_mod('googlemapkey') ){

// Pour la version STANDARD --------------------------------
function my_acf_google_map_api( $api ){
	$api['key'] = get_theme_mod('googlemapkey');
	return $api;
}
add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');
// Pour la version PRO ------------------------------------
function my_acf_init() {
	acf_update_setting('google_api_key', get_theme_mod('googlemapkey'));
}
add_action('acf/init', 'my_acf_init');

}// FIN DU SI

// integration API GOOGLE MAP pour ACF pro ------------------------------------------------------------


/** Implement the Custom Header feature.*/
//require get_template_directory() . '/inc/custom-header.php';
/** Custom template tags for this theme. */
require get_template_directory() . '/inc/template-tags.php';
/** Custom functions that act independently of the theme templates. */
require get_template_directory() . '/inc/extras.php';
/** Customizer additions.*/
require get_template_directory() . '/inc/customizer.php';
/** Load Jetpack compatibility file.*/
require get_template_directory() . '/inc/jetpack.php';


/**
 * AJOUT MENU BOOTSTRAP.
 */
require_once('class-wp-bootstrap-navwalker.php');
// Register Custom Navigation Walker
require_once('bootstrap_pagination.php');


/**
 * Masonry
 */
 require get_template_directory() . '/inc/masonry.php';


 /**
 * One page scrolling
 */
require get_template_directory() . '/inc/onepage-scrolling.php';
require get_template_directory() . '/inc/onepage-functions.php';

/**
 * scrollmagic
 */
require get_template_directory() . '/inc/scrollmagic.php';

/**
 * Customisation Tiny MCE
 */
require get_template_directory() . '/inc/tinymce.php';
/**
 * AUTO GALLERY 
 */
require get_template_directory() . '/inc/autogallery.php';
/**
 * SHORT CODE
 */
require get_template_directory() . '/inc/shortcode.php';


 /**
 * CREATION DE CUSTOM POST & TAXONOMIE
 */
//require get_template_directory() . '/inc/custompost-init.php';

 /**
 * CREATION DE CUSTOM META FOR TAXONOMIE
 */
//require get_template_directory() . '/inc/custommeta-taxonomy.php';


 /**
 * fonction pour le choix du script de gestion des sliders
 */
$slider_script = get_theme_mod('slider_script');
if ($slider_script == ''){
}else{
require get_template_directory() . '/inc/'.$slider_script.'-init.php';
}
 /**
 * fonction pour parallax
 */
$parallax_script = get_theme_mod('parallax_script');
if ($parallax_script == ''){
}else{
require get_template_directory() . '/inc/'.$parallax_script.'-init.php';
}


 /**
 * fonction pour widget
 */
//require get_template_directory() . '/inc/widgets-custom.php';

 /**
 * fonction pour les excerpts
 */
include(get_stylesheet_directory() . '/inc/excerpt-advanced.php');
/* function pour gérer les EMBEDDED de wordpress */
include(get_stylesheet_directory() . '/inc/embedded-advanced.php');

// -------------------------------------------------------------



// FONCTION DES ATTRIBUTS DU BODY ------------------------------

function body_customconfig() {
	$attributs = array(
		//'data-spy=',
		//'data-target=',
		//'data-offset=',
	);
	$displayattributs  = '';

	if(has_filter('body_add_attributs')) {
		$attributs = apply_filters('body_add_attributs', $attributs);
	}


	foreach($attributs as $attribut) :
		$displayattributs .= ' ' . $attribut . ' ';
	endforeach;
	$displayattributs .= ' ';

	return $displayattributs;
}


add_action( 'hook_bodycustomconfig', 'body_customconfig' );
// -------------------------------------------------------------
// FONCTION DES ATTRIBUTS DU BODY -------------------------



/**
 * Body Classes
 *
 */
function be_body_classes( $classes ) {
  $classes[] = 'no-touch';
  return $classes;
}
add_filter( 'body_class', 'be_body_classes' );

/* suppression de la class "tag" du body de wordpress car ça fait un conflit avec bootstrap*/
add_filter( 'body_class', '_twbs_bootstrap_20542', 10, 1 );
add_filter( 'post_class', '_twbs_bootstrap_20542', 10, 1 );
function _twbs_bootstrap_20542( $classes )
{
    return array_diff( $classes, array(
        'tag',
        'tag-pill',
        'tag-default',
        'tag-info',
        'tag-warning',
        'tag-danger',
        'tag-success',
        'tag-primary',
    ) );
}
/* suppression de la class "tag" du body de wordpress car ça fait un conflit avec bootstrap*/

/** suppression des Template page de demo si on n'est pas un administrator */
add_filter( 'theme_page_templates', 'my_remove_page_template' );
function my_remove_page_template( $pages_templates ) {

	$current_user = wp_get_current_user();

	if( !current_user_can('manage_options') ) {
	//if( !current_user_can('manage_options') || ( 'guillaume' !== $current_user->name ) ) {

	unset( $pages_templates['template-pages/demo-animate.php'] );
    unset( $pages_templates['template-pages/demo-components.php'] );
    unset( $pages_templates['template-pages/demo-image.php'] );
    unset( $pages_templates['template-pages/demo-masonry.php'] );
	  //unset( $pages_templates['template-pages/demo-typography.php'] );
		unset( $pages_templates['template-pages/fullpage.php'] );
		//unset( $pages_templates['template-pages/onepage-scrolling.php'] );
		unset( $pages_templates['template-pages/pageeditor.php'] );
		unset( $pages_templates['template-pages/paroller.php'] );
		//unset( $pages_templates['template-pages/plandusite.php'] );
		unset( $pages_templates['template-pages/scrollmagic-custom.php'] );
		unset( $pages_templates['template-pages/scrollmagic.php'] );
	}
    return $pages_templates;
}

/** xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx */

if( get_theme_mod('googleanalyticsID') ){
function script_googleanalytics(){ ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  ga('create', '<?php echo get_theme_mod('googleanalyticsID') ?>', 'auto');
  ga('send', 'pageview');
</script>
<?php }
add_action('wp_footer', 'script_googleanalytics');
}// end if exist
