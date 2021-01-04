<?php 

function kk_post_types () {

    //Form Data Post Type
    register_post_type ('form_data', array(
        'capability_type' => 'form_data',
        'map_meta_cap' => true,
        'supports' => array('title'),
        'public' => true,
        'labels' => array(
            'name' => 'form_datas',
            'add_new_item' => 'Add New form_data',
            'edit_item' => 'Edit form_data',
            'all_items' => 'All form_datas',
            'singular_name' => 'form_data'
        ),
        'menu-icon' => 'dashicons-database'
    ));
}

add_action('init', 'kk_post_types');