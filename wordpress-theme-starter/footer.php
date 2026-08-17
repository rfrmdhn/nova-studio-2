    <footer class="nova-footer">
        <div class="nova-container nova-footer__inner">
            <div class="nova-footer__brand">
                <span class="nova-logo">NOVA Studio</span>
                <p>Creative &amp; digital studio for growing businesses.</p>
            </div>

            <nav class="nova-footer__nav" aria-label="Footer">
                <?php wp_nav_menu(['theme_location' => 'footer', 'container' => false, 'fallback_cb' => false]); ?>
            </nav>

            <div class="nova-footer__contact">
                <a href="mailto:hello@novastudio.co">hello@novastudio.co</a>
                <div class="nova-footer__social">
                    <a href="#">Instagram</a>
                    <a href="#">LinkedIn</a>
                </div>
            </div>
        </div>

        <div class="nova-container nova-footer__bottom">
            <p>&copy; <?php echo esc_html(gmdate('Y')); ?> NOVA Studio. All rights reserved.</p>
        </div>
    </footer>

<?php wp_footer(); ?>
</body>
</html>
