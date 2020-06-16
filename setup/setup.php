<?php

function ur_all_after_setup(){

    // Page title
    add_theme_support('title-tag');

    // Custom Logo 
    add_theme_support( 'custom-logo' );

    // Featured Image
    add_theme_support('post-thumbnails');
        // Image sizes
        add_image_size( 'banner', 1900, 400, false);
        add_image_size( 'ur_post_thumbnail', 600, 300, false );
        add_image_size( 'ur_post_medium', 1000, 300, false );
    
    // Menu
    //add_theme_support( 'menus' );
    
    // register_nav_menu('primary', __('Main Menu', 'unreath') );

    // register_nav_menu( 'footer_links', __('Footer Menu', 'unreath') ); 

    register_nav_menus( array(
        'primary' => __('Main Menu', 'unreath'),
        'footer_links' => __('Footer Menu', 'unreath'),
    )
    );
    
}

function ur_secondary_menu(){

    
    
}