

<div class="col-md-6 col-lg-6" data-aos="fade-up" data-aos-delay="">

    <div>
        <a href="<?php the_permalink();?>" class="mb-4 d-block">

            <?php echo the_post_thumbnail(
                'ur_post_thumbnail',
                [
                    'class' => 'img-fluid rounded'
                ]
            );?>
            
        </a>
        <h2>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h2>
        <p class="text-muted mb-3 text-uppercase small">
            <span class="mr-2"><?php echo get_the_date( 'F dS, Y');?></span>
             By <a href="single.html" class="by"><?php the_author();?></a>
        </p>
        <p><?php 
            $excerpt = get_the_excerpt();
            echo substr($excerpt,0,200);             
            //the_excerpt();?>
        </p>

        <p><a href="<?php the_permalink();?>">Read More</a></p>
    </div>

</div>