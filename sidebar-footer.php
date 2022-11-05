<?php
if (is_active_sidebar('footer_1_sidebar') || is_active_sidebar('footer_2_sidebar') || is_active_sidebar('footer_3_sidebar')) {
    $options = childit_options();
    $chidlit_show_footer_logo = isset($options['childit_show_footer_logo']) ? $options['childit_show_footer_logo'] : 0;
    $chidlit_footer_bg = isset($options['childit_footer_bg']['url']) ? $options['childit_footer_bg']['url'] : 0;
    if ($chidlit_footer_bg) {
        $childit_footer_bg_url = $chidlit_footer_bg;
    } else {
        $childit_footer_bg_url = "#";
    }
    ?>
    <div class="footer-top lazy" data-src="<?php echo esc_url($childit_footer_bg_url);  ?>">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-4">
                    <div class="f-subscribe">
                        <?php
                        if ($chidlit_show_footer_logo) {
                        if (function_exists('get_custom_logo') && has_custom_logo()) {
                            $output = get_custom_logo();
                            if (empty($output)) {
                                ?>
                                <a href="<?php echo esc_url(home_url('/')); ?>" class="logo">
                                    <img src="<?php echo esc_url(CHILDIT_IMG_URL . 'logo.svg') ?>" alt="<?php esc_attr_e('Logo', 'childit'); ?>" title="<?php echo esc_attr(get_bloginfo('name')); ?>">
                                </a>
                                <?php
                            } else {
                                $custom_logo_id = get_theme_mod('custom_logo');
                                $image = wp_get_attachment_image_src($custom_logo_id, 'full');
                                ?>
                                <a href="<?php echo esc_url(home_url('/')); ?>" class="logo">
                                    <img src="<?php echo esc_url($image[0]) ?>" alt="<?php esc_attr_e('Logo', 'childit'); ?>" title="<?php echo esc_attr(get_bloginfo('name')); ?>">
                                </a>
                                <?php
                            }
                        } else {
                            ?>
                            <a href="<?php echo esc_url(home_url('/')); ?>" class="logo">
                                <img src="<?php echo esc_url(CHILDIT_IMG_URL . 'logo.svg') ?>" alt="<?php esc_attr_e('Logo', 'childit'); ?>" title="<?php echo esc_attr(get_bloginfo('name')); ?>">
                            </a>
                            <?php
                        }
                       }
                        ?>
                        <?php
                        if (is_active_sidebar('footer_1_sidebar')) :
                            dynamic_sidebar('footer_1_sidebar');
                        endif;
                        ?>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="f-nav">
                        <?php
                        if (is_active_sidebar('footer_2_sidebar')) :
                            dynamic_sidebar('footer_2_sidebar');
                        endif;
                        ?>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="f-contact">
                        <?php
                        if (is_active_sidebar('footer_3_sidebar')) :
                            dynamic_sidebar('footer_3_sidebar');
                        endif;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
}