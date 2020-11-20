<?php

function register_osp_menu()
{
    register_nav_menus(array(
        'header-menu' => __('Header Menu', 'osp'),
        'sidebar-menu' => __('Sidebar Menu', 'osp'),
        'footer-menu' => __('Footer Menu', 'osp')
    ));
}

add_action('init', 'register_osp_menu');