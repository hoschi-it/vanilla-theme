    <footer>
        <?php wp_nav_menu(
            array(
                'theme_location' => 'footer-menu',
                'container' => 'nav'
            )            
        ); ?>
        <nav>
            <ul>
                <li>Impressum</li>
                <li>Datenschutz</li>
                <li>Einloggen</li>
            </ul>
        </nav>
        <p>Copyright &copy;2019 FeG Bad Vilbel. Alle Rechte vorbehalten.</p>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>
