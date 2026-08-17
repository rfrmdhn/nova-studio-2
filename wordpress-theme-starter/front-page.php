<?php
/**
 * Front page — assembles every required section in brief order:
 * Hero, Services, Why NOVA, Portfolio, Process, Testimonials, Final CTA, Footer.
 * front-page.php is used automatically for the site's homepage regardless of
 * the Reading Settings choice, so no extra page setup is needed.
 */
get_header();
?>
<main id="primary" class="nova-main">
    <?php
    get_template_part('template-parts/section', 'hero');
    get_template_part('template-parts/section', 'services');
    get_template_part('template-parts/section', 'why');
    get_template_part('template-parts/section', 'portfolio');
    get_template_part('template-parts/section', 'process');
    get_template_part('template-parts/section', 'testimonials');
    get_template_part('template-parts/section', 'cta');
    ?>
</main>
<?php get_footer(); ?>
