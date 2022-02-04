<?php

function wordpress_theme_support() {

	add_theme_support( 'post-thumbnails' );
}

add_action( 'after_setup_theme', 'wordpress_theme_support' );

function wordpress_theme_add_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'wordpress_theme_add_scripts' );

function wordpress_theme_register_menus() {
    register_nav_menus(
        array(
            'header-menu' => ('Header menu'),
        )
    );
}
add_action( 'init', 'wordpress_theme_register_menus' );

?>


