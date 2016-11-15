<?php

// faire appel à une partie d'un template :
get_template_part( 'template-parts/listing-client', get_post_format() );
// tester le type de contenu 
if ( 'nomduposttype' === get_post_type() ) {}
// afficher les infos de la derniere requete pour par exemple...
get_queried_object()->term_id;
// ... récupérer l'id de la categorie ou le nom
$term_id = get_queried_object()->term_id;
$term_name = get_queried_object()->name;	
// afficher une featured image
if ( '' != get_the_post_thumbnail()) {
the_post_thumbnail('thumbnail', array('class' => 'avatar'));
}
// le permalink d'une archive d'une custom taxonomy
$term_link_art = get_term_link( 'nomduterm', 'nomdelataxonomy' );
// Afficher la list des terms d'un post
get_the_term_list( $post->ID, 'nomdelataxonomy', '<span>', '', '</span>' );



// LES BOUCLES BBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBB		
// BBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBB	

// ------------------------------------
// Boucle avec positionnement du post
// ------------------------------------

$loop = new WP_Query(
array(
'post_type' => 'portfolio',
//'nomtaxomomy' => 'term',
//'posts_per_page' => 6,
//'post__in' => get_option('sticky_posts'),
//'posts_per_page' => -1,
//'orderby' => 'post_date',
)
);
$count =0;	

if ( $loop ) : $post_idx = 1;
while ( $loop->have_posts() ) : $loop->the_post();
get_template_part( 'item', 'projet' ); $post_idx++;
endwhile;
else:
get_template_part( 'item', 'none' );
endif;
wp_reset_postdata();

// Pour afficher la position du post il faut inserer ceci dans le fichier du "get_template_part"
global $post_idx;
echo $post_idx;

// ------------------------------------
// afficher uniquement les stickypost
// ------------------------------------

$sticky = get_option('sticky_posts');
if (!empty($sticky)) {
    rsort($sticky);
    $args = array(
        'post__in' => $sticky
    );
    query_posts($args);
    while (have_posts()) { the_post();
	get_template_part( 'stickpost', 'bulle' );
    }
}





// ACF FFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFF		
// FFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFF		

// Afficher un champs
    	if( get_field('NOMDUCHAMPSACF') ):
		the_field('NOMDUCHAMPSACF');
		endif;

// INSERER une image dans le theme enfant
// FFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFF		

//<img src="echo get_stylesheet_directory_uri(); /IMG/XXX.png">
//PAS ça car c'est le theme parent
//<img src="echo get_template_directory_uri(); /IMG/XXX.png">

?>
