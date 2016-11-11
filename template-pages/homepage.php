<?php
/**
 Template Name: Home page
 */

get_header(); ?>
<style type="text/css">
#slide { margin-bottom:1em; background:#5a558f;}

</style>

		<div id="slide"><?php //echo get_new_royalslider(1); ?></div>
    	<div id="primary" class="col-md-9 content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();
				get_template_part( 'template-parts/content', 'page' );
			endwhile; // End of the loop.
			?>
            
	<?php 
	// get sticky posts from DB
	$sticky = get_option('sticky_posts');
	// check if there are any
	if (!empty($sticky)) {
		
	echo '<div class="actu">';
		
    // optional: sort the newest IDs first
    rsort($sticky);
    // override the query
    $args = array(
        'post__in' => $sticky
    );
    query_posts($args);
    // the loop
    while (have_posts()) {the_post();
	get_template_part( 'template-parts/excerpt' );
    }
	echo '<p class="text-center more_link_plus"><a href="'.get_page_link('1').'" class="center-block"><i class="fa fa-plus"></i></a></p>'; 
	echo '</div><!-- .actu -->';
	
	
	}else{
	echo'<div class="actu"><p>Aucune actualité pour le moment, vous pouvez consulter nos archives ici <a href="" class="btn">Nos actualités</a></p></div><!-- .actu -->';
	}
?>            
            
            
         </main><!-- #main -->
	</div><!-- #primary -->
    <aside id="secondary-home" class="col-md-3 widget-area" role="complementary">
    <section class="widget">
    <div class="content">
    <h2 class="widget-title">--</h2>
	<p>[content]</p>
	</div>
    </section>
	</aside>

<?php
//get_sidebar();
get_footer();
