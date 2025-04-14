<?php
/*
 * Plugin Name: Partners
 * Description: Boost partner visibility! Showcase your partner members elegantly on your WordPress site with our easy-to-use partner plugin.
 * Author: Vaibhav Kumar Saini
 * Author URI: https://vaibhavsaini.in/
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Version: 1.0.0
 * Requires PHP: 7.4
 */

if (!function_exists('framesync_register_cpt_partner')) {

    function framesync_register_cpt_partner()
    {

        /**
         * Post Type: Partners.
         */

        $labels = [
            "name" => esc_html__("Partners", "framesync"),
            "singular_name" => esc_html__("Partner", "framesync"),
            "menu_name" => esc_html__("Partners", "framesync"),
            "all_items" => esc_html__("All Partners", "framesync"),
            "add_new" => esc_html__("Add new", "framesync"),
            "add_new_item" => esc_html__("Add new", "framesync"),
            "edit_item" => esc_html__("Edit Partner", "framesync"),
            "new_item" => esc_html__("New Partner", "framesync"),
            "view_item" => esc_html__("View Partner", "framesync"),
            "view_items" => esc_html__("View Partners", "framesync"),
            "search_items" => esc_html__("Search Partners", "framesync"),
            "not_found" => esc_html__("No partners found", "framesync"),
            "not_found_in_trash" => esc_html__("No partners found in trash", "framesync"),
            "parent" => esc_html__("Parent Partner:", "framesync"),
            "featured_image" => esc_html__("Featured image for this Partner", "framesync"),
            "set_featured_image" => esc_html__("Set featured image for this Partner", "framesync"),
            "remove_featured_image" => esc_html__("Remove featured image for this Partner", "framesync"),
            "use_featured_image" => esc_html__("Use as featured image for this Partner", "framesync"),
            "archives" => esc_html__("Partner archives", "framesync"),
            "insert_into_item" => esc_html__("Insert into Partner", "framesync"),
            "uploaded_to_this_item" => esc_html__("Upload to this Partner", "framesync"),
            "filter_items_list" => esc_html__("Filter Partners list", "framesync"),
            "items_list_navigation" => esc_html__("Partners list navigation", "framesync"),
            "items_list" => esc_html__("Partners list", "framesync"),
            "attributes" => esc_html__("Partners attributes", "framesync"),
            "name_admin_bar" => esc_html__("Partner", "framesync"),
            "item_published" => esc_html__("Partner published", "framesync"),
            "item_published_privately" => esc_html__("Partner published privately.", "framesync"),
            "item_reverted_to_draft" => esc_html__("Partner reverted to draft.", "framesync"),
            "item_scheduled" => esc_html__("Partner scheduled", "framesync"),
            "item_updated" => esc_html__("Partner updated.", "framesync"),
            "parent_item_colon" => esc_html__("Parent Partner:", "framesync"),
        ];

        $args = [
            "label" => esc_html__("Partners", "framesync"),
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
            "capability_type" => "partner",
            "map_meta_cap" => true,
            "hierarchical" => false,
            "can_export" => false,
            "rewrite" => ["slug" => "partner", "with_front" => true],
            "query_var" => true,
            "menu_icon" => "dashicons-groups",
            "supports" => ["title", "custom-fields", "revisions", "author", "post-formats"],
            "show_in_graphql" => false,
        ];

        register_post_type("partner", $args);
    }
} // End of if function_exists( 'framesync_register_cpt_partner' ).

function framesync_register_cpt_partner_taxes_tag() {

    /**
     * Taxonomy: Tags.
     */

    $labels = [
        "name" => __("Tags", "framesync"),
        "singular_name" => __("Partner Tag", "framesync"),
        "all_items" => __("All Tags", "framesync"),
        "edit_item" => __("Edit Tag", "framesync"),
        "view_item" => __("View Tag", "framesync"),
        "update_item" => __("Update Tag", "framesync"),
        "add_new_item" => __("Add New Tag", "framesync"),
        "new_item_name" => __("New Tag Name", "framesync"),
        "parent_item" => __("Parent Tag", "framesync"),
        "search_items" => __("Search Tags", "framesync"),
        "not_found" => __("No tags found.", "framesync"),
        "back_to_items" => __("Back to Tags", "framesync"),
    ];


    $args = [
        "label" => __("Tags", "framesync"),
        "labels" => $labels,
        "public" => true,
        "publicly_queryable" => true,
        "hierarchical" => false,
        "show_ui" => true,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "query_var" => true,
        "rewrite" => ['slug' => 'partner-tag', 'with_front' => true,],
        "show_admin_column" => false,
        "show_in_rest" => true,
        "show_tagcloud" => false,
        "rest_base" => "partner-tag",
        "rest_controller_class" => "WP_REST_Terms_Controller",
        "rest_namespace" => "wp/v2",
        "show_in_quick_edit" => true,
        "sort" => false,
        "show_in_graphql" => false,
    ];

    register_taxonomy("partner-tag", ["partner"], $args);
}

function framesync_register_cpt_partner_taxes_category() {

    /**
     * Taxonomy: Categories.
     */

    $labels = [
        "name" => __("Categories", "framesync"),
        "singular_name" => __("Partner Category", "framesync"),
        "not_found" => __("No category found.", "framesync"),
    ];


    $args = [
        "label" => __("Categories", "framesync"),
        "labels" => $labels,
        "public" => true,
        "publicly_queryable" => true,
        "hierarchical" => true,
        "show_ui" => true,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "query_var" => true,
        "rewrite" => ['slug' => 'partner-category', 'with_front' => true,],
        "show_admin_column" => false,
        "show_in_rest" => true,
        "show_tagcloud" => false,
        "rest_base" => "partner-category",
        "rest_controller_class" => "WP_REST_Terms_Controller",
        "rest_namespace" => "wp/v2",
        "show_in_quick_edit" => true,
        "sort" => false,
        "show_in_graphql" => false,
    ];

    register_taxonomy("partner-category", ["partner"], $args);
}

add_action('init', 'framesync_register_cpt_partner_taxes_category');
add_action('init', 'framesync_register_cpt_partner_taxes_tag');
add_action('init', 'framesync_register_cpt_partner');

/**
 * Add duplicate post link after edit for custom post type
 */
function add_partner_duplicate_post_link_after_edit($actions, $post) {
    if ($post->post_type == 'partner') {
        $duplicate_link = wp_nonce_url(admin_url('admin-post.php?action=duplicate_post&post_id=' . $post->ID), 'duplicate-post_' . $post->ID);
        $actions['duplicate'] = '<a href="' . $duplicate_link . '" title="Copy this partner" rel="permalink">Copy</a>';
    }
    return $actions;
}
add_filter('post_row_actions', 'add_partner_duplicate_post_link_after_edit', 10, 2);
add_filter('page_row_actions', 'add_partner_duplicate_post_link_after_edit', 10, 2);

// Handle custom post type duplication
function duplicate_custom_post_type_partner_post() {
    if (isset($_GET['action']) && $_GET['action'] === 'duplicate_post' && isset($_GET['post_id']) && wp_verify_nonce($_GET['_wpnonce'], 'duplicate-post_' . $_GET['post_id'])) {
        $post_id = $_GET['post_id'];
        $post = get_post($post_id);
        $uuid = wp_generate_uuid4();
        
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

add_action('admin_post_duplicate_post', 'duplicate_custom_post_type_partner_post');

function add_partner_columns($columns) {
    /**
     * Add "Category" column to partner list.
     * Add "Category" column after "Title" column.
     */
    $new_columns = array();
    foreach ($columns as $key => $value) {
        $new_columns[$key] = $value;
        if ('title' === $key) {
            $new_columns['partner-category'] = __('Category', 'framesync');
            $new_columns['partner-tag'] = __('Tags', 'framesync');
        }
    }
    return $new_columns;
}

add_filter('manage_partner_posts_columns', 'add_partner_columns');

function display_partner_columns($column, $post_id) {
    /**
     * Display columns hierarchy for each partner.
     */
    if ('partner-category' === $column) {
        $terms = get_the_terms($post_id, 'partner-category');
        if (!empty($terms)) {
            $categories = array();
            foreach ($terms as $term) {
                if ($term->parent) {
                    // Category has a parent, display parent category and immediate child category
                    $parent = get_term($term->parent, 'partner-category');
                    if (!is_wp_error($parent) && !empty($parent)) {
                        $categories[] = esc_html($parent->name) . ' » ' . esc_html($term->name);
                    } else {
                        $categories[] = esc_html($term->name);
                    }
                } else {
                    // Category has no parent, display category name only
                    $categories[] = esc_html($term->name);
                }
            }
            echo implode('<br>', $categories);
        } else {
            echo '-';
        }
    } elseif ('partner-tag' === $column) {
        $terms = get_the_terms($post_id, 'partner-tag');

        if (!empty($terms)) {
            $tags = array();
            foreach ($terms as $term) {
                $tags[] = esc_html($term->name);
            }
            echo implode(',&nbsp;', $tags);
        } else {
            echo '-';
        }
    }
}

add_action('manage_partner_posts_custom_column', 'display_partner_columns', 10, 2);

function add_partner_columns_filter_for_category() {

    /**
     * Add filter dropdown for partner columns.
     */

    global $typenow;
    if ('partner' === $typenow) {
        $taxonomy = 'partner-category';
        $current_taxonomy = isset($_GET[$taxonomy]) ? $_GET[$taxonomy] : '';
        $terms = get_terms($taxonomy, array('hide_empty' => false));
        if (!empty($terms)) {
            echo '<select name="' . esc_attr($taxonomy) . '" id="' . esc_attr($taxonomy) . '">';
            echo '<option value="">' . __('All Categories', 'framesync') . '</option>';
            foreach ($terms as $term) {
                echo '<option value="' . esc_attr($term->slug) . '" ' . selected($current_taxonomy, $term->slug, false) . '>' . esc_html($term->name) . '</option>';
            }
            echo '</select>';
        }
    }
}

add_action('restrict_manage_posts', 'add_partner_columns_filter_for_category');

function handle_partner_columns_filter_for_category($query) {
    /**
     * Handle partner columns filter.
     */
    global $pagenow;
    $taxonomy = 'partner-category';
    if ('edit.php' === $pagenow && isset($query->query_vars['post_type']) && 'partner' === $query->query_vars['post_type'] && isset($_GET[$taxonomy]) && !empty($_GET[$taxonomy])) {
        $query->query_vars['tax_query'] = array(
            array(
                'taxonomy' => $taxonomy,
                'field'    => 'slug',
                'terms'    => $_GET[$taxonomy],
            ),
        );
    }
    return $query;
}

add_filter('parse_query', 'handle_partner_columns_filter_for_category');