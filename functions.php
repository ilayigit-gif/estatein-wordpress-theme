<?php

if (!defined('ABSPATH')) {
    exit;
}

/* THEME ASSETS */
function figma_theme_assets() {
    wp_enqueue_style(
        'figma-main-style',
        get_template_directory_uri() . '/assets/css/main.css',
        array(),
        file_exists(get_template_directory() . '/assets/css/main.css') ? filemtime(get_template_directory() . '/assets/css/main.css') : null
    );

    wp_enqueue_script(
        'figma-main-js',
        get_template_directory_uri() . '/assets/js/main.js',
        array(),
        file_exists(get_template_directory() . '/assets/js/main.js') ? filemtime(get_template_directory() . '/assets/js/main.js') : null,
        true
    );
}
add_action('wp_enqueue_scripts', 'figma_theme_assets');

/* THEME SETUP */
function figma_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ));

    register_nav_menus(array(
        'primary_menu' => __('Primary Menu', 'figma-custom-theme'),
    ));
}
add_action('after_setup_theme', 'figma_theme_setup');

/* FALLBACK MENU */
function figma_fallback_menu() {
    echo '<ul class="nav-menu">';
    echo '<li><a href="' . esc_url(home_url('/')) . '">Home</a></li>';
    echo '<li><a href="' . esc_url(home_url('/about-us/')) . '">About Us</a></li>';
    echo '<li><a href="' . esc_url(home_url('/properties/')) . '">Properties</a></li>';
    echo '<li><a href="' . esc_url(home_url('/services/')) . '">Services</a></li>';
    echo '</ul>';
}

/* FAQ SCHEMA - HOMEPAGE */
function estatein_faq_schema() {
    if (!is_front_page()) {
        return;
    }

    $schema = array(
        '@context' => 'https://schema.org',
        '@type' => 'FAQPage',
        'mainEntity' => array(
            array(
                '@type' => 'Question',
                'name' => 'How do I search for properties on Estatein?',
                'acceptedAnswer' => array(
                    '@type' => 'Answer',
                    'text' => 'Use our advanced property filters to search by location, property type, amenities and budget range.',
                ),
            ),
            array(
                '@type' => 'Question',
                'name' => 'What documents do I need to sell my property?',
                'acceptedAnswer' => array(
                    '@type' => 'Answer',
                    'text' => 'You typically need ownership documents, identification records, tax paperwork and property inspection reports.',
                ),
            ),
            array(
                '@type' => 'Question',
                'name' => 'How can I contact an Estatein agent?',
                'acceptedAnswer' => array(
                    '@type' => 'Answer',
                    'text' => 'You can contact Estatein through the contact form, office phone numbers or direct property inquiry sections.',
                ),
            ),
            array(
                '@type' => 'Question',
                'name' => 'Do you provide real estate investment guidance?',
                'acceptedAnswer' => array(
                    '@type' => 'Answer',
                    'text' => 'Yes. Estatein provides market analysis, ROI evaluation and personalized investment consulting services.',
                ),
            ),
        ),
    );

    echo '<script type="application/ld+json">';
    echo wp_json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    echo '</script>';
}
add_action('wp_head', 'estatein_faq_schema');