<?php
namespace App;

add_filter('show_admin_bar', '__return_false');

add_action('after_setup_theme', function () {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    
    register_nav_menus([
        'primary' => __('Primary Menu', 'blade-theme')
    ]);
});

add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('theme-style', THEME_URI.'/public/css/app.css');
    wp_enqueue_script('theme-script', THEME_URI.'/public/js/app.js');
});