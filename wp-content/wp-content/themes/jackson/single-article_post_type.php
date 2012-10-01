<?php
/** -------------------------------------------------
 * Theme: jackson.ch
 * Template: Artikel Single Page
 * 
 * Description: Artikel = Einzelseite
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
        	<?php get_template_part( 'teaser' ); ?>
        <?php endif; ?>
        <?php if ( have_posts() ) : ?>
            <div class="content">
                <div class="meta-nav">
                    <span class="nav-previous"><?php previous_post_link( '%link', __( '<span class="meta-nav">&larr;</span> Älterer Beitrag' ) ); ?></span>
                    <span class="nav-parent-page"><a href="<?php echo get_permalink( 37 ); ?>">Zurück zur Artikelseite</a></span>
                    <span class="nav-next"><?php next_post_link( '%link', __( 'Neuerer Beitrag <span class="meta-nav">&rarr;</span>' ) ); ?></span>
                </div>
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php $meta = get_post_custom( $post->ID ); ?>
                    <span class="single-header">
		            	<h2 class="single-title dark"><?php the_title(); ?>
						<?php if( !empty( $meta[ 'article_subtitle' ]) ) : ?>
							<span class="light"><?php echo $meta[ 'article_subtitle' ][0]; ?></span>
		                <?php endif; ?>
		                </h2>
		                <?php if( !empty( $meta[ 'article_author' ]) ) : ?>
			                <h3 class="single-author"><?php echo $meta[ 'article_author' ][0]; ?></h3>
			           <?php endif; ?>
			        </span>
                    <div class="page-content"><?php the_content(); ?></div>
                <?php endwhile; ?>
             </div>
             <?php endif; ?>  
        </div> 
    </div>
 <?php get_footer(); ?>




