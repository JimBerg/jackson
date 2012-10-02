<?php
/** -------------------------------------------------
 * Theme: jackson.ch
 * Template: Event Single Page
 * 
 * Description: Event Single Page
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
                
                <div class="meta-nav">
                    <span class="nav-previous"><?php previous_post_link( '%link', __( '<span class="meta-nav">&larr;</span> Vorheriges Event' ) ); ?></span>
                    <span class="nav-parent-page"><a href="<?php echo get_permalink( get_page_by_title( 'Events' )->ID ); ?>">Zurück zur Übersicht</a></span>
                    <span class="nav-next"><?php next_post_link( '%link', __( 'Nächstes Event <span class="meta-nav">&rarr;</span>' ) ); ?></span>
                </div>
        
                <?php while ( have_posts() ) : the_post(); ?>
		            <?php $meta = get_post_custom( $post->ID ); ?>
		            <div class="event-detail-header">
		                <div class="event-description">
		                	<h2 class="event-date">Datum: <?php echo convert_date( $meta[ 'event_date' ][0] ); ?></h2>
		                    <h3 class="event-name"><?php echo $meta[ 'event_name' ][0]; ?></a></h3>
		                    <h3 class="event-place">Location: <?php echo $meta[ 'event_place' ][0]; ?></h3>
		                </div>
		                <div class="event-image">
		                  	<?php echo get_the_post_thumbnail( $post->ID, array( 120, 120 ) ); ?>
		                </div>
	               </div>
		           <div class="page-content"><?php echo replace_image_links( $meta[ 'event_description' ][0] ); ?></div>
		           <div class="social-networks"><?php get_template_part( 'social-networks' ); ?></div>
		        <?php endwhile; ?>
         	</div>
       <?php endif; ?>  
       </div> 
    </div>
 <?php get_footer(); ?>
