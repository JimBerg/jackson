<?php
/** -------------------------------------------------
 * Theme: jackson.ch
 * 
 * Description: Backend Settings
 * Author: Jim
 * Version: 3.14159 * daumen
 * 
 * -------------------------------------------------*/ 
 
 /**
 * rename article to news
 * -------------------------------------------------*/ 
 function edit_admin_menus() 
 {  
    global $menu; 
	global $submenu; 
   	$menu[5][0] = 'News';
	$submenu['edit.php'][5][0] = 'Alle News';  
    $submenu['edit.php'][10][0] = 'News erstellen';  
	
	$menu[15][0] = 'Sponsoren';
	
 }  
 add_action( 'admin_menu', 'edit_admin_menus' );  

 function remove_menus () {
 global $menu;
	//$restricted = array(__('Dashboard'), __('Posts'), __('Media'), __('Links'), __('Pages'), __('Appearance'), __('Tools'), __('Users'), __('Settings'), __('Comments'), __('Plugins'));
	$restricted = array( __('Comments') );
	end ($menu);
	while (prev($menu)){
		$value = explode(' ',$menu[key($menu)][0]);
		if(in_array($value[0] != NULL?$value[0]:"" , $restricted)){unset($menu[key($menu)]);}
	}
 }
 add_action( 'admin_menu', 'remove_menus' );
 
 