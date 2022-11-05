<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package childit
 */
/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if (post_password_required()) {
    return;
}
// You can start editing here -- including this comment!
if (have_comments()) :
    ?>
    <div class="comments">
        <?php
        if (have_comments()) :
            ?>
            <h4 class="comment-count-area">
                <?php
                $childit_comment_count = get_comments_number();
                if ('1' === $childit_comment_count) {
                    printf(
                            /* translators: 1: title. */
                            esc_html__('One Comment', 'childit')
                    );
                } else {
                    printf(// WPCS: XSS OK.
                            /* translators: 1: comment count number, 2: title. */
                            esc_html(_nx('Comment (%1$s)', 'Comments (%1$s)', $childit_comment_count, 'comments title', 'childit'), 'childit'), number_format_i18n($childit_comment_count)
                    );
                }
                ?>
            </h4>
            <?php the_comments_navigation(); ?>
            <ul class="comments-list">
                <?php
                wp_list_comments(array(
                    'style' => 'ul',
                    'callback' => 'childit_comments',
                    'avatar_size' => 80,
                    'short_ping' => true,
                ));
                ?>
            </ul>
            <?php
            the_comments_navigation();
            // If comments are closed and there are comments, let's leave a little note, shall we?
            if (!comments_open()) :
                ?>
                <p class="no-comments"><?php echo esc_html__('Comments are closed.', 'childit'); ?></p>
                <?php
            endif;
        endif;
        ?>
    </div>

    <?php
//You can start editing here -- including this comment!
endif;


$user = wp_get_current_user();
$childit_user_identity = $user->display_name;
$req = get_option('require_name_email');
$aria_req = $req ? " aria-required='true'" : '';
$formargs = array(
    'id_form' => 'commentform',
    'id_submit' => 'submit',
    'class_form' => 'form-default',
    'title_reply' => esc_html__('Leave Your Comment', 'childit'),
    'title_reply_to' => esc_html__('Leave a Reply to %s', 'childit'),
    'cancel_reply_link' => esc_html__('Cancel Reply', 'childit'),
    'label_submit' => esc_html__('leave your comment', 'childit'),
    'submit_button' => '<button type="submit" name="%1$s" id="%2$s" class="%3$s button read-more mt-10">%4$s <svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 9 9" fill="none"><path d="M0.505883 5.20577L0.491834 5.2027L6.51423 5.2027L4.62101 7.10009C4.5283 7.19272 4.47745 7.31821 4.47745 7.44992C4.47745 7.58162 4.5283 7.70623 4.62101 7.79909L4.91559 8.09382C5.00823 8.18645 5.13166 8.23767 5.2633 8.23767C5.39501 8.23767 5.51852 8.18682 5.61115 8.09418L8.85649 4.84913C8.94949 4.75613 9.00035 4.63226 8.99998 4.50048C9.00035 4.36796 8.94949 4.24401 8.85649 4.15116L5.61115 0.905818C5.51852 0.813257 5.39508 0.76233 5.2633 0.76233C5.13166 0.76233 5.00823 0.813331 4.91559 0.905818L4.62101 1.20055C4.5283 1.29304 4.47745 1.41655 4.47745 1.54826C4.47745 1.67989 4.5283 1.79689 4.62101 1.88945L6.53559 3.79745L0.499152 3.79745C0.227908 3.79745 -1.94412e-05 4.03123 -1.94175e-05 4.30233L-1.93811e-05 4.71918C-1.93574e-05 4.99028 0.23464 5.20577 0.505883 5.20577Z"/></svg></button>',
    'comment_field' => '<textarea placeholder="' . esc_attr__('Your review', 'childit') . '" id="comment" name="comment" aria-required="true">' .
    '</textarea>',
    'must_log_in' => '<div>' .
    sprintf(
            wp_kses(__('You must be <a href="%s">logged in</a> to post a comment.', 'childit'), array('a' => array('href' => array()))), wp_login_url(apply_filters('the_permalink', get_permalink()))
    ) . '</div>',
    'logged_in_as' => '<div class="logged-in-as">' .
    sprintf(
            wp_kses(__('Logged in as <a href="%1$s">%2$s</a>. <a href="%3$s" title="%4$s">Log out?</a>', 'childit'), array('a' => array('href' => array()))), esc_url(admin_url('profile.php')), $childit_user_identity, wp_logout_url(apply_filters('the_permalink', get_permalink())), esc_attr__('Log out of this account', 'childit')
    ) . '</div>',
    'comment_notes_before' => '<p>' .
    esc_html__('Your email address will not be published.', 'childit') . ( $req ? '<span class="required">*</span>' : '' ) .
    '</p>',
    'comment_notes_after' => '',
    'fields' => apply_filters('comment_form_default_fields', array(
        'author' =>
        '<div class="input-area"><div class="input-wrap">'
        . '<input id="author" name="author" placeholder="' . esc_attr__('Your name', 'childit') . '" type="text" value="' . esc_attr($commenter['comment_author']) .
        '" size="30"' . $aria_req . ' /></div>',
        'email' =>
        '<div class="input-wrap">'
        . '<input id="email" name="email" type="text"  placeholder="' . esc_attr__('E-mail', 'childit') . '" value="' . esc_attr($commenter['comment_author_email']) .
        '"' . $aria_req . ' /></div>',
        'phone' =>
        '<div class="input-wrap">'
        . '<input id="phone" name="phone" type="text"  placeholder="' . esc_attr__('Your phone', 'childit') . '" value=""' . $aria_req . ' /></div>',
        'subject' =>
        '<div class="input-wrap">'
        . '<input id="subject" name="subject" type="text"  placeholder="' . esc_attr__('Subject', 'childit') . '" value=""' . $aria_req . ' /></div></div>',
            )
    ),
);

comment_form($formargs);
