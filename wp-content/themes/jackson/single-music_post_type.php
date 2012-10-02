<?php
/** -------------------------------------------------
 * Theme: jackson.ch
 * Template: Artikel Single Page
 * 
 * Description: Musik = Einzelseite
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
                    <span class="nav-previous"><?php previous_post_link( '%link', __( '<span class="meta-nav">&larr;</span> Älterer Beitrag' ) ); ?></span>
                    <span class="nav-parent-page"><a href="<?php echo get_permalink( get_page_by_title( 'Alben' )->ID ); ?>">Zurück zur Albenübersicht</a></span>
                    <span class="nav-next"><?php next_post_link( '%link', __( 'Neuerer Beitrag <span class="meta-nav">&rarr;</span>' ) ); ?></span>
                </div>
        
                <?php while ( have_posts() ) : the_post(); ?>
		            <?php $meta = get_post_custom( $post->ID ); ?>
		            <span class="single-header">
                        <h2 class="single-title dark"><?php the_title(); ?></span></h2>
                       <!--<h3 class="single-author"><?php echo $meta[ 'album_year' ][0]; ?></h3>-->
                    </span>
		            <div><?php the_content(); ?></div>
		        <?php endwhile; ?>
         	</div>
       <?php endif; ?>  
       </div> 
    </div>
 <?php get_footer(); ?>
