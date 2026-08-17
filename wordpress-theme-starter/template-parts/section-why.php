<?php
/**
 * Why NOVA — 3-4 brand reasons. Kept as static copy rather than a 5th CPT:
 * this is fixed brand messaging, not content an editor repeats/reorders often,
 * so a dedicated CPT would be over-engineering for a single landing page.
 */
$nova_reasons = [
    ['title' => 'Senior-level craft', 'desc' => 'Every project is led by experienced designers and developers, not templates.'],
    ['title' => 'Built for growth', 'desc' => 'We design systems that scale with your business, not just a one-off page.'],
    ['title' => 'Fast, transparent process', 'desc' => 'Clear timelines and weekly updates so you always know what is next.'],
    ['title' => 'Results you can measure', 'desc' => 'Every design decision is tied back to trust, conversion, and clarity.'],
];
?>
<section class="nova-why" id="why-nova">
    <div class="nova-container">
        <h2 class="nova-section-title">Why NOVA</h2>
        <div class="nova-why__grid">
            <?php foreach ($nova_reasons as $reason) : ?>
                <div class="nova-card nova-why-card">
                    <h3 class="nova-card__title"><?php echo esc_html($reason['title']); ?></h3>
                    <p class="nova-card__desc"><?php echo esc_html($reason['desc']); ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
