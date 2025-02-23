<?php
// Register job post type
function create_job_post_type() {
    register_post_type('job',
        array(
            'labels' => array(
                'name' => __('Jobs'),
                'singular_name' => __('Job'),
                'add_new' => __('Add New'),
                'add_new_item' => __('Add New Job')
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array('title', 'editor', 'thumbnail'),
            'menu_icon' => 'dashicons-businessperson',
        )
    );
}
add_action('init', 'create_job_post_type');