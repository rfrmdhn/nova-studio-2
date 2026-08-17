<?php
if (!defined('ABSPATH')) exit;

/**
 * Custom REST API — exposes CPT + ACF data to the frontend under /wp-json/nova/v1/.
 * Services & Process are also rendered server-side (see template-parts) for
 * reliability; Portfolio & Testimonials are fetched client-side from these
 * endpoints (see assets/js/main.js) to explicitly satisfy the "custom REST API
 * to display data on the frontend" requirement.
 */
add_action('rest_api_init', function () {
    register_rest_route('nova/v1', '/services', [
        'methods'             => 'GET',
        'callback'            => 'nova_rest_get_services',
        'permission_callback' => '__return_true',
    ]);

    register_rest_route('nova/v1', '/portfolio', [
        'methods'             => 'GET',
        'callback'            => 'nova_rest_get_portfolio',
        'permission_callback' => '__return_true',
    ]);

    register_rest_route('nova/v1', '/testimonials', [
        'methods'             => 'GET',
        'callback'            => 'nova_rest_get_testimonials',
        'permission_callback' => '__return_true',
    ]);

    register_rest_route('nova/v1', '/process', [
        'methods'             => 'GET',
        'callback'            => 'nova_rest_get_process',
        'permission_callback' => '__return_true',
    ]);
});

function nova_rest_get_services() {
    $posts = get_posts([
        'post_type'      => 'service',
        'posts_per_page' => -1,
        'orderby'        => 'menu_order',
        'order'          => 'ASC',
        'post_status'    => 'publish',
    ]);

    return rest_ensure_response(array_map(function ($post) {
        return [
            'id'          => $post->ID,
            'title'       => get_the_title($post),
            'description' => get_field('service_description', $post->ID),
            'icon'        => get_field('service_icon', $post->ID),
            'thumbnail'   => get_the_post_thumbnail_url($post, 'medium'),
        ];
    }, $posts));
}

function nova_rest_get_portfolio() {
    $posts = get_posts([
        'post_type'      => 'portfolio_item',
        'posts_per_page' => -1,
        'orderby'        => 'menu_order',
        'order'          => 'ASC',
        'post_status'    => 'publish',
    ]);

    return rest_ensure_response(array_map(function ($post) {
        return [
            'id'        => $post->ID,
            'title'     => get_the_title($post),
            'category'  => get_field('portfolio_category', $post->ID),
            'url'       => get_field('portfolio_url', $post->ID),
            'thumbnail' => get_the_post_thumbnail_url($post, 'large'),
        ];
    }, $posts));
}

function nova_rest_get_testimonials() {
    $posts = get_posts([
        'post_type'      => 'testimonial',
        'posts_per_page' => -1,
        'orderby'        => 'menu_order',
        'order'          => 'ASC',
        'post_status'    => 'publish',
    ]);

    return rest_ensure_response(array_map(function ($post) {
        return [
            'id'     => $post->ID,
            'name'   => get_the_title($post),
            'role'   => get_field('testimonial_role', $post->ID),
            'quote'  => get_field('testimonial_quote', $post->ID),
            'avatar' => get_the_post_thumbnail_url($post, 'thumbnail'),
        ];
    }, $posts));
}

function nova_rest_get_process() {
    $posts = get_posts([
        'post_type'      => 'process_step',
        'posts_per_page' => -1,
        'orderby'        => 'menu_order',
        'order'          => 'ASC',
        'post_status'    => 'publish',
    ]);

    $index = 0;
    return rest_ensure_response(array_map(function ($post) use (&$index) {
        $index++;
        return [
            'id'          => $post->ID,
            'step'        => $index,
            'title'       => get_the_title($post),
            'description' => get_field('process_description', $post->ID),
        ];
    }, $posts));
}
