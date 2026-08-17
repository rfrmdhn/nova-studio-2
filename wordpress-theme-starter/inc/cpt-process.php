<?php
if (!defined('ABSPATH')) exit;

/**
 * CPT: process_step — powers the Process section (min. 4 stages, discovery → delivery).
 * Title = step name, ACF field = description. Order is controlled via menu_order
 * (drag to reorder in the admin list view, or set the "Order" field on each post).
 */
function nova_register_cpt_process_step() {
    register_post_type('process_step', [
        'labels' => [
            'name'          => __('Process Steps', 'nova-studio'),
            'singular_name' => __('Process Step', 'nova-studio'),
            'add_new_item'  => __('Add New Step', 'nova-studio'),
        ],
        'public'              => true,
        'publicly_queryable'  => false,
        'has_archive'         => false,
        'exclude_from_search' => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_icon'           => 'dashicons-list-view',
        'supports'            => ['title', 'page-attributes'],
        'show_in_rest'        => true,
    ]);
}
add_action('init', 'nova_register_cpt_process_step');
