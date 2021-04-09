<?php

/* =========================================
	Front End 
========================================= */

// enqueue scripts & styles

function theme_enqueue_styles(){
	wp_enqueue_style(
		'bootstrap',
		get_template_directory_uri() . '/assets/css/bootstrap.min.css',
		array(),
		false,
		'all'
	);
		wp_enqueue_style(
		'myFonts-webkit',
		get_template_directory_uri() . '/assets/webfonts/MyFontsWebfontsKit.css',
		array(),
		false,
		'all'
	);
	
		wp_enqueue_style(
		'main-stylesheet',
		get_template_directory_uri() . '/assets/sass/main.css',
		array('bootstrap'),
		false,
		'all',
		filemtime(get_template_directory() . '/assets/sass/main.css')
	);
	wp_enqueue_script(
		'jquery',
		get_template_directory_uri() . '/assets/js/jquery-3.5.1.min.js',
		array(),
		'3.5.1',
		'true' // load in the footer
	);
	wp_enqueue_script(
		'bootstrap',
		get_template_directory_uri() . '/assets/js/bootstrap.min.js',
		array('jquery'),
		'1.0.0',
		'true' // load in the footer
	);
	wp_enqueue_script(
		'fontawesome',
		'https://kit.fontawesome.com/391389ab70.js',
		array('jquery'),
		'1.0.0',
		'true' // load in the footer
	);
	wp_enqueue_script(
		'main-js',
		get_template_directory_uri() . '/assets/js/main.js',
		array('jquery', 'bootstrap'),
		'1.0.0',
		filemtime(get_template_directory() . '/assets/js/main.js'),
		'true' // load in the footer
		
	);
	
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );


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
// add shortcodes
include_once('framework/shortcodes.php');

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
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Service Plans',
		'menu_title'	=> 'Service Plans',
		'parent_slug'	=> 'services',
	));
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Our Clients',
		'menu_title'	=> 'Our Clients',
		'parent_slug'	=> 'services',
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



add_filter('wpse_opengraph_image', 'og_image');
 
function og_image($image) {
    global $post;
 
    if (get_field('hero')) {
        $image = base_image_url(get_field('hero'), null); 
    }
    return $image;
}







// Google Map API Key - Temp setup 11/18/20
function my_acf_init() {
    acf_update_setting('google_api_key', 'AIzaSyAXdo1pSufFydCToPxjbsSPwJPsUWGkXpY');
}

add_action('acf/init', 'my_acf_init');


