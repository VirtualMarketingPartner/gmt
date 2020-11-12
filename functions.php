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
	
	// Set up a Posts Page for all the types
	acf_add_options_page(array(
		'page_title' 	=> 'Posts',
		'menu_title'	=> 'Posts',
		'menu_slug' 	=> 'posts',
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
		'icon_url'		=> 'dashicons-edit-large',
		'position'		=> '30'
	));
	
	// blog posts (insights)
	register_post_type( 'insights',
    array(
            'labels' => array(
                    'name' => __( 'Insights' ),
                    'singular_name' => __( 'Insight' )
            ),
		'public' => true,
		'has_archive' => true,
		'show_in_menu' => 'posts',
		'show_in_rest' => true,
   		'supports'     => array('title', 'editor')
		)
	);
	
	// events
	register_post_type( 'events',
    array(
            'labels' => array(
                    'name' => __( 'Events' ),
                    'singular_name' => __( 'Event' )
            ),
		'public' => true,
		'has_archive' => true,
		'show_in_menu' => 'posts',
		'show_in_rest' => true,
   		'supports' => array('title','editor')
		)
	);	
	
	// company news
	register_post_type( 'news',
    array(
            'labels' => array(
                    'name' => __( 'Company News' ),
                    'singular_name' => __( 'Company News' )
            ),
		'public' => true,
		'has_archive' => true,
		'show_in_menu' => 'posts',
		'show_in_rest' => true,
		'supports' => array('title','editor')
		)
	);
	
	
}
/* remove default Posts menu
add_action( 'admin_init', 'remove_menu_pages' );

function remove_menu_pages() {
    remove_menu_page( 'edit.php' );
}
*/



