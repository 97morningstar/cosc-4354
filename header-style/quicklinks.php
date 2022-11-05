
<?php $options = childit_options(); ?>
<?php
	$childit_cloud_image = isset($options['childit_cloud_image']) ? $options['childit_cloud_image'] : 0;
	$childit_search_form = isset($options['childit_search_form']) ? $options['childit_search_form'] : 0;
	
	
	$childit_location = isset($options['childit_location']) ? $options['childit_location'] : '';
	
	$childit_loc_lat = isset($options['childit_lat']) ? $options['childit_lat'] : '';
	$childit_loc_long = isset($options['childit_long']) ? $options['childit_long'] : '';
	
	$childit_book_tour_text = isset($options['childit_book_tour_text']) ? $options['childit_book_tour_text'] : '';
	$childit_book_tour = isset($options['childit_book_tour']) ? $options['childit_book_tour'] : '';
	
	$childit_for_parents = isset($options['childit_for_parents']) ? $options['childit_for_parents'] : '';
	$childit_handbook = isset($options['childit_handbook']) ? $options['childit_handbook'] : '';
	$childit_handbook_url = isset($options['childit_handbook_url']) ? $options['childit_handbook_url'] : '';
	$childit_checklist = isset($options['childit_checklist']) ? $options['childit_checklist'] : 'Checklist';
	$childit_checklist_url = isset($options['childit_checklist_url']) ? $options['childit_checklist_url'] : '';
	$childit_agreement = isset($options['childit_agreement']) ? $options['childit_agreement'] : '';
	$childit_agreement_url = isset($options['childit_agreement_url']) ? $options['childit_agreement_url'] : '';
	$childit_billing_chart = isset($options['childit_billing_chart']) ? $options['childit_billing_chart'] : '';
	$childit_billing_chart_url = isset($options['childit_billing_chart_url']) ? $options['childit_billing_chart_url'] : '';
	
	$childit_link_contact = isset($options['childit_link_contact']) ? $options['childit_link_contact'] : '';
	$childit_contact_sidebar = isset($options['childit_contact_sidebar']) ? $options['childit_contact_sidebar'] : '';
	
	 $childit_map_image = isset($options['childit_map_image']['url']) ? $options['childit_map_image']['url'] : 0;


    ?>
    <!-- End quickLinks -->
    <div class="quickLinks-wrap">

        <?php
             if (!empty($childit_location)) { ?>
            <div class="quickLinks-item" data-for-quick = '1'>
                <div class="quickLinks-head">
                    <img src="<?php echo esc_url(CHILDIT_IMG_URL . 'map-marker-white.svg') ?>" alt="<?php esc_attr_e('img', 'childit'); ?>">
                    <p><?php echo esc_html($childit_location); ?></p>
                </div>
            </div>
            <?php }
        ?>


         <?php
        if (!empty($childit_book_tour_text)) { ?>
             <div class="quickLinks-item" data-for-quick = '2'>
            <div class="quickLinks-head">
                <img src="<?php echo esc_url(CHILDIT_IMG_URL . 'calendar-white.svg') ?>" alt="<?php esc_attr_e('img', 'childit'); ?>">
                <p><?php echo esc_html($childit_book_tour_text); ?></p>
            </div>
           </div>
            <?php }
        ?>
       
        <?php
             if (!empty($childit_for_parents)) { ?>
               <div class="quickLinks-item" data-for-quick = '3'>
                <div class="quickLinks-head">
                    <img src="<?php echo esc_url(CHILDIT_IMG_URL . 'paper-white.svg') ?>" alt="<?php esc_attr_e('img', 'childit'); ?>">
                    <p><?php echo esc_html($childit_for_parents); ?></p>
                </div>
               </div>
            <?php }
        ?>

       <?php
             if (!empty($childit_link_contact)) { ?>
              <div class="quickLinks-item" data-for-quick = '4'>
            <div class="quickLinks-head">
                <img src="<?php echo esc_url(CHILDIT_IMG_URL . 'phone-white.svg') ?>" alt="<?php esc_attr_e('img', 'childit'); ?>">
                <p><?php echo esc_html($childit_link_contact); ?></p>
            </div>
            </div>
            <?php }
        ?>


        <div class="quickLinks-desc" data-to-quick = '1'>
            <div>
                 <img src="<?php echo esc_url($childit_map_image);  ?>" alt="<?php esc_attr_e('img', 'childit'); ?>">
            </div>
        </div>
        <div class="quickLinks-desc" data-to-quick = '2'>
            <div class="quickLinks-content">
                <h4><?php echo esc_html($childit_book_tour_text); ?></h4>
                <?php
                echo do_shortcode($childit_book_tour);
                ?>
            </div>
        </div>
        <div class="quickLinks-desc" data-to-quick = '3'>
            <div class="quickLinks-content">
                <h4>
                    <?php echo esc_html($childit_for_parents); ?>
                   </h4>
                <div class="<?php echo esc_html__('download', 'childit'); ?>-list">
                    <?php if ($childit_handbook) { ?>
                        <p>
                            <span>
                                <img src="<?php echo esc_url(CHILDIT_IMG_URL . 'lazy.png') ?>" class="lazy" data-src="<?php echo esc_url(CHILDIT_IMG_URL . 'handbook.svg') ?>" alt="<?php esc_attr_e('img', 'childit'); ?>">
                                <?php echo esc_html($childit_handbook); ?>
                            </span>
                            <a href="<?php echo esc_url($childit_handbook_url); ?>">
                                <img src="<?php echo esc_url(CHILDIT_IMG_URL . 'lazy.png') ?>" class="lazy" data-src="<?php echo esc_url(CHILDIT_IMG_URL . 'pdf-ico.svg'); ?>" alt="<?php esc_attr_e('img', 'childit'); ?>">
                                <?php echo esc_html__('download', 'childit'); ?></a></p>
                    <?php }
                    ?>
                    <?php if ($childit_checklist) { ?>
                        <p>
                            <span>
                                <img src="<?php echo esc_url(CHILDIT_IMG_URL . 'lazy.png') ?>" class="lazy" data-src="<?php echo esc_url(CHILDIT_IMG_URL . 'checklist.svg'); ?>" alt="<?php esc_attr_e('img', 'childit'); ?>">
                                <?php echo esc_html($childit_checklist); ?>
                            </span>
                            <a href="<?php echo esc_url($childit_checklist_url); ?>">
                                <img src="<?php echo esc_url(CHILDIT_IMG_URL . 'lazy.png') ?>" class="lazy" data-src="<?php echo esc_url(CHILDIT_IMG_URL . 'pdf-ico.svg'); ?>" alt="<?php esc_attr_e('img', 'childit'); ?>">
                                <?php echo esc_html__('download', 'childit'); ?></a></p>
                    <?php }
                    ?>
                    <?php if ($childit_agreement) { ?>
                        <p>
                            <span>
                                <img src="<?php echo esc_url(CHILDIT_IMG_URL . 'lazy.png') ?>" class="lazy" data-src="<?php echo esc_url(CHILDIT_IMG_URL . 'paper-form.svg'); ?>" alt="<?php esc_attr_e('img', 'childit'); ?>">
                                <?php echo esc_html($childit_agreement); ?>
                            </span>
                            <a href="<?php echo esc_url($childit_agreement_url); ?>">
                                <img src="<?php echo esc_url(CHILDIT_IMG_URL . 'lazy.png') ?>" class="lazy" data-src="<?php echo esc_url(CHILDIT_IMG_URL . 'pdf-ico.svg'); ?>" alt="<?php esc_attr_e('img', 'childit'); ?>">
                                <?php echo esc_html__('download', 'childit'); ?></a></p>
                    <?php }
                    ?>
                    <?php if ($childit_billing_chart) { ?>
                        <p>
                            <span>
                                <img src="<?php echo esc_url(CHILDIT_IMG_URL . 'lazy.png') ?>" class="lazy" data-src="<?php echo esc_url(CHILDIT_IMG_URL . 'billing.svg'); ?>" alt="<?php esc_attr_e('img', 'childit'); ?>">
                                <?php echo esc_html($childit_billing_chart); ?>
                            </span>
                            <a href="<?php echo esc_url($childit_billing_chart_url); ?>">
                                <img src="<?php echo esc_url(CHILDIT_IMG_URL . 'lazy.png') ?>" class="lazy" data-src="<?php echo esc_url(CHILDIT_IMG_URL . 'pdf-ico.svg'); ?>" alt="<?php esc_attr_e('img', 'childit'); ?>">
                                <?php echo esc_html__('download', 'childit'); ?></a></p>
                    <?php }
                    ?>
                </div>
            </div>
        </div>
        <div class="quickLinks-desc" data-to-quick = '4'>
            <div class="quickLinks-content">
                <?php
                if (is_active_sidebar('header_contact_sidebar')):
                    dynamic_sidebar('header_contact_sidebar');
                endif;
                ?>
            </div>
        </div>
    </div>
    <?php

?>