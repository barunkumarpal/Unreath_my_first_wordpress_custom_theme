<?php
/* Template Name: Custom Login */

if(is_user_logged_in()){
    wp_redirect( site_url() );
    exit();
}else{


if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

global $wpdb;


    if( isset($_POST['username'], $_POST['pwd']) && !empty($_POST['username']) && !empty($_POST['pwd']) ){
        // check input and
        // do my login stuff here   

        $username = $wpdb->escape( $_POST['username'] );
        $pwd = $wpdb->escape( $_POST['pwd'] );

        if(isset($_POST['rememberme'])){
            $remember = $_POST['rememberme'];
        }    
       
        $login_array = array(
            'user_login'    => $username,
            'user_password' => $pwd,
            'remember'      => $remember
        );       

        

        $verify_user = wp_signon( $login_array, false);

        if( is_wp_error($verify_user) ){

            echo $verify_user->get_error_message();
            
        }else{
             echo "<script>window.location = '".site_url()."'</script>";
           
        }
    }  else { get_header();      
              ?>
<div class="container">
            <div class="row">
                <!-- Login Form -->
                <div class="col-md-4"></div>
                <div class="col-md-4 bg-dark p-4 mb-4 mt-4">

                    <h3 class="text-center text-white">User Login</h3>
                    <form method="POST">
                        <div class="form-group">                            
                            <input type="text" name="username" id="username" class="form-control" placeholder="Username / Email">
                        </div>
                        
                        <div class="form-group">                            
                            <input type="password" name="pwd" id="pwd" class="form-control" placeholder="Password">
                        </div>  

                        <div class="row">
                            <div class="col-md-12">
                                <label class="pull-left checkbox-inline text-white">
                                    <input type="checkbox" id="rememberme" name="rememberme" value="true">
                                     Remember me
                                </label>
                            </div>                            
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-block btn-primary">Login</button>
                            </div>
                        </div>            

                    </form>

                    <h3 class="text-center text-white mt-3 mb-3">OR</h3>
                    <p class="text-center">
                        <a href="<?php echo site_url().'/cregistration';?>" class="btn btn-warning">Create an Account</a>
                    </p>
                   
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
           

      <?php
get_footer();
        }


}
       
