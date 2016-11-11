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
	 
	 
	 
	 remove_action( 'admin_color_scheme_picker', 'admin_color_scheme_picker' );
	 
	 // pas la peine de masquer la ligne ci-dessous : le nouveau groupe ne peut pas assigner de term ;)
	//remove_meta_box( 'adhesiondiv', 'initiative', 'side' );
	remove_meta_box( 'authordiv','initiative','normal' ); // Author Metabox
	remove_meta_box( 'commentstatusdiv','initiative','normal' ); // Comments Status Metabox
	remove_meta_box( 'commentsdiv','initiative','normal' ); // Comments Metabox
	remove_meta_box( 'postcustom','initiative','normal' ); // Custom Fields Metabox
	remove_meta_box( 'postexcerpt','initiative','normal' ); // Excerpt Metabox
	remove_meta_box( 'revisionsdiv','initiative','normal' ); // Revisions Metabox
	remove_meta_box( 'slugdiv','initiative','normal' ); // Slug Metabox
	remove_meta_box( 'trackbacksdiv','initiative','normal' ); // Trackback Metabox
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

//****
add_action('wp_dashboard_setup', 'my_custom_dashboard_widgets');
 
function my_custom_dashboard_widgets() {
global $wp_meta_boxes;
	if( !current_user_can('manage_options') ) {
		wp_add_dashboard_widget('custom_help_widget', 'Bienvenue sur votre espace d\'administration', 'custom_dashboard_help');
		wp_add_dashboard_widget('custom_help_widget2', 'Une réalisation Page de marque', 'custom_dashboard_help2');
	}
}

function custom_dashboard_help() {
echo '<p>Vous vous trouvez dans le back-office de votre site.</p> pour visualiser votre site cliquez sur le lien intitulé <b>"aller sur le site"</b>, accessible en survolant l\'icône représentant une maison <img src="http://pagedemarque.com/wp-icon-maison.gif"> <b>en haut à gauche de cette page.</b>';
}

function custom_dashboard_help2() {
echo '<p>Ce site est conçu par l\'agence <b>Page</b>de<b>Marque</b>.</p>
<ul>
<img src="http://ecard.pagedemarque.com/design/logo_pagedemarque.png" alt="pagedemarque communication" style="display:block; float:left; margin-right:1em;">
<li>2 rue de vauquois - 45000 ORLEANS<br/></li>
<li><b>Tel: 02.38.53.27.82</b><br/></li>
<li>contact : <a href="mailto:guillaume@pagedemarque.com">guillaume@pagedemarque.com</a></li>
</ul>
<hr>
';
}

//**



endif;
// suppression des widget de la home ------------------------------------




?>