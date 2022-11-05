<?php
$options = childit_options();
$chilit_copyright = isset($options['childit_footer_copyright']) ? $options['childit_footer_copyright'] : 0;
$childit_back_to_top = isset($options['childit_back_to_top']) ? $options['childit_back_to_top'] : 0;
$childit_facebook_url = isset($options['childit_facebook_url']) ? $options['childit_facebook_url'] : 0;
$childit_twitter_url = isset($options['childit_twitter_url']) ? $options['childit_twitter_url'] : 0;
$childit_instagram_url = isset($options['childit_instagram_url']) ? $options['childit_instagram_url'] : 0;
$chidlit_footer_bg = isset($options['childit_footer_bg']) ? $options['childit_footer_bg'] : 0;
$childit_social_link = isset($options['childit_social_link']) ? $options['childit_social_link'] : 0;
$childit_social_link_list = isset($options['childit_social_link_list']) ? $options['childit_social_link_list'] : 0;

$childit_p_centter = '';
if (!$childit_social_link) {
    $childit_p_centter = 'p_middle';
}

$childit_footer_bg_class = '';
$childit_footer_bg_class_1 = '';
if (!$chidlit_footer_bg) {
    $childit_footer_bg_class = 'no_bg_image';
    $childit_footer_bg_class_1 = 'no_social_icon';
}
if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'footer' ) ) {
?>

<footer class="<?php echo esc_attr($childit_footer_bg_class); ?>">
    <?php
    get_sidebar('footer');
    ?>
    <div class="footer-bottom-wrap <?php echo esc_attr($childit_footer_bg_class_1); ?>">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-bottom">
                        <p class="<?php echo esc_attr($childit_p_centter); ?>">
                            <?php
                            if ($chilit_copyright) {
                                echo wp_kses($chilit_copyright, 'social');
                            } else {
                                echo esc_html__('Copyrights © 2019 ChildIt - All Rights Reserved.', 'childit');
                            }
                            ?>
                        </p>
                        <?php
                        if (class_exists('Redux')) {
                            if ($childit_social_link) {
                                ?>
                                <div class="soc-link-wrap">
                                    <p><?php echo esc_html__('Follow us:', 'childit'); ?></p>
                                    <ul class="soc-link">
										<?php if($childit_facebook_url != ''){ ?>
                                        <li>
                                            <a href="<?php echo esc_url($childit_facebook_url); ?>">
                                                <img src="<?php echo esc_url(CHILDIT_IMG_URL . 'lazy.png'); ?>" class="lazy" data-src='<?php echo esc_url(CHILDIT_IMG_URL . 'facebook.svg'); ?>' title='<?php esc_attr_e('Facebook', 'childit'); ?>' alt="<?php esc_attr_e('Facebook', 'childit'); ?>">
                                            </a>
                                        </li>
										<?php } ?>
										<?php if($childit_twitter_url != ''){ ?>
                                        <li>
                                            <a href="<?php echo esc_url($childit_twitter_url); ?>">
                                                <img src="<?php echo esc_url(CHILDIT_IMG_URL . 'lazy.png'); ?>" class="lazy" data-src='<?php echo esc_url(CHILDIT_IMG_URL . 'twitter.svg'); ?>' title='<?php esc_attr_e('Twitter', 'childit'); ?>' alt="<?php esc_attr_e('twitter', 'childit'); ?>">
                                            </a>
                                        </li>
										<?php } ?>
										<?php if($childit_instagram_url != ''){ ?>
                                        <li>
                                            <a href="<?php echo esc_url($childit_instagram_url); ?>">
                                                <img src="<?php echo esc_url(CHILDIT_IMG_URL . 'lazy.png'); ?>" class="lazy" data-src='<?php echo esc_url(CHILDIT_IMG_URL . 'instagram.svg'); ?>' title='<?php esc_attr_e('Instagram', 'childit'); ?>' alt="<?php esc_attr_e('instagram', 'childit'); ?>">
                                            </a>
                                        </li>
										<?php } ?>
                                         <?php
                                        if ($childit_social_link_list) {
                                            echo wp_kses($childit_social_link_list, 'footer_social_link');
                                        }
                                        ?>

                                    </ul>
                                </div>
                                <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php } ?>
<?php if ($childit_back_to_top) { ?>
    <div class="up-btn">
        <svg width="13" height="8" viewBox="0 0 13 8" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M13 6.36563C13 6.77035 12.8528 7.17536 12.5568 7.4918C11.9438 8.1459 10.924 8.172 10.2791 7.55029L6.48873 3.89339L2.72462 7.54655C2.08197 8.17055 1.06219 8.14763 0.446938 7.49525C-0.168314 6.84259 -0.145429 5.80813 0.497507 5.18413L5.37122 0.453213C5.99268 -0.149866 6.9715 -0.151024 7.59494 0.449475L12.4992 5.1801C12.8316 5.50199 13 5.93281 13 6.36563Z"/>
        </svg>
    </div>
    <?php
}
wp_footer();
?>
</body>
</html>