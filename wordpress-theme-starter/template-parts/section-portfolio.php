<?php
/**
 * Portfolio — intentionally left empty here and populated client-side via
 * fetch('<site>/wp-json/nova/v1/portfolio') in assets/js/main.js, to explicitly
 * demonstrate the custom REST API rendering data on the frontend.
 */
?>
<section class="nova-portfolio" id="portfolio">
    <div class="nova-container">
        <h2 class="nova-section-title">Selected Work</h2>
        <div class="nova-portfolio__grid" id="nova-portfolio-grid" data-endpoint="portfolio">
            <p class="nova-loading-state">Loading projects…</p>
        </div>
    </div>
</section>
