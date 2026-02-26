<?php
// Caundo el tema es Activado
function mitema_setup() {
    // Para habilitar imagenes destacadas
    add_theme_support( 'post-thumbnails');
    // Agregando mas tamaños de imagenes
    add_image_size( 'squere', 350, 350, true );
    add_image_size( 'portrait', 350, 724, true );
    add_image_size( 'cajas', 400, 375, true );
    add_image_size( 'mediano', 700, 400, true );
    add_image_size( 'blog', 966, 644, true );
}
add_action( 'after_setup_theme', 'mitema_setup');

//Menus de navegación 

function mitemplate_menus() {
    register_nav_menus(array(
        'menu-principal' => __( 'Menu Principal', 'mitema'),
        'menu-principal2' => __( 'Menu Principal2', 'mitema')

    ));
}
add_action( 'init', 'mitemplate_menus' );

// Scripts Styles
function mitemplat_scripts_stayles() {
    // Hoja de estilos Principal
    wp_enqueue_style( 'normalize', get_template_directory_uri(  ) . '/css/normalize.css', array(), '8.0.1');

    wp_enqueue_style('slicknavCSS', get_template_directory_uri() . '/css/slicknav.min.css', array(), '1.0.0');

    wp_enqueue_style( 'mygooglefont', 'https://fonts.google.com/share?selection.family=Montserrat:wght@200;500%7COpen%20Sans:ital,wght@0,300;0,400;1,300%7CRoboto:wght@100', array(), '1.0.0' );
   
    
    // Hoja de estilos principal
    wp_enqueue_style('style', get_stylesheet_uri(), array('normalize','mygooglefont'), '1.0.0');

    //Carga de archivos js
    wp_enqueue_script( 'slicknavJS', get_template_directory_uri() . '/js/jquery.slicknav.min.js', array('jquery'), '1.0.10', true );
    wp_enqueue_script( 'scripts', get_template_directory_uri( ) . '/js/scripts.js', array('jquery', 'slicknavJS'), '1.0.0', true );
    
}
add_action( 'wp_enqueue_scripts', 'mitemplat_scripts_stayles' );
