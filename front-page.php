<?php 

get_header();

?>
    
    <div class="owl-carousel slide-one-item">
      

      

      <div class="site-section-cover overlay img-bg-section" 
        style="background-image: url('<?php
            if( get_theme_mod('ur_slider_image_1') ){

                echo get_theme_mod('ur_slider_image_1');

              }?>'); " >
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-12 col-lg-7">
              <h1 data-aos="fade-up" data-aos-delay="">
                <?php
                  if( get_theme_mod('ur_slider_heading_1') ){

                    echo get_theme_mod('ur_slider_heading_1');
                    
                  };                             
                ?>
              </h1>  
              <p class="mb-5" data-aos="fade-up" data-aos-delay="100">
                <?php
                  if( get_theme_mod('ur_slider_subheading_1') ){

                    echo get_theme_mod('ur_slider_subheading_1');
                    
                  };
                ?>
              </p>
              <p data-aos="fade-up" data-aos-delay="200">

              <?php if( get_theme_mod('ur_slider_btn_1') ){?>

                <a href="<?php echo get_theme_mod('ur_slider_btn_1_link');?>" class="btn btn-outline-white border-w-2 btn-md">

                <?php echo get_theme_mod('ur_slider_btn_1');?>

                </a>

                <?php } ?>
              </p>
            </div>
          </div>
        </div>

      </div>

      <div class="site-section-cover overlay img-bg-section" style="background-image: url('<?php
            if( get_theme_mod('ur_slider_image_2') ){

                echo get_theme_mod('ur_slider_image_2');

              }?>'); " >
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-12 col-lg-8">
              <h1 data-aos="fade-up" data-aos-delay="">
                <?php
                if( get_theme_mod('ur_slider_heading_2') ){

                    echo get_theme_mod('ur_slider_heading_2');

                }?>             
              </h1>      
              <p class="mb-5" data-aos="fade-up" data-aos-delay="100">
                <?php
                  if( get_theme_mod('ur_slider_subheading_2') ){

                    echo get_theme_mod('ur_slider_subheading_2');

                  }?>                
              </p>
              <p data-aos="fade-up" data-aos-delay="200">

                <?php if( get_theme_mod('ur_slider_btn_2') ){?>

                <a href="<?php echo get_theme_mod('ur_slider_btn_2_link');?>" class="btn btn-outline-white border-w-2 btn-md">
                
                <?php echo get_theme_mod('ur_slider_btn_2');?>
                
                </a>

              <?php } ?>

              </p>
            </div>
          </div>
        </div>

      </div>
      

    </div>
    
    <div class="site-section">
      <div class="block__73694 mb-2" id="services-section">
        <div class="container">
          <div class="row d-flex no-gutters align-items-stretch">

           <?php if(get_field('section_one')){
              $section = get_field('section_one');  ?> 

            <div class="col-12 col-lg-6 block__73422" style="background-image: url('<?php                                     
              echo $section['image'];             
            ?>');" data-aos="fade-right" data-aos-delay="">             
            </div>

            

            <div class="col-lg-5 ml-auto p-lg-5 mt-4 mt-lg-0" data-aos="fade-left" data-aos-delay="">
              <h2 class="mb-3 text-black">
                <?php 
                  echo $section['heading'];
                ?>
              </h2>
              <p>
                  <?php 
                    echo $section['description'];           
                  ?>
              </p>            

              <ul class="ul-check primary list-unstyled mt-5">
                <?php 
                
                // echo "<pre>";
                // print_r($section_feature_rows);
                // echo "</pre>";

                if( get_field('section_one') ){
                    
                    $section_one = get_field('section_one');
                    $feature_rows = $section_one['feature'];                   

                    foreach( $feature_rows as $feature_row){
                        $feature_name = $feature_row['feature_name']; ?>

                        <li><?php echo $feature_name;  ?></li>                     
                     
                   <?php }
                   }
                ?>
                
              </ul>
              
            </div>
           <?php } ?>

          </div>
        </div>      
      </div>


      <div class="block__73694">
        <div class="container">
          <div class="row d-flex no-gutters align-items-stretch">

            <?php if( get_field('section_two') ){
              $section_two = get_field('section_two'); ?>
            
            <div class="col-12 col-lg-6 block__73422 order-lg-2" style="background-image: url('<?php 
              echo $section_two['image'];
            ?>');" data-aos="fade-left" data-aos-delay="">
            </div>

            

            <div class="col-lg-5 mr-auto p-lg-5 mt-4 mt-lg-0 order-lg-1" data-aos="fade-right" data-aos-delay="">
              <h2 class="mb-3 text-black">

              <?php
                echo $section_two['heading'];
              ?>

              </h2>
              <p>
                <?php
                  echo $section_two['description'];
                ?>
              </p>

              <ul class="ul-check primary list-unstyled mt-5">

              <?php
               if(get_field('section_two')){
                 $section_two = get_field('section_two');
                 $feature_rows = $section_two['feature'];

                 foreach( $feature_rows as $feature_row){
                  $feature_name = $feature_row['feature_name'];?>
                  <li><?php echo $feature_name ; ?></li>
                 <?php }
               }
              ?>                
                
              </ul>

            </div>

            <?php } ?>

          </div>
        </div>      
      </div>
    </div>

    <div class="site-section bg-light">
      <div class="container">
        <div class="row">

        <?php if( have_rows('services') ){
                while( have_rows('services') ){
                  the_row();
        ?>

          <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="">
            <div class="block__35630">
              <div class="icon mb-3">
                <!-- <span class="flaticon-mining"></span> -->
                <img src="<?php echo get_sub_field('image');?>"/>
              </div>
              <h3 class="mb-3"><?php echo get_sub_field('title');?></h3>
              <?php echo get_sub_field('description');?>
            </div>
          </div>

        <?php } }?> 

        </div>
      </div>
    </div>


    <div class="site-section bg-dark" id="about-section">
      <div class="container">
        <div class="row justify-content-center mb-4 block-img-video-1-wrap">

        <?php if(get_field('video_thumbnail')){ 
          
          $video_field = get_field('video_thumbnail');
          $video_thumbnail = $video_field['image'];
          $vidoe_url = $video_field['link'];
         
        ?>

          <div class="col-md-12 mb-5">
            <figure class="block-img-video-1" data-aos="fade">
              <a href="<?php echo $vidoe_url; ?>" data-fancybox data-ratio="2">
                <span class="icon"><span class="icon-play"></span></span>
                <img src="<?php echo $video_thumbnail;?>" alt="Image" class="img-fluid">
              </a>
            </figure>
          </div>

        <?php } ?>

        </div>
        <div class="row">
          <div class="col-12">

          <?php if( get_field('four_column_counter') ){

            $four_column = get_field('four_column_counter');

            $fc_col_1 = $four_column['col-one'];

              $fc_col_1_title = $fc_col_1['title'];
              $fc_col_1_count = $fc_col_1['count'];

            $fc_col_2 = $four_column['col-two'];

              $fc_col_2_title = $fc_col_2['title'];
              $fc_col_2_count = $fc_col_2['count'];

            $fc_col_3 = $four_column['col-three'];

              $fc_col_3_title = $fc_col_3['title'];
              $fc_col_3_count = $fc_col_3['count'];

            $fc_col_4 = $four_column['col-four'];

              $fc_col_4_title = $fc_col_4['title'];
              $fc_col_4_count = $fc_col_4['count'];

            

            // echo "<pre>";
            // print_r($fc_col_1_title);
            // echo "</pre>";



          }?>
            <div class="row">
              <div class="col-6 col-md-6 mb-4 col-lg-0 col-lg-3" data-aos="fade-up" data-aos-delay="">
                <div class="block-counter-1">
                  <span class="number"><span data-number="<?php echo $fc_col_1_count;?>">0</span>+</span>
                  <span class="caption"><?php echo $fc_col_1_title;?></span>
                </div>
              </div>
              <div class="col-6 col-md-6 mb-4 col-lg-0 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                <div class="block-counter-1">
                  <span class="number"><span data-number="<?php echo $fc_col_2_count;?>">0</span>+</span>
                  <span class="caption"><?php echo $fc_col_2_title;?></span>
                </div>
              </div>
              <div class="col-6 col-md-6 mb-4 col-lg-0 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                <div class="block-counter-1">
                  <span class="number"><span data-number="<?php echo $fc_col_3_count;?>">0</span>+</span>
                  <span class="caption"><?php echo $fc_col_3_title;?></span>
                </div>
              </div>
              <div class="col-6 col-md-6 mb-4 col-lg-0 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                <div class="block-counter-1">
                  <span class="number"><span data-number="<?php echo $fc_col_4_count;?>">0</span>+</span>
                  <span class="caption"><?php echo $fc_col_4_title;?></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section" id="team-section">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-7 text-center">

          <?php if(get_field('section_heading_team')){

            $sh_team = get_field('section_heading_team');
            $sh_team_title = $sh_team['title'];
            $sh_team_desc = $sh_team['description'];
            
          ?>

            <div class="block-heading-1" data-aos="fade-up" data-aos-delay="">
              <h2><?php echo $sh_team_title; ?></h2>
              <p><?php echo $sh_team_desc; ?></p>
            </div>

          <?php } ?>

          </div>
        </div>
        <div class="row">
            <?php 
              $args = array(
                  'post_type'=>'team',
                  'posts_per_page'=>'6'
              );
              $filter = new WP_Query($args);

              if($filter->have_posts()){
                while($filter->have_posts()){
                    $filter->the_post();
              ?>
              
              <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up">
                <div class="block-team-member-1 text-center rounded">
                  <figure>
                    <?php the_post_thumbnail( 'medium', [ 'class' => 'img-fluid rounded-circle'] );?>                   
                  </figure>
                  <h3 class="font-size-20 text-black"><?php the_title(); ?></h3>
                  <span class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3">
                    <?php $designations = get_the_terms( $post->ID, 'designation', '', ', ', '' );
                          //$strip_desg = strip_tags($designation);

                          //print_r($designation);
                          if ( is_array( $designations ) ) {
                            foreach ( $designations as $designation ) {
                                echo $designation->name."<br>";
                            }
                        }
                    ?>
                  </span>
                  <div class="block-social-1">
                      <?php
                      if(get_field('social_links')){
                        $field_social = get_field('social_links');
                        
                        $facebook_link = $field_social['facebook'];
                        $twitter_link = $field_social['twitter'];
                        $insta_link = $field_social['instagram'];
                      ?>
                        <a href="https://facebook.com/<?php echo $facebook_link;?>" target="_blank" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-facebook"></span></a>
                        <a href="https://twitter.com/<?php echo $twitter_link;?>" target="_blank" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-twitter"></span></a>
                        <a href="https://instagram.com/<?php echo $insta_link;?>" target="_blank" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-instagram"></span></a>
                      <?php } ?>
                  </div>
                </div>
              </div> 

          <?php } wp_reset_postdata(); }?>

        </div><!-- row end -->
      </div><!-- Container end -->
    </div><!-- section end -->


    <section class="site-section bg-light" id="pricing-section">
      <div class="container">
        <div class="row mb-5 justify-content-center text-center">
          <div class="col-md-7">
            <div class="block-heading-1" data-aos="fade-up" data-aos-delay="">
              <h2>Pricing</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque quae temporibus tenetur vitae iusto suscipit alias, laudantium, porro unde tempora.</p>
            </div>
          </div>
        </div>
        <div class="row mb-5">
          <div class="col-md-6 mb-4 mb-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="">
            <div class="pricing">
              <h3 class="text-center text-black">Basic</h3>
              <div class="price text-center mb-4 ">
                <span><span>$47</span> / year</span>
              </div>
              <ul class="list-unstyled ul-check success mb-5">
                
                <li>Officia quaerat eaque neque</li>
                <li>Possimus aut consequuntur incidunt</li>
                <li class="remove">Lorem ipsum dolor sit amet</li>
                <li class="remove">Consectetur adipisicing elit</li>
                <li class="remove">Dolorum esse odio quas architecto sint</li>
              </ul>
              <p class="text-center">
                <a href="#" class="btn btn-secondary btn-md">Buy Now</a>
              </p>
            </div>
          </div>

          <div class="col-md-6 mb-4 mb-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="pricing">
              <h3 class="text-center text-black">Premium</h3>
              <div class="price text-center mb-4 ">
                <span><span>$200</span> / year</span>
              </div>
              <ul class="list-unstyled ul-check success mb-5">
                
                <li>Officia quaerat eaque neque</li>
                <li>Possimus aut consequuntur incidunt</li>
                <li>Lorem ipsum dolor sit amet</li>
                <li>Consectetur adipisicing elit</li>
                <li class="remove">Dolorum esse odio quas architecto sint</li>
              </ul>
              <p class="text-center">
                <a href="#" class="btn btn-primary btn-md text-white">Buy Now</a>
              </p>
            </div>
          </div>

          <div class="col-md-6 mb-4 mb-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="pricing">
              <h3 class="text-center text-black">Professional</h3>
              <div class="price text-center mb-4 ">
                <span><span>$750</span> / year</span>
              </div>
              <ul class="list-unstyled ul-check success mb-5">
                
                <li>Officia quaerat eaque neque</li>
                <li>Possimus aut consequuntur incidunt</li>
                <li>Lorem ipsum dolor sit amet</li>
                <li>Consectetur adipisicing elit</li>
                <li>Dolorum esse odio quas architecto sint</li>
              </ul>
              <p class="text-center">
                <a href="#" class="btn btn-secondary btn-md">Buy Now</a>
              </p>
            </div>
          </div>
        </div>
        
        <div class="row site-section" id="faq-section">
          <div class="col-12 text-center" data-aos="fade">
            <h2 class="section-title text-primary">Frequently Ask Questions</h2>
          </div>
        </div>

        <div class="row">
        <?php 
              $args = array(
                'post_type' => 'faq',
                'posts_per_page' => '10'
              );

              $filter = new WP_Query($args);
              
              if($filter->have_posts()){
                while($filter->have_posts()){
                  $filter->the_post();

            ?>   
          <div class="col-lg-6">          
            <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
            <h3 class="text-black h4 mb-4"><?php the_title();?></h3>
            <p><?php the_content();?></p>
            </div>
          </div> 
          <?php  } wp_reset_postdata();  }?>   

        </div><!-- row end -->

      </div>
    </section>

    
    <div class="site-section" id="press-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 mb-5 mb-lg-0">
            <div class="block-heading-1" data-aos="fade-right" data-aos-delay="">
              <h2>Press</h2>
            </div>
          </div>
          <div class="col-lg-6">
            <ul class="list-unstyled">
            <?php 
              $args = array(
                'post_type' => 'news',
                'posts_per_page' => '6'
              );

              $filter = new WP_Query($args);
              
              if($filter->have_posts()){
                while($filter->have_posts()){
                  $filter->the_post();

            ?>  
              <li class="mb-5" data-aos="fade-right" data-aos-delay="">
                <span class="d-block text-muted mb-3"><?php the_date();?></span>
                <h2 class="h4 mb-4"><a href="<?php the_permalink();?>" class="text-black"><?php the_title();?></a></h2>
               
                <a href="<?php the_permalink();?>">
                  <?php the_post_thumbnail('medium', ['class'=>'img-fluid rounded']);?>
                </a>

                <p class="mt-4"><?php $excerpt = get_the_excerpt();
                        echo substr($excerpt,0,200);?>
                </p>

                <a href="<?php the_permalink();?>" class="btn btn-danger">Read more</a>
              </li>  

              <?php  } wp_reset_postdata();  }?> 

            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-light block-13" id="testimonials-section" data-aos="fade">
      <div class="container">
        
        <div class="text-center mb-5">
          <div class="block-heading-1">
            <h2>Testimonial</h2>
          </div>
        </div>

        <div class="owl-carousel nonloop-block-13">
          <div>
            <div class="block-testimony-1 text-center">
              
              <blockquote class="mb-4">
                <p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem, fugit excepturi sapiente voluptatum nulla odio quaerat quibusdam tempore similique doloremque veritatis et cupiditate, maiores cumque repudiandae explicabo tempora deserunt consequuntur?&rdquo;</p>
              </blockquote>

              <figure>
                <img src="images/person_4.jpg" alt="Image" class="img-fluid rounded-circle mx-auto">
              </figure>
              <h3 class="font-size-20 text-black">Ricky Fisher</h3>
            </div>
          </div>

          <div>
            <div class="block-testimony-1 text-center">

              <figure>
                <img src="images/person_2.jpg" alt="Image" class="img-fluid rounded-circle mx-auto">
              </figure>
              <h3 class="font-size-20 mb-4 text-black">Ken Davis</h3>

              <blockquote class="mb-4">
                <p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem, fugit excepturi sapiente voluptatum nulla odio quaerat quibusdam tempore similique doloremque veritatis et cupiditate, maiores cumque repudiandae explicabo tempora deserunt consequuntur?&rdquo;</p>
              </blockquote>

              
            </div>
          </div>

          <div>
            <div class="block-testimony-1 text-center">
              

              <blockquote class="mb-4">
                <p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem, fugit excepturi sapiente voluptatum nulla odio quaerat quibusdam tempore similique doloremque veritatis et cupiditate, maiores cumque repudiandae explicabo tempora deserunt consequuntur?&rdquo;</p>
              </blockquote>

              <figure>
                <img src="images/person_1.jpg" alt="Image" class="img-fluid rounded-circle mx-auto">
              </figure>
              <h3 class="font-size-20 text-black">Mellisa Griffin</h3>

              
            </div>
          </div>

          <div>
            <div class="block-testimony-1 text-center">

              <figure>
                <img src="images/person_3.jpg" alt="Image" class="img-fluid rounded-circle mx-auto">
              </figure>
              <h3 class="font-size-20 mb-4 text-black">Robert Steward</h3>

              <blockquote class="mb-4">
                <p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem, fugit excepturi sapiente voluptatum nulla odio quaerat quibusdam tempore similique doloremque veritatis et cupiditate, maiores cumque repudiandae explicabo tempora deserunt consequuntur?&rdquo;</p>
              </blockquote>

              
            </div>
          </div>


        </div>

      </div>
    </div>

    <div class="site-section" id="blog-section">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center mb-5">
            <div class="block-heading-1" data-aos="fade-up" data-aos-delay="">
              <span>Latest Blog Posts</span>
              <h2>Our Recent Blogs</h2>
            </div>
          </div>
        </div>
        <div class="row">
          
          <?php           
           
          $args = array(
            'post_type' => 'post',
            'posts_per_page' => '4'
                     
          );
         
          $filter = new WP_Query($args);

            if( $filter->have_posts()){
              while( $filter->have_posts()){
                $filter->the_post();

               
                get_template_part('/templates/partials/blog', 'excerpt');
                
              }
              
              wp_reset_postdata();
        
        
            }
            
              
          
         ?>
          
        </div>
          <p class="text-center">
            <a href="<?php echo site_url('/blog');?>" class="btn btn-primary text-white">View More</a>
          </p>
      </div>
    </div>


    <div class="site-section bg-light" id="contact-section">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center mb-5" data-aos="fade-up" data-aos-delay="">
            <div class="block-heading-1">
              <span>Get In Touch</span>
              <h2>Contact Us</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 mb-5" data-aos="fade-up" data-aos-delay="100">
            <form action="#" method="post">
              <div class="form-group row">
                <div class="col-md-6 mb-4 mb-lg-0">
                  <input type="text" class="form-control" placeholder="First name">
                </div>
                <div class="col-md-6">
                  <input type="text" class="form-control" placeholder="First name">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <input type="text" class="form-control" placeholder="Email address">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <textarea name="" id="" class="form-control" placeholder="Write your message." cols="30" rows="10"></textarea>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-6 ml-auto">
                  <input type="submit" class="btn btn-block btn-primary text-white py-3 px-5" value="Send Message">
                </div>
              </div>
            </form>
          </div>
          <div class="col-lg-4 ml-auto" data-aos="fade-up" data-aos-delay="200">
            <h2 class="text-black">Need to know more on details. Get In Touch</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, distinctio! Harum quibusdam nisi, illum nulla aspernatur aut quidem aperiam, quae non tempora recusandae voluptatibus fugit impedit.</p>
            <p><a href="#" class="btn btn-primary text-white">Get Started</a></p>
          </div>
        </div>
      </div>
    </div>


   <?php
   
   get_footer();

   ?>