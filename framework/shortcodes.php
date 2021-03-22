<?php

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


function arrow_Shortcode(){
  $arrow = get_field('arrow','options');
  return $arrow;

}
add_shortcode('arrow', 'arrow_Shortcode');
add_filter('acf/format_value/type=textarea', 'do_shortcode');
add_filter('acf/format_value/type=text', 'do_shortcode');

function servicePlan_shortcode(){    
     ob_start();
     get_template_part( '/partials/flex/service_table' );
     return ob_get_clean();    
}
add_shortcode('service_plan', 'servicePlan_shortcode');

function clientScroll_shortcode(){    
     ob_start();
     get_template_part( '/partials/flex/brands_flex' );
     return ob_get_clean();    
}
add_shortcode('client_scroll', 'clientScroll_shortcode');





/* =========================================
	Custom Shortcodes
========================================= */ 

// Get Services
function services_shortcode( $atts ){
	$atts = shortcode_atts(
		array(
			'category' => '',
			'style'    => ''
		), $atts
	);

	$terms = $atts['category'];
	$style = $atts['style'];
	$tax   = 'service_group';
	
	$args = array( 
		'post_type' => 'services',
		'tax_query' => array(
			array(
				'taxonomy' => $tax,
				'field' => 'slug',
				'terms' => array($terms)
			)
    	)
	);
	
	$count = 0;
	
	$query = new WP_Query($args);
	if($query -> have_posts()): while($query -> have_posts()): $query -> the_post();
	
			if($style == 'list'):
			$services .= '<li>';
			$services .= get_the_title();
			$services .= '</li>';
	
			elseif($style == 'description'):
			$services .= '<li>';
			$services .= get_the_title();
			$services .= get_the_content();
			$services .= '</li>';	

			elseif($style== 'expand'):
			$services .= '<div class="expand">';
			$services .= '<i class="far fa-angle-right indicator"></i> ';
			$services .= '<a class="expand-header" >';
			$services .= get_the_title();
			$services .= '</a>';
			$services .= '<div class="expand-content" >';
			$services .= get_the_content();
			$services .= '</div><!-- .expand-content -->';
			$services .= '</div>';
	
			elseif($style == 'popup'):
			$services .= '<li><a class="modal-link" data-toggle="modal" data-target="#modal-'.$terms.'-'.$count .'" >';
			$services .= get_the_title();
			$services .= '</a>';
	
			$services .= '<div class="modal fade" id="modal-'.$terms.'-'.$count .'" >';
			$services .= '<div class="modal-dialog modal-dialog-centered" tabindex="-1" role="dialog" >';
			$services .= '<div class="modal-content" >';
			$services .= '<div class="modal-body" >';
			$services .= '<div class="close-modal text-right" ><i class="far fa-times"></i></div>';
			$services .= '<h3>' . get_the_title() . '</h3><br>';
			$services .= get_the_content();
			$services .= '</div><!-- .modal-body -->';
			$services .= '</div><!-- .modal-content -->';
			$services .= '</div><!-- .modal-dialog -->';
			$services .= '</div><!-- .modal -->';
			$services .= '</li>';
	
	
			endif; 
	
		$count++; 
		endwhile; wp_reset_postdata(); endif; 
	
	return $services;
}
add_shortcode('services_list', 'services_shortcode');
