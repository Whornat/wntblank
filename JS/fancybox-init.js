$(function() {

	// activation sur les galeries---
	$(".fancybox, .gallery-icon > a").fancybox({});
	
	// activation par defaut----
	$("[data-fancybox]").fancybox({
		// Options will go here
	});

	// *************************************************************************
	// CREATION AUTOMATIQUE D'effet FANCYBOX SUR IMAGE WP ----------------------
	// *************************************************************************
	
		// EFFET IFRAME
		$(".entry-content .iframelink").attr('data-fancybox','iframe');
		$(".entry-content .iframelink").attr('data-src',$(this).attr("href"));
		$(".entry-content .iframelink").attr('data-type','iframe');	
		
		// EFFET FANCY SUR Lien avec image
		// ????DESACTIVE CAR BUG AVEC IMAGE AVEC LIEN EXTERN
	   	//$(".entry-content").find("a:has(img)").addClass('fancybox');
		//$(".entry-content").find("a:has(img)").attr('rel','group1');
	
		//Forcer suppression d'un effet fancy
		$(".entry-content").find("a.nofancybox").removeClass('fancybox');
	

		// SI UN LIEN DANS UN ARTICLE contient un fichier image, crÃ©ation d'un effet fancyauto
		$('.entry-content a[href*=".jpg"]').addClass('fancybox');
		$('.entry-content a[href*=".jpg"]').attr('data-fancybox','group1');
		$('.entry-content a[href*=".png"]').addClass('fancybox');
		$('.entry-content a[href*=".png"]').attr('data-fancybox','group1');
		$('.entry-content a[href*=".jpeg"]').addClass('fancybox');
		$('.entry-content a[href*=".jpeg"]').attr('data-fancybox','group1');	
	
			
		// FIXER LE LIENS IMAGES DU BLOG AVEC EFFET AJAX
		$(".entry-content .thumbnailcontainer").attr('data-filter','#main .hentry');
		$(".entry-content .thumbnailcontainer").attr('data-src',$(this).attr("href"));
		$(".entry-content .thumbnailcontainer").attr('data-type','ajax');
	
	
			
      $(".fancybox").fancybox( {
					fitToView	: true,
					autoSize	: true,
					autoHeight	: true,
					closeClick	: false,
					openEffect	: 'none',
					closeEffect	: 'none',
					padding			: 10,
					helpers		: {
						title	: { type : 'float' },
						buttons	: {}
					}
				} );
	    $("a.group").fancybox({'transitionIn':'elastic','transitionOut':'elastic','speedIn':600,'speedOut':200,'overlayShow':false});
	// *************************************************************************
	// *************************************************************************


});
