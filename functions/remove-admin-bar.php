<?php
 
 function ur_remove_admin_bar(){

    if( !current_user_can('edit_posts') ){
        show_admin_bar(false);
    }
 }