<?php
/**
 * wntblank_theme_boot4 functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package wntblank_theme_boot4
 */

if ( ! function_exists( 'wntblank_theme_boot4_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function wntblank_theme_boot4_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on wntblank_theme_boot4, use a find and replace
	 * to change 'wntblank_theme_boot4' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'wntblank_theme_boot4', get_template_directory() . '/languages' );

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
		'primary' => esc_html__( 'Primary', 'wntblank_theme_boot4' ),
		'footer' => __( 'footer Menu', 'wntblank_theme_boot4' )
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

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	//add_theme_support( 'post-formats', array(
		//'aside',
		//'image',
		//'video',
		//'quote',
		//'link',
	//) );

	// Set up the WordPress core custom background feature.
	//add_theme_support( 'custom-background', apply_filters( 'wntblank_theme_boot4_custom_background_args', array(
	//	'default-color' => 'ffffff',
	//	'default-image' => '',
	//) ) );
}
endif;
add_action( 'after_setup_theme', 'wntblank_theme_boot4_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function wntblank_theme_boot4_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'wntblank_theme_boot4_content_width', 640 );
}
add_action( 'after_setup_theme', 'wntblank_theme_boot4_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
//function wntblank_theme_boot4_widgets_init() {
//	register_sidebar( array(
//		'name'          => esc_html__( 'Sidebar', 'wntblank_theme_boot4' ),
//		'id'            => 'sidebar-1',
//		'description'   => '',
//		'before_widget' => '<section id="%1$s" class="widget %2$s"><div class="content">',
//		'after_widget'  => '</div></section>',
//		'before_title'  => '<h2 class="widget-title">',
//		'after_title'   => '</h2>',
//	) );
//		register_sidebar( array(
//		'name'          => esc_html__( 'Sidebar footer', 'wntblank_theme_boot4' ),
//		'id'            => 'sidebar-footer',
//		'description'   => '',
//		'before_widget' => '<section id="%1$s" class="widget %2$s col-md-4 col-sm-6"><div class="content">',
//		'after_widget'  => '</div></section>',
//		'before_title'  => '<h2 class="widget-title">',
//		'after_title'   => '</h2>',
//	) );
//}
//add_action( 'widgets_init', 'wntblank_theme_boot4_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
 
function wntblank_theme_boot4_scripts() {
	
	// Integration BOOTSTRAP 4 --------------------
	wp_enqueue_style('wntblank_theme_boot4-bootstrapstyle', get_template_directory_uri() . '/CSS/bootstrap.css');
	//VERSION CDN------------------
	//wp_enqueue_style('wntblank_theme_boot4-bootstrapstyle', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css');
	
	
	
	wp_enqueue_style( 'wntblank_theme_boot4-style', get_stylesheet_uri() );
	
	// MAP GOOGLE --------------------
	if( get_theme_mod('googlemapkey') ){
	wp_enqueue_script( 'wntblank_theme_boot4-googlemap', 'https://maps.googleapis.com/maps/api/js?key='.get_theme_mod('googlemapkey').'', true, '' );
	wp_enqueue_script( 'wntblank_theme_boot4-googlemapACF', get_template_directory_uri() . '/JS/gmap-ACF.js', array(), null, true );
	}
	
	// Integration Font AWESOME --------------------
	wp_enqueue_style('wntblank_theme_boot4-font_awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
	
	// GOOGLE FONT --------------------
	//wp_enqueue_style('googlefont-style', 'https://fonts.googleapis.com/css?family=Amaranth:400,400i,700|Roboto:300,400,400i,700');
	
	//------------------------fancybox-------------------------
	wp_enqueue_style('wntblank_theme_boot4-fancybox', get_template_directory_uri() . '/CSS/fancybox/jquery.fancybox.css');
	wp_enqueue_script( 'wntblank_theme_boot4-fancybox_script', get_template_directory_uri() . '/JS/fancybox/jquery.fancybox.js','','',true );
	
	//------------------------OPTIONAL-------------------------
	wp_enqueue_script( 'wntblank_theme_boot4-jqueryeasing_script', get_template_directory_uri() . '/JS/jquery.easing.js','','',true );
	//wp_enqueue_script( 'wntblank_theme_boot4-jquerymousewheel_script', get_template_directory_uri() . '/JS/jquery.mousewheel.js','','',true );
	//------------------------ANIMATION-------------------------
	wp_enqueue_style('wntblank_theme_boot4-animation', get_template_directory_uri() . '/CSS/animations.css');
	wp_enqueue_script( 'wntblank_theme_boot4-animation_script', get_template_directory_uri() . '/JS/css3-animate-it.js','','',true );
	
	wp_enqueue_script('wntblank_theme_boot4-tether', get_template_directory_uri() . '/JS-bootstrap/tether.min.js','','',true );
	wp_enqueue_script('wntblank_theme_boot4-bootstrapmin', get_template_directory_uri() . '/JS-bootstrap/bootstrap.min.js','','',true );
	//VERSION CDN------------------
	//wp_enqueue_script('wntblank_theme_boot4-bootstrapmin', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js','','',true );
	
	wp_enqueue_script('wntblank_theme_boot4-ie10viewport', get_template_directory_uri() . '/JS-bootstrap/ie10-viewport-bug-workaround.js','','',true );
	wp_enqueue_script('wntblank_theme_boot4-dropdownsonhover', get_template_directory_uri() . '/JS-bootstrap/bootstrap-dropdownsonhover-v01.js','','',true );
	wp_enqueue_script('wntblank_theme_boot4-fancybox-init', get_template_directory_uri() . '/JS/fancybox-init.js','','',true );
		
	// XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX REMPLACER LA VERSION DE JQUERY - mettre la derniere XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
	// nécessaire pour utiliser "dropdownsonhover-v01" et fancy box-----------------------------------------------------------------------
	wp_deregister_script('jquery');
	wp_register_script('jquery','https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js', false, '');
	wp_enqueue_script('jquery');
	// XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX REMPLACER LA VERSION DE JQUERY - mettre la derniere XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
	

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'wntblank_theme_boot4_scripts' );

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
require get_template_directory() . '/inc/custom-header.php';
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
require_once('bs4navwalker.php');

/**
 * Masonry
 */
 //require get_template_directory() . '/inc/masonry.php';
 
 
 /**
 * One page scrolling
 */
 require get_template_directory() . '/inc/onepage-scrolling.php';

/**
 * scrollmagic
 */
 require get_template_directory() . '/inc/scrollmagic-cdn.php';
 
 /**
 * Imagine
 */
 //require get_template_directory() . '/inc/imagine.php';

/**
 * Customisation Tiny MCE
 */
require get_template_directory() . '/inc/tinymce.php';
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
 * fonction pour widget
 */
//require get_template_directory() . '/inc/widgets-custom.php';

 /**
 * fonction pour les excerpts
 */
include(get_stylesheet_directory() . '/inc/excerpt-advanced.php');


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
		$displayattributs .= '' . $attribut . '';
	endforeach;
	$displayattributs .= '';
	
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
	if( !current_user_can('manage_options') ) {
    unset( $pages_templates['template-pages/demo-typography.php'] );
    unset( $pages_templates['template-pages/demo-animate.php'] );
    unset( $pages_templates['template-pages/demo-image.php'] );
    unset( $pages_templates['template-pages/demo-masonry.php'] );
    unset( $pages_templates['template-pages/onepage-scrolling.php'] );
    unset( $pages_templates['template-pages/royalsliderpage.php'] );
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
?>