<?php
/** -------------------------------------------------
 * Theme: jackson.ch
 * 
 * Description: Newsbereich = Standard Blog-Funktion
 * Author: Jim
 * Version: 3.14159 * daumen
 * 
 * -------------------------------------------------*/ ?>

<div id="news-<?php the_ID(); ?>" class="news">
	<div class="news-header">
		<h2 class="news-date"><?php echo get_the_date(); ?></h2>
		<h2 class="news-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
		<span class="news-meta">
			<h3 class="news-author"><?php echo get_the_author(); ?></h3>
			<!-- optional: categories
			<span class="news-categories">
			    <?php 
    			    $cat_list = get_the_category_list( ' | ' );
                    if( $cat_list ) {
                        echo $cat_list;
                    }
                ?>
			</span> -->
			<!-- optional: tags
			<span class="news-tags">
			     <?php 
                    $tag_list = get_the_tag_list( '', ' | ' );
                    if( $tag_list ) {
                        echo $tag_list;
                    }
                ?>    
			</span>-->
		</span>
	</div>	
	
	<?php if ( is_search() ) : ?>
	<div class="news-excerpt">
		<?php the_excerpt(); ?>
	</div>
	<?php else : ?>
	<div class="news-content">
	   <?php the_content( __( '<span class="more">&raquo; weiter lesen</span>' ) ); ?>  
	</div>
	<?php endif; ?>
</div>
