<?php
    function jrnl_service_post_type() { 
        $custom_service_lebels = array(
            'name'                  => __('Services', 'jrnl'),
            'singular_name'         => __('Service', 'jrnl'),
            'add_new'               => __('Add New Service', 'jrnl'),
            'all_items'             => __('All Services', 'jrnl'),
            'add_new_item'          => __('Add New Service', 'jrnl'),
            'edit_item'             => __('Edit Service', 'jrnl'),
            'new_item'              => __('New Service', 'jrnl'),
            'view_item'             => __('View Service', 'jrnl'),
            'search_items'          => __('Search Services', 'jrnl'),
            'not_found'             => __('No Services found', 'jrnl'),
            'not_found_in_trash'    => __('No Services found in Trash', 'jrnl'),
            'menu_name'             => __('Services', 'jrnl'),
            'name_admin_bar'        => __('Service', 'jrnl')
        );
        $custom_service_options = array(
            'labels'                => $custom_service_lebels,
            'public'                => true,
            'publicly_queryable'    => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'query_var'             => true,
            'rewrite'               => array('slug' => 'service'),
            'capability_type'       => 'post',
            'has_archive'           => true,
            'hierarchical'          => false,
            'menu_position'         => 5        ,
            'supports'              => array('title', 'editor', 'thumbnail', 'excerpt'),
            'menu_icon'             => 'dashicons-hammer'
        );       
        register_post_type('service', $custom_service_options);
    }
    add_action('init', 'jrnl_service_post_type');
?>