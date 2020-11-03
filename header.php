<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?php the_field('default_seo_title', 'options'); ?></title>
	<meta name="title" content="<?php the_field('default_seo_title', 'options'); ?>" >
	<meta name="description" content="<?php the_field('default_seo_description', 'options'); ?>" >
	
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	
	<script src="https://kit.fontawesome.com/391389ab70.js" crossorigin="anonymous"></script>
	
	<link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/sass/main.css" rel="stylesheet">
	
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="crossorigin="anonymous"></script>

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

	<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/jquery.visible.js" ></script>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/main.js" ></script>
	
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
