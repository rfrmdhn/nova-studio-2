<?php
/** Process — min. 4 stages, rendered server-side via WP_Query over `process_step`, ordered by menu_order. */
$nova_steps = new WP_Query([
    'post_type'      => 'process_step',
    'posts_per_page' => -1,
    'orderby'        => 'menu_order',
    'order'          => 'ASC',
]);
$nova_step_index = 0;
?>
<section class="nova-process" id="process">
    <div class="nova-container">
        <h2 class="nova-section-title">Our Process</h2>
        <div class="nova-process__steps">
            <?php if ($nova_steps->have_posts()) : while ($nova_steps->have_posts()) : $nova_steps->the_post(); $nova_step_index++; ?>
                <div class="nova-process-step">
                    <span class="nova-process-step__number"><?php echo esc_html(str_pad($nova_step_index, 2, '0', STR_PAD_LEFT)); ?></span>
                    <h3 class="nova-card__title"><?php the_title(); ?></h3>
                    <p class="nova-card__desc"><?php the_field('process_description'); ?></p>
                </div>
            <?php endwhile;
                wp_reset_postdata();
            else : ?>
                <p class="nova-empty-state">Add at least 4 posts under "Process Steps" in wp-admin.</p>
            <?php endif; ?>
        </div>
    </div>
</section>
