<?php
$options = childit_options();
$childit_page_breadcumb = isset($options['childit_show_breadcrumb']) ? $options['childit_show_breadcrumb'] : 0;
$childit_background_image = isset($options['childit_background_image']['url']) ? $options['childit_background_image']['url'] : 0;

$childit_background_image_class = '';
if (!$childit_background_image) {
    $childit_background_image_class = 'no_bd_bg';
}
$childit_cloud_image = isset($options['childit_cloud_image']) ? $options['childit_cloud_image'] : 0;
$childit_post_title = isset($options['childit_show_post_title']) ? $options['childit_show_post_title'] : 0;
if (!is_front_page()) {
    if ($childit_page_breadcumb && $childit_post_title) {
?>
<section class="page-name <?php echo esc_attr($childit_background_image_class); ?> mb-xs-30 mb-md-30 mb-lg-60">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1 class="text-center">
          <?php
                            if (get_post_type() == 'tribe_events') {
                                echo tribe_get_events_title();
                            } else {
                                echo esc_html(get_the_title());
                            }
                            ?>
        </h1>
      </div>
    </div>
  </div>
  <?php if (isset($childit_background_image) && !empty($childit_background_image)) {
      if (get_post_type() == 'tribe_events') {
      
      $childit_event_bg_meta_image = get_post_meta(get_the_ID(), 'childit_event_bg_meta_image', true);
      $childit_image_url = wp_get_attachment_image_src($childit_event_bg_meta_image, 'full');
  ?>
  <div class="layer-background lazy" data-src="<?php echo esc_url($childit_image_url[0]); ?>"></div>
  <?php } elseif (get_post_type() == 'category') { ?>
      
      <div class="layer-background lazy" data-src="<?php echo esc_url($childit_background_image); ?>"></div>
      <img src="<?php echo esc_url(CHILDIT_IMG_URL . 'lazy.png'); ?>" class="page-name-img lazy" data-src="<?php echo esc_url($childit_cloud_image['url']); ?>" alt="<?php esc_attr_e('Img', 'childit'); ?>">
    
  <?php } else {?>
      <div class="layer-background lazy" data-src="<?php echo esc_url($childit_background_image); ?>"></div>
  <?php } ?>


    <img src="<?php echo esc_url(CHILDIT_IMG_URL . 'lazy.png'); ?>" class="page-name-img lazy"
      data-src="<?php echo esc_url($childit_cloud_image['url']); ?>" alt="<?php esc_attr_e('Img', 'childit'); ?>">
  <?php } ?>
</section>
<!-- End page name -->
<?php
    }
}