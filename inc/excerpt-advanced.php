<?php

/** Ajout excerpts to page ------------------------------------------------------ */ 
 add_action( 'init', 'my_add_excerpts_to_pages' );
function my_add_excerpts_to_pages() {
     add_post_type_support( 'page', 'excerpt' );
}
/** FIN Ajout excerpts to page ------------------------------------------------- */ 

add_filter('get_the_excerpt', 'wpm_manual_excerpt_read_more_link');
function wpm_manual_excerpt_read_more_link($excerpt) {
    $excerpt_more = '';
	// QUELQUES CONTROLE SELON LE TYPE DE CONTENUS------------------------------------
	// SI IL S'AGIT D'UN POST PPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPP
	if (get_post_type() == 'custom') {
	
	
	// SI IL S'AGIT D'UN CUSTOM POST PPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPP
	}else if (get_post_type() == 'custom2') {
		
	
	// SINON PPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPP
	}else{
		
		// Si le contenu possède un excerpt "perso" on affiche quand même un bouton
    	if (has_excerpt() && ! is_attachment())
		// && get_post_type() == 'post'
	  	{
        	$excerpt_more = '&nbsp;<a href="' . get_permalink() . '" class="moretag excerptcustom btn btn-secondary btn-sm">'.esc_html__( 'Readmore', 'wntblank_theme_boot4' ).' <span class="screen-reader-text">' . get_the_title() . '</span></a>';
    	// Si le contenu ne possède pas d'excerpt manuel, mais qu'un excerpt auto est généré 
		}else{
       		$excerpt_more = '&nbsp;<a href="' . get_permalink() . '" class="moretag excerptauto btn btn-secondary btn-sm">'.esc_html__( 'Readmore', 'wntblank_theme_boot4' ).'  <span class="screen-reader-text">' . get_the_title() . '</span></a>';
		}
		// FIN --------------------------------------------------------------------
	
	}
	// FIN PPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPP
    return $excerpt . $excerpt_more;
}
?>