<?php
$options = childit_options();
$childit_page_breadcumb = isset($options['childit_show_breadcrumb']) ? $options['childit_show_breadcrumb'] : 0;
$childit_background_image = isset($options['childit_background_image']['url']) ? $options['childit_background_image']['url'] : 0;

$childit_background_image_class = '';
if (!$childit_background_image) {
    $childit_background_image_class = 'no_bd_bg';
}

$childit_cloud_image = isset($options['childit_cloud_image']) ? $options['childit_cloud_image'] : 0;

if (!is_front_page()) {
    if ($childit_page_breadcumb != 'off') {
        ?>
        <section class="page-name <?php echo esc_attr($childit_background_image_class); ?> mb-xs-30 mb-md-30 mb-lg-60">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1 class="text-center">
                            <?php
                            if (get_post_type() != 'tribe_events') {
                                the_archive_title();
                            } else {
                                echo tribe_get_events_title();
                            }
                            ?>
                        </h1>
                    </div>
                </div>
            </div>
            <div class="layer-background lazy"></div>
        </section>
        <!-- End page name -->
        <?php
    }
}        