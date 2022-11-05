<!-- Begin quickLinks -->
<?php $options = childit_options(); 
$childit_search_form = isset($options['childit_search_form']) ? $options['childit_search_form'] : 0;?>
 
<!-- Begin header -->
<header class="header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="top-line">
                    <?php
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
                    ?>
                    <nav class="main-nav">
                        <?php childit_nav_menu(); ?>
                        <div class="close-nav">
                            <svg viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M 10,10 L 30,30 M 30,10 L 10,30" fill="#3B4757"/>
                            </svg>
                        </div>
                    </nav>
                    <!--header-controls-->
                    <div class="header-controls">
                        <?php if ($childit_search_form) { ?>
                            <div class="header-search">
                                <i class="fas fa-search"></i>
                                <?php
                                 echo childit_heaer_search_form();
                                ?>
                            </div>
                        <?php }
                        ?>
                        <div class="hamburger">
                            <svg width="24" height="18" viewBox="0 0 24 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.02857 2.31427H22.9714C23.5371 2.31427 24 1.85141 24 1.2857C24 0.719983 23.5371 0.257126 22.9714 0.257126H1.02857C0.462857 0.257126 0 0.719983 0 1.2857C0 1.85141 0.462857 2.31427 1.02857 2.31427Z" fill="#3B4757"/>
                            <path d="M1.02857 10.0285H22.9714C23.5371 10.0285 24 9.56567 24 8.99996C24 8.43425 23.5371 7.97139 22.9714 7.97139H1.02857C0.462857 7.97139 0 8.43425 0 8.99996C0 9.56567 0.462857 10.0285 1.02857 10.0285Z" fill="#3B4757"/>
                            <path d="M1.02857 17.7428H22.9714C23.5371 17.7428 24 17.28 24 16.7143C24 16.1485 23.5371 15.6857 22.9714 15.6857H1.02857C0.462857 15.6857 0 16.1485 0 16.7143C0 17.28 0.462857 17.7428 1.02857 17.7428Z" fill="#3B4757"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="top-img">
        <img src="<?php echo esc_url(CHILDIT_IMG_URL . 'lazy.png'); ?>" class="lazy" data-src="" alt="<?php esc_attr_e('Cloud', 'childit'); ?>">
    </div>
</header>
<!-- End header -->