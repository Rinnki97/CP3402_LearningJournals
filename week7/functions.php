<?php
function my_theme_enqueue_styles() {
    wp_enqueue_style('custom-style', get_template_directory_uri() . '/style.css');
}

function my_theme_enqueue_scripts() {
    wp_enqueue_script('custom-script', get_template_directory_uri() . '/js/script.js', array('jquery'), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');
add_action('wp_enqueue_scripts', 'my_theme_enqueue_scripts');
?>
