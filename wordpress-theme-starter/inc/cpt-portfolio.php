<?php
if (!defined('ABSPATH')) exit;

/**
 * CPT: portfolio_item — powers Portfolio / Selected Work (min. 3 project cards).
 * Title = project name, Featured Image = project visual, ACF fields = category + optional link.
 */
function nova_register_cpt_portfolio() {
    register_post_type('portfolio_item', [
        'labels' => [
            'name'          => __('Portfolio', 'nova-studio'),
            'singular_name' => __('Portfolio Item', 'nova-studio'),
            'add_new_item'  => __('Add New Project', 'nova-studio'),
        ],
        'public'              => true,
        'publicly_queryable'  => false,
        'has_archive'         => false,
        'exclude_from_search' => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_icon'           => 'dashicons-portfolio',
        'supports'            => ['title', 'page-attributes', 'thumbnail'],
        'show_in_rest'        => true,
    ]);
}
add_action('init', 'nova_register_cpt_portfolio');
