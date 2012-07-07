<?php
/**
 * Registering meta boxes
 *
 * All the definitions of meta boxes are listed below with comments.
 * Please read them CAREFULLY.
 *
 * You also should read the changelog to know what has been changed before updating.
 *
 * For more information, please visit:
 * @link http://www.deluxeblogtips.com/meta-box/docs/define-meta-boxes
 */

/********************* META BOX DEFINITIONS ***********************/

//$prefix = 'mj_';

global $meta_boxes;

$meta_boxes = array();

$meta_boxes[] = array(
    'id' => 'additional_settings',
    'title' => 'Subtitel & Autor',
    'pages' => array( 'page', 'article_post_type' ),
    'context' => 'normal',
    'priority' => 'high',
    'fields' => array(
        array(
            'name'      => '<span style="font-size: 16px;">Subtitel</span>',   
            'id'        => 'article_subtitle',
            'type'      => 'text',
            'clone'     => false
        ),
        array(
            'name'      => '<span style="font-size: 16px;">Autor</span>',
            'id'        => 'article_author',
            'type'      => 'text',
            'clone'     =>  false
        )
    )
);

$meta_boxes[] = array(
    'id' => 'additional_settings',
    'title' => 'Events anlegen',
    'pages' => array( 'event_post_type' ),
    'context' => 'normal',
    'priority' => 'high',
    'fields' => array(
        array(
            'name'      => '<span style="font-size: 16px;">Eventname</span>',   
            'id'        => 'event_name',
            'type'      => 'text',
            'clone'     => false
        ),
        array(
            'name'      => '<span style="font-size: 16px;">Datum des Events</span>',
            'id'        => 'event_date',
            'type'      => 'date',
            'clone'     =>  false
        ), array(
            'name'      => '<span style="font-size: 16px;">Ort des Events</span>',   
            'id'        => 'event_place',
            'type'      => 'text',
            'clone'     => false
        ),
        array(
            'name'      => '<span style="font-size: 16px;">Beschreibung des Events</span>',
            'id'        => 'event_description',
            'type'      => 'wysiwyg',
            'clone'     =>  false
        )
    )
);


/********************* META BOX REGISTERING ***********************/

/**
 * Register meta boxes
 *
 * @return void
 */
function jackson_register_meta_boxes()
{
    global $meta_boxes;

    // Make sure there's no errors when the plugin is deactivated or during upgrade
    if ( class_exists( 'RW_Meta_Box' ) )
    {
        foreach ( $meta_boxes as $meta_box )
        {
            new RW_Meta_Box( $meta_box );
        }
    }
}
// Hook to 'admin_init' to make sure the meta box class is loaded before
// (in case using the meta box class in another plugin)
// This is also helpful for some conditionals like checking page template, categories, etc.
add_action( 'admin_init', 'jackson_register_meta_boxes' );