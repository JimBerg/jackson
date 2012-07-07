<div id="subnav" class="subnav-<?php echo $post->post_type; ?>">
    <?php 
    if( $post->post_type == 'post' ){
        echo '<ul>';
        $archives = wp_get_archives( 'type=monthly' );
        echo '</ul>';
    } else {
        if( $post->post_parent ) {
            $pages = get_pages( "title_li=&child_of=".$post->post_parent ); 
        } else {
            $pages = get_pages( "title_li=&child_of=".$post->ID ); 
			
			if( $post->post_type == 'music_post_type' ) {
				$pages = get_pages( "title_li=&child_of=16" ); 
			}
			
			if( $post->post_type == 'event_post_type' ) {
				$pages = get_pages( "title_li=&child_of=22" ); 
			}
        }    
        ?>
        <ul>
            <?php foreach ( $pages as $page ) : ?>
                <?php 
                	$pagename = get_query_var( 'pagename' );
					$page->post_name;
					
					if( $post->post_type == 'music_post_type' ){
						 $pagename = 'alben';
					}
					
					if( $post->post_type == 'event_post_type' ){
						 $pagename = 'events';
					}					
                    
                    if( $pagename == $page->post_name ) {
                        $active = 'active';
                    } else {
                        $active = 'inactive';
                    }
					
                ?>
                <li><a href="<?php echo get_permalink( $page->ID ); ?>" class="subnav-<?php echo $active; ?>"><?php echo $page->post_title; ?></a></li>
            <?php endforeach; ?>
        </ul>
    <?php } ?>
</div>
