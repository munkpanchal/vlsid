<?php


function nav_menu_register()
{
    register_nav_menus(array(
        "header_nav" => "Header Navigation",
        "footer_nav" => "Footer Navigation",
    ));
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support("woocommerce");
}

add_action("after_setup_theme", "nav_menu_register");
add_filter('wpcf7_autop_or_not', '__return_false');
