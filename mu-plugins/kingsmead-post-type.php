<?php

function kingsmead_post_types(){

    // Homepage slideshow
    register_post_type('homepagebanner', array(
        'supports' => array('title', 'editor'),
        'public' => true,
        'labels' => array(
            'name' => 'Homepage Banner',
            'add_new_item' => 'Add New Main Banner',
            'edit_item' => 'Edit Main Banner',
            'all_items' => 'All Main Banner',
            'singular_name' => 'Main Banner'
        ),
        'menu_icon' => 'dashicons-welcome-view-site'
    ));

    // Event
    register_post_type('event', array(
        // 'capability_type' => 'event',
        // 'map_meta_cap' => true,
        'show_in_rest' => true,
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
        'rewrite' => array('slug' => 'events'),
        'has_archive' => true,
        'public' => true,
        'labels' => array(
            'name' => 'Events',
            'add_new_item' => 'Add New Event',
            'edit_item' => 'Edit Event',
            'all_items' => 'All Events',
            'singular_name' => 'Event'
        ),
        'menu_icon' => 'dashicons-calendar-alt'
    ));

    // Spiritual Director
    register_post_type('spiritualdirector', array(
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
        'has_archive' => true,
        'public' => true,
        'labels' => array(
            'name' => 'Spiritual Director',
            'add_new_item' => 'Add New Director',
            'edit_item' => 'Edit Director',
            'all_items' => 'All Director',
            'singular_name' => 'Director'
        ),
        'menu_icon' => 'dashicons-businessperson'
    ));

    // Counselling
    register_post_type('counselling', array(
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
        'has_archive' => true,
        'public' => true,
        'labels' => array(
            'name' => 'Counselling',
            'add_new_item' => 'Add New Councillor',
            'edit_item' => 'Edit Councillor',
            'all_items' => 'All Councillors',
            'singular_name' => 'Councillor'
        ),
        'menu_icon' => 'dashicons-admin-users'
    ));

}

add_action('init', 'kingsmead_post_types');