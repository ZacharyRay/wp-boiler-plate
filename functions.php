<?php 

// Add css / js
function theme_files() {
    // add files
    wp_enqueue_style('main_css', get_template_directory_uri() . '/build/main.css', array(), '01', 'all');
    wp_enqueue_script('main_js', get_template_directory_uri() . '/build/main.js', array(), '01', true);
}
add_action('wp_enqueue_scripts', 'theme_files');

// add features

function theme_features() {
    register_nav_menu('header_menu', 'Header menu');
    register_nav_menu('footer_menu', 'Footer menu');
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'theme_features');