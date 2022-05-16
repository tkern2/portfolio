<?php

function site_files() {
    wp_enqueue_script('main_js_file', get_theme_file_uri('/public/index.js'), NULL, '1.0', true);
    wp_enqueue_style('theme_styles', get_theme_file_uri('/public/style-index.css'));
}

add_action('wp_enqueue_scripts','site_files');

function site_features () {
	add_theme_support('title-tag');
}

add_action('after_setup_theme', 'site_features');

?>