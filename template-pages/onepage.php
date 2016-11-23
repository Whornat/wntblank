<?php
/**
 Template Name: Onepage
 */
 ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
<!--[if lte IE 9]>
      <link href='<?php bloginfo('template_directory'); ?>/CSS/animations-ie-fix.css' rel='stylesheet'>
<![endif]-->
</head>

<body <?php body_class(); ?> data-spy="scroll" data-target="#menu-home" data-offset="150">


<div id="page" class="site withmenu_<?php echo get_theme_mod('topmenu_type')?>">

	<div><!-- #content -->
    <div><!-- .container -->
	<?php //FIN DU HEADER.PHP ?>
    
    
    <section id="stepintro" class="content content_slide slide_fullheight">
    	    <div class="container">   
            ...
			</div>
	<header id="masthead" class="site-header">
    	<?php //get_template_part( 'template-parts/menu', get_theme_mod('topmenu_type') ); ?>
    	<?php get_template_part( './template-parts/menu', 'onepage' ); ?>
    </header>           
        
    </section>
<?php // FIN DU HEADER.PHP --------------------------------------------------------------------------------- ?>    
    
    <section id="step01" class="content content_slide ">
    <div class="container">
			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>
	</div>
    </section>
    
    <section id="step02" class="content content_slide slide_fullheight">
    <div class="container">   
    ------------
	</div>
    </section> 
    
    <section id="step03" class="content content_slide slide_fullheight">
    <div class="container">   
    ------------
	</div>
    </section> 
    
    <section id="step04" class="content content_slide slide_fullheight">
    <div class="container">   
    ------------
	</div>
    </section>         
        
           
<?php
//get_sidebar();
get_footer();
