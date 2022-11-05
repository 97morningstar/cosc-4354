<?php
global $post;
$childit_avatar_user_name = get_the_author_meta('display_name', $post->post_author);
$childit_avatar_user_description = get_the_author_meta('user_description', $post->post_author);
$childit_avatar_user_image = get_avatar($post->post_author, 120, '', '', array('height' => 149, 'width' => 120));
if (isset($childit_avatar_user_text) && !empty($childit_avatar_user_description)) {
    ?>
    <div class="post-author mb-xs-31 mb-md-31">
        <div class="author-avatar">
            <?php echo wp_kses($childit_avatar_user_image,'author_avatar'); ?>
        </div>
        <div class="author-info">
            <h4><?php echo esc_html(ucfirst($childit_avatar_user_name)); ?></h4>
            <p><?php echo esc_html(ucfirst($childit_avatar_user_text)); ?></p>
            <ul class="soc-link">
                <li><a href="<?php echo esc_url('#');?>">
                        <img src="<?php echo esc_url(CHILDIT_IMG_URL . 'lazy.png'); ?>" class="lazy" data-src='<?php echo esc_url(CHILDIT_IMG_URL . 'facebook.svg'); ?>'  alt="<?php esc_attr__('facebook', 'childit'); ?>">
                    </a></li>
                <li><a href="<?php echo esc_url('#');?>">
                        <img src="<?php echo esc_url(CHILDIT_IMG_URL . 'lazy.png'); ?>" class="lazy" data-src='<?php echo esc_url(CHILDIT_IMG_URL . 'twitter.svg'); ?>'  alt="<?php esc_attr__('twitter', 'childit'); ?>">
                    </a></li>
                <li><a href="<?php echo esc_url('#');?>">
                        <img src="<?php echo esc_url(CHILDIT_IMG_URL . 'lazy.png'); ?>" class="lazy" data-src='<?php echo esc_url(CHILDIT_IMG_URL . 'instagram.svg'); ?>'  alt="<?php esc_attr__('instagram', 'childit'); ?>">
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <?php
}