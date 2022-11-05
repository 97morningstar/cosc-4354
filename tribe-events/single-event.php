<!-- Begin single event -->
<section class="single-event-container pt-xs-30 pt-md-60 pb-xs-45 pb-md-70 pb-lg-120">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <a href="<?php echo esc_url(site_url()) . '/events' ?>" class="read-more reverce mb-20"><?php echo esc_html__('all events', 'childit'); ?></a>
                <div class="single-event">
                    <div class="event-image">
                        <?php if (has_post_thumbnail(get_the_ID())): ?>
                            <?php $chidit_event_img = get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>
                        <?php endif; ?>
                        <img src="<?php echo CHILDIT_IMG_URL . 'lazy.png' ?>" class="lazy" data-src="<?php echo esc_url($chidit_event_img); ?>" alt="<?php esc_attr_e('img', 'childit'); ?>">
                        <time datetime="<?php echo tribe_get_start_date(get_the_ID(), false, 'Y-m-d'); ?>"><?php echo tribe_get_start_date(get_the_ID(), false, 'd'); ?> <span><?php echo tribe_get_start_date(get_the_ID(), false, 'F'); ?></span></time>
                    </div>
                    <?php
                    the_content();
                    ?>
                </div>
                <div class="related-event pt-xs-20 pt-md-0">
                    <h3><?php echo esc_html__('Related Events', 'childit'); ?></h3>
                    <div class="related-event-list">
                        <?php
                        $childit_event_posts = tribe_get_events(array(
                            'posts_per_page' => 4,
                            'orderby' => 'date',
                            'order' => 'DESC',
                                ));
                        if (!empty($childit_event_posts)) {
                            foreach ($childit_event_posts as $single_post) {
                                setup_postdata($single_post);
                                $childit_pmeta_image = get_post_meta($single_post->ID, 'childit_event_meta_image', TRUE);
                                $childit_image_url = wp_get_attachment_image_src($childit_pmeta_image, 'full');
                                ?>
                                <div class="event-slide">
                                    <div class="short-event">
                                        <a href="<?php echo esc_url($single_post->guid); ?>">
                                            <img src="<?php echo esc_url($childit_image_url[0]); ?>" alt="<?php esc_attr_e('img', 'childit'); ?>">
                                        </a>
                                        <a href="<?php echo esc_url($single_post->guid); ?>"><?php echo esc_html($single_post->post_title); ?></a>
                                        <time datetime="<?php
                                        echo tribe_get_start_date($single_post->ID, false, 'Y-m-d');
                                        ?>"> <?php
                                                  echo tribe_get_start_date($single_post->ID, false, 'd F Y');
                                                  ?>
                                        </time>
                                    </div>
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
</section>
