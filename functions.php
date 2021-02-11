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


// add CPT to searches
function custom_post_type_cat_filter($query) {
  if ( !is_admin() && $query->is_main_query() ) {
    if ($query->is_category()) {
		$query->set( 'post_type', array( 'post', 'insights', 'events', 'company_news' ) );
    }
  }
}

add_action('pre_get_posts','custom_post_type_cat_filter');

// excerpt length
function custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );


// Google Map API Key - Temp setup 11/18/20
function my_acf_init() {
    acf_update_setting('google_api_key', 'AIzaSyAXdo1pSufFydCToPxjbsSPwJPsUWGkXpY');
}

add_action('acf/init', 'my_acf_init');


