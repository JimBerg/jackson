<div id="subnav" class="subnav-<?php echo $post->post_type; ?>">
    <?php 
    if( $post->post_type == 'post' ){
        echo '<ul>';
        $archives = wp_get_archives('type=monthly');
        echo '</ul>';
    } else {
        if( $post->post_parent ) {
            $pages = get_pages( "title_li=&child_of=".$post->post_parent ); 
        } else {
            $pages = get_pages( "title_li=&child_of=".$post->ID ); 
        }    
        ?>
        <ul>
            <?php foreach ($pages as $page ) : ?>
                <?php 
                    $current_id = $page->ID;
                    if( $current_id == $page_id ) {
                        $active = 'active';
                    } else {
                        $active = 'inactive';
                    }
                ?>
                <li><a href="<?php echo get_permalink( $page->ID ); ?>" class="subnav-<?php echo $active; ?>">» <?php echo $page->post_title; ?></a></li>
            <?php endforeach; ?>
        </ul>
    <?php } ?>
</div>
