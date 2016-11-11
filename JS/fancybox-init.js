$(document).ready(function() {	
	$(".fancybox, .gallery-icon > a").fancybox({
		helpers : {
        overlay : {
            css : {
                'background' : 'rgba(250, 250, 250, 0.75)'
            }
        }
    },		
		maxWidth	: 1200,
		//maxHeight	: 490,
		fitToView	: false,
		width		: '90%',
		height		: '90%',
		autoSize	: false,
		closeClick	: false,
		openEffect	: 'none',
		closeEffect	: 'none',
		//-----
	    helpers : {
        overlay : {
            css : {
                'background' : 'rgba(250, 250, 250, 0.75)'
            }
        }
    }
	//-----
		
	});
	
$('.ajaxlink').fancybox({
	    helpers : {
        overlay : {
            css : {
                'background' : 'rgba(250, 250, 250, 0.75)'
            }
        }
    },
		//scrolling : 'none',
		maxWidth	: 750,
		//maxHeight	: 490,
		fitToView	: false,
		width		: '70%',
		height		: 'auto',
    type: 'ajax',
	
	
    ajax: {
        dataFilter: function(data) {
            return $(data).find('#main > article')[0];
        }
		
    }
});
	
});