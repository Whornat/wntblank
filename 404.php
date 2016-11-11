<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package wntblank_theme_boot4
 */

get_header(); ?>

	<div id="primary" class="col-md-12 content-area">
		<main id="main" class="site-main" role="main">
			<section class="error-404 not-found">
				<header class="page-header">
                	<h1 class="quatrecentquatre text-center">404</h1>
					<h1 class="page-title text-center"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'wntblank_theme_boot4' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content row" style="padding-bottom:2rem;">
                    <div class="col-sm-6 offset-sm-3 containerform">
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'wntblank_theme_boot4' ); ?></p>
					<?php get_search_form(); ?>
                    </div> <!-- col-sm-6 offset-sm-2 -->
                   
				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
