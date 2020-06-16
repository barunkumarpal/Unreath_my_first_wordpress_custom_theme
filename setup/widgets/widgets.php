<?php

function ur_footer_widget(){

    //Footer Col-1
    register_sidebar(
        [
            'name'          => __('Footer Col-1', 'unreath'),
            'id'            => 'footer-col-1',
            'description'   => __('Sidebar for Footer column one', 'unreath'),
            //'class'         => 'test-class',
            'before_widget' => '',
            'after_widget'  => '',
            'before_title' =>   '<h2 class="footer-heading mb-4">',
            'after_title'  => '</h2>'
        ]
    );

    // Footer Col-2
    register_sidebar(
        [
            'name'          => __('Footer Col-2', 'unreath'),
            'id'            => 'footer-col-2',
            'description'   => __('Sidebar for Footer column two', 'unreath'),
           // 'class'         => 'list-unstyled',
            'before_widget' => '',
            'after_widget'  => '',
            'before_title' =>   '<h2 class="footer-heading mb-4">',
            'after_title'  => '</h2>'
        ]
    );
}