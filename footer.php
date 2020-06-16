<footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-8">
                <!-- <h2 class="footer-heading mb-4">About Us</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                  Neque facere laudantium magnam voluptatum autem. Amet aliquid
                  nesciunt veritatis aliquam.
                </p> -->

                <?php 
                if(is_active_sidebar( 'footer-col-1' )){
                  dynamic_sidebar( 'footer-col-1' );
                }
                ?>
                
              </div>
              <div class="col-md-4 ml-auto">

              <?php 
                if(is_active_sidebar( 'footer-col-2' )){
                  dynamic_sidebar( 'footer-col-2' );
                }
                ?>
               
              </div>
              
            </div>
          </div>
          <div class="col-md-4 ml-auto">        

            <div class="mb-5">
              <h2 class="footer-heading mb-4">Subscribe to Newsletter</h2>
              <form action="#" method="post" class="footer-suscribe-form">
                <div class="input-group mb-3">
                  <input type="text" class="form-control border-secondary text-white bg-transparent" placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
                  <div class="input-group-append">
                    <button class="btn btn-primary text-white" type="button" id="button-addon2">Subscribe</button>
                  </div>
                </div>
                </form>
              </div>


              <h2 class="footer-heading mb-4">

                <?php if(get_theme_mod('ur_social_heading')){
                  echo get_theme_mod('ur_social_heading');
                } ?>
                
              </h2>

              <?php if(get_theme_mod('ur_facebook')){?>
                <a href="https://facebook.com/<?php echo get_theme_mod('ur_facebook'); ?>" class="smoothscroll pl-0 pr-3" target="_blank"><span class="icon-facebook"></span></a>
              <?php } 

               if(get_theme_mod('ur_twitter')){?>
                <a href="https://twitter.com/<?php echo get_theme_mod('ur_twitter'); ?>" class="smoothscroll pl-0 pr-3" target="_blank"><span class="icon-twitter"></span></a>
              <?php } 

              if(get_theme_mod('ur_instagram')){?>
                <a href="https://instagram.com/<?php echo get_theme_mod('ur_instagram'); ?>" class="smoothscroll pl-0 pr-3" target="_blank"><span class="icon-instagram"></span></a>
              <?php } 

               if(get_theme_mod('ur_linkdin')){?>
                <a href="https://linkdin.com/<?php echo get_theme_mod('ur_linkdin'); ?>" class="smoothscroll pl-0 pr-3" target="_blank"><span class="icon-linkedin"></span></a>
              <?php } ?>              
               
            
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
            <p class="copyright"><small>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

            <?php 

            if(get_theme_mod('ur_copyright')){
              echo get_theme_mod('ur_copyright');
            }
            ?>            
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </small></p>
            </div>
          </div>
          
        </div>
      </div>
    </footer>

  </div>


  <?php 
  
  wp_footer(); 
  
  ?>
  
  </body>
</html>