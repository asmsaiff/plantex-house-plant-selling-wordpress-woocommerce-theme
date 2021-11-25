<?php
    function plantex_theme_setup() {
        load_theme_textdomain('plantex');

        add_theme_support( 'title-tag' );
        add_theme_support( 'description' );
        add_theme_support( 'menus' );
        add_theme_support( 'widgets' );
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'post-formats', array('aside', 'image', 'gallery', 'audio', 'video', 'quote', 'link', 'chat') );
    }
    add_action('after_setup_theme', 'plantex_theme_setup');

    function plantex_assets_enqueue() {
        // Style Enqueue
        wp_enqueue_style('remixIcon-css', 'https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css');
        wp_enqueue_style('main-css', get_template_directory_uri().'/assets/css/styles.css');
        wp_enqueue_style('theme-css', get_stylesheet_uri());

        // Script Enqueue
        wp_enqueue_script('scrollreveal-js', get_template_directory_uri().'/assets/js/scrollreveal.min.js', null, time(), true);
        wp_enqueue_script('main-js', get_template_directory_uri().'/assets/js/main.js', null, time(), true);
    }
    add_action( 'wp_enqueue_scripts', 'plantex_assets_enqueue' );