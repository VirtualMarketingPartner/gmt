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


/* =========================================
	Framework : Custom Fields
========================================= */

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5f55179ea8c93',
	'title' => 'Site Settings',
	'fields' => array(
		array(
			'key' => 'field_5f55180981445',
			'label' => 'Business Information',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'top',
			'endpoint' => 0,
		),
		array(
			'key' => 'field_5f5518a5b0df3',
			'label' => 'Logo',
			'name' => 'logo',
			'type' => 'image',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'url',
			'preview_size' => 'thumbnail',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
		),
		array(
			'key' => 'field_5f5518c6b0df4',
			'label' => 'Company Name',
			'name' => 'site_name',
			'type' => 'text',
			'instructions' => 'Enter your Business name here and use the shortcode [company] to display it anywhere. 

This trick will keep your branding consistent by standardizing your business name across every page of your website.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5f5518ddb0df5',
			'label' => 'Phone Number',
			'name' => 'site_phone',
			'type' => 'text',
			'instructions' => 'Enter your Phone Number here and use the shortcode [phone] to display it anywhere. 

This trick will keep your branding consistent by standardizing your business name across every page of your website.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5f551943b0df7',
			'label' => 'Email Address',
			'name' => 'site_email',
			'type' => 'email',
			'instructions' => 'Enter your main email address here and use the shortcode [email] to display it anywhere. 

This trick will keep your branding consistent by standardizing your business name across every page of your website.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
		),
		array(
			'key' => 'field_5f551927b0df6',
			'label' => 'Address',
			'name' => 'site_address',
			'type' => 'textarea',
			'instructions' => 'Enter your Main Address here and use the shortcode [address] to display it anywhere. 

This trick will keep your branding consistent by standardizing your business name across every page of your website.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => '',
			'new_lines' => '',
		),
		array(
			'key' => 'field_5f55181481446',
			'label' => 'Social Media',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'top',
			'endpoint' => 0,
		),
		array(
			'key' => 'field_5f551971852fd',
			'label' => 'Social Media',
			'name' => 'social_media_accounts',
			'type' => 'checkbox',
			'instructions' => 'Select the Social Media Accounts you want to connect to your website and add their full URL. 

This section will appear on the website footer.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'facebook' => 'Facebook',
				'twitter' => 'Twitter',
				'linkedin' => 'LinkedIn',
				'instagram' => 'Instagram',
				'snapchat' => 'Snapchat',
				'tiktok' => 'TikTok',
				'youtube' => 'YouTube',
				'vimeo' => 'Vimeo',
			),
			'allow_custom' => 0,
			'default_value' => array(
			),
			'layout' => 'vertical',
			'toggle' => 0,
			'return_format' => 'value',
			'save_custom' => 0,
		),
		array(
			'key' => 'field_5f551a770c67d',
			'label' => 'Facebook',
			'name' => 'facebook',
			'type' => 'url',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5f551971852fd',
						'operator' => '==',
						'value' => 'facebook',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
		),
		array(
			'key' => 'field_5f551a970c67e',
			'label' => 'Twitter',
			'name' => 'twitter',
			'type' => 'url',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5f551971852fd',
						'operator' => '==',
						'value' => 'twitter',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
		),
		array(
			'key' => 'field_5f551aa30c67f',
			'label' => 'LinkedIn',
			'name' => 'linkedin',
			'type' => 'url',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5f551971852fd',
						'operator' => '==',
						'value' => 'linkedin',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
		),
		array(
			'key' => 'field_5f551aaf0c680',
			'label' => 'Instagram',
			'name' => 'instagram',
			'type' => 'url',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5f551971852fd',
						'operator' => '==',
						'value' => 'instagram',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
		),
		array(
			'key' => 'field_5f551aba0c681',
			'label' => 'Snapchat',
			'name' => 'snapchat',
			'type' => 'url',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5f551971852fd',
						'operator' => '==',
						'value' => 'snapchat',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
		),
		array(
			'key' => 'field_5f551ac60c682',
			'label' => 'TikTok',
			'name' => 'tiktok',
			'type' => 'url',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5f551971852fd',
						'operator' => '==',
						'value' => 'tiktok',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
		),
		array(
			'key' => 'field_5f551ad50c683',
			'label' => 'YouTube',
			'name' => 'youtube',
			'type' => 'url',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5f551971852fd',
						'operator' => '==',
						'value' => 'youtube',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
		),
		array(
			'key' => 'field_5f551b230c684',
			'label' => 'Vimeo',
			'name' => 'vimeo',
			'type' => 'url',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5f551971852fd',
						'operator' => '==',
						'value' => 'vimeo',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
		),
		array(
			'key' => 'field_5f55182181447',
			'label' => 'SEO',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'top',
			'endpoint' => 0,
		),
		array(
			'key' => 'field_5f5518788144b',
			'label' => 'SEO Title',
			'name' => 'default_seo_title',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5f5518888144c',
			'label' => 'SEO Description',
			'name' => 'default_seo_description',
			'type' => 'textarea',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => '',
			'new_lines' => '',
		),
		array(
			'key' => 'field_5f55182881448',
			'label' => 'Analytics',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'top',
			'endpoint' => 0,
		),
		array(
			'key' => 'field_5f55185e8144a',
			'label' => 'Google Analytics ID',
			'name' => 'ga_id',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5f55184481449',
			'label' => 'Google Tag Manager ID',
			'name' => 'gtm_container',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'website-settings',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
));

endif;