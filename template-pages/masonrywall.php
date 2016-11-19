<?php
/**
 Template Name: Page masonry
 */
 
get_header(); ?>

	<div id="primary" class="col-lg-9 col-md-7 content-area <?php echo get_theme_mod('sidebar_position') ?>">
		<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>

			<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/excerpt', get_post_format() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>
        
        <h2>Cette page demo liste les articles du site avec un effet d'ajustement de bloc "masonry"</h2>
        
        <div class="row masonrygrid" id="loops">
        <div class="grid-sizer col-sm-6"></div>
        <?php 
		/* Start the Loop for post */
		$args = array( 'post_type' => 'post', 'posts_per_page' => 2 );
		$loop = new WP_Query( $args );
		while ( $loop->have_posts() ) : $loop->the_post();
				echo '<div class="col-sm-6 blocmasonry">'; 
				get_template_part( 'template-parts/excerpt', get_post_format() );
				echo '</div> <!-- col-sm-6 -->'; 
        endwhile;
		/* END the Loop for post */
		?>
        </div> <!-- loops -->
        <div class="load-more-manual">
		<nav id="page-nav" role="navigation"><?php next_posts_link( __( '<span class="more btn btn-primary btn-lg btn-block">Annonces suivante</span>', 'wpc' ) ); ?></nav>
		</div>
        <?php  wp_reset_query(); ?>

        
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
