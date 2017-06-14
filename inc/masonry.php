<?php

// --------------------------------------
// MASONRY ------------------------------
// https://wpchannel.com/masonry-infinite-scroll-wordpress/


// POUR UTILISER infinite SCROLL, il faut rajouter ça dans "Archive.php" par exemple...
//<div class="load-more-manual">
//	<nav id="page-nav" role="navigation">
//next_posts_link( __( '<span class="more btn btn-primary btn-lg btn-block">Annonces suivante</span>', 'wpc' ) );
//</nav>
//</div>



if (! function_exists('slug_scripts_masonry') ) :
if ( ! is_admin()) :
function slug_scripts_masonry() {
	wp_register_script( 'infinite-scroll', get_template_directory_uri().'/JS/jquery.infinitescroll.min.js', 'jquery', '2.0', true );
    wp_enqueue_script('jquery-masonry');
	wp_enqueue_script( 'infinite-scroll' );
}
add_action( 'wp_enqueue_scripts', 'slug_scripts_masonry' );
endif; //! is_admin()
endif; //! slug_scripts_masonry exists

if ( ! function_exists( 'slug_masonry_init' )) :
function slug_masonry_init() { ?>



<script>
jQuery( document ).ready( function( $ ) {
    /* Masonry + Infinite Scroll */
    var $container = $('#loops');
    $container.imagesLoaded(function () {
        $container.masonry({
            itemSelector: '.blocmasonry',
        });
    });
    $('#loops').masonry({
        itemSelector: '.blocmasonry',
  		columnWidth: '.grid-sizer',
    });
    $container.infinitescroll({
        navSelector: '#page-nav',
        nextSelector: '#page-nav a',
        itemSelector: '.blocmasonry',
        loading: {
            msgText: 'Chargement des contenus...',
            finishedMsg: 'Aucun contenu à charger.',
            img: 'http://i.imgur.com/6RMhx.gif'
        }
    }, function (newElements) {
        var $newElems = $(newElements).css({
            opacity: 0
        });
        $newElems.imagesLoaded(function () {
            $newElems.animate({
                opacity: 1
            });
            $container.masonry('appended', $newElems, true);
        });
    });
    $(window).unbind('.infscr');
    jQuery("#page-nav a").click(function () {
        jQuery('#loops').infinitescroll('retrieve');
        return false;
    });
    $(document).ajaxError(function (e, xhr, opt) {
        if (xhr.status == 404) $('#page-nav a').remove();
    });
});
</script>


<?php }
//add to wp_footer
add_action( 'wp_footer', 'slug_masonry_init' );
endif; // ! slug_masonry_init exists


?>
