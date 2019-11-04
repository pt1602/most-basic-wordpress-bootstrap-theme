</main>
<footer class="mt-4">
    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
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