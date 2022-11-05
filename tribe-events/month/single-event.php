<?php
/**
 * Month Single Event
 * This file contains one event in the month view
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/month/single-event.php
 *
 * @package TribeEventsCalendar
 * @version 4.6.21
 *
 */
if (!defined('ABSPATH')) {
    die('-1');
}

global $post;

$day = tribe_events_get_current_month_day();
$event_id = "{$post->ID}-{$day['date']}";
$link = tribe_get_event_link($post);
$title = get_the_title($post);

$childit_pmeta_image = get_post_meta(get_the_ID(), 'childit_event_meta_image', true);
$childit_image_url = wp_get_attachment_image_src($childit_pmeta_image, 'full');
?>
<div class="table-event">
    <p><?php echo esc_html($title); ?></p>
    <div class="hide-event">
        <a href="<?php echo esc_url($link) ?>" class="event-title"><?php echo esc_html($title); ?></a>
        <time datetime="<?php echo tribe_get_start_date(get_the_ID(), false, 'Y-m-d'); ?>"><?php echo tribe_get_start_date(get_the_ID(), false, 'd F Y'); ?></time>
        <div class="event-img">
            <a href="<?php echo esc_url($link) ?>">
                <img src="<?php echo esc_url($childit_image_url[0]); ?>" alt="<?php esc_attr_e('Alt', 'childit'); ?>">
            </a>
        </div>
        <?php the_excerpt(); ?>
    </div>
</div>