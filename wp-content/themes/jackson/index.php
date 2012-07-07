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
 
 <div id="background_container"></div>
 <div id="wrapper">
 	<div id="header">
 		<?php get_sidebar( 'top' ); ?>
 	</div>
 	
 	<div id="content_wrapper">         
         <?php if( $subnav = true ) : //TODO ?>
            <?php get_sidebar( 'left' ); ?>
         <?php endif; ?>     
     	<div id="content" class="news">   	 
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
         	 	<h1><?php echo 'News'; ?></h1>
        	 	<?php while ( have_posts() ) : the_post(); ?>
        	 		<?php get_template_part( 'content-news', get_post_format() ); ?>
        	 	<?php endwhile; ?>
    	 	</div>
    	<?php endif; ?>			 
        </div> 
 	</div> 
 	<div id="footer">Sponsoren</div>
 </div>
 <?php get_footer(); ?>
