<?php

/**
 * Beginner Developer Theme Functions and Definitions
 *
 * @package beginner-developer-theme
 */

function bdt_enqueue_styles()
{
    // Safely injects your main style.css layout file
    wp_enqueue_style('bdt-main-style', get_stylesheet_uri(), array(), '1.0.0');
}

// Hooks into the core rendering engine sequence to run your asset loading script
add_action('wp_enqueue_scripts', 'bdt_enqueue_styles');
