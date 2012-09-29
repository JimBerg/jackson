<?php
/** -------------------------------------------------
 * Theme: jackson.ch
 * 
 * Description: Index
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
         	 	<h1><?php echo get_the_title( get_option( 'page_for_posts', true ) ); ?></h1>
         	 	
        	 	<?php while ( have_posts() ) : the_post(); ?>
        	 		<?php get_template_part( 'content-news', get_post_format() ); ?>
        	 	<?php endwhile; ?>
        	 	
     	    	<?php get_template_part( 'pagination' ); ?> 
    	 	</div>
    	<?php endif; ?>
        </div> 
 	</div> 

 <?php get_footer(); ?>

