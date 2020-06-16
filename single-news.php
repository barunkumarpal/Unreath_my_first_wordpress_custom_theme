<?php get_header(); 


    if(have_posts()){
      while(have_posts()){ 
        the_post();   
        global $post;

        $author_id = $post->post_author;
        $author_posts_url = get_author_posts_url( $author_id );

      $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID), 'banner');
      $image_src = $featured_image[0];
      

?>
    
    <div class="site-section-cover overlay inner-page bg-light" style="background-image: url('<?php echo $image_src;?>')" data-aos="fade">
      
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">
          <div class="col-lg-10">

            <div class="box-shadow-content">
              <div class="block-heading-1">
                <span class="d-block mb-3 text-white" data-aos="fade-up"><?php echo get_the_date( 'F dS, Y');?>
                <span class="mx-2 text-primary">&bullet;</span> by <?php the_author();?></span>
                <h1 class="mb-4" data-aos="fade-up" data-aos-delay="100"><?php the_title();?></h1>
              </div>
              
              
            </div>
          </div>
        </div>
      </div>
      
    </div>

    
    
    <section class="site-section">
      <div class="container">
        <div class="row">
         
          <div class="col-md-8 blog-content">
            <p class="lead"></p>
            <p><?php the_content();?></p>
            <div class="pt-5">
              <p>Categories:  <?php the_category( ',' ) ;?>
              <!-- <a href="#">Design</a>, <a href="#">Events</a>   -->
              <!-- Tags: <a href="#">#html</a>, <a href="#">#trends</a> -->
              </p>
            </div>
            <?php
            if(comments_open() || get_comments_number()){
                
                comments_template();
            }
            ?>      

          </div> <!-- Col-md-8 end -->
  

          <div class="col-md-4 sidebar">
            <div class="sidebar-box">
              <form action="#" class="search-form">
                <div class="form-group">
                  <span class="icon fa fa-search"></span>
                  <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
                </div>
              </form>
            </div>
            <div class="sidebar-box">
              <div class="categories">
                <h3>Categories</h3>
                <li><a href="#">Creatives <span>(12)</span></a></li>
                <li><a href="#">News <span>(22)</span></a></li>
                <li><a href="#">Design <span>(37)</span></a></li>
                <li><a href="#">HTML <span>(42)</span></a></li>
                <li><a href="#">Web Development <span>(14)</span></a></li>
              </div>
            </div>
            <div class="sidebar-box">
              <img src="<?php echo get_avatar_url($author_id);?>" alt="Image" class="img-fluid mb-4 w-50 rounded-circle">
              <h3 class="text-black">About The Author</h3>
              <p><?php echo get_the_author_meta('description'); ?></p>
              <p><a href="<?php echo $author_posts_url;?>" class="btn btn-primary btn-md text-white">View Posts</a></p>
            </div>

            <div class="sidebar-box">
              <h3>Paragraph</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php     
      }
    } 
 get_footer(); 
 
 ?>