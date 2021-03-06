/**
 * customizer.js
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

( function( $ ) {
	// Site title and description.
	wp.customize( 'blogname', function( value ) {
		value.bind( function( to ) {
			$( '.site-title a' ).text( to );
		} );
	} );
	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( to ) {
			$( '.site-description' ).text( to );
		} );
	} );
	// Header text color.
	wp.customize( 'header_textcolor', function( value ) {
		value.bind( function( to ) {
			if ( 'blank' === to ) {
				$( '.site-title a, .site-description' ).css( {
					'clip': 'rect(1px, 1px, 1px, 1px)',
					'position': 'absolute'
				} );
			} else {
				$( '.site-title a, .site-description' ).css( {
					'clip': 'auto',
					'position': 'relative'
				} );
				$( '.site-title a, .site-description' ).css( {
					'color': to
				} );
			}
		} );
	} );
	//
	// AJOUT DE MA NOUVELLE FONCTION
	wp.customize( 'content_position', function( value ) {
		value.bind( function( newval ) {
			//$('#primary').css( 'float', newval );
			$('#primary').removeClass( 'pull-left pull-right' );
			$('#primary').addClass( newval );
		} );
	} );
	// AJOUT DE MA NOUVELLE FONCTION
	wp.customize( 'content_size', function( value ) {
		value.bind( function( newval ) {
			//$('#primary').css( 'float', newval );
			$('#primary').removeClass( 'col-lg-12 col-lg-9 col-lg-8' );
			$('#primary').addClass( newval );
			if (newval === 'col-lg-8'){
				$('#secondary').removeClass( 'col-lg-12 col-lg-9' );
				$('#secondary').addClass('col-lg-8');
			} else if (newval === 'col-lg-9'){
				$('#secondary').removeClass( 'col-lg-12 col-lg-8' );
				$('#secondary').addClass('col-lg-9');
			} else if (newval === 'col-lg-12'){
				$('#secondary').removeClass( 'col-lg-9 col-lg-8' );
				$('#secondary').addClass('col-lg-12');
			}
			
			
		} );
	} );
	
	
	
} )( jQuery );
