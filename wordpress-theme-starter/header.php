<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="nova-header">
    <div class="nova-container nova-header__inner">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="nova-logo">NOVA Studio</a>

        <nav class="nova-nav" aria-label="Primary">
            <?php wp_nav_menu(['theme_location' => 'primary', 'container' => false, 'fallback_cb' => false]); ?>
        </nav>

        <a href="#final-cta" class="nova-btn nova-btn--primary nova-btn--small">Book a Consultation</a>

        <button class="nova-nav-toggle" aria-label="Toggle menu" id="nova-nav-toggle">
            <span></span><span></span><span></span>
        </button>
    </div>
</header>
