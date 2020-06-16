<?php get_header(); 

        global $post;       

    //   $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID), 'full');
    //   $image_src = $featured_image[0];
      
      if (is_home() && get_option('page_for_posts') ) {
        $img = wp_get_attachment_image_src(get_post_thumbnail_id(get_option('page_for_posts')),'full'); 
        $featured_image = $img[0];
    } 
?>
    
    <div class="site-section-cover overlay inner-page bg-light" style="background-image: url('<?php echo $featured_image;?>')" data-aos="fade">
      <?php 

    //   $thumbnail = the_post_thumbnail('full'); 
    //   echo "<pre>";
    //   print_r($thumbnail);
    //   echo "</pre>";

      ?>

      <div class="container">
        <div class="row align-items-center justify-content-center text-center">
          <div class="col-lg-10">

            <div class="box-shadow-content">
              <div class="block-heading-1">                
                <h1 class="mb-4" data-aos="fade-up" data-aos-delay="100"><?php single_post_title();?></h1>
              </div>
              
              
            </div>
          </div>
        </div>
      </div>
      
    </div>

 
    <section class="site-section pt-2">
      <div class="container">
        <div class="row">

        <div class="col-md-2"></div>
        <div class="col-md-8 sidebar ">
            <div class="sidebar-box">
                <!-- <form action="#" class="search-form">
                    <div class="form-group">                    
                        <div class="form-control">
                            <button type="submit"><span class="icon fa fa-search"></span></button>
                            <input type="text" class="border border-0 w-90" placeholder="Search...">                                                       
                        </div>                    
                    </div>
                </form> -->

                <?php get_search_form();?>
            </div>    
        </div>
        <div class="col-md-2"></div>

            <?php            
                if(have_posts()){
                    while(have_posts()){ 
                    the_post();   
            ?>
        
          <div class="col-md-4 blog-content">            

          <a href="<?php the_permalink();?>" class="text-decoration-none"><h4 class="text-center mb-4"><?php the_title();?></h4></a>
          <p class="text-center">
            <a href="<?php the_permalink();?>" class="text-center">
                <?php echo the_post_thumbnail(
                        'large',
                        [
                            'class' => 'img-fluid rounded'
                        ]
                    );
                ?>
            </a>
            </p>
            
            <p>
                <?php 
                    $excerpt = get_the_excerpt();
                    echo substr($excerpt,0,200); 
                ?>
            </p>
            <p class="text-right"><a href="<?php the_permalink();?>" class="btn btn-danger">Read More >></a></p>               

          </div>   
          <?php  }  } ?>      


        </div>
      </div>
      <div class="row mt-4 pt-4">
        <div class="col-md-2"></div> 
        
        <?php if( get_previous_posts_link() ){?>            
            <div class="col-md-2 btn btn-danger text-center paginate-link">        
                <?php echo get_previous_posts_link(); ?>
            </div>
        <?php } else{?>
        <div class="col-md-2 text-center"></div>
        <?php } ?>

        <div class="col-md-4"></div>
        <?php if( get_next_posts_link() ){?>            
            <div class="col-md-2 btn btn-danger text-center paginate-link">        
                <?php echo get_next_posts_link(); ?>
            </div>
        <?php } else{?>
        <div class="col-md-2 text-center"></div>
        <?php } ?>
        <div class="col-md-2"></div>
    </div>
      
    </section>

    <?php     
    
 get_footer(); 
 
 ?>