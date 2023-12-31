<?php

function kingsmead_files(){

    wp_enqueue_script('kingsmead-google-map-js', get_theme_file_uri('plugins/google-map/map.js'), array('jquery'), 1.0, true);

    // wp_enqueue_script('kingsmead-google-mapkey-js', get_theme_file_uri('maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap'), NULL, 1.0, true);

    wp_enqueue_style('kingsmead-wp-main-styles', get_theme_file_uri('style.css'));

    wp_enqueue_script('kingsmead-main-js', get_theme_file_uri('js/script.js'), array('jquery'), 1.0, true);

    wp_enqueue_style('bulma-main-styles', get_theme_file_uri('/plugins/bulma/bulma.min.css'));

    wp_enqueue_style('iconfont-main-styles', get_theme_file_uri('/plugins/icofont/icofont.css'));

    wp_enqueue_style('kingsmead-main-styles', get_theme_file_uri('/css/style.css'));

}

add_action('wp_enqueue_scripts', 'kingsmead_files');

function kingsmead_features(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'kingsmead_features');


function kingsmead_adjust_queries($query){
    if(!is_admin() AND is_post_type_archive('event') AND $query->is_main_query()){
        $today = date('Ymd');
        $query->set('meta_key', 'event_date');
        $query->set('orderby', 'meta_value_num');
        $query->set('order', 'ASC');
        $query->set('meta_query', array(
            array(
                'key' => 'event_date',
                'compare' => '>=',
                'value' => $today,
                'type' => 'numeric'
            )
            ));
    }
}

add_action('pre_get_posts', 'kingsmead_adjust_queries');