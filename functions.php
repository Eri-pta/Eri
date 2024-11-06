<?php
// Enqueue Styles and Scripts
function eritrean_embassy_enqueue_styles() {
    wp_enqueue_style('main-styles', get_template_directory_uri() . '/style.css'); // Link to the CSS file
}

// Hook the function to load styles on the WordPress website
add_action('wp_enqueue_scripts', 'eritrean_embassy_enqueue_styles');

// Add theme support for title tag
function eritrean_embassy_theme_setup() {
    add_theme_support('title-tag'); // Enable dynamic titles
}

// Hook the theme setup function
add_action('after_setup_theme', 'eritrean_embassy_theme_setup');

// Register navigation menus
function eritrean_embassy_menus() {
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'eritrean-embassy'),
    ));
}

// Hook for registering menus
add_action('init', 'eritrean_embassy_menus');

// Customize footer credits in the theme
function eritrean_embassy_footer_credits() {
    echo '<p>&copy; 2024 Eritrean Embassy in South Africa. All rights reserved.</p>';
}

// Hook for custom footer
add_action('wp_footer', 'eritrean_embassy_footer_credits');

// Disable WordPress admin bar on the front-end
add_filter('show_admin_bar', '__return_false');
?>
