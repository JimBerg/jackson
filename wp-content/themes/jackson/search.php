<?php
/** -------------------------------------------------
 * Theme: jackson.ch
 * 
 * Description: Index
 * Author: Jim
 * Version: 3.14159 * daumen
 * 
 * -------------------------------------------------*/ ?>

<?php if ( is_search() && $post === null ): 
	$post = new stdClass();
	$post->post_author = '';
	$post->post_date = '';
	$post->post_content = '';
	$post->post_title = 'Keine Resultate';
	$post->post_excerpt = '';
	$post->post_parent = 0;
	$post->post_name = 'Keine Resultate';
	$post->post_type = 'post';
	endif;
?>	
<?php get_header(); ?>
<div id="content_wrapper">        
	 
     <?php if( $subnav = false ) : //TODO ?>
        <?php get_sidebar( 'left' ); ?>
     <?php endif; ?>     
     
 	<div id="content" class="news">
 	
 	<?php if( $teaser = true ) : //TODO ?>
 		<?php get_sidebar( 'teaser' ); ?>	 
 	<?php endif; ?>
 	      	 
 	 <?php if ( have_posts() ) : ?>
 	    <div class="content">
 			<span class="single-header">
				<h2 class="single-title"><?php printf( __( 'Suchergebnisse für: %s' ), get_search_query() ); ?></h2>
            </span>
            
            <div id="search-container"><?php get_search_form(); ?></div>       
     	 	
    	 	<?php while ( have_posts() ) : the_post(); ?>
    	 		<?php get_template_part( 'content-news', false ); ?>
    	 	<?php endwhile; ?>
	
 	    	<?php get_template_part( 'pagination' ); ?> 
	 	</div>
	<?php else: ?>
		 <div class="content">
 			<span class="single-header">
				<h2 class="single-title"><?php printf( __( 'Suchergebnisse für: %s' ), get_search_query() ); ?></h2>
            </span>
            
            <div id="search-container"><?php get_search_form(); ?></div>       
     	 	<div class="news">
     	 		<div class="news-excerpt">
     	 		Deine Suche erzielte keine Ergebnisse. Bitte versuche es mit einem anderen Begriff erneut.
     	 		</div>
     	 	</div>	
	 	</div> 	
	<?php endif; ?>
    </div> 
</div> 
<?php get_footer(); ?>


    	