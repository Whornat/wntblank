<?php
/**
 Template Name: Page editor
*/

get_header(); ?>

<style type="text/css">
	.reapeat_blocks { padding: 1rem 0;}
	.reapeat_blocks .wrap{ padding: 1rem;}
	.title_block {}
</style>

</div><!--.container -->

			<?php
			while ( have_posts() ) : the_post();

				// THE CONTENT de la page

				echo'<section id="section_intro">';	
				echo'<div class="content-area container">';	
				get_template_part( 'template-parts/content', 'page' );
				echo'</div><!--.container-->';	
				echo'</section><!--#primary-->';	
			

			
	if( have_rows('reapeat_sections') ): ?>
	<div id="editorpage">
	<?php while( have_rows('reapeat_sections') ): the_row();?> 
		<?php // vars
		$id_section = get_sub_field('id_section');
		$backgroundcolor_section = get_sub_field('backgroundcolor_section');
		$grid_section = get_sub_field('grid_section');
		$reapeat_blocks = get_sub_field('reapeat_blocks');
		?>
		<section <?php if( $backgroundcolor_section ){ echo'style="background-color:'.$backgroundcolor_section.'"';} ?> <?php if( $id_section ){ echo'id="'.$id_section.'"';} ?>>

		<div class="container">



			<?php if( $reapeat_blocks ): ?>
<?php 
// GESTION DES BLOCK BBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBB
// BBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBB
if( have_rows('reapeat_blocks') ):
	echo'<div class="row reapeat_blocks">';	
 	// loop through the rows of data
    while ( have_rows('reapeat_blocks') ) : the_row();
			
		$backgroundcolor_block = get_sub_field('backgroundcolor_block');
		$class_block = get_sub_field('class_block');
		$title_block = get_sub_field('title_block');
		$type_block = get_sub_field('type_block');
		$dynamic_block = get_sub_field('dynamic_block');
			
			
		// $grid_section;
		if ($grid_section == '1/3 + 1/3 + 1/3 + 1/3'){
			echo'<div class="col-lg-4">';	
		}elseif ($grid_section == '1/4 + 1/4 + 1/4'){
			echo'<div class="col-lg-3">';	
		}else {
			echo'<div class="col-lg-12">';	
		}
		
			?>
			<div <?php if( $backgroundcolor_block ){ echo'style="background-color:'.$backgroundcolor_block.'"';} ?> class="wrap <?php if( $class_block ){ echo $class_block;} ?>">
			
			<?php if( $title_block ){ 
				echo'<h3 class="title_block">'.$title_block.'</h3>';}
			?>
			
			<?php if( $type_block =='dynamic' ){ 
// DDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDD
// DDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDD

$dynamic_block = get_sub_field('dynamic_block');

if( $dynamic_block ): 

	// override $post
	$post = $dynamic_block;
	setup_postdata( $post ); 

	?>
    	<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    	<?php if ( '' != get_the_post_thumbnail()) {?>
    	<a href="<?php the_permalink(); ?>" rel="bookmark" class="pull-left thumbnailcontainer">
    	<?php the_post_thumbnail('thumbnail', array('class' => 'img-thumbnail'));?>
    	</a>
		<?php } ?>
    	<?php the_excerpt(); ?>
    	
    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
<?php endif;
	
// DDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDD
// DDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDD
			}else{
        	the_sub_field('content_block');
			}
				
			echo'</div><!--.wrap-->';	
			
		echo'</div><!--.col-lg-4-->';	

    endwhile;
	echo'</div><!--.row-->';	
else :

    // no rows found

endif;
// GESTION DES BLOCK BBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBB
// BBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBB
?>
			
			<?php endif; ?>


		</div>
		</section>
	<?php endwhile; ?>

	</div><!-- #editorpage-->
<?php endif;
			
			
			
			
			
			
			
			

			endwhile; // End of the loop.
			?>


<div class="container">
<?php
//get_sidebar();
get_footer();
