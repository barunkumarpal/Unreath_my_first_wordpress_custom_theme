<?php
function ur_banner_section( $wp_customize ){

    // Add Section 
    $wp_customize->add_section(
        'ur_banner_section',
        [
            'title' => __('Home Slider', 'unreath'),
            'priority' => 30,
            'panel' => 'ur_general_panel'
        ]
    );

    ur_home_slide_one( $wp_customize );
    ur_home_slide_two( $wp_customize );
    

    
}