<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wntblanktheme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
<!--[if lte IE 9]>
      <link href='<?php echo get_stylesheet_directory_uri(); ?>/CSS/ie-fix.css' rel='stylesheet'>
<![endif]-->
</head>

<body <?php body_class(); ?>  <?php echo body_customconfig(); ?>>

	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.10";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, "script", "facebook-jssdk"));</script>

<div id="page" class="site withmenu_<?php echo get_theme_mod('topmenu_type')?>">
	<header id="masthead" class="site-header">
    	<?php get_template_part( 'template-parts/branding', get_theme_mod('branding_type')); ?>
    	<?php get_template_part( 'template-parts/menu', get_theme_mod('topmenu_type') ); ?>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
	<?php
// TESTER SI ACF est installé --------------------------------------------
include_once( ABSPATH . 'wp-admin/includes/plugin.php' ); 
if ( is_plugin_active( 'advanced-custom-fields-pro/acf.php' ) || is_plugin_active( 'advanced-custom-fields/acf.php' )) {
		
		$postid = get_the_ID();
		$pagesize = get_field('pagesize', $postid);
		//echo $postid;
		//echo $pagesize;
		if ($pagesize == ''){
			echo '<div class="container">';
		}else{
			echo '<div class="'.$pagesize.'">';
		}
	
}else{echo '<div class="container">';}
// TESTER SI ACF est installé --------------------------------------------			
			
	?>
    <div class="row row-site-content">
