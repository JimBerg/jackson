<?php
/** -------------------------------------------------
 * Theme: jackson.ch
 * 
 * Description: Custom Post Type für "Artikel"
 * Author: Jim
 * Version: 3.14159 * daumen
 * 
 * -------------------------------------------------*/ 
 
 /**
 * Register Custom Taxonomy
 *-------------------------------------*/
 //register_taxonomy( 'artist-category', array( 'agkunstbern_artist' ), array("hierarchical" => true, "label" => "Künstlerkategorie", "singular_label" => "Künstlerkategorie", "rewrite" => true) ); 
 
 /**
 * Register Custom Post Type
 *-------------------------------------*/
 add_action( 'init', 'article_post_type_register' );
 function article_post_type_register() 
 {
    $labels = array(
        'name' => _x('Artikel', 'post type general name'),
        'singular_name' => _x('Artikel', 'post type singular name'),
        'add_new' => _x('Neuen Artikel hinzufügen', 'article item'),
        'add_new_item' => __('Neuen Artikel hinzufügen'),
        'edit_item' => __('Artikel bearbeiten'),
        'new_item' => __('Artikel'),
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
    register_post_type( 'article_post_type' , $args );
 }