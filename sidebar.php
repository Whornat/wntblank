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
<?php if (get_theme_mod('sidebar_size') == ''){ $sidebar_size = "col"; }else{ $sidebar_size = get_theme_mod('sidebar_size');} ?>
<aside id="secondary" class="<?php echo $sidebar_size; ?> widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->
