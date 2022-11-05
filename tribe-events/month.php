<?php
/**
 * Month View Template
 * The wrapper template for month view.
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/month.php
 *
 * @package TribeEventsCalendar
 * @version 4.6.19
 *
 */
if (!defined('ABSPATH')) {
    die('-1');
}
$options = childit_options();
$childit_event_heading = isset($options['childit_events_heading']) ? $options['childit_events_heading'] : '';
if ($childit_event_heading) {
    ?>
    <section class="events-section pt-xs-30 pt-md-60 pb-xs-40 pb-md-70 pb-lg-120">
        <div class="container">
            <div class="section-header mb-xs-30 mb-md-31">
                <?php
                echo wp_kses($childit_event_heading, 'event_heading');
                ?>
            </div>
            <?php
        }
        do_action('tribe_events_before_template');
// Main Events Content
        tribe_get_template_part('month/content');
        do_action('tribe_events_after_template');
        ?>
    </div>
</section>
