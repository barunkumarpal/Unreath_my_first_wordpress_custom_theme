<!doctype html>
<html <?php language_attributes(); ?>>

  <head>

    <!-- <title><?php //echo get_the_title( $post->ID);?></title> -->

    <meta charset="<?php bloginfo( 'charset' ); ?>" >

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">   


    <?php wp_head();?>
  </head>

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300" <?php body_class(); ?>>

  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>
  
  <div class="site-wrap"  id="home-section">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   

    <div class="top-bar">
      <div class="container">
        <div class="row">
          <div class="col-12">

            <?php if(get_theme_mod('ur_email_id')){ ?>

                <a href="mailto:<?php echo get_theme_mod('ur_email_id'); ?>" class="text-white">
                <span class="mr-2 text-white icon-envelope-open-o"></span> 
                  <span class="d-none d-md-inline-block">
                    
                      <?php  echo get_theme_mod('ur_email_id'); ?>
                                
                  </span>              
                </a>

            <?php } ?>

            <span class="mx-md-2 d-inline-block"></span>

            <?php if(get_theme_mod('ur_phone_no')){ ?>

              <a href="#" class="text-white"><span class="mr-2 text-white icon-phone"></span>             
                <span class="d-none d-md-inline-block">

                    <?php echo get_theme_mod( 'ur_phone_no' ); ?>

                </span>
              </a>

            <?php } ?>

            <div class="float-right">

            <?php if( get_theme_mod( 'ur_twitter' )){ ?>

              <a href="https://twitter.com/<?php echo get_theme_mod( 'ur_twitter' ); ?>" class="text-white" target="_blank">
                <span class="mr-2 text-white icon-twitter"></span> 
                <span class="d-none d-md-inline-block">Twitter</span>
              </a>

            <?php } ?>

            <span class="mx-md-2 d-inline-block"></span>

            <?php if( get_theme_mod('ur_instagram')){ ?>

              <a href="https://instagram.com/<?php echo get_theme_mod('ur_instagram'); ?>" class="text-white" target="_blank">
                <span class="mr-2 text-white icon-instagram"></span> 
                <span class="d-none d-md-inline-block">Instagram</span>
              </a>

            <?php } ?>

            </div>

          </div>
          
        </div>
        
      </div>
    </div>
      
    <header class="site-navbar js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center position-relative">
          
            
            <div class="site-logo">
              <a href="<?php echo site_url();?>" class="text-black">
                <?php 
                  if(has_custom_logo()){
                    the_custom_logo();
                  } else{ ?>
                    <span class="text-primary"><?php bloginfo('name');?></a>
                  <?php }

                ?>
              <!--  -->
            </div>
            
            <div class="col-12">
              <nav class="site-navigation text-right ml-auto " role="navigation">

                    <?php 
                    if(has_nav_menu('primary')){
                      $args = array(                       
                        'menu_class'      => 'site-menu main-menu js-clone-nav ml-auto d-none d-lg-block',
                        'depth'           => 3,
                        'walker'          => new JU_Custom_Nav_Walker(),
                        'theme_location'  => 'primary',
                      );
  
                      wp_nav_menu( $args );
                    }              

                    ?>              
              </nav>




              

          
            </div>

          <div class="toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>

     
      
    </header>