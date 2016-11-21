<?php
/**
 Template Name: Listing page enfant
 */

get_header(); ?>
	<div id="primary" class="col-lg-9 col-md-7 content-area <?php echo get_theme_mod('content_position') ?>">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

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
