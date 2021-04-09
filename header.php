<!DOCTYPE html>
<html lang="en"><head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="theme-color" content="#08cbfe";>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?php the_title(); ?> | <?php echo get_bloginfo( 'name' ); ?></title>
	
	<meta property="og:site_name" content="<?php the_field('default_seo_title', 'options'); ?>">
	<?php // if(have_rows('hero')): while(have_rows('hero')): the_row(); ?>
		 <meta property="og:image" content="<?php the_sub_field('hero_image'); ?>">
	<?php // endwhile; else: ?>
		<meta property="og:image" content="<?php the_field('logo', 'options'); ?>">
	<?php // endif; ?>
	
	<meta name="title" content="<?php the_field('default_seo_title', 'options'); ?>">
	<meta name="description" content="<?php the_field('default_seo_description', 'options'); ?>">
	
	<link rel="shortcut icon" type="image/png" href="<?php get_template_directory_uri(); ?>/assets/images/GMT_Favicon.png"/>

	<!-- Begin Constant Contact Active Forms -->
	<script> var _ctct_m = "2009e8f66315e878ebc4791ba8850da6"; </script>
	<script id="signupScript" src="//static.ctctcdn.com/js/signup-form-widget/current/signup-form-widget.min.js" async defer></script>
	<!-- End Constant Contact Active Forms -->

	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','<?php the_field('gtm_container', 'options'); ?>');</script>
	<!-- End Google Tag Manager -->
	
	 <?php wp_head(); ?>
</head>
	
<body class="<?php if (is_front_page()) echo 'home'; ?>">
	
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?php the_field('gtm_container', 'options'); ?>"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->	

	<?php get_template_part( 'partials/header' );?>
	
	<div class="container-fluid" id="body" >
