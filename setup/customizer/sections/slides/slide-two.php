<?php 

function ur_home_slide_two( $wp_customize ){
    // Add Setting

    // Slide ONE

        // Heading Text
        $wp_customize->add_setting(
            'ur_slider_heading_2',
            [
                'default' => 'Heading Text Two'
            ]
        );
        // Sub-Heading Text
            $wp_customize->add_setting(
            'ur_slider_subheading_2',
            [
                'default' => 'Sub Heading Text Two'
            ]
        );

        // Image
        $wp_customize->add_setting(
            'ur_slider_image_2',
            [
                'default' => ''
            ]
        );

        // Button Text
        $wp_customize->add_setting(
            'ur_slider_btn_2',
            [
                'default' => 'Get in Touch'
            ]
        );

        // Button Link
        $wp_customize->add_setting(
            'ur_slider_btn_2_link',
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
                'ur_slide_two_heading_input',
                array(
                    'label'=> __('Slide Two Heading Text', 'unreath'),
                    'section' => 'ur_banner_section',
                    'settings' => 'ur_slider_heading_2',
                    'type' => 'text'
                )
            )
        );

         // Sub-Heading Text

         $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'ur_slide_two_sub_heading_input',
                array(
                    'label'=> __('Slide Two Sub Heading Text', 'unreath'),
                    'section' => 'ur_banner_section',
                    'settings' => 'ur_slider_subheading_2',
                    'type' => 'text'
                )
            )
        );

        // Image

        $wp_customize->add_control(
            new WP_Customize_Upload_Control(
                $wp_customize,
                'ur_slide_image_2_input',
                array(
                    'label'          => __( 'Slide Two Image', 'udemy' ),
                    'section'        => 'ur_banner_section',
                    'settings'       => 'ur_slider_image_2'           
                )
            )
        );

        // Button Text

        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'ur_slide_btn_2_input',
                array(
                    'label'          => __( 'Slide Two Button Text', 'udemy' ),
                    'section'        => 'ur_banner_section',
                    'settings'       => 'ur_slider_btn_2'           
                )
            )
        );

        // Button Link

        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'ur_slide_btn_link_2_input',
                array(
                    'label'          => __( 'Slide Two Button Link', 'udemy' ),
                    'section'        => 'ur_banner_section',
                    'settings'       => 'ur_slider_btn_2_link'           
                )
            )
        );
}