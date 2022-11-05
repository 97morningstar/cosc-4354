<?php
/**
 * Month View Single Day
 * This file contains one day in the month grid
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/month/single-day.php
 *
 * @package TribeEventsCalendar
 * @version 4.6.19
 *
 */
if (!defined('ABSPATH')) {
    die('-1');
}

$day = tribe_events_get_current_month_day();
$events_label = ( 1 === $day['total_events'] ) ? tribe_get_event_label_singular() : tribe_get_event_label_plural();
$date_label = date_i18n(tribe_get_date_option('dateWithoutYearFormat', 'F j'), strtotime($day['date']))
?>

<!-- Day Header -->
<div id="tribe-events-daynum-<?php echo esc_attr($day['daynum-id']); ?>">
    <p class="data">
        <?php if ($day['total_events'] > 0 && tribe_events_is_view_enabled('day')) : ?>
            <?php $view_day_label = sprintf(esc_html__('View %s', 'childit'), $date_label); ?>
            <a href="<?php echo esc_url(tribe_get_day_link($day['date'])); ?>" aria-label="<?php echo esc_attr($view_day_label); ?>">
                <?php echo esc_html($day['daynum']); ?>
            </a>
        <?php else : ?>
            <?php echo esc_html($day['daynum']); ?>
        <?php endif; ?>
    </p>
</div>
<!-- Events List -->
<?php while ($day['events']->have_posts()) : $day['events']->the_post(); ?>
    <?php tribe_get_template_part('month/single', 'event') ?>
<?php endwhile; ?>
