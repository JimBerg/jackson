<?php
/** -------------------------------------------------
 * Template Name: Archiv - Übersichtsseite
 * Theme: jackson.ch
 * 
 * 
 * Description: 
 *      Übersicht aller älteren Newsbeiträge 
 * 		> 5 gelisteten Monaten  
 * Author: Jim
 * Version: 3.14159 * daumen
 * 
 * -------------------------------------------------*/ ?>
 
 <?php get_header(); ?>	
    <div id="content_wrapper">         
        <?php if( $subnav = true ) : //TODO ?>
            <?php get_sidebar( 'left' ); ?>
        <?php endif; ?>     
        
        <div id="content" class="news">      
        <?php if( $teaser = true ) : //TODO ?>
         	<?php get_template_part( 'teaser' ); ?>  
        <?php endif; ?>   
        
        <?php if ( have_posts() ) : ?>
        	
            <div class="content">    
                <div class="meta-nav">
                    <span class="nav-previous"><?php previous_post_link( '%link', __( '<span class="meta-nav">&larr;</span> Älterer Beitrag' ) ); ?></span>
                    <span class="nav-parent-page"><a href="<?php echo home_url(); ?>">Zurück zur Newsseite</a></span>
                    <span class="nav-next"><?php next_post_link( '%link', __( 'Neuerer Beitrag <span class="meta-nav">&rarr;</span>' ) ); ?></span>
                </div>
                
                <h2 class="news-archive">Newsarchiv</h2>
                <ul class="news-archive"><?php $archives = wp_get_archives( 'type=monthly' ); ?></ul>
            </div>
         <?php endif; ?>   
          
        </div>
    </div>
 <?php get_footer(); ?> 	