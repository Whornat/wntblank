<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wntblank_theme_boot4
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>
<?php $content_size = get_theme_mod('content_size');
if ($content_size === 'col-lg-8'){$sidebar_size = 'col-lg-4';}else if($content_size === 'col-lg-9'){ $sidebar_size = 'col-lg-3';}else{$sidebar_size = 'col-lg-12';}
?>
<aside id="secondary" class="<?php echo $sidebar_size; ?> widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->
