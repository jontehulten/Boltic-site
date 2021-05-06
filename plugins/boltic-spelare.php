<?php
/* Plugin Name: Boltic Spelare Post Type
   Description: This plugin registers the 'spelare' post type.
   Version: 1.0 
*/

add_action( 'init', 'boltic_create_post_type' );

function boltic_create_post_type() {
    $labels = array(
        'name'=>'Spelare',
        'singular_name' =>'Spelare',
        'add_new_item' => 'Add New Spelare',
        'edit_item' => 'Edit Spelare',
        'new_item' => 'New Spelare',
        'all_items' => 'All Spelare',
        'view_item' => 'View Spelare',
        'search_items' => 'Search Spelare',
        'not_found' =>  'No Spelare Found',
        'not_found_in_trash' => 'No Spelare found in Trash',
        'parent_item_colon' => '',
        'menu_name' => 'Spelare',
    );

    $args = array(
        'labels' => $labels,
        'has_archive' => true,
        'public' => true,
        'supports' =>  array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail','page-attributes' ),
        'taxonomies' => array('post_tag', 'category'),
        'exclude_from_search' => false,
        'capability_type' => 'post',
        'rewrite' => array( 'slug' => 'spelare' ),
        'show_in_rest' => true
    );

    register_post_type('boltic-spelare', $args);
}