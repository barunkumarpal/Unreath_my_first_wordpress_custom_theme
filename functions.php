<?php


// Includes & Actions
$path = get_theme_file_path();
define('UR_DEV_MODE', true);

// Redirect Login Page
include($path.'/functions/login.php');
add_action('init', 'ur_redirect_login');
add_action('wp_logout', 'ur_redirect_login');

// Enqueue Styles
include( $path.'/enqueue/enqueue.php' );
add_action('wp_enqueue_scripts', 'ur_enqueue_styles');

// After Setup Theme
include( $path.'/setup/setup.php');
add_action('after_setup_theme', 'ur_all_after_setup');
add_action('after_setup_theme', 'ur_secondary_menu');

// Customizer API
include( $path.'/setup/customizer/customize.php' );
include( $path.'/setup/customizer/sections/contact_section.php' );
include( $path.'/setup/customizer/sections/banner_section.php' );
include( $path.'/setup/customizer/sections/slides/slide-one.php' );
include( $path.'/setup/customizer/sections/slides/slide-two.php' );
include( $path.'/setup/customizer/sections/footer-section.php');

add_action( 'customize_register', 'ur_theme_customizer' );

// Widgets
include( $path.'/setup/widgets/widgets.php');

add_action('widgets_init', 'ur_footer_widget');

// Login-out link withing menu
include( $path.'/functions/login-out-menu-item.php');
add_filter('wp_nav_menu_items', 'ur_add_loginout_link', 10, 2);

// Remove readmore ...
add_filter('excerpt_more', '__return_false');

// Excerpt length

//add_filter('excerpt_length', function($length){ return 20;}, 999);

// function get_excerpt( $count ) {
//     $permalink = get_permalink($post->ID);
//     $excerpt = get_the_content();
//     $excerpt = strip_tags($excerpt);
//     $excerpt = substr($excerpt, 0, $count);
//     $excerpt = substr($excerpt, 0, strripos($excerpt, " "));
//    // $excerpt = '<p>'.$excerpt.'... <a href="'.$permalink.'">Read More</a></p>';
//     return $excerpt;
//     }

// need to paset it where to show the excerpt
//echo get_excerpt(20);

// Custom Comment Walker
include( $path.'/functions/custom_comment_walker.php');



// Change reply link <a> tag class
include( $path.'/functions/replace-comment-reply-link.php');
add_filter('comment_reply_link', 'replace_reply_link_class');

// Remove Admin bar for subscribers
include( $path.'/functions/remove-admin-bar.php');
add_action('after_setup_theme', 'ur_remove_admin_bar');

// Custom Nav Walker
include( $path.'/templates/custom-nav-walker.php');























