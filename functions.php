<?php 

// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );

// Chargement des styles et scripts
function register_assets() {
    wp_enqueue_style( 
        'fontawesome', 
        get_template_directory_uri() . '/fonts/fontawesome/css/all.css',
        array(), 
        '1.0'
    );
    // Déclarer le fichier CSS de Materialize
    wp_enqueue_style( 
        'materialize', 
        get_template_directory_uri() . '/css/materialize.min.css',
        array('fontawesome'), 
        '1.0'
    );

    // Déclarer style.css à la racine du thème
    wp_enqueue_style( 
        'custom',
        get_stylesheet_uri(), 
        array('fontawesome', 'materialize'), 
        '1.0'
    );

    // Déclarer le script js de Materialize
	wp_enqueue_script( 
        'materialize', 
        get_template_directory_uri() . '/js/materialize.min.js', 
        array(), 
        '1.0', 
        true
    );
}
add_action( 'wp_enqueue_scripts', 'register_assets' );

// Déclaration des menus
register_nav_menus( array(
	'main' => 'Menu Principal',
	'footer' => 'Bas de page',
) );