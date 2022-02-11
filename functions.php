<?php

# Functionality supported by theme
function wordpress_theme_support() {

	add_theme_support( 'post-thumbnails' );

    $defaults = array(
        'flex-height' => true,
        'flex-width' => true,
        'header-text' => 'site-description',
        'unlink-homepage-logo' => true
    );
    add_theme_support( 'custom-logo', $defaults );
}

add_action( 'after_setup_theme', 'wordpress_theme_support' );

# Load styles
function wordpress_theme_add_styles() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'icons', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css");
    
}
add_action( 'wp_enqueue_scripts', 'wordpress_theme_add_styles' );

# Load scripts
function wordpress_theme_add_scripts() {
    wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/index.js', array(), '1.0', true );
    
    # Localise script for Ajax call
    wp_localize_script( 'script', 'the_ajax_script', array( 'ajaxurl' => admin_url( 'admin-ajax.php' )));
}
add_action( 'wp_enqueue_scripts', 'wordpress_theme_add_scripts' );

# Navigation
function wordpress_theme_register_menus() {
    register_nav_menus(
        array(
            'header-menu' => ('Header menu'),
        )
    );
}
add_action( 'init', 'wordpress_theme_register_menus' );

# AJAX
function wordpress_theme_select_post() {
    # Store post id
    $id = $_POST['post_id'];
    # Generate content
    $data = '<img src="' . get_the_post_thumbnail_url($id, 'thumbnail') . '">' . '<h3>' . get_the_title($id) . '</h3><p>' . get_the_excerpt($id) . '</p> <a href="' . wp_get_shortlink( $id ) . '">Read more</a>';
    #Respond with content
    wp_die($data);
}
add_action( 'wp_ajax_nopriv_wordpress_theme_select_post', 'wordpress_theme_select_post' );
add_action( 'wp_ajax_wordpress_theme_select_post', 'wordpress_theme_select_post' );

