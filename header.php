<!DOCTYPE html>
<html lang="en"><head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?php the_title(); ?> | <?php echo get_bloginfo( 'name' ); ?></title>
	
	<meta property="og:site_name" content="<?php the_field('default_seo_title', 'options'); ?>">
	<meta property="og:url" content="http://<?php $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?>">
	<meta name="title" content="<?php the_field('default_seo_title', 'options'); ?>">
	<meta name="description" content="<?php the_field('default_seo_description', 'options'); ?>">
	
	
	
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<script src="https://kit.fontawesome.com/391389ab70.js" crossorigin="anonymous"></script>
	
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/bootstrap.min.js" ></script>
	
	
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/main.js" ></script>
	<link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/sass/main.css?v=1245" rel="stylesheet">
	
	
	
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
