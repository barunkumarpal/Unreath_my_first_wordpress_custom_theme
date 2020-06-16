<?php 


    class Custom_Walker_Comment extends Walker_Comment {       
        
     
        /**
         * Outputs a single comment.
         
         * @see wp_list_comments()
         *
         * @param WP_Comment $comment Comment to display.
         * @param int        $depth   Depth of the current comment.
         * @param array      $args    An array of arguments.
         */
        protected function comment( $comment, $depth, $args ) {
            if ( 'div' == $args['style'] ) {
                $tag       = 'div';
                $add_below = 'comment';
            } else {
                $tag       = 'li';
                $add_below = 'div-comment';
            }
     
            $commenter = wp_get_current_commenter();
            if ( $commenter['comment_author_email'] ) {
                $moderation_note = __( 'Your comment is awaiting moderation.' );
            } else {
                $moderation_note = __( 'Your comment is awaiting moderation. This is a preview, your comment will be visible after it has been approved.' );
            }
     
            ?>

            <!-- li -->
            <<?php echo $tag; ?> <?php comment_class( $this->has_children ? 'parent' : '', $comment ); ?> id="comment-<?php comment_ID(); ?>">


                <!-- gravatar -->
                <div class="comment-author vcard bio">
                    <?php
                    if ( 0 != $args['avatar_size'] ) {
                        echo get_avatar( $comment, $args['avatar_size'] );
                    }
                    ?>                    
                 </div> 
                <!-- gravatar end -->
               
                
                <!-- div comment-body  -->
                <?php if ( 'div' != $args['style'] ) : ?>
                    <div id="div-comment-<?php comment_ID(); ?>" class="comment-body">
                    <h3><?php comment_author();?></h3>
                <?php endif; ?>
                

                <?php if ( '0' == $comment->comment_approved ) : ?>
                <em class="comment-awaiting-moderation"><?php echo $moderation_note; ?></em>
                <br />
                <?php endif; ?>

                <!-- comment date-time -->
     
                <div class="comment-meta commentmetadata meta">
                     <?php
                        /* translators: 1: Comment date, 2: Comment time. */
                        printf( __( '%1$s at %2$s' ), get_comment_date( '', $comment ), get_comment_time() );
                    ?>                  
                </div>
                    
                <!-- Comment Text -->
                
                    <?php                
                    comment_text();
                    ?>
               
     
                <?php
                // Comment Reply Link
                comment_reply_link(
                    array_merge(
                        $args,
                        array(
                            'add_below' => $add_below,
                            'depth'     => $depth,
                            'max_depth' => $args['max_depth'],
                            'before'    => '<p>',
                            'after'     => '</p>',
                        )
                    )
                );
                ?>
     
            <?php if ( 'div' != $args['style'] ) : ?>
            </div>
            <?php endif; 


        }     
        
    }
