<?php
/** -------------------------------------------------
 * Template Name: Standard Textseite
 * Theme: jackson.ch
 * 
 * Description: Page
 * Author: Jim
 * Version: 3.14159 * daumen
 * 
 * -------------------------------------------------*/ ?>
 
 <?php get_header(); ?>
        
    <div id="content_wrapper">         
        <?php if( page_has_subpages( $post->ID ) ) : ?>
            <?php get_sidebar( 'left' ); ?>
        <?php endif; ?>    
         
        <div id="content" class="page">  
            <?php if( $teaser = true ) : //TODO ?>
            	<?php get_template_part( 'teaser' ); ?>   
            <?php endif; ?>   
            
            <?php if ( have_posts() ) : ?>
                
                <div class="content">
                <h1><?php the_title(); ?></h1>
                <?php while ( have_posts() ) : the_post(); ?>
                    <div class="page-subheader">
                        <h2 class="page-title"><?php //Titel ?></h2>
                        <h2 class="page-subtitle"><?php //subtitle ?></h2>
                        <h3 class="page-author"><?php //author ?></h3>
                    </div>
                    <div class="page-content">
                        <?php the_content(); ?>
                    </div>
                <?php endwhile; ?>
                </div>
                
            <?php endif; ?>     
               
        </div> 
    </div>
 <?php get_footer(); ?>
