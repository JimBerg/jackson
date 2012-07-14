<?php
/** -------------------------------------------------
 * Theme: jackson.ch
 * 
 * Description: Was die Welt im Innersten zusammen hält
 * Author: Jim
 * Version: 3.14159 * daumen
 * 
 * -------------------------------------------------*/ 
 
 /** Include  Metaboxes & Custom Post Types       
 * --------------------------------------------------*/ 
 require_once( 'metabox-setup.php' );  
 require_once( 'article-post-type.php' );  
 require_once( 'music-post-type.php' );  
 require_once( 'event-post-type.php' );  
 
 /** shortcodes
 * -------------------------------------------------*/ 
 add_shortcode( 'top-button', 'top_button_helper' ); 
  
  
 /** Post Thumbnails
  * -------------------------------------------------*/ 
 add_theme_support( 'post-thumbnails' );
 
 
 /** Set excerpt length
 * -------------------------------------------------*/ 
 function custom_excerpt_length( $length ) 
 {
	return 120;
 }
 add_filter( 'excerpt_length', 'custom_excerpt_length' );
 
 
 /** 
 * Register Sidebars
 * -------------------------------------------------*/ 
 if ( function_exists('register_sidebars') ) 
 {
    register_sidebars( 2 );
 }
 

 /** 
 * output buffer - to display shortcode correctly
 * @return string $output_string, link for top button
 * -------------------------------------------------*/ 
 function top_button_helper() {
   	ob_start();
	top_button();
	$output_string = ob_get_contents();
	ob_end_clean();
	
	return $output_string;	
 }


 /** return rel link for top button
 * -------------------------------------------------*/ 
 function top_button() {
 	echo '<a href="#to_top" class="page-top-button">to top</a>';
 }
 
  /** 
  * check if page has subpages 
  * @param int $page, page id
  * @return bool, wheter child pages exist
  * -------------------------------------------------*/
 function page_has_subpages( $page_id ) 
 {
 	global $post;	
 	
 	if( !$post->post_parent && $post->post_type == 'page' || $post->post_type == 'post' ) {
 		$child_pages_exist = get_pages( 'child_of='.$page_id );	
		if( sizeof( $child_pages_exist ) > 0 ){
	        return true;
	    } else {
	        return false;
	    }
 	} else {
 		return true;
 	}
 }
 
 /**
  * set css class of body for backgrounds
  * @return string $pageclass, name of page
  * -------------------------------------------------*/ 
  function get_page_class() {
  	global $post;

	if(  $post->post_type == 'post'  || is_home() || is_front_page() ){
		$pagename = 'news'; 			
	} else if(  $post->post_type == 'article_post_type' ) {
		$pagename = 'artikel';	
	} else if(  $post->post_type == 'music_post_type' ) {
		$pagename = 'musik';	
	} else if(  $post->post_type == 'event_post_type' ) {
		$pagename = 'events';	
	} else if( empty( $post->post_parent ) || $post->post_parent == 0 ) {
		$pagename = get_query_var( 'pagename' );	
	} else {
		$parent = get_post( $post->post_parent );
		$pagename = $parent->post_name;
	}
 	$pagename = strtolower( trim( preg_replace( '/[&%\$\s*]/', '-', $pagename) ) ); //just to make sure
	return $pagename;
  }
  

  
 /** 
 * Excerpt length of Article Post Type, 
 * without html tags
 * @param string article, whole bunch
 * @return string article, shorten 
 * -------------------------------------------------*/ 
 function article_excerpt( $article ) 
 {
    $article = str_split( $article, '310' ); //TODO: wordwrap or something similar ganze worte sonst umlaut probleme
    $article = $article[0];
    $article = preg_replace( '/<[a-zA-Z0-9]+>/', '', $article ); //remove html attributes from excerpt
    return $article; 
 }


 /**
 * get all articles as custom post type
 * @return object $articles
 * -------------------------------------------------*/ 
 function get_articles() 
 {
    $args = array(
        'post_type' => 'article_post_type',
        'posts_per_page' => '-1'
    );
    return $articles = query_posts( $args );	
 }


 /**
 * get all albums as custom post type
 * @return object $albums
 * -------------------------------------------------*/ 
 function get_albums() 
 {
    $args = array(
        'post_type' => 'music_post_type',
        'posts_per_page' => '-1'
    );
    return  $albums = query_posts( $args );
 }
 
 
 /**
 * get all events as custom post type
 * @return object $albums
 * -------------------------------------------------*/ 
 function get_events() 
 {
    $args = array(
        'post_type' => 'event_post_type',
        'posts_per_page' => '-1',
    );
    return  $events = query_posts( $args );
 }
 
 
 
 
 
 
 
 
 
 
 
 
 