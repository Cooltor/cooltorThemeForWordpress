<?php 

// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );

function additional_custom_styles() {

    /*Enqueue The Styles*/
    wp_enqueue_style( 'uniquestylesheetid', get_template_directory_uri() . '/css/custom.css' ); 
}
add_action( 'wp_enqueue_scripts', 'additional_custom_styles' );

register_nav_menus( array(
	'main' => 'Menu Principal',
	'footer' => 'Bas de page',
) );


