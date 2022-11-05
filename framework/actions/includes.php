<?php

function childit_search_form($form) {
    $form = '<form role="search" method="get" id="searchform_1" class="search-form" action="' . esc_url(home_url('/')) . '" >
            <input type="search" class="search" name="s" value="' . get_search_query() . '" placeholder="' . esc_attr__('Search...', 'childit') . '" required>
            <button type="submit"><i class="fas fa-search"></i></button>
        </form>';

    return $form;
}

add_filter('get_search_form', 'childit_search_form', 100);

function childit_heaer_search_form() {
    $form = '<form role="search" method="get" id="searchform" class="search-form" action="' . esc_url(home_url('/')) . '" >
            <input type="search" class="search" name="s" value="' . get_search_query() . '" placeholder="' . esc_attr__('Search...', 'childit') . '" required>
            <button type="submit"><i class="fas fa-search"></i></button>
        </form>';

    return $form;
}
