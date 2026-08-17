<?php
if (!defined('ABSPATH')) exit;

/**
 * CPT: service — powers the Services section (min. 3 cards required by brief).
 * Title = service name, Featured Image = icon, ACF field = short description.
 */
function nova_register_cpt_service() {
    register_post_type('service', [
        'labels' => [
            'name'          => __('Services', 'nova-studio'),
            'singular_name' => __('Service', 'nova-studio'),
            'add_new_item'  => __('Add New Service', 'nova-studio'),
        ],
        'public'              => true,
        'publicly_queryable'  => false,
        'has_archive'         => false,
        'exclude_from_search' => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_icon'           => 'dashicons-admin-tools',
        'supports'            => ['title', 'page-attributes', 'thumbnail'],
        'show_in_rest'        => true,
    ]);
}
add_action('init', 'nova_register_cpt_service');
