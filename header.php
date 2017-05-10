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
      <link href='<?php echo get_stylesheet_directory_uri(); ?>/CSS/ie-fix.css' rel='stylesheet'>
<![endif]-->
</head>

<body <?php body_class(); ?>  <?php echo body_customconfig(); ?>>

<div id="page" class="site withmenu_<?php echo get_theme_mod('topmenu_type')?>">
	<header id="masthead" class="site-header">
    	<?php get_template_part( 'template-parts/branding', get_theme_mod('branding_type')); ?>
    	<?php get_template_part( 'template-parts/menu', get_theme_mod('topmenu_type') ); ?>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
    <div class="container">
    <div class="row row-site-content">