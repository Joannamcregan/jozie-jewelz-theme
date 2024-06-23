<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

function Jewelz_theme_files(){
    wp_enqueue_script('main-Jewelz-site-js', get_theme_file_uri('/build/index.js'), array('jquery'), '1.0', true);
    wp_enqueue_style('Jewelz-light-styles', get_stylesheet_directory_uri() . '/css/light-styles.css', false, '', 'all');
    wp_enqueue_style('Jewelz-dark-styles', get_stylesheet_directory_uri() . '/css/dark-styles.css', false, '', 'all');
    wp_enqueue_style('Jewelz-common-styles', get_stylesheet_directory_uri() . '/css/common-styles.css', false, 'all');
    wp_localize_script('main-Jewelz-site-js', 'siteData', array(
        'root_url' => get_site_url()
    ));
}

add_action('wp_enqueue_scripts','Jewelz_theme_files');

/* Disable WordPress Admin Bar for all users */
add_filter( 'show_admin_bar', '__return_false' );

function books_custom_post_types() {
    register_post_type('book', array(
        'show_in_rest' => true,
        'supports' => array('title', 'editor', 'excerpt'),
        'rewrite' => array('slug' => 'books'),
        'public' => true,
        'has_archive' => true,
        'labels' => array(
            'name' => 'Book Info',
            'add_new_item' => 'Add New Book Info',
            'edit_item' => 'Edit Book Info',
            'all_items' => 'All Book Info',
            'singular_name' => 'Book Info'
        ),
        'menu_icon' => 'dashicons-edit'
    ));
}

add_action('init', 'books_custom_post_types');
?>