<?php
/** -------------------------------------------------
 * Template Name: Eventübersicht
 * Theme: jackson.ch
 * 
 * Description: Eventseite
 * Author: Jim
 * Version: 3.14159 * daumen
 * 
 * -------------------------------------------------*/ ?>
 
 <?php get_header(); ?>
 
    <div id="content_wrapper">         
        <?php if( page_has_subpages( $post->ID ) ) : ?>
            <?php get_sidebar( 'left' ); ?>
        <?php endif; ?>   
    
        <div id="content" class="article">
        <?php if( $teaser = true ) : //TODO ?>
        	<?php get_sidebar( 'teaser' ); ?>
        <?php endif; ?>     
          
        <?php if ( have_posts() ) : ?>
            <div class="content"> 
            <h1><?php the_title(); ?></h1>
            
            <?php $events = get_events(); ?>
	        <?php foreach( $events as $event ): ?>
	            <div class="event-container">
	                <?php $meta = get_post_custom( $event->ID ); ?>
	                <div class="event-description">
	                	<h2 class="event-date"><a href="<?php echo get_permalink( $event->ID ); ?>">Datum: <?php echo convert_date( $meta[ 'event_date' ][0] ); ?></a></h2>
	                    <h3 class="event-name"><?php echo $meta[ 'event_name' ][0]; ?></a></h3>
	                    <h3 class="event-place">Location: <a href="<?php echo get_permalink( $event->ID ); ?>"><?php echo $meta[ 'event_place' ][0]; ?></a></h3>
	                </div>
	                <div class="event-image">
	                    <a href="<?php echo get_permalink( $event->ID ); ?>" ><?php echo get_the_post_thumbnail( $event->ID, array( 120, 120 ) ); ?></a>
	                </div>
	            </div>
	        <?php endforeach; ?>
            </div>
         <?php endif; ?>    
        </div> 
    </div>
 <?php get_footer(); ?>

