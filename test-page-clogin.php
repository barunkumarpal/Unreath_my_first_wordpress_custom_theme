<?php



get_header(); 


if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

global $wpdb;


    if( $_POST ){
        // check input and
        // do my login stuff here   

        $username = $wpdb->escape( $_POST['username'] );
        $pwd = $wpdb->escape( $_POST['pwd'] );

        $login_array = array(
            'user_login'    => $username,
            'user_password' => $pwd,
            'remember'      => true
        );       

        

        $verify_user = wp_signon( $login_array, true);

        if( is_wp_error($verify_user) ){

            echo $user->get_error_message();
            
        }else{
             echo "<script>window.location = '".site_url()."'</script>";
           
        }
    }  else{ 
         
             get_template_part('/templates/partials/login','form'); ?>

           

      <?php

        }


      
       
get_footer();