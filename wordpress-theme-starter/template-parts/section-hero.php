<?php
/** Hero — headline, supporting copy, primary + secondary CTA, visual. */
?>
<section class="nova-hero" id="hero">
    <div class="nova-container nova-hero__grid">
        <div class="nova-hero__content">
            <h1 class="nova-hero__headline">We design digital experiences that make small businesses look world-class.</h1>
            <p class="nova-hero__subhead">NOVA Studio helps founders and marketing teams launch websites, brand identities, and digital design that build trust and win customers.</p>
            <div class="nova-hero__actions">
                <a href="#final-cta" class="nova-btn nova-btn--primary">Book a Consultation</a>
                <a href="#portfolio" class="nova-btn nova-btn--secondary">View Our Work</a>
            </div>
        </div>
        <div class="nova-hero__visual">
            <?php if (has_custom_logo()) : the_custom_logo(); else : ?>
                <img src="<?php echo esc_url(NOVA_THEME_URI . '/assets/img/hero-visual.jpg'); ?>" alt="NOVA Studio project preview" loading="eager">
            <?php endif; ?>
        </div>
    </div>
</section>
