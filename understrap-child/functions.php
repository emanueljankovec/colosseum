<?php

// add_action('wp_head', 'insert_header');
// function insert_header() {
// }

// add_action( 'wp_footer', 'scripts_footer' , 50);
// function scripts_footer(){
// }

function colosseum_enqueue_styles() {
    wp_enqueue_style( 'main-css', get_stylesheet_directory_uri() . '/style.css' );
    wp_enqueue_style( 'home-template-css', get_stylesheet_directory_uri() . '/assets/css/home-template.css' );
    wp_enqueue_style( 'contact-template-css', get_stylesheet_directory_uri() . '/assets/css/contact-template.css' );
    wp_enqueue_style( 'about-us-template-css', get_stylesheet_directory_uri() . '/assets/css/about-us-template.css' );
}

add_action( 'wp_enqueue_scripts', 'colosseum_enqueue_styles' );

function colosseum_enqueue_scripts() {
    wp_enqueue_script('child-script', get_stylesheet_directory_uri() . '/assets/js/main.js', [], '1.0.0', true);
}

add_action( 'wp_enqueue_scripts', 'colosseum_enqueue_scripts' );