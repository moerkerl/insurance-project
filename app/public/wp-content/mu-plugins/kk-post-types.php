<?php 

function kk_post_types () {

    //Form Data Post Type
    register_post_type ('Account', array(
        'capability_type' => 'Account',
        'map_meta_cap' => true,
        'supports' => array('title'),
        'public' => true,
        'show_in_rest' => true,
        'labels' => array(
            'name' => 'Accounts',
            'add_new_item' => 'Add New Account',
            'edit_item' => 'Edit Account',
            'all_items' => 'All Accounts',
            'singular_name' => 'Account'
        ),
        'menu-icon' => 'dashicons-database'
    ));
}

add_action('init', 'kk_post_types');