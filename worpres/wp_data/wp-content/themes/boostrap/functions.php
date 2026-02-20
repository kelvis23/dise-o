<?php
function wpbootstrap_styles(){

    //Normalize
    wp_enqueue_style( 'normalize',get_stylesheet_directory_uri( ).'/css/normalize.css');
    //Bootstrap css
    wp_enqueue_style( 'bootstrapcss', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' );

    wp_enqueue_style('style', get_stylesheet_uri( ), array('normalize','bootstrapcss') );

    wp_enqueue_script( 'jquery');
    //Bootstrap js
    wp_enqueue_script( 'bootstrapjs', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js', array ('jquery'), '3.3.3', true );

}
add_action('wp_enqueue_scripts', 'wpbootstrap_styles');
// Navegacion

register_nav_menus( array(
    'menu_principal' => __('Menu Principal', 'wpbootstrap')
) );