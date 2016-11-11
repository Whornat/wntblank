<?php
/**
 Template Name: Plan du site
 */

get_header(); ?>
	<div id="primary" class="col-md-6 offset-md-3 content-area">
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
            
<div id="sitemap_container">
<div class="section">
<h2><i class="fa fa-file-text" aria-hidden="true"></i> Pages</h2>
<ul><?php wp_list_pages("title_li=" ); ?></ul>
</div>
<div class="section">
<h2><i class="fa fa-list" aria-hidden="true"></i> Catégories des Articles</h2>
<ul><?php wp_list_categories('sort_column=name&optioncount=1&hierarchical=0&feed=RSS'); ?></ul>
</div>
<div class="section">
<h2><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Listes des Articles</h2>
<ul><?php $archive_query = new WP_Query('showposts=1000'); while ($archive_query->have_posts()) : $archive_query->the_post(); ?>
<li>
<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a>
(<?php comments_number('0', '1', '%'); ?>)
</li>
<?php endwhile; ?>
</ul>
</div>
<div class="section">
<h2><i class="fa fa-rss" aria-hidden="true"></i> Flux RSS</h2>
<ul>
<li><a title="Full content" href="feed:<?php bloginfo('rss2_url'); ?>">Flux RSS principal</a></li>
<li><a title="Comment Feed" href="feed:<?php bloginfo('comments_rss2_url'); ?>">Flux RSS des commentaires</a></li>
</ul>
</div><!-- .section -->

</div>            
            

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
