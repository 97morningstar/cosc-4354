<?php

function childit_main_color() {
    global $childit_options;
    $childit_options = childit_options();
    $childit_main_color = is_array($childit_options) ? $childit_options['childit_main_color'] : [];
    $childit_section_title_color = is_array($childit_options) ? $childit_options['childit_section_title_color'] : [];
    ob_start();
    ?>

    body a:hover {
    color: <?php echo esc_attr($childit_main_color); ?>;
    }
    body blockquote::after {
    color: <?php echo esc_attr($childit_main_color); ?>;
    }
    body ul li::after {
    color: <?php echo esc_attr($childit_main_color); ?>
    }

    body ol li::before {
    color: <?php echo esc_attr($childit_main_color); ?>
    }
    body .main-color-font {
    color: <?php echo esc_attr($childit_main_color); ?>
    }
    body .component_color_1 {
    color: #FFAF60
    }
    body .component_color_2 {
    color: #76BEBA
    }
    body .component_color_3 {
    color: #7192BD
    }
    body svg.main-color-font path {
    color: <?php echo esc_attr($childit_main_color); ?>
    }
    body svg.component_color_1 path {
    color: #FFAF60
    }

    body svg.component_color_2 path {
    color: #76BEBA
    }
    body svg.component_color_3 path {
    color: #7192BD
    }
    body .main-color-font {
    color: <?php echo esc_attr($childit_main_color); ?>
    }
    button,
    .button {
    background: <?php echo esc_attr($childit_main_color); ?>;
    }
    button.color-2,
    .button.color-2 {
    background: #FFAF60
    }
    button.color-2:hover,
    .button.color-2:hover {
    color: #FFAF60 !important
    }
    button:hover,
    .button:hover {
    color: <?php echo esc_attr($childit_main_color); ?> !important
    }
    button:hover.read-more svg path,
    .button:hover.read-more svg path {
    fill: <?php echo esc_attr($childit_main_color); ?>
    }
    button:hover svg path,
    .button:hover svg path {
    fill: <?php echo esc_attr($childit_main_color); ?>
    }
    input[type='checkbox']:checked+span:after {
    border-color: <?php echo esc_attr($childit_main_color); ?>;
    color: <?php echo esc_attr($childit_main_color); ?>
    }
    input[type='checkbox']+span:hover {
    color: <?php echo esc_attr($childit_main_color); ?>
    }
    .bootstrap-datetimepicker-widget table tbody tr span.active,
    .bootstrap-datetimepicker-widget table tbody tr td.active,
    .bootstrap-datetimepicker-widget .datepicker-months tbody tr span.active,
    .bootstrap-datetimepicker-widget .datepicker-months tbody tr td.active,
    .bootstrap-datetimepicker-widget .datepicker-years tbody tr span.active,
    .bootstrap-datetimepicker-widget .datepicker-years tbody tr td.active,
    .bootstrap-datetimepicker-widget .datepicker-decades tbody tr span.active,
    .bootstrap-datetimepicker-widget .datepicker-decades tbody tr td.active,
    .datepicker table tbody tr span.active,
    .datepicker table tbody tr td.active,
    .datepicker .datepicker-months tbody tr span.active,
    .datepicker .datepicker-months tbody tr td.active,
    .datepicker .datepicker-years tbody tr span.active,
    .datepicker .datepicker-years tbody tr td.active,
    .datepicker .datepicker-decades tbody tr span.active,
    .datepicker .datepicker-decades tbody tr td.active {
    background: <?php echo esc_attr($childit_main_color); ?>
    }
    .bootstrap-datetimepicker-widget .datepicker-days tbody tr td.active,
    .datepicker .datepicker-days tbody tr td.active {
    background: <?php echo esc_attr($childit_main_color); ?>
    }
    .slick-dots li.slick-active button:after {
    border: 3px solid <?php echo esc_attr($childit_main_color); ?>;
    }
    .slick-dots li button:after {
    background: <?php echo esc_attr($childit_main_color); ?>;
    }
    .read-more {
    color: <?php echo esc_attr($childit_main_color); ?>
    }
    .read-more:hover {
    color: <?php echo esc_attr($childit_main_color); ?>;
    }
    .read-more svg path {
    fill: <?php echo esc_attr($childit_main_color); ?>
    }
    .video-btn {
    color: <?php echo esc_attr($childit_main_color); ?>
    }
    .video-btn .play-ico span {
    background: <?php echo esc_attr($childit_main_color); ?>
    }
    .video-btn .play-ico.animate::before {
    background: <?php echo esc_attr($childit_main_color); ?>;
    }
    .centre-tab-list li a.active,
    .centre-tab-list li p.active,
    .pagination li a.active,
    .pagination li p.active {
    color: <?php echo esc_attr($childit_main_color); ?>
    }
    .successform p {
    font-weight: 500;
    color: <?php echo esc_attr($childit_main_color); ?>
    }
    .search-form button:hover {
    color: <?php echo esc_attr($childit_main_color); ?> !important
    }
    .slick-arrow:hover {
    background: <?php echo esc_attr($childit_main_color); ?>
    }
    .slick-arrow i {
    color: <?php echo esc_attr($childit_main_color); ?>
    }
    .up-btn {
    background: <?php echo esc_attr($childit_main_color); ?>;
    }
    .up-btn:hover svg path {
    fill: <?php echo esc_attr($childit_main_color); ?>
    }
    footer .footer-bottom-wrap p a:hover {
    color: <?php echo esc_attr($childit_main_color); ?>
    }
    .contact-list a:hover {
    color: <?php echo esc_attr($childit_main_color); ?>
    }
    .soc-link li a:hover {
    background: <?php echo esc_attr($childit_main_color); ?>
    }
    .quickLinks-wrap.mobile .quickLinks-desc:nth-child(5) {
    background: <?php echo esc_attr($childit_main_color); ?>
    }
    .quickLinks-wrap .quickLinks-item:nth-child(1) .quickLinks-head,
    .quickLinks-wrap .quickLinks-item:nth-child(1) .quickLinks-desc {
    background: <?php echo esc_attr($childit_main_color); ?>
    }
    .quickLinks-wrap .quickLinks-item:nth-child(3) .quickLinks-head,
    .quickLinks-wrap .quickLinks-item:nth-child(3) .quickLinks-desc {
    background: #76BEBA;
    }
    .quickLinks-wrap .quickLinks-item:nth-child(4) .quickLinks-head,
    .quickLinks-wrap .quickLinks-item:nth-child(4) .quickLinks-desc {
    background: #7192BD;
    }
    .quickLinks-wrap .quickLinks-head {
    background: <?php echo esc_attr($childit_main_color); ?>;
    }
    .quickLinks-wrap .quickLinks-desc:nth-child(5) {
    background: <?php echo esc_attr($childit_main_color); ?>
    }
    .block-header p::after {
    background: <?php echo esc_attr($childit_main_color); ?>
    }
    .block-header h2 span {
    color: <?php echo esc_attr($childit_main_color); ?>
    }
    .education-short.color-4 .education-bottom {
    background: <?php echo esc_attr($childit_main_color); ?>
    }
    .learning-elements-wrap .tab-element-content h3::after {
    background: <?php echo esc_attr($childit_main_color); ?>
    }
    .order-list-2 li .list-description::before {
    color: <?php echo esc_attr($childit_main_color); ?>
    }
    .testimonial-block .testimonial-description time {
    color: <?php echo esc_attr($childit_main_color); ?>
    }
    .news-block .news-block-description .news-block-description__short-text p {
    margin-bottom: 30px
    }
    .news-block .news-block-description .news-block-description__short-text time {
    color: <?php echo esc_attr($childit_main_color); ?>
    }
    .pricing-packages-card .pricing-packages-price .price {
    color: <?php echo esc_attr($childit_main_color); ?>
    }
    .count-block .count-numb p {
    color: <?php echo esc_attr($childit_main_color); ?>;
    }
    .accordion-block .accordion-header .accordion-ico::before,
    .accordion-block .accordion-header .accordion-ico::after {
    background: <?php echo esc_attr($childit_main_color); ?>;
    }
    .program-preview .program-slider-wrap .program-nav-slider .program-slide.slick-current::after {
    border: 2px solid <?php echo esc_attr($childit_main_color); ?>
    }
    .calenar .now-data,
    .calenar .next-mounth {
    color: <?php echo esc_attr($childit_main_color); ?>
    }
    .calenar table thead tr {
    background: <?php echo esc_attr($childit_main_color); ?>
    }
    .calenar table tbody tr td.selected {
    border: 2px solid <?php echo esc_attr($childit_main_color); ?>;
    }
    .side-post .post-meta {
    color: <?php echo esc_attr($childit_main_color); ?>
    }
    .blog-post .post-link span i {
    color: <?php echo esc_attr($childit_main_color); ?>
    }
    .blog-post .post-meta time {
    color: <?php echo esc_attr($childit_main_color); ?>
    }
    .blog-post .post-meta .post-meta-author a {
    color: <?php echo esc_attr($childit_main_color); ?>
    }
    .blog-post .post-title:hover {
    color: <?php echo esc_attr($childit_main_color); ?>
    }
    .blog-post-nav .blog-nav-link:hover {
    color: <?php echo esc_attr($childit_main_color); ?>
    }
    .comment-block .text .meta time {
    color: <?php echo esc_attr($childit_main_color); ?>
    }
    .comment-block .text a {
    color: <?php echo esc_attr($childit_main_color); ?>
    }
    .comments h4 span {
    color: <?php echo esc_attr($childit_main_color); ?>
    }
    .parent-info-item .parent-title .parent-title__ico {
    background: <?php echo esc_attr($childit_main_color); ?>;
    }
    .resources-block .resources-text a {
    color: <?php echo esc_attr($childit_main_color); ?>
    }
    .practices-list-wrap .practices-ico {
    background: <?php echo esc_attr($childit_main_color); ?>;
    }
    .event-table thead tr td {
    color: <?php echo esc_attr($childit_main_color); ?>
    }
    .event-table tr td.currentle-day .data:before {
    background: <?php echo esc_attr($childit_main_color); ?>
    }
    .event-table tr td .data {
    color: <?php echo esc_attr($childit_main_color); ?>
    }
    .single-event .event-image time {
    color: <?php echo esc_attr($childit_main_color); ?>
    }
    .short-event time {
    color: <?php echo esc_attr($childit_main_color); ?>
    }
    .pagination span.page-numbers.current {
    color: <?php echo esc_attr($childit_main_color); ?>;
    }
    div.wpcf7 .screen-reader-response[role="alert"] {
    background: <?php echo esc_attr($childit_main_color); ?>;
    }
    .no-style-btn-cnt:hover input {
    color: <?php echo esc_attr($childit_main_color); ?>;
    }

    .current-menu-item a {
    color: <?php echo esc_attr($childit_main_color); ?> !important;
    }
    .main-nav-list li a:hover, .main-nav-list li a.active-link {
    color: <?php echo esc_attr($childit_main_color); ?>;
    }

    .section-header .h-sub {
    color: <?php echo esc_attr($childit_section_title_color); ?>;
    }

    <?php
    $css_color = ob_get_clean();
    return $css_color;
}
