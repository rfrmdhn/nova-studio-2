<?php
if (!defined('ABSPATH')) exit;

define('NOVA_THEME_VERSION', '1.0.0');
define('NOVA_THEME_DIR', get_template_directory());
define('NOVA_THEME_URI', get_template_directory_uri());

require_once NOVA_THEME_DIR . '/inc/theme-setup.php';
require_once NOVA_THEME_DIR . '/inc/cpt-services.php';
require_once NOVA_THEME_DIR . '/inc/cpt-portfolio.php';
require_once NOVA_THEME_DIR . '/inc/cpt-testimonials.php';
require_once NOVA_THEME_DIR . '/inc/cpt-process.php';
require_once NOVA_THEME_DIR . '/inc/acf-fields.php';
require_once NOVA_THEME_DIR . '/inc/rest-api.php';

function nova_enqueue_assets() {
    wp_enqueue_style(
        'nova-google-fonts',
        'https://fonts.googleapis.com/css2?family=Sora:wght@400;600;700;800&family=Inter:wght@400;500;600&display=swap',
        [],
        null
    );

    wp_enqueue_style('nova-main', NOVA_THEME_URI . '/assets/css/main.css', [], NOVA_THEME_VERSION);
    wp_enqueue_script('nova-main', NOVA_THEME_URI . '/assets/js/main.js', [], NOVA_THEME_VERSION, true);

    // Exposes the custom REST API base URL to assets/js/main.js as `novaAPI.root`.
    wp_localize_script('nova-main', 'novaAPI', [
        'root' => esc_url_raw(rest_url('nova/v1/')),
    ]);
}
add_action('wp_enqueue_scripts', 'nova_enqueue_assets');
