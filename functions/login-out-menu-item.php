<?php
function ur_add_loginout_link( $items, $args ){
    if($args->theme_location == 'primary'){
        $new_link = "<li>".wp_loginout( site_url(), false )."</li>";

        return $items.$new_link;
    }

    return $items;
}