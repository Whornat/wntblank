<?php 
// AJOUT DE CUSTOM FIELDS CCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCC
// CCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCC
	
	//http://boiteaweb.fr/term-meta-dans-wordpress-4-4-ce-quil-faut-savoir-9878.html
	
	// 1 xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
    // Ajouter l’interface utilisateur
	// 1 xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
	
// remplacer "client" par la taxonomy souhaitée, ici "client"	-------
	
add_action( 'client_add_form_fields', 'baw_new_term_color_field' );
function baw_new_term_color_field() {
	wp_nonce_field( 'add_term_meta_color', 'add_term_meta_color_nonce' );
	?>
	<div class="form-field">
		<label for="baw_term_color"><?php _e( 'Front Color', 'baw' ); ?></label>
		<input type="text" name="baw_term_color" id="baw_term_color" data-default-color="#FFFFFF" value="#FFFFFF" />
	</div>
	<?php
}

add_action( 'client_edit_form_fields', 'baw_edit_term_color_field' );
function baw_edit_term_color_field( $term ) {

	$color = get_term_meta( $term->term_id, 'color', true );
	$color = preg_match('|^#([A-Fa-f0-9]{3}){1,2}$|', $color ) ? $color : '#FFFFFF';

	?>
	<tr class="form-field">
		<th scope="row"><label for="baw_term_color"><?php _e( 'Front Color', 'baw' ); ?></label></th>
		<td>
			<?php wp_nonce_field( 'add_term_meta_color', 'add_term_meta_color_nonce' ); ?>
			<input type="text" name="baw_term_color" id="baw_term_color" value="<?php echo esc_attr( $color ); ?>" data-default-color="#FFFFFF" />
		</td>
	</tr>
<?php
}

// AJOUTER UN PICKER COLOR --------------------------------------------
add_action( 'admin_head-edit-tags.php', 'baw_admin_enqueue_scripts' );
function baw_admin_enqueue_scripts() {

	global $taxnow;
	if ( 'client' != $taxnow ) {
		return;
	}

	wp_enqueue_style( 'wp-color-picker' );
	wp_enqueue_script( 'wp-color-picker' );

	add_action( 'admin_footer', 'baw_term_colors_print_scripts' );
}

function baw_term_colors_print_scripts() {
?>
	<script type="text/javascript">
		jQuery( document ).ready( function( $ ) {
			$( '#baw_term_color' ).wpColorPicker();
		} );
	</script>
<?php
}
// AJOUTER une colonne dans la gestion des term  --------------------------------------------
add_filter( 'manage_edit-client_columns', 'baw_edit_term_columns' );
function baw_edit_term_columns( $columns ) {
	$columns['color'] = __( 'Front Color', 'baw' );

	return $columns;
}
// STYLE CSS pour la colonne ------------------------------------------------ */

add_action( 'admin_head-edit-tags.php', 'baw_admin_enqueue_styles' );
function baw_admin_enqueue_styles() {

	global $taxnow;
	if ( 'client' != $taxnow ) {
		return;
	}

	add_action( 'admin_head',   'baw_term_colors_print_styles' );
}

function baw_term_colors_print_styles() {
	?>
	<style type="text/css">
		.column-color { width: 50px; }
		.column-color .color-block { display: inline-block; width: 28px; height: 28px; border: 1px solid #ddd; }
	</style>
<?php
}

	// 2 xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
    // ON SAUVEGARDE 
	// 2 xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
	

add_action( 'edit_client', 'baw_save_term_color' );
add_action( 'create_client', 'baw_save_term_color' );
function baw_save_term_color( $term_id ) {
	if ( defined( 'DOING_AJAX' ) ) {
		return;
	}
	if ( ! isset( $_POST['add_term_meta_color_nonce'] ) ||
		! isset( $_POST['baw_term_color'] ) ||
		! wp_verify_nonce( $_POST['add_term_meta_color_nonce'], 'add_term_meta_color' )
	) {
		wp_nonce_ays( '' );
	}

	$color = $_POST['baw_term_color'];
	$color = preg_match('|^#([A-Fa-f0-9]{3}){1,2}$|', $color ) ? $color : false;

	if ( $color ) {
		update_term_meta( $term_id, 'color', $color );
	} else {
		delete_term_meta( $term_id, 'color' );
	}
}



/////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////


add_action( 'client_add_form_fields', 'baw_new_term_website_field' );
function baw_new_term_website_field() {
	wp_nonce_field( 'add_term_meta_website', 'add_term_meta_website_nonce' );
	?>
	<div class="form-field">
		<label for="baw_term_website"><?php _e( 'Website', 'baw' ); ?></label>
		<input type="text" name="baw_term_website" id="baw_term_website" />
	</div>
	<?php
}

add_action( 'client_edit_form_fields', 'baw_edit_term_website_field' );
function baw_edit_term_website_field( $term ) {

	$website = get_term_meta( $term->term_id, 'website', true );
	?>
	<tr class="form-field">
		<th scope="row"><label for="baw_term_website"><?php _e( 'Website', 'baw' ); ?></label></th>
		<td>
			<?php wp_nonce_field( 'add_term_meta_website', 'add_term_meta_website_nonce' ); ?>
			<input type="text" name="baw_term_website" id="baw_term_website" value="<?php echo esc_attr( $website ); ?>"/>
		</td>
	</tr>
<?php
}


	// 2 xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
    // ON SAUVEGARDE 
	// 2 xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
	

add_action( 'edit_client', 'baw_save_term_website' );
add_action( 'create_client', 'baw_save_term_website' );
function baw_save_term_website( $term_id ) {
	if ( defined( 'DOING_AJAX' ) ) {
		return;
	}
	if ( ! isset( $_POST['add_term_meta_website_nonce'] ) ||
		! isset( $_POST['baw_term_website'] ) ||
		! wp_verify_nonce( $_POST['add_term_meta_website_nonce'], 'add_term_meta_website' )
	) {
		wp_nonce_ays( '' );
	}

	$website = $_POST['baw_term_website'];

	if ( $website ) {
		update_term_meta( $term_id, 'website', $website );
	} else {
		delete_term_meta( $term_id, 'website' );
	}
}

?>