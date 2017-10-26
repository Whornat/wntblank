/*!
 * Bootstrap 4 Dropdowns On Hover
 * http://bootbites.com/tutorials/how-make-bootstrap-3-4-dropdowns-show-hover-desktop-only
 * LE 1ER SCRIPT CI DESSUS NE PERMETTAIT PAS LE SURVOLE ET CLIKABLEE.. DONC aternative ci-dessous ;)
 * http://stackoverflow.com/questions/25692514/bootstrap-how-do-i-make-dropdown-navigation-parent-links-an-active-link
 */
 
 
 /* ENLEVER LA CLASS TOUCH SI MOBILE OU TABLETTE*/
 jQuery(function($){

	// Touch Device Detection
	var isTouchDevice = 'ontouchstart' in document.documentElement;
	if( isTouchDevice ) {
		$('body').removeClass('no-touch');
	}

});
 
 
$(document).ready(function() { 
	
  
$('.no-touch .navbar .dropdown').hover(function() {
$(this).find('.dropdown-menu').first().stop(true, true).delay(250).slideDown();

}, function() {
$(this).find('.dropdown-menu').first().stop(true, true).delay(100).slideUp();

});

$('.no-touch .navbar .dropdown > a').click(function(){
location.href = this.href;
});

  
  
  
  
  
});