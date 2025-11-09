<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
    <div class="header-container">
        <div class="site-logo">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <?php if ( file_exists( get_template_directory() . '/sumedha_logo.JPEG' ) ) : ?>
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/sumedha_logo.JPEG' ); ?>" alt="<?php bloginfo( 'name' ); ?>">
                <?php else : ?>
                    <span class="logo-text">SUMEDHA AIR</span>
                <?php endif; ?>
            </a>
        </div>

        <!-- Desktop Navigation -->
        <nav class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary Navigation', 'sumedha-air' ); ?>">
            <?php
            wp_nav_menu( array(
                'theme_location' => 'primary',
                'menu_class'     => 'primary-menu',
                'container'      => false,
                'fallback_cb'    => 'sumedha_air_fallback_menu',
            ) );
            ?>
        </nav>

        <!-- Emergency Contact in Header -->
        <div class="emergency-contact-header">
            <span class="availability-badge">24/7</span>
            <a href="tel:<?php echo esc_attr( str_replace( array( ' ', '-' ), '', sumedha_air_emergency_phone() ) ); ?>" class="emergency-phone">
                <?php echo esc_html( sumedha_air_emergency_phone() ); ?>
            </a>
        </div>

        <!-- Mobile Menu Toggle -->
        <button class="menu-toggle" aria-label="Toggle Menu" aria-expanded="false" id="mobile-menu-toggle">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>

    <!-- Mobile Navigation -->
    <nav class="mobile-menu" id="mobile-menu" role="navigation" aria-label="<?php esc_attr_e( 'Mobile Navigation', 'sumedha-air' ); ?>">
        <?php
        wp_nav_menu( array(
            'theme_location' => 'primary',
            'menu_class'     => 'mobile-menu-list',
            'container'      => false,
            'fallback_cb'    => 'sumedha_air_fallback_menu',
        ) );
        ?>
        <div class="emergency-contact-header">
            <span class="availability-badge">24/7 Emergency</span>
            <a href="tel:<?php echo esc_attr( str_replace( array( ' ', '-' ), '', sumedha_air_emergency_phone() ) ); ?>" class="emergency-phone">
                <?php echo esc_html( sumedha_air_emergency_phone() ); ?>
            </a>
        </div>
    </nav>
</header>

<main id="main-content" class="site-main">
<?php
/**
 * Fallback menu if no menu is set
 */
function sumedha_air_fallback_menu() {
    echo '<ul>';
    echo '<li><a href="' . esc_url( home_url( '/' ) ) . '">Home</a></li>';
    echo '<li><a href="' . esc_url( home_url( '/services/' ) ) . '">Services</a></li>';
    echo '<li><a href="' . esc_url( home_url( '/contact/' ) ) . '">Contact</a></li>';
    echo '</ul>';
}
?>
