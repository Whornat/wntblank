		<?php
		// test si le champ "google_map" existe, et si c'st le cas on récupère les données
		$location = get_field('google_map');
		// on explose la chaine pour extraire l'adresse
		$address = explode( ',' , $location['address']);
		//echo $address[0].'<br/>'; //place name
		//echo $address[1].'<br/>'; // street address
		//echo $address[2].’,’.$address[3]; // city, state zip
		
		if( !empty($location) ):
		?>
    		<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"
            <?php if( has_term( 'collecte-selective-textiles', 'container' ) ) {
				echo'data-icon="http://maps.google.com/mapfiles/ms/micons/yellow.png"';
			}else if ( has_term( 'colonnes-a-papiers', 'container' ) ){
				echo'data-icon="http://maps.google.com/mapfiles/ms/micons/red.png"';
			}else if ( has_term( 'colonnes-a-verre', 'container' ) ){
				echo'data-icon="http://maps.google.com/mapfiles/ms/micons/blue.png"';
			}else {
				//si child theme
				//echo'data-icon="'.get_stylesheet_directory_uri().'/IMG/marker_red.png"';
				echo'data-icon="'.get_template_directory_uri().'/IMG/marker_red.png"';
			}?>
            id="map_<?php echo$post->ID?>">
            
            <b>
			<?php the_title() ?>
            </b><br/>
            <?php echo $address[0].','.$address[1];?><br/>
            <a href="<?php the_permalink()?>" class="btn btn-primary btn-sm" >Plus d'informations</a>
            </div>
		<?php
		// fin du test
        endif;
		?>