<div id="nav">
	 <h1 id="logo"><a href="<?php echo home_url(); ?>">Jackson.ch</a></h1>
	 <?php $pages = get_pages( 'title_li=&parent=0&sort_order=ASC&sort_column=menu_order' ); ?>
     <ul id="top-nav">
     	<?php $pagename = get_query_var( 'pagename' ); ?>
        <?php foreach ( $pages as $page ) : ?>
            <?php 
                $current_id = $page->ID;
                $child_pages = get_pages( "title_li=&child_of=".$current_id.'&echo=0' ); 
                $child_ids = array();
                
                foreach( $child_pages as $child_page ) {
                    array_push( $child_ids, $child_page->post_name );
                }
				
				if( $post->post_type == 'post'  || is_home() || is_front_page() ){
					$pagename = 'news';
				} 
				
				if( $post->post_type == 'music_post_type' ){
					$pagename = 'musik';
				} 
				
				if( $post->post_type == 'article_post_type' ){
					$pagename = 'artikel';
				} 
				
				if( $post->post_type == 'event_post_type' ){
					$pagename = 'events';
				}  
				
				if( $current_id == $page_id || in_array( $pagename, $child_ids ) || $page->post_name == $pagename ) {
                    $active = 'active';
                } else {
                    $active = 'inactive';
                }  
            ?>
            <li><a href="<?php echo get_permalink( $page->ID ); ?>" class="nav-<?php echo $active; ?>"><?php echo $page->post_title; ?></a></li>
        <?php endforeach; ?>
    </ul>
</div>

  