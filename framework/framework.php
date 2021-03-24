<?php

/* =========================================
	Framework : Custom Login & Footer
========================================= */

// register custom styles for Login Page
function custom_login(){
  echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('stylesheet_directory') . '/assets/sass/main.css" />';
}
add_action('login_head', 'custom_login');

// Custom Backend Footer
add_filter('admin_footer_text', 'wp_bootstrap_custom_admin_footer');
function wp_bootstrap_custom_admin_footer() {
	echo '<span id="footer-thankyou">Website created by <a href="https://taylordesens.com/?utm_campaign=wp_theme_dashboard_theme_gmt" target="_blank" >Taylor Desens</a>';
}

/* =========================================
	Framework : Custom WYSIWYG Editor
========================================= */

// register custom styles for Content Editor
function wpb_mce_buttons_2($buttons){
  array_unshift($buttons, 'styleselect');
  return $buttons;
};
add_filter('mce_buttons_2', 'wpb_mce_buttons_2');

function my_mce_before_init_insert_formats( $init_array ) { 
 
// Define the style_formats array
 
    $style_formats = array( 
        // Each array child is a format with it's own settings
       
    array(
      'title' => 'Subtitle',
      'block' => 'h6',
      'wrapper' => false
    ),
	array(
      'title' => 'Button',
      'selector' => 'a',
	  'classes' => 'button'
    ),
	array(
      'title' => 'Link Button',
      'selector' => 'a',
	  'classes' => 'button inverted'
    ),
	array(
      'title' => 'Quote Attribution',
      'selector' => 'p',
	  'inline' => 'span',
	  'classes' => 'quote-from'
    ),
    
	array(
      'title' => 'Checklist',
      'selector' => 'ul',
	  'classes' => 'checklist'
    ),
    
    ); 
    $init_array['style_formats'] = json_encode( $style_formats ); 
    return $init_array;   
}
add_filter( 'tiny_mce_before_init', 'my_mce_before_init_insert_formats' );

// Use Custom Editor Styles
function my_theme_add_editor_styles(){

  add_editor_style( '/assets/sass/main.css' );
}
add_action( 'init', 'my_theme_add_editor_styles' );

/* Framework */
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Website Settings',
		'menu_title'	=> 'Website Settings',
		'menu_slug' 	=> 'website-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Website Settings',
		'menu_title'	=> 'Website Settings',
		'parent_slug'	=> 'website-settings',
	));
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Footer Settings',
		'menu_title'	=> 'Footer Settings',
		'parent_slug'	=> 'website-settings',
	));
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Custom Labels',
		'menu_title'	=> 'Custom Labels',
		'parent_slug'	=> 'website-settings',
	));
	
	
	
}


/* Custom Menus on WP Dashboard */


// custom page & subnav for custom taxonomy
add_action( 'admin_menu', 'post_menu' );  
function post_menu(){    
	$page_title = 'News & Events';   
	$menu_title = 'News & Events';   
	$capability = 'manage_options';   
	$menu_slug  = 'news-events';   
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
	add_submenu_page( 'news-events', 'Edit Categories', 'Edit Categories',
    'manage_options', 'edit-tags.php?taxonomy=category');
}

add_action('admin_menu', 'edit_menu');
function edit_menu() {
	add_submenu_page( 'website-settings', 'Menu Settings', 'Menu Settings',
    'manage_options', 'nav-menus.php');
}

// custom page & subnav for custom taxonomy
add_action( 'admin_menu', 'services_menu' );  
function services_menu(){    
	$s_page_title = 'Services';   
	$s_menu_title = 'Services';   
	$s_capability = 'manage_options';   
	$s_menu_slug  = 'services';   
	$s_function   = 'post';   
	$s_icon_url   = 'dashicons-store';   
	$s_position   = 20;    
	
	add_menu_page( 
		$s_page_title,                  
		$s_menu_title,                   
		$s_capability,                   
		$s_menu_slug,                   
		$s_function,                   
		$s_icon_url,                   
		$s_position ); 
}





// hide default Posts menu
if( current_user_can('editor') ) { 
    add_action( 'admin_init', 'remove_menu_pages' );

	function remove_menu_pages() {
		remove_menu_page( 'themes.php' );
		remove_menu_page( 'edit.php' );
		remove_menu_page( 'cptui.php' );
		remove_menu_page( 'admin.php?page=members-settings' );
	}
} 



