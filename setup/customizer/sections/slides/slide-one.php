<?php 

function ur_home_slide_one( $wp_customize ){
    // Add Setting

    // Slide ONE

        // Heading Text
        $wp_customize->add_setting(
            'ur_slider_heading_1',
            [
                'default' => 'Heading Text One'
            ]
        );
    // Sub-Heading Text
        $wp_customize->add_setting(
        'ur_slider_subheading_1',
        [
            'default' => 'Sub Heading Text One'
        ]
    );

    // Image
    $wp_customize->add_setting(
        'ur_slider_image_1',
        [
            'default' => ''
        ]
    );

    // Buton Text
    $wp_customize->add_setting(
        'ur_slider_btn_1',
        [
            'default' => 'Get in Touch'
        ]
    );

    // Buton Link
    $wp_customize->add_setting(
        'ur_slider_btn_1_link',
        [
            'default' => ''
        ]
    );

// Add Control

    // Slide ONE

        // Heading Text

        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'ur_slide_one_heading_input',
                array(
                    'label'=> __('Slide One Heading Text', 'unreath'),
                    'section' => 'ur_banner_section',
                    'settings' => 'ur_slider_heading_1',
                    'type' => 'text'
                )
            )
        );

         // Sub-Heading Text

         $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'ur_slide_one_sub_heading_input',
                array(
                    'label'=> __('Slide One Sub Heading Text', 'unreath'),
                    'section' => 'ur_banner_section',
                    'settings' => 'ur_slider_subheading_1',
                    'type' => 'text'
                )
            )
        );

        // Image

        $wp_customize->add_control(
            new WP_Customize_Upload_Control(
                $wp_customize,
                'ur_slide_image_1_input',
                array(
                    'label'          => __( 'Slide One Image', 'udemy' ),
                    'section'        => 'ur_banner_section',
                    'settings'       => 'ur_slider_image_1'           
                )
            )
        );

        // Button Text

        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'ur_slide_btn_1_input',
                array(
                    'label'          => __( 'Slide One Button Text', 'udemy' ),
                    'section'        => 'ur_banner_section',
                    'settings'       => 'ur_slider_btn_1'           
                )
            )
        );

         // Button Link

         $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'ur_slide_btn_1_link_input',
                array(
                    'label'          => __( 'Slide One Button Link', 'udemy' ),
                    'section'        => 'ur_banner_section',
                    'settings'       => 'ur_slider_btn_1_link'           
                )
            )
        );
}