<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wntblanktheme
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>
<?php if (get_theme_mod('sidebar_size') == ''){ $sidebar_size = "col-lg-3"; }else{ $sidebar_size = get_theme_mod('sidebar_size');} ?>
<aside id="secondary" class="<?php echo $sidebar_size; ?> widget-area" role="complementary">
	<div class="row">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</div>	
</aside><!-- #secondary -->
