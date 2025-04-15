<?php

/**
 * Shortcode Compatibility File.
 *
 * @package framesync
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

function display_social_links($atts) {
    $atts = shortcode_atts(
        array(
            'icon' => 'true',
            'label' => 'true',
        ),
        $atts,
        'social_links'
    );

    $social_links = get_option('social_links');
    $social_ico_dir = get_template_directory_uri() . '/public/icons';
    $output = '';

    if ($social_links) {
        foreach ($social_links as $network => $url) {
            if (!empty($url)) {
                $escaped_url = esc_url($url);
                $escaped_network = esc_attr($network);
                $icon_html = $atts['icon'] === 'true' ? "<img src='{$social_ico_dir}/{$escaped_network}.svg' alt='{$escaped_network}' class='social-icon' width='32' height='32'>" : '';
                $label_html = $atts['label'] === 'true' ? "<span class='social-label'>{$escaped_network}</span>" : '';
                $output .= "
                <a href='{$escaped_url}' target='_blank' rel='noopener noreferrer' class='social-link'>
                    {$icon_html} {$label_html}
                </a>";
            }
        }
    } else {
        $output .= "<p class='text-xs/normal text-white'>No social media links found.</p>";
    }

    return $output;
}

add_shortcode('social_links', 'display_social_links');
