<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wntblank_theme_boot4
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
      <link href='<?php bloginfo('template_directory'); ?>/CSS/animations-ie-fix.css' rel='stylesheet'>
<![endif]-->
</head>

<body <?php body_class(); ?>>


<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wntblank_theme_boot4' ); ?></a>

	<header id="masthead" class="site-header">
    
    	<?php if ( get_header_image() ) { ?>
    	<?php get_template_part( 'template-parts/masthead', 'withbanner'); ?>
		<?php }else{ // End header image check. ?>
    	<?php get_template_part( 'template-parts/masthead', 'withlogo'); ?>
		<?php } ?>
        
    	<?php get_template_part( 'template-parts/menu', 'standard'); ?>
    	<?php //get_template_part( 'template-parts/menu', 'topfixed'); ?>
        
	</header><!-- #masthead -->

	<div id="content" class="site-content">
    <div class="container">