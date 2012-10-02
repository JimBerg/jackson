<?php
/** -------------------------------------------------
 * Theme: jackson.ch
 * Template: Blog Archive = Single
 * 
 * Description: Blog Archive = looks like news - just old
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
         	<?php get_sidebar( 'teaser' ); ?>
        <?php endif; ?>   
        
        <?php if ( have_posts() ) : ?>
            <div class="content">    
            	
                <div class="meta-nav">
                    <span class="nav-previous"><?php previous_post_link( '%link', __( '<span class="meta-nav">&larr;</span> Älterer Beitrag' ) ); ?></span>
                    <span class="nav-parent-page"><a href="<?php echo home_url(); ?>">Zurück zur Newsseite</a></span>
                    <span class="nav-next"><?php next_post_link( '%link', __( 'Neuerer Beitrag <span class="meta-nav">&rarr;</span>' ) ); ?></span>
                </div>
               
             	<?php while ( have_posts() ) : the_post(); ?>
                    <?php get_template_part( 'content-news', get_post_format() ); ?>
                <?php endwhile; ?>
            </div>
         <?php endif; ?>   
          
        </div>
    </div>
 <?php get_footer(); ?>