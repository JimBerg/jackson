<?php
/** -------------------------------------------------
 * Theme: jackson.ch
 * 
 * Description: Header
 * Author: Jim
 * Version: 3.14159 * daumen
 * 
 * -------------------------------------------------*/ ?>
 <!doctype html>
 <!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
 <!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
 <!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
 <!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
 <!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->
 <!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
 <head>
   <meta charset="utf-8">

   <title><?php bloginfo( 'title' ) ?></title>
   <meta name="description" content="">

   <!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->

   <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/reset.css">
   <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/style.css">
 </head>
 <body <?php //body_class( $class = null ); ?>  class="page-<?php echo get_page_class(); ?>" >

