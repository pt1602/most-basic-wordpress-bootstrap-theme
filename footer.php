<footer>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <p class="mb-0 text-light">© <?php bloginfo('name'); ?> <?php echo date("Y"); ?></p>
            <?php
            wp_nav_menu([
                'menu_class' => 'nav',
                'theme_location' => 'footer-menu',
            ]); ?>
        </div>
    </nav>
    <?php wp_footer(); ?>
</footer>
</body>
</html>