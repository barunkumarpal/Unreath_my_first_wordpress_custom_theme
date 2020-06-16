<?php
function ur_redirect_login(){
    global $pagenow;

    if( !is_user_logged_in() && $pagenow == 'wp-login.php' ){
        wp_redirect( site_url().'/clogin' );
        exit();
    }
}



