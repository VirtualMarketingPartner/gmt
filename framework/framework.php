<?php

/* =========================================
	Framework : Custom Login & Footer
========================================= */

// register custom styles for Login Page
function custom_login(){
  echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('stylesheet_directory') . '/assets/css/custom-login.css" />';
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
    
    ); 
    $init_array['style_formats'] = json_encode( $style_formats ); 
    return $init_array;   
}
add_filter( 'tiny_mce_before_init', 'my_mce_before_init_insert_formats' );

// Use Custom Editor Styles
function my_theme_add_editor_styles(){

  add_editor_style( '/assets/css/custom-editor.css' );
}
add_action( 'init', 'my_theme_add_editor_styles' );


/* =========================================
	Framework : Shortcodes
========================================= */


function company_Shortcode(){
  $company = get_field('site_name','options');
  return $company;

}
add_shortcode('company', 'company_Shortcode');
add_filter('acf/format_value/type=textarea', 'do_shortcode');
add_filter('acf/format_value/type=text', 'do_shortcode');

function address_Shortcode(){
  $address = get_field('site_address','options');
  return $address;

}
add_shortcode('address', 'address_Shortcode');
add_filter('acf/format_value/type=textarea', 'do_shortcode');
add_filter('acf/format_value/type=text', 'do_shortcode');

function phone_Shortcode(){
  $phone = get_field('site_phone','options');
  return $phone;

}
add_shortcode('phone', 'phone_Shortcode');
add_filter('acf/format_value/type=textarea', 'do_shortcode');
add_filter('acf/format_value/type=text', 'do_shortcode');

function email_Shortcode(){
  $email = get_field('site_email','options');
  return $email;

}
add_shortcode('email', 'email_Shortcode');
add_filter('acf/format_value/type=textarea', 'do_shortcode');
add_filter('acf/format_value/type=text', 'do_shortcode');

function currentYear_Shortcode(){
  $year = date("Y"); 
  return $year;

}
add_shortcode('current_year', 'currentYear_Shortcode');
add_filter('acf/format_value/type=textarea', 'do_shortcode');
add_filter('acf/format_value/type=text', 'do_shortcode');


function social_Shortcode(){
  ob_start();
    get_template_part( 'partials/socials' );
    return ob_get_clean();
}
add_shortcode('socials', 'social_Shortcode');
add_filter('acf/format_value/type=textarea', 'do_shortcode');
add_filter('acf/format_value/type=text', 'do_shortcode');

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

/* =========================================
	Custom Menus on WP Dashboard
========================================= */

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

