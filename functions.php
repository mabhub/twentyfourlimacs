<?php

function twentyfourlimacs_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri()   . '/style.css' );
    wp_enqueue_style( 'child-default-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style'));
    wp_enqueue_style( 'child-main-style',    get_stylesheet_directory_uri() . '/main.css', array('child-default-style'));
}

add_action( 'wp_enqueue_scripts', 'twentyfourlimacs_enqueue_styles' );
