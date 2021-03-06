<?php
/**
 Template Name: Listing page enfant
 */

get_header(); ?>
<?php if (get_theme_mod('content_size') == ''){ $content_size = "col"; }else{ $content_size = get_theme_mod('content_size');} ?>
	<div id="primary" class="<?php echo $content_size ?> content-area <?php echo get_theme_mod('content_position') ?>">    
			<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

			endwhile; // End of the loop.
			?>
           
<?php
$args = array(
    'post_type'      => 'page',
    'posts_per_page' => -1,
    'post_parent'    => $post->ID,
    'order'          => 'ASC',
    'orderby'        => 'menu_order'
 );


$parent = new WP_Query( $args );
if ( $parent->have_posts() ) : ?>
<!--<div id="child-page" class="row">-->
	<div id="child-page" >

    <?php while ( $parent->have_posts() ) : $parent->the_post(); ?>
					<?php get_template_part( 'template-parts/excerpt', 'page' ); ?>
    <?php endwhile; ?>
</div>
<?php endif; wp_reset_query(); ?>          
           
           

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
