<?php
if (!defined('ABSPATH')) exit;

function nova_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('html5', ['search-form', 'gallery', 'caption', 'style', 'script']);
    add_theme_support('responsive-embeds');

    register_nav_menus([
        'primary' => __('Primary Menu', 'nova-studio'),
        'footer'  => __('Footer Menu', 'nova-studio'),
    ]);
}
add_action('after_setup_theme', 'nova_theme_setup');
