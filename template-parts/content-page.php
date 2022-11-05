<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package childit
 */
?>
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="entry-content">
        <?php
        the_content();
        ?>
    </div><!-- .entry-content -->
    <?php
    wp_link_pages(array(
        'before' => '<div class="page-pagination post-nav-links pagination"><div class="page-numbers">',
        'after' => '</div></div>',
        'link_before' => '<span>',
        'link_after' => '</span>',
        'pagelink' => '<span class="screen-reader-text">' . esc_html__('Page', 'childit') . ' </span>%',
        'separator' => ' ',
    ));
    ?>
</div>