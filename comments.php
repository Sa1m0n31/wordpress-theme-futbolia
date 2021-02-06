<h1 class="comments-header">Comments</h1>
<?php 
$fields =  array(
    'author' => '<p class="comment-form-author">' . '<label for="author">' . __( 'Name' ) . '</label> ' . ( $req ? '<span class="required">*</span>' : '' ) .
        '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></p>',
    'email'  => '<p class="comment-form-email"><label for="email">' . __( 'Email' ) . '</label> ' . ( $req ? '<span class="required">*</span>' : '' ) .
        '<input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' /></p>',
);

$formArgs = array(
	'fields' => $fields
);
echo '<div class="respond-container">' . get_avatar($comment, 120);
comment_form($formArgs);
echo '</div>';

if (have_comments()) : ?>
    <ol class="post-comments">
        <?php
            wp_list_comments(array(
                'style'       => 'ol',
                'short_ping'  => true,
				'avatar_size' => 90,
				'max_depth' => 3
            ));
        ?>
    </ol>
<?php endif; ?>