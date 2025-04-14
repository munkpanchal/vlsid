<?php

/**
 * Enqueue Scripts & Styles Compatibility File.
 *
 * @package framesync
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

if (!function_exists('theme_setup')) {
    // This is basic theme setup after themesetup
    function theme_setup()
    {

        add_theme_support('title-tag');

        add_theme_support('post-thumbnails');

        register_nav_menus(array(
            "header_nav" => "Header Navigation",
            "footer_nav" => "Footer Navigation",
        ));
        add_theme_support('post-thumbnails');
        add_theme_support('title-tag');
        add_theme_support("woocommerce");
    }
}

add_action('after_setup_theme', 'theme_setup');
