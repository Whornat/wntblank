<?php
/**
 * CUSTOM POST FONCTION
 * See: --
 *
 * @package Best_theme projet
 */

// Creating a marques Custom Post Type
// LES PROJETS ------------------------------------
function portfolio_custom_post_type() {
$labels = array(
'name'                => __( 'Projet' ),
'singular_name'       => __( 'Projet'),
'menu_name'           => __( 'Projets'),
'parent_item_colon'   => __( 'Parent Projets'),
'all_items'           => __( 'All Projets'),
'view_item'           => __( 'View Projets'),
'add_new_item'        => __( 'Add New Projets'),
'add_new'             => __( 'Add New'),
'edit_item'           => __( 'Edit Projets'),
'update_item'         => __( 'Update Projets'),
'search_items'        => __( 'Search Projets'),
'not_found'           => __( 'Not Found'),
'not_found_in_trash'  => __( 'Not found in Trash')
);
$args = array(
'label'               => __( 'Projets'),
'hierarchical' => true,
'description'         => __( 'Projets'),
'labels'              => $labels,
'supports'            => array( 'title', 'editor', 'excerpt', 'page-attributes', 'author', 'thumbnail', 'revisions', 'custom-fields', 'comments'),
'public'              => true,
'menu_icon' => 'dashicons-portfolio',
'hierarchical'        => true,
'show_ui'             => true,
'show_in_menu'        => true,
'show_in_nav_menus'   => true,
'show_in_admin_bar'   => true,
'has_archive'         => true,
'can_export'          => true,
'exclude_from_search' => false,
'rewrite' => array('slug'=>'projet','with_front'=>true),
'yarpp_support'       => true,
'publicly_queryable'  => true,
'capability_type'     => 'page'
);
register_post_type( 'portfolio', $args );
}
add_action( 'init', 'portfolio_custom_post_type', 0 );
// LES PROJETS ------------------------------------
// sketchbook ------------------------------------
function sketchbook_custom_post_type() {
$labels = array(
'name'                => __( 'sketchbook' ),
'singular_name'       => __( 'sketchbook'),
'menu_name'           => __( 'Sketchbook'),
'parent_item_colon'   => __( 'Parent sketchbook'),
'all_items'           => __( 'All sketchbook'),
'view_item'           => __( 'View sketchbook'),
'add_new_item'        => __( 'Add New sketchbook'),
'add_new'             => __( 'Add New'),
'edit_item'           => __( 'Edit sketchbook'),
'update_item'         => __( 'Update sketchbook'),
'search_items'        => __( 'Search sketchbook'),
'not_found'           => __( 'Not Found'),
'not_found_in_trash'  => __( 'Not found in Trash')
);
$args = array(
'label'               => __( 'sketchbook'),
'description'         => __( 'sketchbook'),
'labels'              => $labels,
'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields', 'post-formats'),
'public'              => true,
'menu_icon' => 'dashicons-format-gallery',
'hierarchical'        => false,
'show_ui'             => true,
'show_in_menu'        => true,
'show_in_nav_menus'   => true,
'show_in_admin_bar'   => true,
'has_archive'         => true,
'can_export'          => true,
'exclude_from_search' => false,
'rewrite' => array('slug'=>'sketchbook','with_front'=>true),
'yarpp_support'       => true,
'publicly_queryable'  => true,
'capability_type'     => 'page'
);
register_post_type( 'sketchbook', $args );
}
// désactivé!!!
//add_action( 'init', 'sketchbook_custom_post_type', 0 );
// art ------------------------------------
function art_custom_post_type() {
$labels = array(
'name'                => __( 'art' ),
'singular_name'       => __( 'art'),
'menu_name'           => __( 'art'),
'parent_item_colon'   => __( 'Parent art'),
'all_items'           => __( 'All art'),
'view_item'           => __( 'View art'),
'add_new_item'        => __( 'Add New art'),
'add_new'             => __( 'Add New'),
'edit_item'           => __( 'Edit art'),
'update_item'         => __( 'Update art'),
'search_items'        => __( 'Search art'),
'not_found'           => __( 'Not Found'),
'not_found_in_trash'  => __( 'Not found in Trash')
);
$args = array(
'label'               => __( 'art'),
'description'         => __( 'art'),
'labels'              => $labels,
'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields', 'post-formats'),
'public'              => true,
'menu_icon' => 'dashicons-format-gallery',
'hierarchical'        => false,
'show_ui'             => true,
'show_in_menu'        => true,
'show_in_nav_menus'   => true,
'show_in_admin_bar'   => true,
'has_archive'         => true,
'can_export'          => true,
'exclude_from_search' => false,
'rewrite' => array('slug'=>'art','with_front'=>true),
'yarpp_support'       => true,
'publicly_queryable'  => true,
'capability_type'     => 'page'
);
register_post_type( 'art', $args );
}
add_action( 'init', 'art_custom_post_type', 0 );
// Creating AVIS Custom Post Type
// LES AVIS ------------------------------------
function avisclients_custom_post_type() {
$labels = array(
'name'                => __( 'Avis clients' ),
'singular_name'       => __( 'Avis client'),
'menu_name'           => __( 'Avis clients'),
'parent_item_colon'   => __( 'Parent Avis clients'),
'all_items'           => __( 'All Avis clients'),
'view_item'           => __( 'View Avis clients'),
'add_new_item'        => __( 'Add New Avis clients'),
'add_new'             => __( 'Add New'),
'edit_item'           => __( 'Edit Avis clients'),
'update_item'         => __( 'Update Avis clients'),
'search_items'        => __( 'Search Avis clients'),
'not_found'           => __( 'Not Found'),
'not_found_in_trash'  => __( 'Not found in Trash')
);
$args = array(
'label'               => __( 'Avis clients'),
'hierarchical' => true,
'description'         => __( 'Avis clients'),
'labels'              => $labels,
'supports'            => array( 'title', 'editor', 'excerpt', 'author',  'custom-fields', 'revisions'),
'public'              => true,
'menu_icon' => 'dashicons-smiley',
'hierarchical'        => true,
'show_ui'             => true,
'show_in_menu'        => true,
'show_in_nav_menus'   => true,
'show_in_admin_bar'   => true,
'has_archive'         => true,
'can_export'          => true,
'exclude_from_search' => false,
'rewrite' => array('slug'=>'avisclients','with_front'=>true),
'yarpp_support'       => true,
'publicly_queryable'  => true,
'capabilities' => array(
        'edit_post' => 'edit_avisclient',
        'edit_posts' => 'edit_avisclients',
        'edit_others_posts' => 'edit_other_avisclient',
        'publish_posts' => 'publish_avisclient',
        'read_post' => 'read_avisclient',
        'read_private_posts' => 'read_private_avisclient',
        'delete_post' => 'delete_avisclient'
    )
);
register_post_type( 'avisclients', $args );
}
add_action( 'init', 'avisclients_custom_post_type', 0 );
// AUTORISER ADMINISTRATOR A EDITER LES AVIS
function add_theme_caps() {
    $admins = get_role( 'administrator' );

    $admins->add_cap( 'edit_avisclient' ); 
    $admins->add_cap( 'edit_avisclients' ); 
    $admins->add_cap( 'edit_other_avisclient' ); 
    $admins->add_cap( 'publish_avisclient' ); 
    $admins->add_cap( 'read_avisclient' ); 
    $admins->add_cap( 'read_private_avisclient' ); 
    $admins->add_cap( 'delete_avisclient' ); 
}
add_action( 'admin_init', 'add_theme_caps');
// AUTORISER ADMINISTRATOR A EDITER LES AVIS

// create two taxonomies, Types and writers for the post type "book"
function create_tagprojet_taxonomies() {
	// Add new taxonomy, make it hierarchical (like categories)
	$labels = array(
		'name'              => _x( 'Mots clefs', 'taxonomy general name' ),
		'singular_name'     => _x( 'Mots clefs', 'taxonomy singular name' ),
		'search_items'      => __( 'Search Mots clefs' ),
		'all_items'         => __( 'All Mots clefs' ),
		'parent_item'       => __( 'Parent Mots clefs' ),
		'parent_item_colon' => __( 'Parent Mots clefs:' ),
		'edit_item'         => __( 'Edit Mots clefs' ),
		'update_item'       => __( 'Update Mots clefs' ),
		'add_new_item'      => __( 'Add New Mots clefs' ),
		'new_item_name'     => __( 'New Type Mots clefs' ),
		'menu_name'         => __( 'Mots clefs' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'tag-projet' ),
	);

	register_taxonomy( 'tag-projet', array( 'portfolio', 'art' ), $args );

}
// hook into the init action and call create_book_taxonomies when it fires
add_action( 'init', 'create_tagprojet_taxonomies', 0 );


// CCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCC
// cacher les enfant ------------------------------
// le 26 oct. ça marche pas ......
// CCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCC

add_action( 'pre_get_posts', 'slug_cpt_category_archives' );

function slug_cpt_category_archives( $query ) {
  if ( 
  $query->is_main_query()
  //is_tax( 'tag-projet' )
   )  {
    foreach ( $query->tax_query->queries as $i => $tax_query ) {
      if ( $tax_query['taxonomy'] === 'tag-projet' ) {
         $query->tax_query->queries[$i]['include_children'] = false;
         // if you want to set 'include_children' to false for all
         // taxonomies than remove following return
         return;
      }
    }
  }
}



?>