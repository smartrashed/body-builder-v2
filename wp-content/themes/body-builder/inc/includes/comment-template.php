<?php
/**
 * Template for comments and pingbacks.
 *
 * Used as a callback by wp_list_comments() for displaying the comments.
 *
 * @link http://codex.wordpress.org/Function_Reference/wp_list_comments
 * @since 1.0.0
 * @version 1.0.0
 * @author CodexCoder
 *
 */

function body_builder_comment_template( $comment, $args, $depth ) {
    $GLOBALS['comment'] = $comment;
    switch ( $comment->comment_type ) :
        case 'pingback' :
        case 'trackback' :
            // Display trackbacks differently than normal comments.
            ?>
            <li <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
            <p><?php esc_html__( 'Pingback:', 'body-builder' ); ?> <?php comment_author_link(); ?> <?php edit_comment_link( esc_html__( '(Edit)', 'body-builder' ), '<span class="edit-link">', '</span>' ); ?></p>
            <?php
            break;
        default :
            // Proceed with normal comments.
            global $post;
            ?>
        <li <?php comment_class('comment_item'); ?> id="li-comment-<?php comment_ID(); ?>">
            <article id="comment-<?php comment_ID(); ?>"">
                <div class="profile-image">
                    <?php echo get_avatar( $comment, 70 ); ?>
                </div><!-- /.profile-image -->

                <div class="comment-content">
                    <div class="comment-meta">
                        <strong><?php echo get_comment_author_link(); ?></strong>
                        <span class="sep">|</span>
                        <a class="date-time" href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>">
                            <time datetime="<?php echo get_comment_time( 'c' ); ?>">
                                <?php echo sprintf( esc_html__( '%1$s at %2$s', 'body-builder' ), get_comment_date(), get_comment_time() ) ?>
                            </time>
                        </a>
                    </div><!-- /.comment-meta -->

                    <div class="content">
                        <?php if ( '0' == $comment->comment_approved ) : ?>
                            <p class="comment-awaiting-moderation"><?php esc_html__( 'Your comment is awaiting moderation.', 'body-builder' ); ?></p>
                        <?php endif; ?>

                        <?php comment_text(); ?>
                        <?php edit_comment_link( esc_html__( 'Edit', 'body-builder' ), '<p class="edit-link">', '</p>' ); ?>
                    </div><!-- /.content -->

                    <?php comment_reply_link( array_merge( $args, array( 'reply_text' => esc_html__( 'Reply', 'body-builder' ), 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
                </div><!-- /.contents -->

            </article>
            <?php
            break;
    endswitch; // end comment_type check
}

/**
 * Comment Form
 *
 * @since 1.0.0
 * @version 1.0.0
 * @author CodexCoder
 */
function body_builder_comment_form() {
     $commenter = wp_get_current_commenter();
    $req = get_option( 'comment_author_email' );
    $aria_req = ( $req ? " aria-required='true'" : '' );
    $fields = array(
        'name'   => '<input id="author" class="comment_input_name" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" placeholder="' . esc_html__( 'Your Name', 'body-builder' ) . '"' . $aria_req . ' />',
        'email'  => '<input id="email" class="comment_input_email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" placeholder="' . esc_html__( 'Your Email', 'body-builder' ) . '"' . $aria_req . ' />',
        'phone'    => '<input id="url" class="comment_input_phone" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" placeholder="' . esc_attr__( 'Your Phone', 'body-builder' ) . '"/>',
    );
    $comments_args = array(
        'fields' => $fields,
        'title_reply'=> __( 'Leave a Comment', 'body-builder' ),
        'title_reply_before'    => '<h3>',
        'title_reply_after'     => '</h3>',
        'label_submit'  => __( 'Submit', 'body-builder' ),
        'comment_notes_before'  => '',
        'comment_field' => '<textarea id="comment" class="comment_input_textarea" name="comment" cols="45" rows="6" placeholder="' . esc_html__( 'Your Comment', 'body-builder' ) . '" aria-required="true"></textarea>',
        'comment_notes_after' => '',
    );
    comment_form($comments_args);
}