//For the Bootstrap 4 version you just need to change the navbarToggle variable from navbarToggle = '.navbar-toggle' to navbarToggle = '.navbar-toggler', that's it.
//http://bootbites.com/tutorials/how-make-bootstrap-3-4-dropdowns-show-hover-desktop-only
// Différence avec v01 : pas de transition

$(document).ready(function() { 
  var navbarToggle = '.navbar-toggler'; // name of navbar toggle, BS3 = '.navbar-toggle', BS4 = '.navbar-toggler'  
  $('.dropdown, .dropup').each(function() {
    var dropdown = $(this),
      dropdownToggle = $('[data-toggle="dropdown"]', dropdown),
      dropdownHoverAll = dropdownToggle.data('dropdown-hover-all') || false;
    
    // Mouseover
    dropdown.hover(function(){
      var notMobileMenu = $(navbarToggle).size() > 0 && $(navbarToggle).css('display') === 'none';
      if ((dropdownHoverAll == true || (dropdownHoverAll == false && notMobileMenu))) { 
        dropdownToggle.trigger('click');
      }
    })
  });
});