<?php
/**
 * Month View Nav Template
 * This file loads the month view navigation.
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/month/nav.php
 *
 * @package TribeEventsCalendar
 * @version 4.6.19
 *
 */
if (!defined('ABSPATH')) {
    die('-1');
}
?>
<?php do_action('tribe_events_before_nav') ?>
<div class="table-wrap-nav mt-xs-5 mt-lg-25">
    <?php tribe_events_the_previous_month_link(); ?>
    <?php tribe_events_the_next_month_link(); ?>
</div>
<?php
do_action('tribe_events_after_nav');