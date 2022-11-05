<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php
    if (has_post_thumbnail()) {
        $childit_featured_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'childit_blog_post_featured_image');
        ?>
        <div class="post-image">
            <a href="<?php the_permalink(); ?>">
                <img src="<?php echo esc_url(CHILDIT_IMG_URL . 'lazy.png'); ?>" class="lazy" data-src='<?php echo esc_url($childit_featured_image[0]); ?>' alt="<?php esc_attr_e('Img', 'childit'); ?>">
            </a>
        </div>
    <?php }
    ?>
    <div class="post-description">
        <?php echo childit_post_meta(); ?>
        <a href="<?php the_permalink(); ?>" class="post-title"><?php the_title(); ?></a>
        <?php
        the_content();
        wp_link_pages(array(
            'before' => '<div class="page-pagination post-nav-links pagination"><div class="page-numbers">',
            'after' => '</div></div>',
            'link_before' => '<span>',
            'link_after' => '</span>',
            'pagelink' => '<span class="screen-reader-text">' . esc_html__('Page', 'childit') . ' </span>%',
            'separator' => ' ',
        ));
        if (has_tag()) {
            childit_post_tags();
        }
        get_template_part('template-parts/single/post-author', 'box');
        get_template_part('template-parts/single/post-pagination', 'box');
        ?>
    </div>
</div>