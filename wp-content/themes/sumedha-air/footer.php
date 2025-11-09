</main><!-- #main-content -->

<footer class="site-footer">
    <div class="footer-content">
        <!-- Company Info Section -->
        <div class="footer-section footer-about">
            <h3><?php bloginfo( 'name' ); ?></h3>
            <p>Nepal's trusted helicopter emergency service providing 24/7 mountain rescue operations across all regions. Professional, safe, and reliable emergency response when seconds count.</p>
        </div>

        <!-- Quick Links Section -->
        <div class="footer-section footer-links">
            <h3>Quick Links</h3>
            <nav class="footer-menu" role="navigation" aria-label="<?php esc_attr_e( 'Footer Navigation', 'sumedha-air' ); ?>">
                <?php
                if ( has_nav_menu( 'footer' ) ) {
                    wp_nav_menu( array(
                        'theme_location' => 'footer',
                        'menu_class'     => 'footer-menu-list',
                        'container'      => false,
                        'depth'          => 1,
                    ) );
                } else {
                    echo '<ul class="footer-menu-list">';
                    echo '<li><a href="' . esc_url( home_url( '/' ) ) . '">Home</a></li>';
                    echo '<li><a href="' . esc_url( home_url( '/services/' ) ) . '">Services</a></li>';
                    echo '<li><a href="' . esc_url( home_url( '/contact/' ) ) . '">Contact</a></li>';
                    echo '</ul>';
                }
                ?>
            </nav>
        </div>

        <!-- Contact Info Section -->
        <div class="footer-section footer-contact">
            <h3>Contact Us</h3>
            <p>
                <strong>Emergency Hotline:</strong><br>
                <a href="tel:<?php echo esc_attr( str_replace( array( ' ', '-' ), '', sumedha_air_emergency_phone() ) ); ?>" class="emergency-phone">
                    <?php echo esc_html( sumedha_air_emergency_phone() ); ?>
                </a>
            </p>
            <p>
                <strong>Email:</strong><br>
                <a href="mailto:<?php echo esc_attr( sumedha_air_emergency_email() ); ?>">
                    <?php echo esc_html( sumedha_air_emergency_email() ); ?>
                </a>
            </p>
            <p>
                <strong>Location:</strong><br>
                <?php echo esc_html( sumedha_air_address() ); ?>
            </p>
            <p>
                <strong>Available:</strong> 24/7 for Emergencies
            </p>
        </div>
    </div>

    <div class="footer-bottom">
        <p>&copy; <?php echo date( 'Y' ); ?> <?php bloginfo( 'name' ); ?>. All rights reserved.</p>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
