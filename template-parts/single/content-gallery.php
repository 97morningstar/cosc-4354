<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="blog-post-slider" data-show-count='1' data-show-count-md='1' data-show-count-mob='1' data-slick-arrow="true" data-slick-speed="5000" data-slick-autoplay="true">
        <?php
        if (has_post_thumbnail()) {
            $childit_featured_image_url = get_the_post_thumbnail_url($post->ID, 'childit_blog_post_featured_image');
            ?>
            <div class="blog-slide">
                <a href="<?php echo esc_url($childit_featured_image_url); ?>">
                    <img src="<?php echo esc_url($childit_featured_image_url); ?>" alt="<?php esc_attr_e('Img', 'childit'); ?>">
                </a>
            </div>
            <?php
        }
        ?>
        <?php
        $childit_gallery = get_post_meta(get_the_ID(), 'childit-gallery');
        if (!empty($childit_gallery)) {
            foreach ($childit_gallery as $single_gallery) {
                $clhildit_gallary_link = wp_get_attachment_url((int) $single_gallery);
                ?>
                <div class="blog-slide">
                    <a href="<?php echo esc_url($clhildit_gallary_link); ?>">
                        <?php echo wp_get_attachment_image($single_gallery, 'post-thumbnail') ?>
                    </a>
                </div>
                <?php
            }
        }
        ?>
    </div>
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