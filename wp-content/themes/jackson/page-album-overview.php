<?php
/** -------------------------------------------------
 * Template Name: Albenübersicht
 * Theme: jackson.ch
 * 
 * 
 * Description: 
 *      Übersicht über alle Alben
 *      Titel & Bild
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
        <?php if( page_has_subpages( $post->ID ) ) : ?>
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
		        <?php $albums = get_albums(); ?>
		        <?php foreach( $albums as $album ): ?>
		            <div class="album-container">
		                <div class="album-image">
		                	<a href="<?php echo get_permalink( $album->ID ); ?>"><?php echo get_the_post_thumbnail( $album->ID, array( 120, 120 ) ); ?></a>
		                </div>
		                <h2 class="album-title"><a href="<?php echo get_permalink( $album->ID ); ?>"><?php echo get_the_title( $album->ID ); ?></a></h2>
		            </div>
		        <?php endforeach; ?>
	        </div>
		    <?php endif; ?>    
	    </div> 
    <div id="footer">Sponsoren</div>
 </div>
 <?php get_footer(); ?>
