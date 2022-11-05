<?php

function childit_nav_menu() {
    $childit_menu_id = '';
    if (has_nav_menu('primary')) {
        $childit_menu_id = 'primary';
    }
    wp_nav_menu(array(
        'theme_location' => $childit_menu_id,
        'depth' => 3, // 1 = no dropdowns, 2 = with dropdowns.
        'container' => 'ul',
        'container_class' => 'main-nav-list',
        'container_id' => '',
        'menu_class' => 'main-nav-list'
    ));
}
