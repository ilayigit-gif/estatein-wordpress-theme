<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="site-header">
    <div class="container header-wrapper">

        <a href="<?php echo esc_url(home_url('/')); ?>" class="logo">
            Estatein
        </a>

        <nav class="main-navigation">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary_menu',
                'container'      => false,
                'menu_class'     => 'nav-menu',
                'fallback_cb'    => 'figma_fallback_menu',
            ));
            ?>

            <a href="<?php echo esc_url(home_url('/contact-us/')); ?>" class="mobile-contact-link">
                Contact Us
            </a>
        </nav>

        <a href="<?php echo esc_url(home_url('/contact-us/')); ?>" class="header-btn">
            Contact Us
        </a>

        <button class="mobile-menu-toggle" type="button" aria-label="Toggle Menu">
            <span></span>
            <span></span>
            <span></span>
        </button>

    </div>
</header>