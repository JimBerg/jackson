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
 <div id="background_container"></div>
 <div id="wrapper">
    <div id="header">
        <?php get_sidebar( 'top' ); ?>
    </div>
        
    <div id="content_wrapper">         
        <?php if( page_has_subpages( $post->ID ) ) : ?>
            <?php get_sidebar( 'left' ); ?>
        <?php endif; ?>    
         
        <div id="content" class="page">  
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
    <div id="footer">Sponsoren</div>
 </div>
 <?php get_footer(); ?>
