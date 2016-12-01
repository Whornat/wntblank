<?php 
// -----------------------------------------------------------------------------------------------------------------------
// Ajout d'une fonction pour alerter l'administrateur lors de la suppression d'un champ (type "repeater field") dans le BO
// https://support.advancedcustomfields.com/forums/topic/add-remove-field-confirmation-dialog/
// -----------------------------------------------------------------------------------------------------------------------

add_action('acf/input/admin_head', 'my_acf_admin_head');
function my_acf_admin_head() {	?>
	<script type="text/javascript">
	(function($) {
		acf.add_action('ready', function(){
			$('body').on('click', 'a.acf-icon.-minus.small', function( e ){
				return confirm("Souhaitez-vous supprimer cette ligne?");
			});	
			
		});
		
	})(jQuery);	
	</script>
	<?php	
}
?>