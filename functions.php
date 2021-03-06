<?php

// Load Dependencies
require_once( __DIR__ . '/vendor/autoload.php' );
require_once(__DIR__ . '/classes/timber-controller.php');

// Add Styles and Scripts
function enqueue_auxiliary_scripts() {
  wp_enqueue_style( 'site_main_css', get_template_directory_uri() . '/dist/main.min.css' );
  wp_enqueue_script( 'site_main_js', get_template_directory_uri() . '/dist/bundle.min.js' , null , null , true );
}
add_action( 'wp_enqueue_scripts', 'enqueue_auxiliary_scripts' );

// Setup Theme Features
function setup_theme() {
  // Menus
  add_theme_support( 'menus' );
  register_nav_menu( 'primary', 'Primary Header Navigation' );
  register_nav_menu( 'secondary', 'Footer Navigation' );
}
add_action( 'init', 'setup_theme' );

// Setup Auxiliary Features After Initial Load
function setup_auxiliary_features() {
    // Add Image Thumbnails
    add_theme_support( 'post-thumbnails' );

    add_image_size( 'logo', 100, null, true );
    add_image_size( 'page-header', 1920, 1080, true );
    add_image_size( 'section-header', 700, 700, true );

}
add_action( 'after_setup_theme', 'setup_auxiliary_features');

// Initialize Libraries
$timber = new Timber\Timber();
new TImber_Site();

// Set Gutenberg Options
require get_template_directory() . '/inc/gutenberg-options.php';

// Selectively Disable Editor 
require get_template_directory() . '/inc/disable-editor.php';

// Custom Post Types
require get_template_directory() . '/inc/post-types.php';