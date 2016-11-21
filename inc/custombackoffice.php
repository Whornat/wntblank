<?php
/**
 * CUSTOM BACKOFFICE FONCTION
 * See: --
 *
 * @package Best_theme
 */


//---------------------

// -------------------CUSTOMISATION LOGING PAGE ----------------------------------------------
function my_login_logo() { ?>
    <style type="text/css">
	body.login div#login h1 a { background-image: url('http://www.whornat.com/logo_W-white.png'); background-size: auto; width:auto;}
	/*body.login div#login h1:after { content:''; margin-bottom:1em; display:block;}*/
	.login h1 a { height:170px; margin-bottom:0}

	html, body, .wp-dialog { background-color: #692647 !important;}
	.login form { box-shadow: 0 0 5px 1px rgba(100, 100, 100, 0.3) !important;}
	.login #backtoblog a, .login #nav a { color:#fff;}
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );


//* Unregister metabox on Custom Post Type
if (is_admin()) :
function my_remove_meta_boxes() {
 if( !current_user_can('manage_options') ) {
	 // desactiver la posibilité de modifier couleur de l'admin
	//remove_menu_page( 'index.php' );                  //Dashboard
	//remove_menu_page( 'edit.php' );                   //Posts
	//remove_menu_page( 'upload.php' );                 //Media
	//remove_submenu_page( 'index.php', 'update-core.php' );//Media
	//remove_menu_page( 'edit.php?post_type=page' );    //Pages
	//remove_menu_page( 'edit.php?post_type=formation' );    //Pages
	remove_menu_page( 'edit-comments.php' );          //Comments
	remove_menu_page( 'themes.php' );                 //Appearance
	//remove_menu_page( 'plugins.php' );                //Plugins
	//remove_submenu_page( 'users.php', 'users.php' );  
	//remove_submenu_page( 'users.php', 'user-new.php' ); 
	remove_menu_page( 'tools.php' );                  //Tools
	//remove_menu_page( 'options-general.php' );        //Settings	
	remove_menu_page( 'wpcf7' );        //wpcf7	
	//remove_menu_page( 'edit.php?post_type=acf' );        //acf	
	//remove_menu_page( 'cpt_main_menu' );  //cpt	
	//remove_menu_page( 'WP-Optimize' );        //acf	
  
	// Supression du selecteur de couleur
	//remove_action( 'admin_color_scheme_picker', 'admin_color_scheme_picker' );
	
 }
}
add_action( 'admin_menu', 'my_remove_meta_boxes' );
endif;


// suppression des widget de la home ------------------------------------
if (is_admin()) :
    add_action('admin_init', 'rw_remove_dashboard_widgets');
	
	function rw_remove_dashboard_widgets() {
	if( !current_user_can('manage_options') ) {
	remove_meta_box('dashboard_activity', 'dashboard', 'normal'); // activity
    remove_meta_box('dashboard_primary', 'dashboard', 'normal'); // wordpress blog
    //remove_meta_box('dashboard_right_now', 'dashboard', 'normal'); // right now
    //remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal'); // recent comments
    //remove_meta_box('dashboard_incoming_links', 'dashboard', 'normal'); // incoming links
    //remove_meta_box('dashboard_plugins', 'dashboard', 'normal'); // plugins
    //remove_meta_box('dashboard_quick_press', 'dashboard', 'normal'); // quick press
    //remove_meta_box('dashboard_recent_drafts', 'dashboard', 'normal'); // recent drafts
    //remove_meta_box('dashboard_secondary', 'dashboard', 'normal'); // other wordpress news
 }
}

// Ajout de widget custom pour la home ------------------------------------
//add_action('wp_dashboard_setup', 'my_custom_dashboard_widgets');
//Cette option est désactivé CI-DESSUS

function my_custom_dashboard_widgets() {
global $wp_meta_boxes;
	if( !current_user_can('manage_options') ) {
		wp_add_dashboard_widget('custom_help_widget', 'Titre du widget 01', 'custom_dashboard_help');
		wp_add_dashboard_widget('custom_help_widget2', 'Titre du widget 02', 'custom_dashboard_help2');
	}
}

function custom_dashboard_help() {echo '<p><p>';}
function custom_dashboard_help2() { echo '<p></p>';}
// Fin ajout de widget custom pour la home ------------------------------------

endif;
// Fin is_admin ------------------------------------




?>