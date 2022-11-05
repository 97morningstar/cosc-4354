<?php

//scripts
class Childit_Widgets {

    public function __construct() {
        add_action('widgets_init', array($this, 'widgets_init'));
    }

    public function widgets_init() {


        $options = childit_options();
        $childit_header_contact = isset($options['childit_header_contact']) ? $options['childit_header_contact'] : 0;

        register_sidebar(array(
            'name' => esc_html__('Blog Sidebar', 'childit'),
            'id' => 'blog_sidebar',
            'description' => esc_html__('Blog sidebar area', 'childit'),
            'before_widget' => '<div class="%2$s side-block widget" id="%1$s">',
            'after_widget' => "</div>",
            'before_title' => '<div class="sidebar-title"><h4>',
            'after_title' => '</h4></div>',
        ));

        register_sidebar(array(
            'name' => esc_html__('Footer Sidebar 1', 'childit'),
            'id' => 'footer_1_sidebar',
            'description' => esc_html__('Footer sidebar 1 area', 'childit'),
            'before_widget' => '<div class="%2$s widget" id="%1$s">',
            'after_widget' => "</div>",
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>',
        ));

        register_sidebar(array(
            'name' => esc_html__('Footer Sidebar 2', 'childit'),
            'id' => 'footer_2_sidebar',
            'description' => esc_html__('Footer sidebar 2 area', 'childit'),
            'before_widget' => '<div class="%2$s widget" id="%1$s">',
            'after_widget' => "</div>",
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>',
        ));

        register_sidebar(array(
            'name' => esc_html__('Footer Sidebar 3', 'childit'),
            'id' => 'footer_3_sidebar',
            'description' => esc_html__('Footer sidebar 3 area', 'childit'),
            'before_widget' => '<div class="%2$s widget" id="%1$s">',
            'after_widget' => "</div>",
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>',
        ));

        if ($childit_header_contact) {
               register_sidebar(array(
            'name' => esc_html__('Header Contact', 'childit'),
            'id' => 'header_contact_sidebar',
            'description' => esc_html__('Header Contact Area', 'childit'),
            'before_widget' => '<div class="%2$s widget" id="%1$s">',
            'after_widget' => "</div>",
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>',
        ));
        }
    }

}

$childit_widgets = new Childit_Widgets();
