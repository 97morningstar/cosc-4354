    <div class="post-navigate">
        <?php
        $childit_prev_post = get_adjacent_post(false, '', true);
        $childit_next_post = get_adjacent_post(false, '', false);
        if (!empty($childit_prev_post)) {
            $childit_featured_image_pre_url = get_the_post_thumbnail_url($childit_prev_post->ID, 'childit_blog_post_sidebar_image');
            ?>
            <div class="blog-post-nav post-prev">
                <?php
               if ($childit_featured_image_pre_url) {
                ?>
                <a href="<?php echo esc_url(get_permalink($childit_prev_post->ID)); ?>" class="post-image">
                    <img src="<?php echo esc_url(CHILDIT_IMG_URL . 'lazy.png'); ?>" class="lazy" data-src="<?php echo esc_url($childit_featured_image_pre_url); ?>" alt="<?php esc_attr_e('img', 'childit'); ?>">
                </a>
               <?php
                 }
                ?>
                <div>
                    <a href="<?php echo esc_url(get_permalink($childit_prev_post->ID)); ?>" class="blog-nav-link">
                        <img src="<?php echo esc_url(CHILDIT_IMG_URL . 'arr-left.svg'); ?>" alt="<?php esc_attr_e('img', 'childit'); ?>">
                        <?php echo esc_attr__('Previous Post', 'childit'); ?>
                    </a>
                    <a href="<?php echo esc_url(get_permalink($childit_prev_post->ID)); ?>" class="post-title"><?php echo esc_html($childit_prev_post->post_title); ?></a>
                </div>
            </div>
            <?php
        }
        if (!empty($childit_next_post)) {
            $childit_featured_image_next_url = get_the_post_thumbnail_url($childit_next_post->ID, 'childit_blog_post_sidebar_image');
            ?>
            <div class="blog-post-nav post-next">
              <?php
                if ($childit_featured_image_next_url) {
                ?>
                <a href="<?php echo esc_url(get_permalink($childit_next_post->ID)); ?>" class="post-image">
                    <img src="<?php echo esc_url(CHILDIT_IMG_URL . 'lazy.png'); ?>" class="lazy" data-src="<?php echo esc_url($childit_featured_image_next_url); ?>" alt="<?php esc_attr_e('img', 'childit'); ?>">
                </a>
                <?php
                 }
                ?>
                <div>
                    <a href="<?php echo esc_url(get_permalink($childit_next_post->ID)); ?>" class="blog-nav-link">
                        <img src="<?php echo esc_url(CHILDIT_IMG_URL . 'arr-left.svg'); ?>" alt="<?php esc_attr_e('img', 'childit'); ?>">
                        <?php echo esc_attr__('Next Post', 'childit'); ?>
                    </a>
                    <a href="<?php echo esc_url(get_permalink($childit_next_post->ID)); ?>" class="post-title"><?php echo esc_html($childit_next_post->post_title); ?></a>
                </div>
            </div>
            <?php
        }
        ?>
    </div>