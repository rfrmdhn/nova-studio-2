<?php
/** Services — rendered server-side via WP_Query over the `service` CPT. */
$nova_services = new WP_Query([
    'post_type'      => 'service',
    'posts_per_page' => -1,
    'orderby'        => 'menu_order',
    'order'          => 'ASC',
]);
?>
<section class="nova-services" id="services">
    <div class="nova-container">
        <h2 class="nova-section-title">What We Do</h2>
        <div class="nova-services__grid">
            <?php if ($nova_services->have_posts()) : while ($nova_services->have_posts()) : $nova_services->the_post(); ?>
                <div class="nova-card nova-service-card">
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="nova-service-card__icon"><?php the_post_thumbnail('thumbnail', ['alt' => get_the_title()]); ?></div>
                    <?php endif; ?>
                    <h3 class="nova-card__title"><?php the_title(); ?></h3>
                    <p class="nova-card__desc"><?php the_field('service_description'); ?></p>
                </div>
            <?php endwhile;
                wp_reset_postdata();
            else : ?>
                <p class="nova-empty-state">Add at least 3 posts under "Services" in wp-admin.</p>
            <?php endif; ?>
        </div>
    </div>
</section>
