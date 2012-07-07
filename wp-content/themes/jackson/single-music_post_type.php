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
 <div id="wrapper">
    
    <div id="header">
        <?php get_sidebar(); ?>
    </div>
    
    <div id="content">  
     <?php if ( have_posts() ) : ?>
        <span class="nav-previous"><?php previous_post_link( '%link', __( '<span class="meta-nav">&larr;</span> Previous' ) ); ?></span>
        <span class="nav-next"><?php next_post_link( '%link', __( 'Next <span class="meta-nav">&rarr;</span>' ) ); ?></span>
        <span class="nav-parent-page"><a href="<?php echo get_permalink( 29 ); ?>">Zurück zur Albenübersicht</a></span>

        <?php while ( have_posts() ) : the_post(); ?>
            <?php $meta = get_post_custom( $post->ID ); ?>
            <h2><?php the_title(); ?></span></h2>
            <h3><?php //TODO: year? Jahr ?></h3>
            <div><?php the_content(); ?></div>
        <?php endwhile; ?>
        
     <?php endif; ?>    
    </div> 
    <div id="footer">Sponsoren</div>
 </div>
 <?php get_footer(); ?>
