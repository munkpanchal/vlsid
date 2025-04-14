<?php
/*
 * Plugin Name: Testimonials
 * Description: Effortlessly showcase glowing testimonials on your WordPress site with our user-friendly testimonial plugin.
 * Author: Vaibhav Saini
 * Author URI: https://vaibhavsaini.in/
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Version: 1.0.0
 * Requires PHP: 7.4
 */

function framesync_register_cpt_testimonial()
{

    /**
     * Post Type: Testimonial.
     */

    $labels = [
        "name" => __("Testimonials", "framesync"),
        "singular_name" => __("Testimonial", "framesync"),
        "menu_name" => __("Testimonials", "framesync"),
        "all_items" => __("All Testimonials", "framesync"),
        "add_new" => esc_html__("Add new", "framesync"),
        "add_new_item" => esc_html__("Add new", "framesync"),
        "edit_item" => __("Edit Testimonial", "framesync"),
        "new_item" => __("New Testimonial", "framesync"),
        "view_item" => __("View Testimonial", "framesync"),
        "view_items" => __("View Testimonials", "framesync"),
        "search_items" => __("Search Testimonials", "framesync"),
        "not_found" => __("No testimonials found", "framesync"),
        "not_found_in_trash" => __("No testimonials found in trash", "framesync"),
        "parent" => __("Parent Testimonial:", "framesync"),
        "remove_featured_image" => __("Remove featured image for this testimonial", "framesync"),
        "use_featured_image" => __("Use as featured image for this testimonial", "framesync"),
        "archives" => __("Testimonial archives", "framesync"),
        "insert_into_item" => __("Insert into testimonial", "framesync"),
        "uploaded_to_this_item" => __("Upload to this testimonial", "framesync"),
        "filter_items_list" => __("Filter testimonials list", "framesync"),
        "items_list_navigation" => __("Testimonials list navigation", "framesync"),
        "items_list" => __("Testimonials list", "framesync"),
        "attributes" => __("Testimonials attributes", "framesync"),
        "name_admin_bar" => __("Testimonial", "framesync"),
        "item_published" => __("Testimonial published", "framesync"),
        "item_published_privately" => __("Testimonial published privately.", "framesync"),
        "item_reverted_to_draft" => __("Testimonial reverted to draft.", "framesync"),
        "item_scheduled" => __("Testimonial scheduled", "framesync"),
        "item_updated" => __("Testimonial updated.", "framesync"),
        "parent_item_colon" => __("Parent Testimonial:", "framesync"),
    ];

    $args = [
        "label" => __("Testimonials", "framesync"),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "rest_namespace" => "wp/v2",
        "has_archive" => false,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "delete_with_user" => false,
        "exclude_from_search" => false,
        "capability_type" => "testimonial",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "can_export" => false,
        "rewrite" => ["slug" => "testimonial", "with_front" => true],
        "query_var" => true,
        "menu_icon" => "dashicons-twitch",
        "supports" => ["title", "custom-fields", "revisions", "author", "post-formats"],
        "show_in_graphql" => false,
    ];

    register_post_type("testimonial", $args);
}

add_action('init', 'framesync_register_cpt_testimonial');

/**
 * Add duplicate post link after edit for custom post type
 */
function add_testimonial_duplicate_post_link_after_edit($actions, $post) {
    if ($post->post_type == 'testimonial') {
        $duplicate_link = wp_nonce_url(admin_url('admin-post.php?action=duplicate_post&post_id=' . $post->ID), 'duplicate-post_' . $post->ID);
        $actions['duplicate'] = '<a href="' . $duplicate_link . '" title="Copy this Testimonial" rel="permalink">Copy</a>';
    }
    return $actions;
}
add_filter('post_row_actions', 'add_testimonial_duplicate_post_link_after_edit', 10, 2);
add_filter('page_row_actions', 'add_testimonial_duplicate_post_link_after_edit', 10, 2);

// Handle custom post type duplication
function duplicate_custom_post_type_testimonial_post() {
    if (isset($_GET['action']) && $_GET['action'] === 'duplicate_post' && isset($_GET['post_id']) && wp_verify_nonce($_GET['_wpnonce'], 'duplicate-post_' . $_GET['post_id'])) {
        $post_id = $_GET['post_id'];
        $post = get_post($post_id);
        
        if (!empty($post)) {
            $new_post = array(
                'post_title' => $post->post_title . ' Copy - ' . $post->ID + 1,
                'post_content' => $post->post_content,
                'post_status' => 'draft', // $post->post_status
                'post_type' => $post->post_type
            );
            
            $new_post_id = wp_insert_post($new_post);
            
            if ($new_post_id) {
                // Duplicate post meta
                $post_meta = get_post_meta($post_id);
                foreach ($post_meta as $meta_key => $meta_values) {
                    foreach ($meta_values as $meta_value) {
                        add_post_meta($new_post_id, $meta_key, $meta_value);
                    }
                }
                
                // Optionally, you can redirect to the post listing page
                wp_redirect(admin_url('edit.php?post_type=' . $post->post_type));
                exit;
            }
        }
    }
}

add_action('admin_post_duplicate_post', 'duplicate_custom_post_type_testimonial_post');