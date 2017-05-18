<?php

//------------------------https://tgomilar.github.io/paroller.js/-------------------------

function wntblank_paroller_scripts() {
//wp_enqueue_style('wntblank_theme_boot4-flexslider', get_template_directory_uri() . '/CSS/flexslider.css');
wp_enqueue_script( 'wntblank_theme_boot4-paroller_script', get_template_directory_uri() . '/JS/parallax/jquery.paroller.min.js','','',true );
wp_enqueue_script( 'wntblank_theme_boot4-paroller_script-init', get_stylesheet_directory_uri() . '/JS/paroller-init.js','','',true );
}
add_action( 'wp_enqueue_scripts', 'wntblank_paroller_scripts' );
//------------------------parallax-------------------------