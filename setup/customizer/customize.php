<?php
function ur_theme_customizer( $wp_customize ){

    // Add Panel 

        // Unreath Theme Settings
        $wp_customize->add_panel(
            'ur_general_panel',
            [
                'title'=> __('Unreath Theme Settings', 'unreath'),
                'description' => '<p>Theme Settings</p>',
                'priority' => 160
            ]
        );

    // Contact Section
    ur_contact_section( $wp_customize );

    // Banner Section
    ur_banner_section( $wp_customize );

    // Footer Section
    ur_footer_section( $wp_customize );

        
  
}