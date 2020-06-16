<?php 

get_header();

if(have_posts()){
    while(have_posts()){
        the_post(); ?>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                <?php  the_content();?>
                </div>
            </div>
        </div>

  <?php  }
}




get_footer();


?>