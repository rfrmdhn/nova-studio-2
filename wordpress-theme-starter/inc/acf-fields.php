<?php
if (!defined('ABSPATH')) exit;

/**
 * ACF field groups registered in code via acf_add_local_field_group().
 * This works fully on ACF FREE (it is not a Pro-only function) and is faster
 * and more reliable under time pressure than building field groups via the UI.
 *
 * Repeater / Flexible Content / Options Page are ACF PRO-only, so instead of
 * using them we modeled every repeating section as its own CPT (see inc/cpt-*.php)
 * — each post below is one "row" of that repeating content.
 */
add_action('acf/init', 'nova_register_acf_fields');

function nova_register_acf_fields() {
    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group([
        'key'    => 'group_service',
        'title'  => 'Service Details',
        'fields' => [
            [
                'key'   => 'field_service_icon',
                'label' => 'Icon (dashicon class, e.g. dashicons-laptop)',
                'name'  => 'service_icon',
                'type'  => 'text',
            ],
            [
                'key'   => 'field_service_description',
                'label' => 'Short Description',
                'name'  => 'service_description',
                'type'  => 'textarea',
                'rows'  => 3,
            ],
        ],
        'location' => [
            [['param' => 'post_type', 'operator' => '==', 'value' => 'service']],
        ],
    ]);

    acf_add_local_field_group([
        'key'    => 'group_portfolio',
        'title'  => 'Portfolio Details',
        'fields' => [
            [
                'key'   => 'field_portfolio_category',
                'label' => 'Category (e.g. Branding, Web Design)',
                'name'  => 'portfolio_category',
                'type'  => 'text',
            ],
            [
                'key'   => 'field_portfolio_url',
                'label' => 'Project Link (optional)',
                'name'  => 'portfolio_url',
                'type'  => 'url',
            ],
        ],
        'location' => [
            [['param' => 'post_type', 'operator' => '==', 'value' => 'portfolio_item']],
        ],
    ]);

    acf_add_local_field_group([
        'key'    => 'group_testimonial',
        'title'  => 'Testimonial Details',
        'fields' => [
            [
                'key'   => 'field_testimonial_quote',
                'label' => 'Quote',
                'name'  => 'testimonial_quote',
                'type'  => 'textarea',
                'rows'  => 4,
            ],
            [
                'key'   => 'field_testimonial_role',
                'label' => 'Role / Company',
                'name'  => 'testimonial_role',
                'type'  => 'text',
            ],
        ],
        'location' => [
            [['param' => 'post_type', 'operator' => '==', 'value' => 'testimonial']],
        ],
    ]);

    acf_add_local_field_group([
        'key'    => 'group_process_step',
        'title'  => 'Process Step Details',
        'fields' => [
            [
                'key'   => 'field_process_description',
                'label' => 'Description',
                'name'  => 'process_description',
                'type'  => 'textarea',
                'rows'  => 3,
            ],
        ],
        'location' => [
            [['param' => 'post_type', 'operator' => '==', 'value' => 'process_step']],
        ],
    ]);
}
