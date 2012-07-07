<?php
/** -------------------------------------------------
 * Theme: jackson.ch
 * 
 * Description: Custom Post Type für "Musik & Alben"
 * Author: Jim
 * Version: 3.14159 * daumen
 * 
 * -------------------------------------------------*/ 
 /**
 * Register Custom Post Type
 *-------------------------------------*/
 add_action( 'init', 'music_post_type_register' );
 function music_post_type_register() 
 {
    $labels = array(
        'name' => _x('Album', 'post type general name'),
        'singular_name' => _x('Album', 'post type singular name'),
        'add_new' => _x('Album hinzufügen', 'article item'),
        'add_new_item' => __('Album hinzufügen'),
        'edit_item' => __('Album bearbeiten'),
        'new_item' => __('Album'),
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
        'rewrite' => true,
        'capability_type' => 'page',
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array( 'title', 'thumbnail', 'editor' ),
        'show_in_nav_menus' => 'true'
      ); 
    register_post_type( 'music_post_type' , $args );
 }