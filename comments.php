<?php

if(post_password_required()){
    return;
} ?>


<div class="pt-5">

    <?php if( have_comments() ){      
    
    ?>        
   
    <h3 class="mb-5"><?php comments_number();?></h3>
    <ul class="comment-list">

        <?php 
        
        $post_ID =  get_the_ID();
            
        $comments = get_comments(
                        array(
                            'post_id' => $post_ID,
                            'status' => 'approve'
                            
                        )
                    );   
        
                wp_list_comments(
                    array(
                        'walker'      => new Custom_Walker_Comment(),
                        'max_depth'   => 3,
                        'avatar_size' => 50,
                        //'short_ping'  => true,
                        'style'       => 'ul',
                        'per_page' => 1
                    ),
                    $comments
                ); 
            ?>       
    </ul>

    <div class="navigation">
        <?php paginate_comments_links(); ?> 
    </div>
    
<!-- END comment-list -->
<?php } 

$fields = array(
    'author' => ' <div class="form-group">
                    <label for="name">'.__('Name', 'unreath').'*</label>
                    <input type="text" name="author" class="form-control" id="name" '.$aria_req.' value="'.esc_attr( $commenter['comment_author'] ).'">
                  </div>',
    
    'email' => ' <div class="form-group">
                    <label for="email">'.__('Email', 'unreath').'*</label>
                    <input type="text" name="email" class="form-control" id="email" '.$aria_req.' value="'.esc_attr( $commenter['comment__author_email'] ).'">
                </div>'
);

$comment_field = ' <div class="form-group">
                        <label for="message">'.__('Message', 'unreath').'</label>
                        <textarea name="comment" id="message" cols="30" rows="10" class="form-control" aria-required="true"></textarea>
                    </div>';




$args = array(
    'title_reply'=> __('Leave a comment', 'unreath'),
    'fields' => $fields,
    'comment_field' => $comment_field,
    'label_submit'=> __('Post Comment', 'unreath'),
    'class_submit' => 'btn btn-primary btn-md text-white'

);




comment_form($args);

?>
   
</div>