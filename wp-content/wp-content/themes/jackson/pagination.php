<?php
/** -------------------------------------------------
 * Theme: jackson.ch
 * 
 * Description: Pagination
 * Author: Jim
 * Version: 3.14159 * daumen
 * 
 * -------------------------------------------------*/ ?>
  
 <div class="meta-nav pages">
    <span class="nav-previous"><?php previous_posts_link(); ?></span>
    <span class="nav-parent-page"><a href="<?php echo home_url(); ?>">Zurück zur Newsseite</a></span>
    <span class="nav-next"><?php next_posts_link(); ?></span>
 </div>