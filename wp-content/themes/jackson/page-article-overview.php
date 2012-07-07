<?php
/** -------------------------------------------------
 * Template Name: Artikelübersicht
 * Theme: jackson.ch
 * 
 * 
 * Description: 
 *      Übersicht über alle erfassten Artikel
 *      != News = WP-Standardartikel    
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
            <?php $articles = get_articles(); ?>
            <?php foreach( $articles as $article ): ?>
                <div class="article-excerpt">
                    <span class="article-header">
                        <?php $meta = get_post_meta( $article->ID, 'article_subtitle' ); ?>
                        <?php if( !empty( $meta ) ) : ?>
                        	<h2><?php echo get_the_title( $article->ID ); ?> - <span class="light"><?php echo $meta[0]; ?></span></h2>
                        <?php else: ?>
                        	<h2><?php echo get_the_title( $article->ID ); ?></h2>
                        <?php endif; ?>		
                    </span>
                    <div class="article-img">
                        <?php //TODO: if exists ?>
                        <?php echo get_the_post_thumbnail( $article->ID, array( 120, 120 ) ); ?>
                    </div>
                    <div class="article-content">
                        <?php echo article_excerpt( $article->post_content ); ?> 
                    </div>
                    <span class="more">
                        <a href="<?php echo get_permalink( $article->ID ); ?>" class="more-link"><?php echo __( '&raquo; weiter lesen' ); ?></a>
                    </span>
                </div>
            <?php endforeach; ?>
            </div>
         <?php endif; ?>    
        </div> 
    </div>
    <div id="footer">Sponsoren</div>
 </div>
 <?php get_footer(); ?>
