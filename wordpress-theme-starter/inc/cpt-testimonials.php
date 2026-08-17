<?php
if (!defined('ABSPATH')) exit;

/**
 * CPT: testimonial — powers the Testimonial section (min. 2 fictional client quotes).
 * Title = client name, Featured Image = avatar, ACF fields = quote + role/company.
 */
function nova_register_cpt_testimonial() {
    register_post_type('testimonial', [
        'labels' => [
            'name'          => __('Testimonials', 'nova-studio'),
            'singular_name' => __('Testimonial', 'nova-studio'),
            'add_new_item'  => __('Add New Testimonial', 'nova-studio'),
        ],
        'public'              => true,
        'publicly_queryable'  => false,
        'has_archive'         => false,
        'exclude_from_search' => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_icon'           => 'dashicons-testimonial',
        'supports'            => ['title', 'page-attributes', 'thumbnail'],
        'show_in_rest'        => true,
    ]);
}
add_action('init', 'nova_register_cpt_testimonial');
