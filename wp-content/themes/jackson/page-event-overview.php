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
 
 <div id="background_container"></div>
 <div id="wrapper">   
    <div id="header">
        <?php get_sidebar( 'top' ); ?>
    </div>
    
    <div id="content_wrapper">         
        <?php if( $subnav = true ) : //TODO ?>
            <?php get_sidebar( 'left' ); ?>
        <?php endif; ?>   
    
        <div id="content" class="article">
        <?php if( $teaser = true ) : //TODO ?>
             <div id="teaser">
                 <span class="teaser-content">
                    <h2 class="teaser-title">Teaser Dummy</h2>
                    <h2 class="teaser-subtitle">20 Juli 2012</h2>  
                 </span>
             </div>
         <?php endif; ?>     
          
         <?php if ( have_posts() ) : ?>
            <div class="content"> 
            <h1><?php the_title(); ?></h1>
            <?php $events = get_events(); ?>
	        <?php foreach( $events as $event ): ?>
	            <div class="event-container">
	                <?php $meta = get_post_custom( $event->ID ); ?>
	                <div class="event-description">
	                    <h2 class="event-date"><?php echo $meta[ 'event_date' ][0]; ?></h2>
	                    <h3 class="event-name"><a href="<?php echo get_permalink( $event->ID ); ?>"><?php echo $meta[ 'event_name' ][0]; ?></a></h3>
	                    <h3 class="event-place"><a href="<?php echo get_permalink( $event->ID ); ?>"><?php echo $meta[ 'event_place' ][0]; ?></a></h3>
	                    <p><?php echo $meta[ 'event_description' ][0]; ?></p>
	                </div>
	                <div class="event-image">
	                    <?php //TODO: if exists ?>
	                    <?php echo get_the_post_thumbnail(); ?>
	                </div>
	            </div>
	        <?php endforeach; ?>
            </div>
         <?php endif; ?>    
        </div> 
    </div>
    <div id="footer">Sponsoren</div>
 </div>
 <?php get_footer(); ?>

