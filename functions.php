<?php

/* =========================================
	Front End 
========================================= */

// register menus	
function register_my_menus() {
	register_nav_menus(
		array(
			'main_menu' => __('Main Menu'),
		)
	);
}
add_action('init', 'register_my_menus');

// register custom navigation walker
require_once('wp_bootstrap_navwalker.php');

// add default ACF Fields 
include_once('framework/framework.php');

// Custom Options Pages
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Default Website Settings',
		'menu_title'	=> 'Website Settings',
		'menu_slug' 	=> 'website-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Custom Labels',
		'menu_title'	=> 'Custom Labels',
		'parent_slug'	=> 'website-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Footer Settings',
		'menu_title'	=> 'Footer Settings',
		'parent_slug'	=> 'website-settings',
	));
	
}
// custom page & subnav for custom taxonomy

add_action( 'admin_menu', 'post_menu' );  
function post_menu(){    
	$page_title = 'Posts';   
	$menu_title = 'Posts';   
	$capability = 'manage_options';   
	$menu_slug  = 'posts';   
	$function   = 'post';   
	$icon_url   = 'dashicons-edit-large';   
	$position   = 20;    
	
	add_menu_page( 
		$page_title,                  
		$menu_title,                   
		$capability,                   
		$menu_slug,                   
		$function,                   
		$icon_url,                   
		$position ); 
}


add_action('admin_menu', 'tax_menu');
function tax_menu() {
	add_submenu_page( 'posts', 'Edit Categories', 'Edit Categories',
    'manage_options', 'edit-tags.php?taxonomy=category');
}


// remove default Posts menu
add_action( 'admin_init', 'remove_menu_pages' );

function remove_menu_pages() {
    remove_menu_page( 'edit.php' );
}


// Google Map API Key - Temp setup 11/18/20
function my_acf_init() {
    acf_update_setting('google_api_key', 'AIzaSyAXdo1pSufFydCToPxjbsSPwJPsUWGkXpY');
}

add_action('acf/init', 'my_acf_init');


