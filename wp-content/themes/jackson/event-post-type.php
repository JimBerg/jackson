<?php
/** -------------------------------------------------
 * Theme: jackson.ch
 * 
 * Description: Custom Post Type für "Events"
 * Author: Jim
 * Version: 3.14159 * daumen
 * 
 * -------------------------------------------------*/ 
 /**
 * Register Custom Post Type
 *-------------------------------------*/
 add_action( 'init', 'event_post_type_register' );
 function event_post_type_register() 
 {
    $labels = array(
        'name' => _x('Events', 'post type general name'),
        'singular_name' => _x('Event', 'post type singular name'),
        'add_new' => _x('Event hinzufügen', 'article item'),
        'add_new_item' => __('Event hinzufügen'),
        'edit_item' => __('Event bearbeiten'),
        'new_item' => __('Event'),
        'view_item' => __('Ansehen'),
        'search_items' => __('Suchen'),
        'not_found' =>  __('Kein Ergebnis gefunden.'),
        'not_found_in_trash' => __('Papierkorb ist leer.'),
        'parent_item_colon' => ''
    );
 
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'eventdetail' ),
        'capability_type' => 'page',
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array( 'title', 'thumbnail' ),
        'show_in_nav_menus' => 'true'
      ); 
    register_post_type( 'event_post_type' , $args );
 }