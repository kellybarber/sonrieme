<?php

function register_services()
{
    $labels = array(
        'name' => _x('Services', 'post type general name'),
        'singular_name' => _x('Service', 'post type singular name'),
        'add_new' => _x('Add New', 'service'),
        'add_new_item' => __('Add New Service'),
        'edit_item' => __('Edit Service'),
        'new_item' => __('New Service'),
        'all_items' => __('All Services'),
        'view_item' => __('View Service'),
        'search_items' => __('Search Services'),
        'not_found' => __('No services found'),
        'not_found_in_trash' => __('No services found in the Trash'),
        'parent_item_colon' => "'",
        'menu_name' => 'Services'
    );
    $args = array(
        'labels' => $labels,
        'description' => 'Dental services provided by the Clinic',
        'public' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-smiley',
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'comments'),
        'has_archive' => true,
        'show_in_rest' => true,
    );
    register_post_type('services', $args);
}

add_action('init', 'register_services');


function register_team()
{
    $labels = array(
        'name' => _x('Team', 'post type general name'),
        'singular_name' => _x('Team Member', 'post type singular name'),
        'add_new' => _x('Add New', 'team member'),
        'add_new_item' => __('Add New Team Member'),
        'edit_item' => __('Edit Team Member'),
        'new_item' => __('New Team Member'),
        'all_items' => __('All Team Members'),
        'view_item' => __('View Team Member'),
        'search_items' => __('Search Team Members'),
        'not_found' => __('No team members found'),
        'not_found_in_trash' => __('No team members found in the Trash'),
        'parent_item_colon' => "'",
        'menu_name' => 'Team'
    );
    $args = array(
        'labels' => $labels,
        'description' => 'Members of the Soneime team',
        'public' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-admin-users',
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'comments'),
        'has_archive' => false,
        'show_in_rest' => true,
    );
    register_post_type('team', $args);
}

add_action('init', 'register_team');


function register_testimonials()
{
    $labels = array(
        'name' => _x('Testimonials', 'post type general name'),
        'singular_name' => _x('Testimonial', 'post type singular name'),
        'add_new' => _x('Add New', 'testimonial'),
        'add_new_item' => __('Add New Testimonial'),
        'edit_item' => __('Edit Testimonial'),
        'new_item' => __('New Testimonial'),
        'all_items' => __('All Testimonials'),
        'view_item' => __('View Testimonial'),
        'search_items' => __('Search Testimonials'),
        'not_found' => __('No testimonials found'),
        'not_found_in_trash' => __('No testimonials found in the Trash'),
        'parent_item_colon' => "'",
        'menu_name' => 'Testimonials'
    );
    $args = array(
        'labels' => $labels,
        'description' => 'Testimonials for the clinic',
        'public' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-welcome-write-blog',
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'comments'),
        'has_archive' => true,
        'show_in_rest' => true,
    );
    register_post_type('testimonials', $args);
}

add_action('init', 'register_testimonials');