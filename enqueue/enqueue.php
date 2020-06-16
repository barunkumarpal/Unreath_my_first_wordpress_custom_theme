<?php

function ur_enqueue_styles(){
    $src = get_theme_file_uri();
    $ver = UR_DEV_MODE ? time():false;

    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style( 'main_style', $src.'/css/style.css', array(), $ver, $media = 'all' );
    wp_enqueue_style( 'ur_google_fonts', 'https://fonts.googleapis.com/css?family=Rubik:300,400,700|Oswald:400,700', array(), $ver, $media = 'all' );
    wp_enqueue_style( 'iconmoon_icons', $src.'/fonts/icomoon/style.css', array(), $ver, $media = 'all' );
    wp_enqueue_style( 'ur_bootstrap', $src.'/css/bootstrap.min.css', array(), $ver, $media = 'all' );
    wp_enqueue_style( 'ur_fancybox', $src.'/css/jquery.fancybox.min.css', array(), $ver, $media = 'all' );
    wp_enqueue_style( 'ur_owl_carousel', $src.'/css/owl.carousel.min.css', array(), $ver, $media = 'all' );
    wp_enqueue_style( 'ur_owl_default', $src.'/css/owl.theme.default.min.css', array(), $ver, $media = 'all' );
    wp_enqueue_style( 'ur_flaticon', $src.'/fonts/flaticon/font/flaticon.css', array(), $ver, $media = 'all' );
    wp_enqueue_style( 'ur_aos', $src.'/css/aos.css', array(), $ver, $media = 'all' );
    wp_enqueue_style( 'ur_fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css', array(), $ver, $media = 'all' );
    
    wp_enqueue_script('jquery');
    
    wp_enqueue_script( 'ur_popper', $src.'/js/popper.min.js', array(), $ver, true );
    wp_enqueue_script( 'ur_bootstrap', $src.'/js/bootstrap.min.js', array(), $ver, true );
    wp_enqueue_script( 'ur_owl_carousel', $src.'/js/owl.carousel.min.js', array(), $ver, true );
    wp_enqueue_script( 'ur_jquery_sticky', $src.'/js/jquery.sticky.js', array(), $ver, true );
    wp_enqueue_script( 'ur_jquery_waypoints', $src.'/js/jquery.waypoints.min.js', array(), $ver, true );
    wp_enqueue_script( 'ur_jquery_animate_no', $src.'/js/jquery.animateNumber.min.js', array(), $ver, true );
    wp_enqueue_script( 'ur_jquery_fancybox', $src.'/js/jquery.fancybox.min.js', array(), $ver, true );
    wp_enqueue_script( 'ur_jquery_easing', $src.'/js/jquery.easing.1.3.js', array(), $ver, true );
    wp_enqueue_script( 'ur_aos_js', $src.'/js/aos.js', array(), $ver, true );
    wp_enqueue_script( 'ur_main_js', $src.'/js/main.js', array(), $ver, true );
    
}


?>

 