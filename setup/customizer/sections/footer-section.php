<?php
function ur_footer_section( $wp_customize ){

    // Add Section 

        // Copyright
        $wp_customize->add_section(
            'ur_footer_section',
            [
                'title' => __('Footer', 'unreath'),
                'priority' => 30,
                'panel' => 'ur_general_panel'
            ]
        );

    // Add Setting 

        // Copyright
        $wp_customize->add_setting(
            'ur_copyright',
            [
                'default' => ''
            ]
        );

        // Footer Social Heading
        $wp_customize->add_setting(
            'ur_social_heading',
            [
                'default' => 'Follow Us'
            ]
        );
    // Add Control

        // Copyright
        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'id_copyright_input',
                array(
                    'label' => __('Copyright Text', 'unreath'),
                    'section' => 'ur_footer_section',
                    'settings' => 'ur_copyright',
                    'type' => 'textarea'
                )
            )
        );

        // Footer Social Heading
        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'id_social_heading_input',
                array(
                    'label' => __('Copyright Text', 'unreath'),
                    'section' => 'ur_footer_section',
                    'settings' => 'ur_social_heading',
                    'type' => 'textarea'
                )
            )
        );

   
}