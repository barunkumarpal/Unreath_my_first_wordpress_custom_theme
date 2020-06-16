<?php
function ur_contact_section($wp_customize){
     // Add Section 

        // Contact
        $wp_customize->add_section(
            'all_contact',
            [
                'title' => __('Contact', 'unreath'),
                'priority' => 30,
                'panel' => 'ur_general_panel'
            ]
        );

    
    // Add Setting 

        // Email ID
        $wp_customize->add_setting(
            'ur_email_id',
            [
                'default' => 'gmail@email.com'
            ]
        );

        // Phone No
        $wp_customize->add_setting(
            'ur_phone_no',
            [
                'default' => '+91'
            ]
        );

        // Twitter
        $wp_customize->add_setting(
            'ur_twitter',
            [
                'default' => 'barun'
            ]
        );

        // Instagram
        $wp_customize->add_setting(
            'ur_instagram',
            [
                'default' => 'barun'
            ]
        );

        // Facebook
        $wp_customize->add_setting(
            'ur_facebook',
            [
                'default' => 'barun'
            ]
        );

        // Linkdin
        $wp_customize->add_setting(
            'ur_linkdin',
            [
                'default' => 'barun'
            ]
        );

    // Add Control

        // Email ID
        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'id_email_id_input',
                array(
                    'label' => __('Email Id', 'unreath'),
                    'section' => 'all_contact',
                    'settings' => 'ur_email_id',
                    'type' => 'text'
                )
            )
        );

        // Phone No
        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'id_phone_input',
                array(
                    'label' => __('Phone number', 'unreath'),
                    'section' => 'all_contact',
                    'settings' => 'ur_phone_no',
                    'type' => 'text'
                )
            )
        );

        // Twitter
        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'id_twitter_input',
                array(
                    'label' => __('Twitter Handle', 'unreath'),
                    'section' => 'all_contact',
                    'settings' => 'ur_twitter',
                    'type' => 'text'
                )
            )
        );

        // Instagram
        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'id_instagram_input',
                array(
                    'label' => __('Instagram Handle', 'unreath'),
                    'section' => 'all_contact',
                    'settings' => 'ur_instagram',
                    'type' => 'text'
                )
            )
        );

        // Facebook
        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'id_facebook_input',
                array(
                    'label' => __('Facebook Handle', 'unreath'),
                    'section' => 'all_contact',
                    'settings' => 'ur_facebook',
                    'type' => 'text'
                )
            )
        );

        // Linkdin
        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'id_linkdin_input',
                array(
                    'label' => __('Linkdin Connect', 'unreath'),
                    'section' => 'all_contact',
                    'settings' => 'ur_linkdin',
                    'type' => 'text'
                )
            )
        );
}