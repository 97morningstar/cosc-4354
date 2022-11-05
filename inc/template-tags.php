<?php

/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Childit
 */
if (!function_exists('childit_posted_on')) :

    /**
     * Prints HTML with meta information for the current post-date/time.
     */
    function childit_posted_on()
    {
        $time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
        $time_string = sprintf(
            $time_string,
            esc_attr(get_the_date(DATE_W3C)),
            esc_html(get_the_date()),
            esc_attr(get_the_modified_date(DATE_W3C)),
            esc_html(get_the_modified_date())
        );
        $posted_on = sprintf(
            /* translators: %s: post date. */
            esc_html('%s'),
            '<a href="' . esc_url(get_permalink()) . '" rel="bookmark">' . $time_string . '</a>'
        );
        echo '<span class="posted-on">' . $posted_on . '</span>'; // WPCS: XSS OK.
    }

endif;

if (!function_exists('childit_posted_by')) :

    /**
     * Prints HTML with meta information for the current author.
     */
    function childit_posted_by()
    {
        $byline = sprintf(
            /* translators: %s: post author. */
            esc_html_x('by %s', 'post author', 'childit'),
            '<a href="' . esc_url(get_author_posts_url(get_the_author_meta('ID'))) . '">' . esc_html(ucfirst(get_the_author())) . '</a>'
        );

        echo ' ' . $byline; // WPCS: XSS OK.
    }

endif;


if (!function_exists('childit_posted_author')) :

    /**
     * Prints HTML with meta information for the current author.
     */
    function childit_posted_author()
    {
        $byline = sprintf(
            /* translators: %s: post author. */
            esc_html_x('%s', 'post author', 'childit'),
            '<a class="main-color-font" href="' . esc_url(get_author_posts_url(get_the_author_meta('ID'))) . '">' . esc_html(ucfirst(get_the_author())) . '</a>'
        );

        echo ' ' . $byline; // WPCS: XSS OK.
    }

endif;

if (!function_exists('childit_entry_footer')) :

    /**
     * Prints HTML with meta information for the categories, tags and comments.
     */
    function childit_entry_footer()
    {
        // Hide category and tag text for pages.
        if ('post' === get_post_type()) {
            /* translators: used between list items, there is a space after the comma */
            $categories_list = get_the_category_list(esc_html__(', ', 'childit'));
            if ($categories_list) {
                /* translators: 1: list of categories. */
                printf('<span class="cat-links">' . esc_html('%1$s') . '</span>', $categories_list); // WPCS: XSS OK.
            }
        }
    }

endif;

if (!function_exists('childit_post_thumbnail')) :

    /**
     * Displays an optional post thumbnail.
     *
     * Wraps the post thumbnail in an anchor element on index views, or a div
     * element when on single views.
     */
    function childit_post_thumbnail()
    {
        if (post_password_required() || is_attachment() || !has_post_thumbnail()) {
            return;
        }
        if (is_singular()) :
?>
<div class="post-thumbnail">
  <?php the_post_thumbnail('full'); ?>
</div><!-- .post-thumbnail -->
<?php else : ?>
<a class="post-thumbnail" href="<?php the_permalink(); ?>">
  <?php
                the_post_thumbnail('childit_blog_post_featured_image', array(
                    'alt' => the_title_attribute(array(
                        'echo' => false,
                    )),
                ));
                ?>
</a>
<?php
        endif; // End is_singular().
    }

endif;

if (!function_exists('childit_comments_count')) :

    /**
     * Displays an optional post thumbnail.
     *
     * Wraps the post thumbnail in an anchor element on index views, or a div
     * element when on single views.
     */
    function childit_comments_count()
    {

        if (get_comments_number(get_the_ID()) > 1) {
            $comments_count = sprintf(
                /* translators: %s: post date. */
                esc_html('%s'),
                get_comments_number(get_the_ID()) . " comments"
            );
        } else {
            $comments_count = sprintf(
                /* translators: %s: post date. */
                esc_html('%s'),
                get_comments_number(get_the_ID()) . " comment"
            );
        }
        echo ' ' . $comments_count;
    }

endif;

if (!function_exists('childit_post_meta')) :

    /**
     * Displays an optional post thumbnail.
     *
     * Wraps the post thumbnail in an anchor element on index views, or a div
     * element when on single views.
     */
    function childit_post_meta()
    {
        ?>
<div class="post-meta">
  <?php childit_posted_on(); ?>
  <p class="post-meta-author"><?php childit_posted_by(); ?></p>
  <p><?php childit_comments_count(); ?></p>
</div>
<?php
    }

endif;

if (!function_exists('childit_single_post_tags')) :

    /**
     * Displays an optional post thumbnail.
     *
     * Wraps the post thumbnail in an anchor element on index views, or a div
     * element when on single views.
     */
    function childit_single_post_tags()
    {

        if ('post' === get_post_type()) {
            $terms = get_terms('post_tag', array('hide_empty' => false));
        ?>
<ul class="tag-list mb-xs-35 mb-md-30 single_post_tag">
  <li>
    <?php
                    foreach ($terms as $term) {
                    ?>
    <a
      href="<?php echo esc_url(get_tag_link($term)); ?>"><?php echo esc_html($term->name) . '  (' . esc_html($term->count) . ')'; ?></a>
    <?php
                    }
                    ?>
  </li>
</ul>
<?php
        }
    }

endif;

if (!function_exists('childit_post_tags')) :

    /**
     * Displays an optional post thumbnail.
     *
     * Wraps the post thumbnail in an anchor element on index views, or a div
     * element when on single views.
     */
    function childit_post_tags()
    {
        /* translators: used between list items, there is a space after the comma */
        $tags_list = get_the_tag_list('<ul class="tag-list mb-xs-35 mb-md-30 single_post_tag"><li>', '', '</li></ul>');
        if ($tags_list) {
            printf('' . esc_html('%1$s') . '', $tags_list); // WPCS: XSS OK.
        }
    }

endif;

if (!function_exists('childit_comments')) {

    function childit_comments($comment, $args, $depth)
    {
        extract($args, EXTR_SKIP);
        $args['reply_text'] = esc_html__('« Reply', 'childit');
        ?>
<li class="comment-wrap" id="comment-<?php comment_ID(); ?>">
  <div class="comment-block">
    <?php
                $childit_avatar = get_avatar($comment, 80, null, null, array('class' => array()));
                if ($childit_avatar) {
                ?>
    <div class="user-pick">
      <?php print get_avatar($comment, 80, null, null, array('class' => array())); ?>
    </div>
    <?php } ?>
    <div class="text">
      <div class="meta">
        <time datetime="<?php comment_time('Y-m-d'); ?>"><?php comment_time(get_option('date_format')); ?></time>
        <p class="post-meta-author"><?php echo esc_html__('by', 'childit'); ?> <span
            class="main-color-font"><?php echo get_comment_author_link(); ?></span></p>
      </div>
      <?php comment_text(); ?>
      <?php
                    comment_reply_link(array_merge(
                        $args,
                        array(
                            'reply_text' => esc_html__('« Reply', 'childit'),
                            'depth' => $depth,
                            'max_depth' => $args['max_depth']
                        )
                    ));
                    ?>
    </div>
  </div>

  <?php
    }
}